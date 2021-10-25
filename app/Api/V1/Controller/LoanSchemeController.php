<?php

namespace App\Api\V1\Controller;

use App\Api\V1\DataTransformer\LoanSchemeTransformer;
use App\Api\V1\Requests\UpdateLoanSchemeRequest;
use App\Http\Resources\LoanSchemeCollection;
use App\Models\LoanScheme;
use Illuminate\Http\JsonResponse;

class LoanSchemeController
{
    public function list(): LoanSchemeCollection
    {
        return cache()->remember('loan_schemes', now()->addMinutes(15), function () {
            return new LoanSchemeCollection(LoanScheme::with('vaults')->all());
        });
    }

    public function update(UpdateLoanSchemeRequest $request, LoanSchemeTransformer $transformer): JsonResponse
    {
        $transformer->init($request->validated())->store();

        return response()->json([
            'message' => 'updated loan schemes',
        ], JsonResponse::HTTP_OK);
    }
}
