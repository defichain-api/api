<?php

namespace App\Console\Commands;

use App\BlockchainData\Client\Rpc\RpcClient;
use App\BlockchainData\Client\Rpc\RpcRequest;
use App\Models\Block;
use Illuminate\Console\Command;

class UpdateBlockDataCommand extends Command
{
	protected $signature = 'update:block {--limit=1000}';
	protected $description = 'Load Block & tx Data and store in db, limit defines the max count of blocks loaded in sequence';

	public function handle(RpcClient $client)
	{
	    $limit = $this->option('limit');
	    $lastBlockId = Block::max('height') ?? -1;
	    $nextBlockHash = $client->getBlock(++$lastBlockId);

	    for ($i = 0; $i < $limit; $i++) {

        }
	}
}
