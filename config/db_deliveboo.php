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
        ],
        [
            'name' => 'Trattoria La Casalinga',
            'address' => 'Via dei Serragli 17, Firenze',
            'phone' => '06 4455667788',
            'user_id' => 11,
        ],
        [
            'name' => 'Ristorante Il Girasole',
            'address' => 'Piazza del Duomo 8, Firenze',
            'phone' => '06 9988001122',
            'user_id' => 12,
        ],
        [
            'name' => 'Osteria La Mescita',
            'address' => 'Via della Vigna Vecchia 6, Firenze',
            'phone' => '06 3344667788',
            'user_id' => 13,
        ],
        [
            'name' => 'Pizzeria La Piazzetta',
            'address' => 'Piazza Santo Spirito 12, Firenze',
            'phone' => '06 2233114455',
            'user_id' => 14,
        ],
        [
            'name' => 'Ristorante La Torre',
            'address' => 'Via dei Bardi 4, Firenze',
            'phone' => '06 7788110099',
            'user_id' => 15,
        ],
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
        [
            'name' => 'Frittelle di Baccalà',
            'course' => 'Appetizer',
            'description' => 'Croccanti frittelle di baccalà fritto.',
            'price' => 6.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Zuppa di Fagioli',
            'course' => 'First',
            'description' => 'Zuppa tradizionale toscana con fagioli e verdure.',
            'price' => 7.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Salsiccia con Fagioli',
            'course' => 'Second',
            'description' => 'Salsiccia toscana servita con fagioli all’uccelletto.',
            'price' => 12.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Verdure al Vapore',
            'course' => 'Side',
            'description' => 'Verdure fresche cotte al vapore conditi con olio e limone.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 1
        ],
        [
            'name' => 'Gelato Fior di Latte',
            'course' => 'Dessert',
            'description' => 'Gelato artigianale al fior di latte.',
            'price' => 3.50,
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
        [
            'name' => 'Arancini Siciliani',
            'course' => 'Appetizer',
            'description' => 'Croccanti arancini di riso ripieni di ragù e mozzarella.',
            'price' => 7.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 2
        ],
        [
            'name' => 'Zuppa di Zucca',
            'course' => 'First',
            'description' => 'Crema di zucca con crostini di pane e semi di zucca.',
            'price' => 8.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 2
        ],
        [
            'name' => 'Spezzatino di Vitello',
            'course' => 'Second',
            'description' => 'Spezzatino di vitello con patate e carote.',
            'price' => 14.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 2
        ],
        [
            'name' => 'Carciofi Ripieni',
            'course' => 'Side',
            'description' => 'Carciofi ripieni di pangrattato, prezzemolo e aglio.',
            'price' => 6.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 2
        ],
        [
            'name' => 'Cheesecake al Limone',
            'course' => 'Dessert',
            'description' => 'Cheesecake artigianale con crema al limone.',
            'price' => 5.50,
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
        [
            'name' => 'Pizza Margherita',
            'course' => 'First',
            'description' => 'Classica pizza con pomodoro, mozzarella e basilico.',
            'price' => 7.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 3,
        ],
        [
            'name' => 'Risotto ai Funghi',
            'course' => 'First',
            'description' => 'Risotto cremoso con funghi porcini.',
            'price' => 9.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 3,
        ],
        [
            'name' => 'Lasagne al Forno',
            'course' => 'First',
            'description' => 'Lasagne con ragù, besciamella e formaggio.',
            'price' => 10.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 3,
        ],
        [
            'name' => 'Tiramisù',
            'course' => 'Dessert',
            'description' => 'Classico dessert italiano con mascarpone e caffè.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 3,
        ],
        [
            'name' => 'Frittura di Calamari',
            'course' => 'Appetizer',
            'description' => 'Calamari croccanti fritti con limone.',
            'price' => 8.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 3,
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
        [
            'name' => 'Sushi Misto',
            'course' => 'Appetizer',
            'description' => 'Vassoio assortito di sushi e sashimi.',
            'price' => 15.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 4,
        ],
        [
            'name' => 'Ramen di Maiale',
            'course' => 'First',
            'description' => 'Zuppa giapponese con noodles, uovo e pancetta di maiale.',
            'price' => 12.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 4,
        ],
        [
            'name' => 'Gyoza di Verdure',
            'course' => 'Appetizer',
            'description' => 'Ravioli giapponesi ripieni di verdure.',
            'price' => 6.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 4,
        ],
        [
            'name' => 'Tempura di Gamberi',
            'course' => 'Appetizer',
            'description' => 'Gamberi fritti in pastella leggera.',
            'price' => 8.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 4,
        ],
        [
            'name' => 'Edamame',
            'course' => 'Appetizer',
            'description' => 'Fagioli di soia lessati e salati.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 4,
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
        [
            'name' => 'Frittatine di Pasta',
            'course' => 'Appetizer',
            'description' => 'Piccole frittate di pasta napoletane con besciamella e formaggio.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 5
        ],
        [
            'name' => 'Pizza Capricciosa',
            'course' => 'First',
            'description' => 'Pizza con pomodoro, mozzarella, prosciutto, funghi e carciofi.',
            'price' => 9.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 5
        ],
        [
            'name' => 'Ziti al Ragù',
            'course' => 'First',
            'description' => 'Pasta lunga condita con ragù napoletano tradizionale.',
            'price' => 8.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 5
        ],
        [
            'name' => 'Peperoni Ripieni',
            'course' => 'Second',
            'description' => 'Peperoni ripieni di carne macinata, uvetta e pinoli.',
            'price' => 7.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 5
        ],
        [
            'name' => 'Babà al Rum',
            'course' => 'Dessert',
            'description' => 'Classico dolce napoletano soffice e impregnato di rum.',
            'price' => 3.00,
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
        [
            'name' => 'Zuppa di Fagioli e Cavolo Nero',
            'course' => 'First',
            'description' => 'Zuppa toscana con fagioli cannellini e cavolo nero.',
            'price' => 8.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 6
        ],
        [
            'name' => 'Bistecca alla Fiorentina',
            'course' => 'Second',
            'description' => 'Taglio di carne alla griglia servito al sangue, tipico della Toscana.',
            'price' => 25.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 6
        ],
        [
            'name' => 'Pappa al Pomodoro',
            'course' => 'First',
            'description' => 'Zuppa di pomodoro con pane raffermo e olio extravergine.',
            'price' => 6.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 6
        ],
        [
            'name' => 'Fagioli all’Uccelletto',
            'course' => 'Side',
            'description' => 'Fagioli cannellini cotti con pomodoro e salvia.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 6
        ],
        [
            'name' => 'Torta della Nonna',
            'course' => 'Dessert',
            'description' => 'Torta con crema pasticcera e pinoli, dolce tipico toscano.',
            'price' => 5.00,
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
        [
            'name' => 'Bruschette al Pomodoro',
            'course' => 'Appetizer',
            'description' => 'Pane tostato con pomodoro fresco, basilico e olio d’oliva.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 7
        ],
        [
            'name' => 'Pappardelle al Cinghiale',
            'course' => 'First',
            'description' => 'Pasta fresca con sugo di cinghiale.',
            'price' => 12.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 7
        ],
        [
            'name' => 'Tagliere di Formaggi',
            'course' => 'Appetizer',
            'description' => 'Selezione di formaggi toscani serviti con miele e confetture.',
            'price' => 14.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 7
        ],
        [
            'name' => 'Rosticciana',
            'course' => 'Second',
            'description' => 'Costine di maiale alla griglia con spezie.',
            'price' => 16.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 7
        ],
        [
            'name' => 'Castagnaccio',
            'course' => 'Dessert',
            'description' => 'Dolce a base di farina di castagne, uvetta e pinoli.',
            'price' => 5.00,
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
        [
            'name' => 'Caprese con Burrata',
            'course' => 'Appetizer',
            'description' => 'Pomodoro, basilico e burrata fresca con un filo di olio d’oliva.',
            'price' => 6.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 8
        ],
        [
            'name' => 'Ravioli al Tartufo',
            'course' => 'First',
            'description' => 'Ravioli ripieni di ricotta con salsa al tartufo nero.',
            'price' => 14.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 8
        ],
        [
            'name' => 'Brasato al Barolo',
            'course' => 'Second',
            'description' => 'Carne di manzo brasata al vino Barolo con contorno di patate.',
            'price' => 18.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 8
        ],
        [
            'name' => 'Zucchine alla Scapece',
            'course' => 'Side',
            'description' => 'Zucchine marinate con aceto, menta e aglio.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 8
        ],
        [
            'name' => 'Tiramisù al Caffè',
            'course' => 'Dessert',
            'description' => 'Classico dolce italiano con crema al mascarpone e caffè.',
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
        [
            'name' => 'Polenta con Funghi Porcini',
            'course' => 'Appetizer',
            'description' => 'Polenta cremosa con funghi porcini trifolati.',
            'price' => 7.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 9
        ],
        [
            'name' => 'Lasagne alla Bolognese',
            'course' => 'First',
            'description' => 'Lasagne al forno con ragù di carne, besciamella e parmigiano.',
            'price' => 12.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 9
        ],
        [
            'name' => 'Tagliata di Manzo',
            'course' => 'Second',
            'description' => 'Fette di manzo servite con rucola e scaglie di parmigiano.',
            'price' => 20.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 9
        ],
        [
            'name' => 'Fagiolini al Pomodoro',
            'course' => 'Side',
            'description' => 'Fagiolini freschi saltati in padella con pomodoro e aglio.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 9
        ],
        [
            'name' => 'Crostata di Frutta',
            'course' => 'Dessert',
            'description' => 'Crostata con crema pasticcera e frutta fresca di stagione.',
            'price' => 5.00,
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
        ],
        [
            'name' => 'Gamberetti in Salsa Rosa',
            'course' => 'Appetizer',
            'description' => 'Gamberetti serviti con salsa rosa e crostini.',
            'price' => 7.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 10
        ],
        [
            'name' => 'Penne all’Arrabbiata',
            'course' => 'First',
            'description' => 'Penne con sugo piccante al pomodoro, aglio e peperoncino.',
            'price' => 8.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 10
        ],
        [
            'name' => 'Pesce Spada alla Griglia',
            'course' => 'Second',
            'description' => 'Filetto di pesce spada alla griglia con limone e prezzemolo.',
            'price' => 17.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 10
        ],
        [
            'name' => 'Spinaci Saltati',
            'course' => 'Side',
            'description' => 'Spinaci freschi saltati in padella con olio e aglio.',
            'price' => 3.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 10
        ],
        [
            'name' => 'Panna Cotta al Caramello',
            'course' => 'Dessert',
            'description' => 'Dessert al cucchiaio servito con caramello fatto in casa.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 10
        ],
        // Ristorante La Perla del Mare (restaurant_id 11)
        [
            'name' => 'Tartare di Tonno',
            'course' => 'Appetizer',
            'description' => 'Tonno fresco tagliato al coltello e condito con olio, limone e pepe.',
            'price' => 12.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 11
        ],
        [
            'name' => 'Spaghetti ai Ricci di Mare',
            'course' => 'First',
            'description' => 'Pasta al dente con delicata crema di ricci di mare.',
            'price' => 18.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 11
        ],
        [
            'name' => 'Branzino al Cartoccio',
            'course' => 'Second',
            'description' => 'Filetto di branzino cotto al cartoccio con erbe aromatiche.',
            'price' => 22.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 11
        ],
        [
            'name' => 'Patate Duchessa',
            'course' => 'Side',
            'description' => 'Patate lavorate con burro e parmigiano, poi gratinate.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 11
        ],
        [
            'name' => 'Torta Caprese',
            'course' => 'Dessert',
            'description' => 'Torta al cioccolato e mandorle tipica della tradizione campana.',
            'price' => 5.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 11
        ],
        [
            'name' => 'Cocktail di Gamberi',
            'course' => 'Appetizer',
            'description' => 'Gamberi freschi serviti con salsa rosa e insalata croccante.',
            'price' => 10.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 11
        ],
        [
            'name' => 'Risotto allo Zafferano e Gamberi',
            'course' => 'First',
            'description' => 'Risotto cremoso con gamberi freschi e un tocco di zafferano.',
            'price' => 16.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 11
        ],
        [
            'name' => 'Orata al Forno',
            'course' => 'Second',
            'description' => 'Orata cotta al forno con patate e pomodorini.',
            'price' => 20.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 11
        ],
        [
            'name' => 'Zucchine Fritte',
            'course' => 'Side',
            'description' => 'Bastoncini di zucchine impanate e fritte.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 11
        ],
        [
            'name' => 'Semifreddo al Limone',
            'course' => 'Dessert',
            'description' => 'Dolce al cucchiaio dal gusto fresco e agrumato.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 11
        ],

        // Ristorante Osteria della Valle (restaurant_id 12)
        [
            'name' => 'Bruschette al Pomodoro',
            'course' => 'Appetizer',
            'description' => 'Pane croccante condito con pomodoro fresco, aglio e basilico.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 12
        ],
        [
            'name' => 'Tagliatelle al Ragù',
            'course' => 'First',
            'description' => 'Pasta fresca all’uovo condita con ragù di carne.',
            'price' => 10.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 12
        ],
        [
            'name' => 'Arrosto di Maiale',
            'course' => 'Second',
            'description' => 'Fette di arrosto di maiale cotto al forno con patate.',
            'price' => 15.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 12
        ],
        [
            'name' => 'Caponata Siciliana',
            'course' => 'Side',
            'description' => 'Verdure in agrodolce con capperi e olive.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 12
        ],
        [
            'name' => 'Cannolo Siciliano',
            'course' => 'Dessert',
            'description' => 'Cialda croccante ripiena di ricotta e scaglie di cioccolato.',
            'price' => 3.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 12
        ],
        [
            'name' => 'Focaccia con Rosmarino',
            'course' => 'Appetizer',
            'description' => 'Focaccia calda condita con olio e rosmarino.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 12
        ],
        [
            'name' => 'Tortelli di Zucca',
            'course' => 'First',
            'description' => 'Tortelli ripieni di zucca con burro e salvia.',
            'price' => 12.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 12
        ],
        [
            'name' => 'Ossobuco alla Milanese',
            'course' => 'Second',
            'description' => 'Ossobuco di vitello cotto lentamente con gremolata.',
            'price' => 19.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 12
        ],
        [
            'name' => 'Fagioli all’Uccelletto',
            'course' => 'Side',
            'description' => 'Fagioli cotti in padella con pomodoro e salvia.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 12
        ],
        [
            'name' => 'Pasticciotto Leccese',
            'course' => 'Dessert',
            'description' => 'Pasta frolla ripiena di crema pasticcera.',
            'price' => 3.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 12
        ],
        // Ristorante Trattoria del Borgo (restaurant_id 13)
        [
            'name' => 'Frittura di Calamari',
            'course' => 'Appetizer',
            'description' => 'Calamari freschi impanati e fritti, serviti con salsa tartara.',
            'price' => 9.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 13
        ],
        [
            'name' => 'Penne alla Vodka',
            'course' => 'First',
            'description' => 'Pasta con una cremosa salsa al pomodoro, panna e vodka.',
            'price' => 10.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 13
        ],
        [
            'name' => 'Costata di Manzo',
            'course' => 'Second',
            'description' => 'Costata di manzo grigliata, servita con patate arrosto.',
            'price' => 22.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 13
        ],
        [
            'name' => 'Panzanella',
            'course' => 'Side',
            'description' => 'Insalata toscana con pane raffermo, pomodori, cetrioli e cipolla.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 13
        ],
        [
            'name' => 'Crostata di Frutta',
            'course' => 'Dessert',
            'description' => 'Crostata con crema pasticcera e frutta fresca di stagione.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 13
        ],
        [
            'name' => 'Bruschette al Tartufo',
            'course' => 'Appetizer',
            'description' => 'Pane croccante con crema di tartufo e scaglie di parmigiano.',
            'price' => 7.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 13
        ],
        [
            'name' => 'Lasagna alla Bolognese',
            'course' => 'First',
            'description' => 'Lasagna con ragù di carne, besciamella e parmigiano.',
            'price' => 13.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 13
        ],
        [
            'name' => 'Coniglio alla Liguria',
            'course' => 'Second',
            'description' => 'Coniglio cucinato con olive taggiasche, rosmarino e vino bianco.',
            'price' => 18.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 13
        ],
        [
            'name' => 'Patate al Rosmarino',
            'course' => 'Side',
            'description' => 'Patate arrosto con rosmarino e aglio.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 13
        ],
        [
            'name' => 'Tiramisu',
            'course' => 'Dessert',
            'description' => 'Il classico dolce al cucchiaio con mascarpone e cacao.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 13
        ],

        // Ristorante La Dolce Vita (restaurant_id 14)
        [
            'name' => 'Carpaccio di Zucchine',
            'course' => 'Appetizer',
            'description' => 'Zucchine fresche affettate sottilmente con limone e parmigiano.',
            'price' => 7.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 14
        ],
        [
            'name' => 'Risotto ai Funghi Porcini',
            'course' => 'First',
            'description' => 'Risotto cremoso con funghi porcini freschi.',
            'price' => 14.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 14
        ],
        [
            'name' => 'Tagliata di Manzo',
            'course' => 'Second',
            'description' => 'Manzo cotto alla griglia e servito con rucola e scaglie di parmigiano.',
            'price' => 20.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 14
        ],
        [
            'name' => 'Caponata di Melanzane',
            'course' => 'Side',
            'description' => 'Melanzane in agrodolce con cipolla, olive e capperi.',
            'price' => 6.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 14
        ],
        [
            'name' => 'Gelato alla Nocciola',
            'course' => 'Dessert',
            'description' => 'Gelato artigianale alla nocciola, cremoso e delicato.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 14
        ],
        [
            'name' => 'Insalata di Polpo',
            'course' => 'Appetizer',
            'description' => 'Polpo lessato con sedano, pomodoro e olive.',
            'price' => 11.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 14
        ],
        [
            'name' => 'Spaghetti alle Vongole Veraci',
            'course' => 'First',
            'description' => 'Spaghetti con vongole veraci, aglio, olio e prezzemolo.',
            'price' => 15.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 14
        ],
        [
            'name' => 'Pollo alla Cacciatora',
            'course' => 'Second',
            'description' => 'Pollo cucinato con pomodoro, olive e rosmarino.',
            'price' => 16.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 14
        ],
        [
            'name' => 'Fagioli all’Olio',
            'course' => 'Side',
            'description' => 'Fagioli cotti con olio extra vergine e rosmarino.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 14
        ],
        [
            'name' => 'Panna Cotta',
            'course' => 'Dessert',
            'description' => 'Panna cotta al naturale con salsa ai frutti di bosco.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 14
        ],

        // Ristorante La Tavola della Nonna (restaurant_id 15)
        [
            'name' => 'Antipasto Misto',
            'course' => 'Appetizer',
            'description' => 'Selezione di salumi e formaggi locali, con marmellata di fichi.',
            'price' => 8.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 15
        ],
        [
            'name' => 'Pappardelle al Cinghiale',
            'course' => 'First',
            'description' => 'Pasta fresca con ragù di cinghiale.',
            'price' => 13.50,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 15
        ],
        [
            'name' => 'Arista di Maiale',
            'course' => 'Second',
            'description' => 'Arista di maiale cotta al forno con contorno di patate.',
            'price' => 17.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 15
        ],
        [
            'name' => 'Frittata di Patate',
            'course' => 'Side',
            'description' => 'Frittata di patate soffice e saporita.',
            'price' => 4.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 15
        ],
        [
            'name' => 'Ciambellone alla Nocciole',
            'course' => 'Dessert',
            'description' => 'Ciambellone soffice con nocciole tostate e glassa al cioccolato.',
            'price' => 4.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 15
        ],
        [
            'name' => 'Tartufi di Cioccolato',
            'course' => 'Appetizer',
            'description' => 'Truffle al cioccolato fondente con un cuore morbido.',
            'price' => 5.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 15
        ],
        [
            'name' => 'Minestrone alla Toscana',
            'course' => 'First',
            'description' => 'Zuppa di verdure con legumi e pasta.',
            'price' => 9.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 15
        ],
        [
            'name' => 'Bistecca alla Fiorentina',
            'course' => 'Second',
            'description' => 'Bistecca di manzo cotta alla griglia, servita con olio e limone.',
            'price' => 25.00,
            'vegetarian' => false,
            'visible' => true,
            'restaurant_id' => 15
        ],
        [
            'name' => 'Insalata di Carciofi',
            'course' => 'Side',
            'description' => 'Carciofi freschi affettati con limone e parmigiano.',
            'price' => 6.00,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 15
        ],
        [
            'name' => 'Zabaione',
            'course' => 'Dessert',
            'description' => 'Dolce al cucchiaio preparato con uova, zucchero e vino Marsala.',
            'price' => 5.50,
            'vegetarian' => true,
            'visible' => true,
            'restaurant_id' => 15
        ]
    ],
    'orders' => [
        [
            'customer_name' => 'John',
            'customer_surname' => 'Doe',
            'shipping_address' => '123 Main St, Springfield',
            'total_price' => 250,
            'total_items' => 3,
        ],
        [
            'customer_name' => 'Jane',
            'customer_surname' => 'Smith',
            'shipping_address' => '456 Elm St, Shelbyville',
            'total_price' => 150,
            'total_items' => 2,
        ],
        [
            'customer_name' => 'James',
            'customer_surname' => 'Johnson',
            'shipping_address' => '789 Oak St, Capital City',
            'total_price' => 300,
            'total_items' => 4,
        ],
        [
            'customer_name' => 'Emily',
            'customer_surname' => 'Davis',
            'shipping_address' => '101 Pine St, Westfield',
            'total_price' => 220,
            'total_items' => 2,
        ],
        [
            'customer_name' => 'Michael',
            'customer_surname' => 'Miller',
            'shipping_address' => '202 Maple St, Rivertown',
            'total_price' => 180,
            'total_items' => 1,
        ],
        [
            'customer_name' => 'Sarah',
            'customer_surname' => 'Wilson',
            'shipping_address' => '303 Birch St, Greenfield',
            'total_price' => 500,
            'total_items' => 5,
        ],
        [
            'customer_name' => 'David',
            'customer_surname' => 'Moore',
            'shipping_address' => '404 Cedar St, Highland Park',
            'total_price' => 350,
            'total_items' => 4,
        ],
        [
            'customer_name' => 'Sophia',
            'customer_surname' => 'Brown',
            'shipping_address' => '505 Pine St, Sunnydale',
            'total_price' => 400,
            'total_items' => 6,
        ],
        [
            'customer_name' => 'Daniel',
            'customer_surname' => 'Taylor',
            'shipping_address' => '606 Oak St, Oakridge',
            'total_price' => 270,
            'total_items' => 3,
        ],
        [
            'customer_name' => 'Olivia',
            'customer_surname' => 'Martinez',
            'shipping_address' => '707 Walnut St, Pleasantville',
            'total_price' => 320,
            'total_items' => 2,
        ],
        [
            'customer_name' => 'Lucas',
            'customer_surname' => 'Garcia',
            'shipping_address' => '808 Maple St, Riverton',
            'total_price' => 180,
            'total_items' => 1,
        ],
        [
            'customer_name' => 'Charlotte',
            'customer_surname' => 'Harris',
            'shipping_address' => '909 Elm St, Lakeview',
            'total_price' => 450,
            'total_items' => 5,
        ],
        [
            'customer_name' => 'Ethan',
            'customer_surname' => 'Clark',
            'shipping_address' => '1010 Oak St, Springtown',
            'total_price' => 550,
            'total_items' => 7,
        ],
        [
            'customer_name' => 'Amelia',
            'customer_surname' => 'Young',
            'shipping_address' => '1111 Birch St, Clearwater',
            'total_price' => 600,
            'total_items' => 8,
        ],
        [
            'customer_name' => 'Mason',
            'customer_surname' => 'Lewis',
            'shipping_address' => '1212 Cedar St, Meadowbrook',
            'total_price' => 310,
            'total_items' => 4,
        ],
        [
            'customer_name' => 'Isabella',
            'customer_surname' => 'Scott',
            'shipping_address' => '1313 Pine St, Hilltop',
            'total_price' => 270,
            'total_items' => 3,
        ],
        [
            'customer_name' => 'Aiden',
            'customer_surname' => 'King',
            'shipping_address' => '1414 Walnut St, Brookfield',
            'total_price' => 400,
            'total_items' => 5,
        ],
        [
            'customer_name' => 'Lily',
            'customer_surname' => 'Adams',
            'shipping_address' => '1515 Maple St, Northfield',
            'total_price' => 330,
            'total_items' => 3,
        ],
        [
            'customer_name' => 'Jackson',
            'customer_surname' => 'Baker',
            'shipping_address' => '1616 Birch St, Winter Park',
            'total_price' => 450,
            'total_items' => 5,
        ],
        [
            'customer_name' => 'Grace',
            'customer_surname' => 'Martinez',
            'shipping_address' => '1717 Oak St, Highland Springs',
            'total_price' => 370,
            'total_items' => 4,
        ],
    ],
];
