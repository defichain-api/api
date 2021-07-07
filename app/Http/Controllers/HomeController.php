<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function getHome(): JsonResponse
    {
        return response()->json([
            'message' => 'defichainApi is starting soon...',
        ], JsonResponse::HTTP_OK);
    }
}
