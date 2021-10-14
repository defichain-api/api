<?php

namespace App\BlockchainData;

interface BlockchainDataInterface
{
    /** load the detail information for the block with $blockHeight */
    public function blockData(int $blockHeight): array;

    /** load all masternodes */
    public function masternodes(): array;
}
