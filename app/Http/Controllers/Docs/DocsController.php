<?php

namespace App\Http\Controllers\Docs;

use Illuminate\Http\JsonResponse;

class DocsController
{
    public function getOverview(): JsonResponse
    {
        return response()->json([
            'latest' => [
                'url'           => route('api.v1.start'),
                'documentation' => route('docs.v1.start'),
                'changelog'     => route('docs.v1.changelog'),
            ],
        ], JsonResponse::HTTP_OK);
    }
}
