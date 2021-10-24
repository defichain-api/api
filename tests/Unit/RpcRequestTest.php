<?php

namespace Tests\Unit;

use App\BlockchainData\Client\Exception\RpcMethodNotAvailable;
use App\BlockchainData\Client\Rpc\RpcRequest;
use Tests\TestCase;

class RpcRequestTest extends TestCase
{
    public function test_valid_request(): void
    {
        $request = new RpcRequest(RpcRequest::LIST_MASTERNODES);
        $this->assertEquals('listmasternodes', $request->getMethod());
    }

    public function test_invalid_request(): void
    {
        $this->expectException(RpcMethodNotAvailable::class);

        $request = new RpcRequest('invalid_request');
    }
}
