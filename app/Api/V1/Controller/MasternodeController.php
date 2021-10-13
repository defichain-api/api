<?php

namespace App\Api\V1\Controller;

use App\Api\Enum\MasternodeStates;
use App\Http\Requests\MasternodeStateRequest;
use App\Http\Resources\MasternodeCollection;
use App\Models\Masternode;
use Illuminate\Http\Request;
use Str;

class MasternodeController
{
    const MAX_PAGESIZE = 1;

    public function activePaginated(Request $request): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::whereIn('state', MasternodeStates::ACTIVE_STATES)
                ->paginate(self::MAX_PAGESIZE),
            filter_var( $request->query('stats', true), FILTER_VALIDATE_BOOLEAN ),
            filter_var( $request->query('wtf', false), FILTER_VALIDATE_BOOLEAN )
        );
    }

    public function statePaginated(string $state, Request $request): MasternodeCollection
    {
        ray($state);
        return new MasternodeCollection(
            Masternode::where('state', Str::upper($state))
                ->paginate(self::MAX_PAGESIZE),
            filter_var( $request->query('stats', true), FILTER_VALIDATE_BOOLEAN ),
            filter_var( $request->query('wtf', false), FILTER_VALIDATE_BOOLEAN )
        );
    }

    public function allPaginated(Request $request): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::whereIn('state', array_merge(MasternodeStates::ACTIVE_STATES, MasternodeStates::INACTIVE_STATES))
                ->paginate(self::MAX_PAGESIZE),
            filter_var( $request->query('stats', true), FILTER_VALIDATE_BOOLEAN ),
            filter_var( $request->query('wtf', false), FILTER_VALIDATE_BOOLEAN )
        );
    }
}
