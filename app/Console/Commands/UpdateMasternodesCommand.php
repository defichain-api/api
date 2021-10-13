<?php

namespace App\Console\Commands;

use App\BlockchainData\Client\ClientInterface;
use App\Models\Masternode;
use Illuminate\Console\Command;

class UpdateMasternodesCommand extends Command
{
    protected $signature = 'update:masternodes';
    protected $description = 'Update the stored masternodes, sync with RPC';

    public function handle(ClientInterface $rpcClient): void
    {
        $rawMasternodes = $rpcClient->getMasternodes();
        $masternodes = [];
        $this->info(sprintf(
                '%s: starting to process data of %s masternodes',
                now()->toDateTimeString(),
                count($rawMasternodes))
        );
        foreach ($rawMasternodes as $masternodeId => $masternodeData) {
            $masternodes[] = [
                'masternodeId'     => $masternodeId,
                'ownerAddress'     => $masternodeData['ownerAuthAddress'],
                'operatorAddress'  => $masternodeData['operatorAuthAddress'],
                'state'            => $masternodeData['state'],
                'mintedBlocks'     => $masternodeData['mintedBlocks'],
                'timelock'         => $masternodeData['timelock'] ?? null,
                'targetMultiplier' => json_encode($masternodeData['targetMultipliers'] ?? []),
                'creationHeight'   => $masternodeData['creationHeight'],
                'resignHeight'     => $masternodeData['resignHeight'],
                'resignTx'         => $masternodeData['resignTx'] !== '0000000000000000000000000000000000000000000000000000000000000000' ? $masternodeData['resignTx'] : null,
                'banTx'            => $masternodeData['banTx'] !== '0000000000000000000000000000000000000000000000000000000000000000' ? $masternodeData['banTx'] : null,
            ];

            if (count($masternodes) === 1000) {
                $this->storeMasternodeData($masternodes);
                $masternodes = [];
            }
        }
        $this->storeMasternodeData($masternodes);
        $this->newLine(3);
        $this->info(sprintf(
                '%s: updated the data of %s masternodes',
                now()->toDateTimeString(),
                count($rawMasternodes))
        );
    }

    protected function storeMasternodeData(array $data): void
    {
        Masternode::upsert($data, ['id']);
        $this->output->write('.', false);
    }
}
