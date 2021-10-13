<?php

namespace App\Api\Enum;

use Str;

class MasternodeStates
{
    const RESIGNED = 'RESIGNED';
    const PRE_RESIGNED = 'PRE_RESIGNED';
    const ENABLED = 'ENABLED';
    const PRE_ENABLED = 'PRE_ENABLED';
    const BANNED = 'BANNED';
    const ACTIVE_STATES = [
        self::ENABLED,
        self::PRE_ENABLED,
    ];
    const INACTIVE_STATES = [
        self::RESIGNED,
        self::PRE_RESIGNED,
        self::BANNED,
    ];

    public static function toString(): string
    {
        $stateString = '';

        foreach (array_merge(self::ACTIVE_STATES, self::INACTIVE_STATES) as $state) {
            $stateString .= sprintf('|%s', $state);
        }

        return ltrim(Str::lower($stateString), '|');
    }
}
