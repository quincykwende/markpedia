<?php

return [
    'shipping' => [
        'code'         => 'shipping',
        'title'        => 'Both Air/Sea',
        'description'  => 'Send using both Air and Sea',
        'active'       => true,
        'default_rate' => '0',
        'type'         => 'per_unit',
        'class'        => 'quincykwende\Shipping\Carriers\Shipping',
    ],
];