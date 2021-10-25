<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin \Eloquent
 * @property string  name
 * @property integer minColaterationRatio
 * @property float   interestRate
 * @property boolean isDefault
 */
class LoanScheme extends Model
{
    protected $fillable = [
        'name',
        'minColaterationRatio',
        'interestRate',
        'isDefault',
    ];
    protected $hidden = ['id', 'created_at', 'updated_at'];

    public function vaults(): HasMany
    {
        return $this->hasMany(Vault::class, 'loanSchemeId', 'id');
    }
}
