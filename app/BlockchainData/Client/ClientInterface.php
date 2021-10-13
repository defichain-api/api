<?php

namespace App\BlockchainData\Client;

use App\BlockchainData\Client\Rpc\RpcRequest;

interface ClientInterface
{
    public function makeRequest(RpcRequest $request, array $params): array;

    public function getBlock(int $blockNumber): array;

    public function getBlockHash(int $blockNumber): string;

    public function getMasternodes(): array;
}
