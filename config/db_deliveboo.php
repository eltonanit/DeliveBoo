<?php

return [
    'restaurants' => [
        [
            'name' => 'Trattoria Da Mario',
            'address' => 'Via Roma 123, Firenze',
            'phone' => '06 7799904556',
            'user_id' => 1,
        ],
        [
            'name' => 'Ristorante La Pergola',
            'address' => 'Piazza della Signoria 22, Firenze',
            'phone' => '06 4456789056',
            'user_id' => 2,
        ],
        [
            'name' => 'Osteria dei Poeti',
            'address' => 'Via Dante Alighieri 14, Firenze',
            'phone' => '06 3344556677',
            'user_id' => 3,
        ],
        [
            'name' => 'Il Vecchio Forno',
            'address' => 'Corso Italia 85, Firenze',
            'phone' => '06 1122334455',
            'user_id' => 4,
        ],
        [
            'name' => 'Pizzeria Bella Napoli',
            'address' => 'Via Napoli 3, Firenze',
            'phone' => '06 7788990011',
            'user_id' => 5,
        ],
        [
            'name' => 'Locanda del Sole',
            'address' => 'Via del Corso 45, Firenze',
            'phone' => '06 9988776655',
            'user_id' => 6,
        ],
        [
            'name' => 'Enoteca Antinori',
            'address' => 'Via Tornabuoni 3, Firenze',
            'phone' => '06 6677889900',
            'user_id' => 7,
        ],
        [
            'name' => 'Ristorante Il Magnifico',
            'address' => 'Borgo San Frediano 7, Firenze',
            'phone' => '06 2233445566',
            'user_id' => 8,
        ],
        [
            'name' => 'La Buca del Vino',
            'address' => 'Via Calzaiuoli 10, Firenze',
            'phone' => '06 1122443355',
            'user_id' => 9,
        ],
        [
            'name' => 'Caffè Rivoire',
            'address' => 'Piazza della Repubblica 5, Firenze',
            'phone' => '06 5566778899',
            'user_id' => 10,
        ]
    ],
    'dishes' => [
        // Piatti per Trattoria Da Mario
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
            'name' => 'Risotto ai Funghi',
            'course' => 'First',
            'description' => 'Risotto cremoso con funghi porcini e parmigiano.',
            'price' => 11.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Pollo alla Cacciatora',
            'course' => 'Second',
            'description' => 'Pollo cotto con verdure, vino rosso e aromi.',
            'price' => 13.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Patate Arrosto',
            'course' => 'Side',
            'description' => 'Patate al forno con rosmarino e olio extravergine.',
            'price' => 4.00,
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
        ],

        // Piatti per Ristorante La Pergola
        [
            'name' => 'Insalata Caprese',
            'course' => 'Appetizer',
            'description' => 'Mozzarella fresca con pomodori e basilico.',
            'price' => 6.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 2
        ],
        [
            'name' => 'Tagliatelle al Tartufo',
            'course' => 'First',
            'description' => 'Tagliatelle fresche condite con crema di tartufo e parmigiano.',
            'price' => 12.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 2
        ],
        [
            'name' => 'Bistecca alla Fiorentina',
            'course' => 'Second',
            'description' => 'Classica bistecca alla griglia, servita con contorno di patate arrosto.',
            'price' => 25.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 2
        ],
        [
            'name' => 'Verdure Grigliate',
            'course' => 'Side',
            'description' => 'Verdure di stagione grigliate e condite con olio d\'oliva.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 2
        ],
        [
            'name' => 'Tiramisù',
            'course' => 'Dessert',
            'description' => 'Dolce tradizionale italiano con strati di savoiardi, mascarpone e cacao.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 2
        ],

        // Piatti per Osteria dei Poeti
        [
            'name' => 'Crostini Toscani',
            'course' => 'Appetizer',
            'description' => 'Pane croccante con patè di fegatini di pollo.',
            'price' => 5.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 3
        ],
        [
            'name' => 'Pappardelle al Cinghiale',
            'course' => 'First',
            'description' => 'Pasta fresca con ragù di cinghiale.',
            'price' => 14.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 3
        ],
        [
            'name' => 'Scaloppine al Vino Bianco',
            'course' => 'Second',
            'description' => 'Fettine di carne cotte in salsa di vino bianco e limone.',
            'price' => 15.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 3
        ],
        [
            'name' => 'Insalata Mista',
            'course' => 'Side',
            'description' => 'Insalata fresca con pomodori, cetrioli e carote.',
            'price' => 3.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 3
        ],
        [
            'name' => 'Cannoli Siciliani',
            'course' => 'Dessert',
            'description' => 'Cannoli croccanti ripieni di ricotta dolce.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 3
        ],
        // Piatti per Il Vecchio Forno
        [
            'name' => 'Antipasto Toscano',
            'course' => 'Appetizer',
            'description' => 'Salumi misti toscani con formaggi e crostini.',
            'price' => 8.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 4
        ],
        [
            'name' => 'Gnocchi al Pesto',
            'course' => 'First',
            'description' => 'Gnocchi di patate fatti in casa con pesto di basilico.',
            'price' => 9.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 4
        ],
        [
            'name' => 'Arista di Maiale',
            'course' => 'Second',
            'description' => 'Arista di maiale al forno con erbe aromatiche.',
            'price' => 12.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 4
        ],
        [
            'name' => 'Peperoni Gratinati',
            'course' => 'Side',
            'description' => 'Peperoni gratinati al forno con pangrattato e parmigiano.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 4
        ],
        [
            'name' => 'Torta della Nonna',
            'course' => 'Dessert',
            'description' => 'Torta ripiena di crema pasticcera e pinoli.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 4
        ],

        // Piatti per Pizzeria Bella Napoli
        [
            'name' => 'Mozzarella in Carrozza',
            'course' => 'Appetizer',
            'description' => 'Mozzarella impanata e fritta, servita con salsa di pomodoro.',
            'price' => 6.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 5
        ],
        [
            'name' => 'Pasta alla Norma',
            'course' => 'First',
            'description' => 'Pasta con melanzane, pomodoro e ricotta salata.',
            'price' => 10.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 5
        ],
        [
            'name' => 'Salsiccia e Friarielli',
            'course' => 'Second',
            'description' => 'Salsiccia alla griglia con contorno di friarielli.',
            'price' => 11.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 5
        ],
        [
            'name' => 'Melanzane alla Parmigiana',
            'course' => 'Side',
            'description' => 'Melanzane fritte con salsa di pomodoro, mozzarella e parmigiano.',
            'price' => 6.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 5
        ],
        [
            'name' => 'Sfogliatella',
            'course' => 'Dessert',
            'description' => 'Dolce napoletano a base di pasta sfoglia ripiena di crema e ricotta.',
            'price' => 3.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 5
        ],
        // Piatti per Locanda del Sole
        [
            'name' => 'Crostini con Lardo e Miele',
            'course' => 'Appetizer',
            'description' => 'Crostini tostati con lardo toscano e un filo di miele.',
            'price' => 5.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 6
        ],
        [
            'name' => 'Pici Cacio e Pepe',
            'course' => 'First',
            'description' => 'Pasta fresca tipica condita con pecorino e pepe nero.',
            'price' => 9.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 6
        ],
        [
            'name' => 'Coniglio alla Cacciatora',
            'course' => 'Second',
            'description' => 'Coniglio cucinato con pomodoro, olive e rosmarino.',
            'price' => 13.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 6
        ],
        [
            'name' => 'Verdure Grigliate',
            'course' => 'Side',
            'description' => 'Varietà di verdure fresche grigliate.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 6
        ],
        [
            'name' => 'Cantucci e Vin Santo',
            'course' => 'Dessert',
            'description' => 'Classico dessert toscano con biscotti alle mandorle e vino dolce.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 6
        ],

        // Piatti per Enoteca Antinori
        [
            'name' => 'Carpaccio di Manzo',
            'course' => 'Appetizer',
            'description' => 'Fette di manzo crudo con rucola, grana e limone.',
            'price' => 10.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 7
        ],
        [
            'name' => 'Risotto al Chianti',
            'course' => 'First',
            'description' => 'Risotto sfumato con vino Chianti e mantecato con parmigiano.',
            'price' => 12.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 7
        ],
        [
            'name' => 'Cinghiale in Umido',
            'course' => 'Second',
            'description' => 'Cinghiale cotto lentamente con erbe e spezie.',
            'price' => 18.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 7
        ],
        [
            'name' => 'Patate al Forno',
            'course' => 'Side',
            'description' => 'Patate cotte al forno con rosmarino.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 7
        ],
        [
            'name' => 'Torta di Ricotta',
            'course' => 'Dessert',
            'description' => 'Torta cremosa alla ricotta con scorza di limone.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 7
        ],

        // Piatti per Ristorante Il Magnifico
        [
            'name' => 'Frittelle di Zucchine',
            'course' => 'Appetizer',
            'description' => 'Croccanti frittelle di zucchine servite con salsa allo yogurt.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 8
        ],
        [
            'name' => 'Spaghetti alle Vongole',
            'course' => 'First',
            'description' => 'Spaghetti con vongole fresche, aglio e prezzemolo.',
            'price' => 13.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 8
        ],
        [
            'name' => 'Filetto al Pepe Verde',
            'course' => 'Second',
            'description' => 'Filetto di manzo con salsa al pepe verde.',
            'price' => 20.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 8
        ],
        [
            'name' => 'Cicoria Ripassata',
            'course' => 'Side',
            'description' => 'Cicoria saltata in padella con aglio e peperoncino.',
            'price' => 3.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 8
        ],
        [
            'name' => 'Semifreddo al Pistacchio',
            'course' => 'Dessert',
            'description' => 'Dessert freddo al pistacchio con scaglie di cioccolato.',
            'price' => 5.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 8
        ],
        // Piatti per La Buca del Vino
        [
            'name' => 'Crostini Toscani',
            'course' => 'Appetizer',
            'description' => 'Crostini con paté di fegatini e aromi toscani.',
            'price' => 6.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 9
        ],
        [
            'name' => 'Ravioli Ricotta e Spinaci',
            'course' => 'First',
            'description' => 'Ravioli fatti in casa ripieni di ricotta e spinaci.',
            'price' => 10.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 9
        ],
        [
            'name' => 'Pollo alla Cacciatora',
            'course' => 'Second',
            'description' => 'Pollo cotto lentamente con pomodoro, olive e spezie.',
            'price' => 14.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 9
        ],
        [
            'name' => 'Carciofi alla Romana',
            'course' => 'Side',
            'description' => 'Carciofi cotti con aglio, menta e olio d’oliva.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 9
        ],
        [
            'name' => 'Zabaione al Marsala',
            'course' => 'Dessert',
            'description' => 'Classico dolce al cucchiaio a base di tuorli e vino Marsala.',
            'price' => 5.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 9
        ],

        // Piatti per Caffè Rivoire
        [
            'name' => 'Insalata di Mare',
            'course' => 'Appetizer',
            'description' => 'Insalata fresca di mare con gamberi, calamari e polpo.',
            'price' => 8.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 10
        ],
        [
            'name' => 'Gnocchi al Pesto',
            'course' => 'First',
            'description' => 'Gnocchi freschi con pesto di basilico e pinoli.',
            'price' => 9.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 10
        ],
        [
            'name' => 'Scaloppine al Limone',
            'course' => 'Second',
            'description' => 'Scaloppine di vitello al limone con contorno di verdure.',
            'price' => 15.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 10
        ],
        [
            'name' => 'Insalata Mista',
            'course' => 'Side',
            'description' => 'Insalata fresca con lattuga, pomodori, cetrioli e olive.',
            'price' => 3.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 10
        ],
        [
            'name' => 'Gelato Artigianale',
            'course' => 'Dessert',
            'description' => 'Gelato artigianale disponibile in vari gusti.',
            'price' => 3.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 10
        ]
    ]
];
