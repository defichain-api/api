<?php

return [
    'masternodeId'     => 'The DeFiChain\'s internal unique identifier for this masternode. It consists of 65 hexadecimal characters (0..8, a..f)',
    'ownerAddress'     => 'A legacy address holding the masternode\'s collateral of 20,000 DFI. It consists of 35 latin and numeric characters(0..9, a..z, A..Z)',
    'operatorAddress'  => 'A legacy address, used for the masternode\'s operator. Typically living in the wallet of the DeFiChain node, running the minting activity of this masternode.',
    'state'            => 'Contains the masternode\'s states. Possible values: ENABLED, PRE-ENABLED, RESIGNED, PRE-RESIGNED, BANNED',
    'mintedBlocks'     => 'Integer value of the amount of blocks this Masternode has minted so far.',
    'timelock'         => 'A string telling this masternode\'s freezing time. Possible values: "", "5-year", "10-year"',
    'targetMultiplier' => 'An array of integer values. Contains 2, 3 or 4 values, depending on this masternode\'s timelock',
    'creationHeight'   => 'The block height when this masternode has been created. Integer value.',
    'resignHeight'     => 'The block height when this masternode has been resigned. Integer value.',
    'resignTx'         => 'Transaction ID of the masternode\'s collateral payout after it has finally been resigned. It consists of 65 hexadecimal characters (0..8, a..f)',
    'banTx'            => 'Transaction ID of the masternode\'s collateral payout after it has been banned. It consists of 65 hexadecimal characters (0..8, a..f)',
];
