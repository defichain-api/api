<?php

namespace App\BlockchainData\Client\Exception;

use Exception;

class RpcMethodNotAvailable extends Exception
{
    public static function method(string $method): self
    {
        return new self(sprintf('rpc method "%s" ist not available', $method));
    }
}
