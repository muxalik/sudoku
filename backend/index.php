<?php

require_once('render.php');

$template = [
    [5, 3, 0, 0, 7, 0, 0, 0, 0],
    [6, 0, 0, 1, 9, 5, 0, 0, 0],
    [0, 9, 8, 0, 0, 0, 0, 6, 0],
    [8, 0, 0, 0, 6, 0, 0, 0, 3],
    [4, 0, 0, 8, 0, 3, 0, 0, 1],
    [7, 0, 0, 0, 2, 0, 0, 0, 6],
    [0, 6, 0, 0, 0, 0, 2, 8, 0],
    [0, 0, 0, 4, 1, 9, 0, 0, 5],
    [0, 0, 0, 0, 8, 0, 0, 7, 9]
];

// For easier use
$matrix = [];

foreach ($template as $value) {
    $matrix[] = array_chunk($value, 3);
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/style.css">

    <?php 
    
    if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == "dark") {
        echo "<link rel='stylesheet' href='/frontend/dark.css'>";
    } else {
        echo "<link rel='stylesheet' href='/frontend/default.css'>";
    }
    
    ?>
    
    <link rel="icon" href="/frontend/favicon-32x32.png" type="image/x-icon">
    <title>Sudoku Online</title>
</head>

<body>
    <main>
        <div class="template">
            <h1 class="title">Sudoku Game</h1>
            <div class="template__container">

                <?php render($matrix) ?>

            </div>
            <div class="interface">
                <div class="interface__button" id="clear">Clear</div>
                <div class="interface__button" id="new">New game</div>
                <div class="interface__button" id="check">Check</div>
            </div>
        </div>
    </main>
    <script src="/frontend/script.js"></script>
</body>

</html>