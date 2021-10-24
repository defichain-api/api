<?php

namespace App\Api\Middleware;

use Closure;
use Illuminate\Http\Request;

class PaginateAPI
{
    /**
     * @codeCoverageIgnore
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $data = $response->getData(true);
        if (isset($data['meta']['links'])) {
            unset($data['meta']['links']);
        }

        $response->setData($data);

        return $response;
    }
}
