<?php

namespace App\Models;

use App\Api\Enum\VaultStates;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin \Eloquent
 * @property string  name
 * @property integer minCollaterationRatio
 * @property float   interestRate
 * @property boolean isDefault
 */
class LoanScheme extends Model
{
    protected $fillable = [
        'name',
        'minCollaterationRatio',
        'interestRate',
        'isDefault',
    ];
    protected $hidden = ['id', 'created_at', 'updated_at'];

    public function vaults(): HasMany
    {
        return $this->hasMany(Vault::class, 'loanSchemeId', 'id');
    }

    public function vaultsActive(): HasMany
    {
        return $this->hasMany(Vault::class, 'loanSchemeId', 'id')->where('state', VaultStates::ACTIVE);
    }
}
