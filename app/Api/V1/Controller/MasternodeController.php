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

    /**
     * active Masternodes (paginated)
     *
     * Get all active masternodes, including the states ENABLED and PRE_ENABLED.
     * @group      Masternode
     * @queryParam stats boolean Get additional statistics. Default: true Example: <code>true</code>
     * @queryParam wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     */
    public function activePaginated(Request $request): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::whereIn('state', MasternodeStates::ACTIVE_STATES)
                ->paginate(self::MAX_PAGESIZE),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }

    /**
     * Masternodes with requested state (paginated)
     *
     * Get all masternodes with the requested state
     * <aside class="notice">possible states are <code>ENABLED, PRE_ENABLED, RESIGNED,
     * PRE_RESIGNED and BANNED</code>.</aside>
     * @group      Masternode
     * @queryParam stats boolean Get additional statistics. Default: <code>true</code> Example: true
     * @queryParam wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     * @urlParam   state string required Select all masternodes with the given state. Example: resigned
     */
    public function statePaginated(Request $request, string $state): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::where('state', Str::upper($state))
                ->paginate(self::MAX_PAGESIZE),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }

    /**
     * active Masternodes (paginated)
     *
     * Get all active masternodes, including the states ENABLED, PRE_ENABLED, RESIGNED, PRE_RESIGNED and BANNED
     * @group      Masternode
     * @queryParam stats boolean Get additional statistics. Default: <code>true</code> Example: true
     * @queryParam wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     */
    public function allPaginated(Request $request): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::whereIn('state',
                array_merge(MasternodeStates::ACTIVE_STATES, MasternodeStates::INACTIVE_STATES))
                ->paginate(self::MAX_PAGESIZE),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }
}
