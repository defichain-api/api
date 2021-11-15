<?php

namespace App\Http\Resources;

use App\Api\Enum\VaultStates;
use App\Models\LoanScheme;
use App\Models\Vault;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Vault */
class VaultCollection extends ResourceCollection
{
	public $resource = VaultResource::class;
	protected bool $withStats;
	protected bool $withWtf;

	public function __construct($resource, bool $withStats = true, bool $withWtf = false)
	{
		parent::__construct($resource);
		$this->withStats = $withStats;
		$this->withWtf = $withWtf;
	}

	public function toArray($request): array
	{
		return [
			'data'         => $this->collection,
			'result_count' => $this->collection->count(),
			$this->mergeWhen($this->withStats, [
				'stats' => $this->generateStats(),
			]),
			$this->mergeWhen($this->withWtf, [
				'wtf' => $this->generateWtf(),
			]),
		];
	}

	protected function generateStats(): array
	{
		return cache()->remember('vault_stats', now()->addMinutes(10), function () {
			return [
				'count'                => Vault::count(),
				'count_active'         => Vault::where('state', VaultStates::ACTIVE)->count(),
				'schemes_used'         => $this->loanSchemeStats(),
				'sum_collateral_value' => Vault::where('state', VaultStates::ACTIVE)->sum('collateralValue'),
				'sum_loan_value'       => Vault::where('state', VaultStates::ACTIVE)->sum('loanValue'),
			];
		});
	}

	protected function loanSchemeStats(): array
	{
		return cache()->remember('loan_schemes_used', now()->addMinutes(15), function () {
			$loanSchemes = LoanScheme::with('vaults')->get();
			$stats = [];
			$loanSchemes->each(function (LoanScheme $loanScheme) use (&$stats) {
				$stats[$loanScheme->name] = $loanScheme->vaultsActive->count();
			});

			return $stats;
		});
	}

	protected function generateWtf(): array
	{
		return [];
	}
}
