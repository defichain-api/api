<?php

use App\BlockchainData\Client\Rpc\RpcClient;

if (!function_exists('rpcClient')) {
    function rpcClient(): RpcClient
    {
        return app(RpcClient::class);
    }
}
