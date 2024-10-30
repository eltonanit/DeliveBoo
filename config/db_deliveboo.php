<?php

return [
    'restaurants' => [
        [
            'name' => 'Trattoria Da Mario',
            'address' => 'Via Roma 123, Firenze',
            'phone'=> '06 7799904556',
            'user_id' => 1,
        ]
    ],
    'dishes' => [
        [
            'name' => 'Bruschetta al Pomodoro',
            'course' => 'Appetizer',
            'description' => 'Pane croccante con pomodori freschi, basilico e olio d\'oliva.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Tagliatelle al Tartufo',
            'course' => 'First',
            'description' => 'Tagliatelle fresche condite con crema di tartufo e parmigiano.',
            'price' => 12.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Lasagne alla Bolognese',
            'course' => 'First',
            'description' => 'Lasagne fatte in casa con ragù di carne, besciamella e parmigiano.',
            'price' => 10.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Bistecca alla Fiorentina',
            'course' => 'Second',
            'description' => 'Classica bistecca alla griglia, servita con contorno di patate arrosto.',
            'price' => 25.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Parmigiana di Melanzane',
            'course' => 'Second',
            'description' => 'Melanzane fritte, salsa di pomodoro, mozzarella e parmigiano.',
            'price' => 9.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Tiramisù',
            'course' => 'Dessert',
            'description' => 'Dolce tradizionale italiano con strati di savoiardi, mascarpone e cacao.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Panna Cotta',
            'course' => 'Dessert',
            'description' => 'Dolce al cucchiaio con panna e vaniglia, servito con coulis di frutti di bosco.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 1
        ]
    ]
];
