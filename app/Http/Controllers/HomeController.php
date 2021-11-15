<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function getHome(): JsonResponse
    {
        return response()->json([
            'latest' => [
                'url'           => route('api.v1.index'),
                'documentation' => route('docs.index'),
                'changelog'     => route('docs.changelog'),
            ],
        ], JsonResponse::HTTP_OK);
    }
}
