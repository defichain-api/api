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
        return response()->json([
            'message'   => 'see the docs',
            'uri'       => route('docs.index'),
            'changelog' => route('docs.changelog'),
        ], JsonResponse::HTTP_OK);
    }
}
