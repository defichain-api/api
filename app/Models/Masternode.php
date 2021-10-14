<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Eloquent
 * @property string masternodeId
 * @property string ownerAddress
 * @property string operatorAddress
 * @property string state
 * @property int    mintedBlocks
 * @property string timelock
 * @property array  targetMultiplier
 * @property int    creationHeight
 * @property int    resignHeight
 * @property string resignTx
 * @property string banTx
 */
class Masternode extends Model
{
    public $timestamps = false;
    protected $casts = [
        'targetMultiplier' => 'array',
    ];
    protected $fillable = [
        'masternodeId',
        'ownerAddress',
        'operatorAddress',
        'state',
        'mintedBlocks',
        'timelock',
        'targetMultiplier',
        'creationHeight',
        'resignHeight',
        'resignTx',
        'banTx',
    ];
}
