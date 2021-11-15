<?php

namespace App\Api\V1\Controller;

use App\Api\Enum\MasternodeStates;
use App\Http\Resources\MasternodeCollection;
use App\Models\Masternode;
use Illuminate\Http\Request;
use Str;

class MasternodeController
{
    const MAX_PAGESIZE = 1000;

    /**
     * active Masternodes (paginated)
     *
     * Get all active masternodes, including the states ENABLED and PRE_ENABLED, 1000 elements max on each page.
     * @group        Masternodes
     * @queryParam   stats boolean Get additional statistics. Default: true Example: <code>true</code>
     * @queryParam   wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     * @responseFile storage/app/docu_responses/masternode.active_mn.json
     */
    public function activeMasternodesPaginated(Request $request): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::whereIn('state', MasternodeStates::ACTIVE_STATES)->paginate(self::MAX_PAGESIZE),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }

    /**
     * all active Masternodes
     *
     * Get all active masternodes, including the states ENABLED and PRE_ENABLED.
     * <aside class="warning">This request receives a big payload!</aside>
     * @group        Masternodes
     * @queryParam   stats boolean Get additional statistics. Default: true Example: <code>true</code>
     * @queryParam   wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     * @responseFile storage/app/docu_responses/masternode.active_mn.json
     */
    public function activeMasternodes(Request $request): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::whereIn('state', MasternodeStates::ACTIVE_STATES)->get(),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }

    /**
     * Masternodes with requested state (paginated)
     *
     * Get all masternodes with the requested state, 1000 elements max on each page.
     * <aside class="notice">possible states are <code>ENABLED, PRE_ENABLED, RESIGNED,
     * PRE_RESIGNED and BANNED</code>.</aside>
     * @group        Masternodes
     * @queryParam   stats boolean Get additional statistics. Default: <code>true</code> Example: true
     * @queryParam   wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     * @urlParam     state string required Select all masternodes with the given state. Example: resigned
     * @responseFile storage/app/docu_responses/masternode.state_mn.json
     */
    public function stateMasternodesPaginated(Request $request, string $state): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::where('state', Str::upper($state))->paginate(self::MAX_PAGESIZE),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }

    /**
     * Masternodes with requested state
     *
     * Get all masternodes with the requested state
     * <aside class="notice">possible states are <code>ENABLED, PRE_ENABLED, RESIGNED,
     * PRE_RESIGNED and BANNED</code>.</aside>
     * <aside class="warning">This request receives a big payload!</aside>
     * @group        Masternodes
     * @queryParam   stats boolean Get additional statistics. Default: <code>true</code> Example: true
     * @queryParam   wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     * @urlParam     state string required Select all masternodes with the given state. Example: resigned
     * @responseFile storage/app/docu_responses/masternode.state_mn.json
     */
    public function stateMasternodes(Request $request, string $state): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::where('state', Str::upper($state))->get(),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }

    /**
     * active Masternodes (paginated)
     *
     * Get all active masternodes, including the states ENABLED, PRE_ENABLED, RESIGNED, PRE_RESIGNED and BANNED
     * @group        Masternodes
     * @queryParam   stats boolean Get additional statistics. Default: <code>true</code> Example: true
     * @queryParam   wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     * @responseFile storage/app/docu_responses/masternode.active_mn.json
     */
    public function allMasternodesPaginated(Request $request): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::whereIn('state',
                array_merge(MasternodeStates::ACTIVE_STATES, MasternodeStates::INACTIVE_STATES))
                ->paginate(self::MAX_PAGESIZE),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }

    /**
     * active Masternodes
     *
     * Get all active masternodes, including the states ENABLED, PRE_ENABLED, RESIGNED, PRE_RESIGNED and BANNED
     * <aside class="warning">This request receives a big payload!</aside>
     * @group        Masternodes
     * @queryParam   stats boolean Get additional statistics. Default: <code>true</code> Example: true
     * @queryParam   wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     * @responseFile storage/app/docu_responses/masternode.active_mn.json
     */
    public function allMasternodes(Request $request): MasternodeCollection
    {
        return new MasternodeCollection(
            Masternode::whereIn('state',
                array_merge(MasternodeStates::ACTIVE_STATES, MasternodeStates::INACTIVE_STATES))->get(),
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }

    /**
     * Masternode by address
     *
     * Get a masternode by a either the owner address, operator address or the masternode id.
     * @group        Masternodes
     * @urlParam     address string required either the owner address, operator address or the masternode id. Example:
     *               8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3
     * @queryParam   stats boolean Get additional statistics. Default: <code>true</code> Example: true
     * @queryParam   wtf boolean Get explainations for all returned values. Default: <code>false</code> Example: true
     * @responseFile storage/app/docu_responses/masternode.active_mn.json
     */
    public function address(string $address, Request $request): MasternodeCollection
    {
        $masternode = Masternode::where('masternodeId', $address)
            ->orWhere('ownerAddress', $address)
            ->orWhere('operatorAddress', $address)
            ->get();

        return new MasternodeCollection(
            $masternode,
            filter_var($request->query('stats', true), FILTER_VALIDATE_BOOLEAN),
            filter_var($request->query('wtf', false), FILTER_VALIDATE_BOOLEAN)
        );
    }
}
