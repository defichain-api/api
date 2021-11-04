<?php

namespace App\Api\V1\Controller;

use App\Api\Enum\VaultStates;
use App\Api\V1\DataTransformer\VaultTransformer;
use App\Api\V1\Requests\UpdateVaultRequest;
use App\Http\Resources\VaultCollection;
use App\Http\Resources\VaultResource;
use App\Models\Vault;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VaultController
{
	const MAX_PAGESIZE = 5;

	/**
	 * list all vaults
	 *
	 * Get a list of all vaults. Paginated with max 1000 elements per page.
	 * @group        Vaults
	 * @queryParam   stats boolean Get additional statistics. Default: true Example: <code>true</code>
	 * @queryParam   wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
	 * @responseFile storage/app/docu_responses/vault.multiple.json
	 */
	public function list(Request $request): VaultCollection
	{
		return new VaultCollection(
			Vault::paginate(self::MAX_PAGESIZE),
			filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
			filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
		);
	}

	/**
	 * list vaults by state
	 *
	 * Get a list of vaults by the given state. Paginated with max 1000 elements per page.
	 * @group        Vaults
	 * @urlParam     state string required active or inactive Example: active
	 * @responseFile storage/app/docu_responses/vault.multiple.json
	 */
	public function listState(string $state)
	{
		if (!in_array($state, VaultStates::ALL)) {
			return response()->json([
				'message' => 'vault state not found',
			], JsonResponse::HTTP_BAD_REQUEST);
		}

		return new VaultCollection(
			Vault::where('state', $state)->paginate(self::MAX_PAGESIZE),
			false, false
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
		],
			JsonResponse::HTTP_OK);
	}

	/**
	 * get vault
	 *
	 * Get a vault by a given vault id or owner address.
	 * @group        Vaults
	 * @responseFile storage/app/docu_responses/vault.single.json
	 * @responseFile sstatus=400 torage/app/docu_responses/vault.not_found.json
	 * @return \App\Http\Resources\VaultResource|\Illuminate\Http\JsonResponse
	 */
	public function getByIdOrAddress(string $vaultId)
	{
		try {
			$vault = Vault::where('vaultId', $vaultId)
				->orWhere('ownerAddress', $vaultId)->firstOrFail();
		} catch (ModelNotFoundException $e) {
			return response()->json([
				'message' => 'vault not found',
			], JsonResponse::HTTP_BAD_REQUEST);
		}

		return new VaultResource($vault);
	}

	public function getAddresses(Request $request): VaultCollection
	{
		$vaults = Vault::whereIn('vaultId', $request->input('addresses'))
			->orWhereIn('ownerAddress', $request->input('addresses'))
			->get();

		return new VaultCollection($vaults, false, false);
	}
}
