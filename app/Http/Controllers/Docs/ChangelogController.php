<?php

namespace App\Http\Controllers\Docs;

use Illuminate\Http\JsonResponse;

class ChangelogController
{
    public function changelog(): JsonResponse
    {
        return response()->json([
            'message' => 'changelog will be release soon',
        ], JsonResponse::HTTP_OK);
    }
}
