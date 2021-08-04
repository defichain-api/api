<?php

namespace App\BlockchainData\Client\Rpc;

use App\BlockchainData\Client\Exception\RpcMethodNotAvailable;

class RpcRequest
{
    const GET_BLOCK = 'getblock';
    const GET_BLOCK_HASH = 'getblockhash';

    protected const ALLOWED_METHODS = [
        self::GET_BLOCK,
        self::GET_BLOCK_HASH,
    ];

    protected string $method;

    /**
     * @throws RpcMethodNotAvailable
     */
    public function __construct(string $method)
    {
        throw_if(!in_array($method, self::ALLOWED_METHODS), RpcMethodNotAvailable::method($method));

        $this->method = $method;
    }

    public function getMethod(): string
    {
        return $this->method;
    }
}
