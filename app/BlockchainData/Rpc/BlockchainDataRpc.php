<?php

namespace App\BlockchainData\Rpc;

use App\BlockchainData\BlockchainDataInterface;

class BlockchainDataRpc implements BlockchainDataInterface
{
	public function blockData(int $blockHeight): array
	{
		// TODO: Implement blockData() method.
	}

    public function masternodes(): array
    {
        // TODO: Implement masternodes() method.
    }
}
