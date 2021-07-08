<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function getHome(): JsonResponse
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
