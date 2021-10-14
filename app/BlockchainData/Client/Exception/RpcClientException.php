<?php

namespace App\BlockchainData\Client\Exception;

use Exception;

class RpcClientException extends Exception
{
    public static function generic(string $errorMessage, Exception $previous = null): self
    {
        return new self(sprintf('an error occured: %s', $errorMessage), 0, $previous);
    }
}
