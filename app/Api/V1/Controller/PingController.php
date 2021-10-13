<?php

namespace App\Api\V1\Controller;

use Illuminate\Http\JsonResponse;

class PingController
{
    /**
     * Check health of the API
     *
     * returns 'pong' - as always 🤙
     *
     * @group API v1
     */
    public function getPing(): JsonResponse
    {
        return response()->json(['pong'], JsonResponse::HTTP_OK);
    }
}
