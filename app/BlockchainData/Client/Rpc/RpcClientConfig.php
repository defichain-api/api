<?php

namespace App\BlockchainData\Client\Rpc;

class RpcClientConfig
{
    protected string $rpcUri;
    protected int $port;
    protected string $rpcUser;
    protected string $rpcPassword;

    public function __construct(
        RpcMethodNotAvailablestring $rpcUser,
        string $rpcPassword,
        string $rpcUri,
        int $port = 8555
    ) {
        $this->rpcUri = $rpcUri;
        $this->port = $port;
        $this->rpcUser = $rpcUser;
        $this->rpcPassword = $rpcPassword;
    }

    protected function rpcUri(): string
    {
        return $this->rpcUri;
    }

    protected function port(): int
    {
        return $this->port;
    }

    protected function rpcUser(): string
    {
        return $this->rpcUser;
    }

    protected function rpcPassword(): string
    {
        return $this->rpcPassword;
    }

    public function requestUri(): string
    {
        return sprintf(
            'http://%s:%s@%s:%s',
            $this->rpcUser(),
            $this->rpcPassword(),
            $this->rpcUri(),
            $this->port()
        );
    }
}
