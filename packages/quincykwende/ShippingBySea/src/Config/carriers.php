<?php

return [
    'shippingbysea' => [
        'code'         => 'shippingbysea',
        'title'        => 'By Sea',
        'description'  => 'Address by Sea <br />
                           广州市白云区江人一路397号（导航创可利仓库）（入仓单号B7 ）
                           <br /><br />
                           Contact Person for Sea operations<br />
                           Mr Eric Gwangforbe：+86 133 800 567 17',
        'active'       => true,
        'default_rate' => '0',
        'type'         => 'per_unit',
        'class'        => 'quincykwende\ShippingBySea\Carriers\ShippingBySea',
    ],
];