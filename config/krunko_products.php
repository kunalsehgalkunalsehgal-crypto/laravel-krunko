<?php

// One shared list for KRUNKO shop detail pages. No product database yet.
// 'key' must match config/krunko_enquiry.php -> 'products'.
return [
    'products' => [
        'cheese-makhana' => [
            'key' => 'Cheese jar',
            'name' => 'Cheese Makhana',
            'category' => 'Roasted Makhana',
            'type' => 'Jar',
            'short_description' => 'Creamy, cheesy, seriously crunchy.',
            'description' => 'A bold cheesy twist for your snack break. Select the number of jars you need and send KRUNKO an enquiry for the latest pack and availability details.',
            'images' => [
                ['file' => 'krunko/assets/jar-cheese.jpg', 'label' => 'Main photo'],
                ['file' => 'krunko/assets/jar-cheese.webp', 'label' => 'More photos'],
            ],
            'active' => true,
        ],
        'himalayan-salt-makhana' => [
            'key' => 'Himalayan Salt jar',
            'name' => 'Himalayan Salt Makhana',
            'category' => 'Roasted Makhana',
            'type' => 'Jar',
            'short_description' => 'A little salt. A whole lot of crunch.',
            'description' => 'Simple flavour and a satisfying crunch. Choose your quantity and ask the KRUNKO team for current pack details and availability.',
            'images' => [
                ['file' => 'krunko/assets/jar-salt.jpg', 'label' => 'Main photo'],
                ['file' => 'krunko/assets/himaliyan salt.webp', 'label' => 'More photos'],
            ],
            'active' => true,
        ],
        'peri-peri-makhana' => [
            'key' => 'Peri Peri jar',
            'name' => 'Peri Peri Makhana',
            'category' => 'Roasted Makhana',
            'type' => 'Jar',
            'short_description' => 'A fiery kick for your snack break.',
            'description' => 'For people who love a little spice in every bite. Pick the number of jars you would like to enquire about.',
            'images' => [
                ['file' => 'krunko/assets/jar-peri.jpg', 'label' => 'Main photo'],
                ['file' => 'krunko/assets/jar-peri.webp', 'label' => 'More photos'],
            ],
            'active' => true,
        ],
        'tangy-tomato-makhana' => [
            'key' => 'Tangy Tomato jar',
            'name' => 'Tangy Tomato Makhana',
            'category' => 'Roasted Makhana',
            'type' => 'Jar',
            'short_description' => 'Big tomato flavour. Happy taste buds.',
            'description' => 'A tangy snack option from KRUNKO. Set your quantity and send an enquiry for the latest product details.',
            'images' => [
                ['file' => 'krunko/assets/jar-tomato.jpg', 'label' => 'Main photo'],
                ['file' => 'krunko/assets/jar-tomato.webp', 'label' => 'More photos'],
            ],
            'active' => true,
        ],
        'gud-til-makhana' => [
            'key' => 'Gud Til jar',
            'name' => 'Gud Til Makhana',
            'category' => 'Roasted Makhana',
            'type' => 'Jar',
            'short_description' => 'A sweet twist on your crunch.',
            'description' => 'For those moments when you want a sweet little snack. Enquire about the number of jars you need.',
            'images' => [
                ['file' => 'krunko/assets/gud til.webp', 'label' => 'Main photo'],
                ['file' => 'krunko/assets/gud til.jpeg', 'label' => 'More photos'],
            ],
            'active' => true,
        ],
    ],
];
