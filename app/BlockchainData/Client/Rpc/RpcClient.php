<?php

namespace App\BlockchainData\Client\Rpc;

use App\BlockchainData\Client\ClientInterface as DefiChainClientInterface;
use App\BlockchainData\Client\Exception\RpcClientException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;

class RpcClient implements DefiChainClientInterface
{
    protected ?ClientInterface $client;
    protected RpcClientConfig $config;

    public function __construct(RpcClientConfig $config)
    {
        $this->client = new Client();
        $this->config = $config;
    }

    /**
     * @throws \App\BlockchainData\Client\Exception\RpcClientException
     */
    protected function makeRequest(RpcRequest $request, array $params): array
    {
        try {
            $response = $this->client->request(
                'POST',
                $this->config->requestUri(),
                [
                    'json' => [
                        'jsonrpc' => '2.0',
                        'method'  => $request->getMethod(),
                        'id'      => 'api_call',
                        'params'  => $params,
                    ],
                ],
            );
        } catch (GuzzleException $e) {
            throw RpcClientException::generic(sprintf('rpc exception: %s', $e->getMessage()), $e);
        }

        $responseArray = json_decode($response->getBody()->getContents(), true);
        $this->analyseResponse($responseArray);

        return $responseArray;
    }

    public function getBlock(int $blockNumber): array
    {
        return $this->makeRequest(
            new RpcRequest(RpcRequest::GET_BLOCK),
            [$blockNumber]
        );
    }

    public function getBlockHash(int $blockNumber): string
    {
        return $this->makeRequest(
            new RpcRequest(RpcRequest::GET_BLOCK_HASH),
            [$blockNumber]
        )['result'];
    }

    public function getMasternodes(): array
    {
        return $this->makeRequest(
            new RpcRequest(RpcRequest::LIST_MASTERNODES),
            []
        )['result'];
    }

    /**
     * @throws RpcClientException
     */
    protected function analyseResponse(array $response): void
    {
        throw_if(isset($response['error']), RpcClientException::generic($response['error']['message'] ?? ''));
    }
}
