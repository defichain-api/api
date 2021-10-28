<?php

namespace App\Api\Enum;

class VaultStates
{
    const ACTIVE = 'active';
    const FROZEN = 'frozen';
    const INLIQUIDATION = 'inliquidation';
    const FROZENINLIQUIDATION = 'frozeninliquidation';
    const MAYLIQUIDATE = 'mayliquidate';
    const ALL = [
        self::ACTIVE,
        self::FROZEN,
        self::INLIQUIDATION,
        self::FROZENINLIQUIDATION,
        self::MAYLIQUIDATE,
    ];
}
