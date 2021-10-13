<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/**
 * @mixin \App\Models\Masternode
 * @codeCoverageIgnore
 */
class MasternodeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'masternodeId'     => $this->masternodeId,
            'ownerAddress'     => $this->ownerAddress,
            'operatorAddress'  => $this->operatorAddress,
            'state'            => $this->state,
            'mintedBlocks'     => $this->mintedBlocks,
            'timelock'         => $this->timelock,
            'targetMultiplier' => $this->targetMultiplier,
            'creationHeight'   => $this->creationHeight,
            'resignHeight'     => $this->resignHeight,
            'resignTx'         => $this->resignTx,
            'banTx'            => $this->banTx,
        ];
    }
}
