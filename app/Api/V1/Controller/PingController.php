<?php

namespace App\Api\V1\Controller;

use Illuminate\Http\JsonResponse;

class PingController
{
    public function getPing(): JsonResponse
    {
        return response()->json(['pong'], JsonResponse::HTTP_OK);
    }
}
