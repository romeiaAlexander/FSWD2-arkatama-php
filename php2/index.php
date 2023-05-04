<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tugas 17</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

</body>
</html>

<?php

$height = 5;

function draw_triangle(string $type, int $height): void {
    switch ($type) {
        case 'downside_right_invert':
            downside_right_invert($height);
            break;
        case 'downside_right':
            downside_right($height);
            break;
        case 'downside_left_invert':
            downside_left_invert($height);
            break;
        case 'downside_left':
            downside_left($height);
            break;
        default:
            echo 'Invalid triangle type';
            break;
    }
}

function downside_right_invert(int $height): void {
    for ($i = $height; $i >= 1; $i--) {
        for ($j = $height - $i; $j >= 1; $j--) {
            echo '&nbsp;&nbsp;';
        }
        for ($k = 1; $k <= $i; $k++) {
            echo '*';
        }
        echo '<br>';
    }
}

function downside_right(int $height): void {
    for ($i = 1; $i <= $height; $i++) {
        for ($j = $height - $i; $j >= 1; $j--) {
            echo '&nbsp;&nbsp;';
        }
        for ($k = 1; $k <= $i; $k++) {
            echo '*';
        }
        echo '<br>';
    }
}

function downside_left_invert(int $height): void {
    for ($i = 1; $i <= $height; $i++) {
        for ($j = $height; $j >= $i; $j--) {
            echo '*';
        }
        echo '<br>';
    }
}

function downside_left(int $height): void {
    for ($i = 1; $i <= $height; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
}

// Example usage
draw_triangle('downside_right_invert', $height);
echo '<br>';
draw_triangle('downside_right', $height);
echo '<br>';
draw_triangle('downside_left_invert', $height);
echo '<br>';
draw_triangle('downside_left', $height);

?>
