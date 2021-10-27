<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Str;

/**
 * @mixin \Eloquent
 * @property string     vaultId
 * @property LoanScheme loanScheme
 * @property string     loanSchemeId
 * @property string     ownerAddress
 * @property boolean    isUnderLiquidation
 * @property boolean    invalidPrice
 * @property array      collateralAmounts
 * @property array      loanAmounts
 * @property array      interestAmounts
 * @property float      collateralValue
 * @property float      loanValue
 * @property integer    currentRatio
 */
class Vault extends Model
{
    protected $primaryKey = 'vaultId';
    protected $fillable = [
        'vaultId',
        'loanSchemeId',
        'ownerAddress',
        'isUnderLiquidation',
        'invalidPrice',
        'collateralAmounts',
        'loanAmounts',
        'interestAmounts',
        'collateralValue',
        'loanValue',
        'currentRatio',
    ];
    protected $casts = [
        'collateralAmounts' => 'array',
        'loanAmounts'       => 'array',
        'interestAmounts'   => 'array',
    ];

    public function loanScheme(): BelongsTo
    {
        return $this->belongsTo(LoanScheme::class, 'loanSchemeId', 'id');
    }

    public function getVaultIdAttribute(): string
    {
        return $this->attributes['vaultId'];
    }

    public function setLoanSchemeIdAttribute($value)
    {
        if ($value instanceof LoanScheme) {
            $this->attributes['loanSchemeId'] = $value->id;
        }
        if (is_string($value)) {
            $this->attributes['loanSchemeId'] = LoanScheme::where('name', $value)->first()->id;
        }
        if (is_int($value)) {
            $this->attributes['loanSchemeId'] = $value;
        }
    }

    public function setCurrentRatioAttribute($value)
    {
        if (is_string($value)){
            $this->attributes['currentRatio'] = (int)Str::replace('%', '',$value);
        }
        if (is_float($value) || is_int($value)) {
            $this->attributes['currentRatio'] = $value;
        }
    }
}
