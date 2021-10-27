<?php

namespace App\Api\V1\Controller;

use App\Api\V1\DataTransformer\VaultTransformer;
use App\Api\V1\Requests\UpdateVaultRequest;
use App\Http\Resources\VaultCollection;
use App\Models\Vault;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VaultController
{
    const MAX_PAGESIZE = 5;

    public function list(Request $request): VaultCollection
    {
        return new VaultCollection(
            Vault::paginate(self::MAX_PAGESIZE),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(UpdateVaultRequest $request, VaultTransformer $transformer): JsonResponse
    {
        $transformer->init($request->validated())->store();

        return response()->json([
            'message'        => 'vaults updated',
            'items_received' => count($request->validated()),
        ], JsonResponse::HTTP_OK);
    }
}
