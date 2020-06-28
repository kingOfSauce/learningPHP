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
        
    </div>
</body>
</html>
