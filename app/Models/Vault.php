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
 * @property string     state
 * @property array      collateralAmounts
 * @property array      loanAmounts
 * @property array      interestAmounts
 * @property float      collateralValue
 * @property float      loanValue
 * @property float      interestValue
 * @property float    informativeRatio
 * @property integer    collateralRatio
 */
class Vault extends Model
{
    protected $primaryKey = 'vaultId';
    protected $fillable = [
        'vaultId',
        'loanSchemeId',
        'ownerAddress',
        'state',
        'collateralAmounts',
        'loanAmounts',
        'interestAmounts',
        'collateralValue',
        'loanValue',
        'interestValue',
        'informativeRatio',
        'collateralRatio',
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

    public function setLoanSchemeIdAttribute($value): void
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

    public function isActive(): bool
    {
        return $this->state === 'active';
    }
}
