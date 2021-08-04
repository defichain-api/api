<?php

namespace App\BlockchainData\Client\Rpc;

use Illuminate\Support\ServiceProvider;

class RpcClientServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->singleton(RpcClient::class, fn($app) => new RpcClient(
		    new RpcClientConfig(
		        config('rpc.user'),
                config('rpc.password'),
                config('rpc.uri'),
                config('rpc.port')
            )
        ));
	}
}
