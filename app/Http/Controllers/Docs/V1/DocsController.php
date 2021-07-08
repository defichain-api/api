<?php

namespace App\Http\Controllers\Docs\V1;

use Illuminate\Http\JsonResponse;

class DocsController
{
    public function docs(): JsonResponse
    {
        return response()->json([
            'message' => 'DeFiChain API Docs coming soon...'
        ], JsonResponse::HTTP_OK);
    }

    public function changelog(): JsonResponse
    {
        return response()->json([
            'message' => 'DeFiChain API Changelog coming soon...'
        ], JsonResponse::HTTP_OK);
    }
}
