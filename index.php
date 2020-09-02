<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEARNING PHP</title>
</head>
<body>
    <style>
        * {
            background-color: #fff;
            text-decoration: none;
            list-style: none;
            padding: 0;
        }
    </style>
    <div>
        <p>Hello, world!</p>
        <ul>
        <?php $souce = ['tomato', 'water', 'salt', 'peper']; ?>
        <?php foreach($souce as $ingridient): ?>
                <li>
                    <a href=""><?= $ingridient; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php 
         $lots = [
            [
                'title' => '2014 Rossignol District Snowboard',
                'category' => 'Доски и лыжи',
                'price' => '10999',
                'URL' => 'img/lot-1.jpg',
                'expiration date' => '2020-09-24'
            ],
            [
                'title' => 'DC Ply Mens 2016/2017 Snowboard',
                'category' => 'Доски и лыжи',
                'price' => '159999',
                'URL' => 'img/lot-2.jpg',
                'expiration date' => '2020-010-15'
            ],
            [
                'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
                'category' => 'Крепления',
                'price' => '8000',
                'URL' => '	img/lot-3.jpg',
                'expiration date' => '2020-08-01'
            ],
            [
                'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
                'category' => 'Ботинки',
                'price' => '10999',
                'URL' => 'img/lot-4.jpg',
                'expiration date' => '2021-03-17'
            ],
            [
                'title' => 'Куртка для сноуборда DC Mutiny Charocal',
                'category' => 'Одежда',
                'price' => '7500',
                'URL' => 'img/lot-5.jpg',
                'expiration date' => '2020-09-1'
            ],
            [
                'title' => 'Маска Oakley Canopy',
                'category' => 'Разное',
                'price' => '5400',
                'URL' => 'img/lot-6.jpg',
                'expiration date' => '2021-01-08'           
            ]
        ];
    
        date_default_timezone_set('Europe/Moscow');
        function count_date ($exp_date) {
            $cur_date = date_create("now");
            $exp = date_create($exp_date);
            $diff = date_diff($cur_date, $exp);
            $count = date_interval_format($diff, "%m %d %h %i %s");
            echo $count;
        }
        echo count_date("2021-01-09");
        echo "<br>";
        echo date('d:m:Y', 1597017600);
        echo "<br>";
        
        echo $exp_stamp = strtotime("2020-07-03");
        echo "<br>";
        echo $cur_stamp = strtotime("now");
        echo "<br>";
        echo $diff = $exp_stamp - $cur_stamp; 
        $minutes = floor($diff / 60);
        echo "<br>" . $minutes . " в минутах до даты";
        $hours = floor($diff / 3600);
        echo "<br>";
        echo $hours . " часов до даты";
        $min = floor((($exp_stamp - $hours * 3600) - $cur_stamp) / 60);
        echo "<br>" . $min . " минут до даты";
    ?>

    <form action="index.php" method="post">
        <select name="category" id="">
            <option value = "1">Что-то1</option>
            <option value = "2">Что-то2</option>
        </select>
        <button type="submit" class="button" name="submit">Отправить</button>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            echo $_POST['category'];
        }
    ?>
    </div>
</body>
</html>
