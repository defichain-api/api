<?php

namespace Tests\Unit;

use App\BlockchainData\Client\Rpc\RpcClientConfig;
use Tests\TestCase;

class RpcClientConfigTest extends TestCase
{
    public RpcClientConfig $clientConfig;
    public function setUp(): void
    {
        parent::setUp();
        $this->clientConfig = new RpcClientConfig(
            'rpc_username',
            'rpc_password',
            'http://rpc_url.test',
            8555
        );
    }
    public function test_rpc_client_config_attributes(): void
    {
        $this->assertEquals('rpc_username', $this->callMethod($this->clientConfig, 'rpcUser'));
        $this->assertEquals('rpc_password', $this->callMethod($this->clientConfig, 'rpcPassword'));
        $this->assertEquals('http://rpc_url.test', $this->callMethod($this->clientConfig, 'rpcUri'));
        $this->assertEquals(8555, $this->callMethod($this->clientConfig, 'port'));
    }

    public function test_rpc_uri(): void
    {
        $this->assertEquals(
            'http://rpc_username:rpc_password@http://rpc_url.test:8555',
            $this->clientConfig->requestUri()
        );
    }
}
