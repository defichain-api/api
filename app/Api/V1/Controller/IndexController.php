<?php

namespace App\Api\V1\Controller;

use Illuminate\Http\JsonResponse;

class IndexController
{
    /**
     * Check health of the API
     *
     * returns 'pong' - as always 🤙
     *
     * @group API v1
     * @hideFromAPIDocumentation
     */
    public function getIndex(): JsonResponse
    {
        return response()->json(['pong'], JsonResponse::HTTP_OK);
    }
}
