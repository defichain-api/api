<?php

namespace App\BlockchainData\Client\Rpc;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class RpcClient
{
    protected ?ClientInterface $client;

    public function __construct(RpcClientConfig $config)
    {
        $this->client = new Client([
            'base_url' => $config->requestUri(),
        ]);
    }

    public function makeRequest(RpcRequest $request, array $params)
    {
        $response = $this->client->request(
            'POST',
            '',
            [
                'json' => [
                    'jsonrpc' => '2.0',
                    'method'  => $request->getMethod(),
                    'id'      => "api_call",
                    'params'  => $params,
                ],
            ],
        );

        ray($response);

        return $response->getBody()->getContents();
    }
}
