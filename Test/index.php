<?php


function lantai($a)
{
    if ($a % 4 === 1) {
        $floor = floor($a / 4);
        $b = 21;
        $c = ($floor * $b) + 9;
        echo ("lantai " . $a . "terdiri atas");
        echo ('<br>');
        for ($i = ($floor * $b) + 1; $i <= $c; $i++) {
            echo ("lantai " . $a . "loker" . $i);
            echo ("loker" . $i);
            echo ('<br>');
        }
    }

    if ($a % 4 === 2) {
        $floor = floor($a / 4);
        $b = 21;
        $c = ($floor * $b) + 3;
        echo (`lantai ${a} terdiri atas`);
        echo ('<br>');
        for ($i = ($floor * $b) + 10; $i <= ($c + 9); $i++) {
            echo ("lantai " . $a . "loker" . $i);
            echo ("loker" . $i);
            echo ('<br>');
        }
    }

    if ($a % 4 === 3) {
        $floor = floor($a / 4);
        $b = 21;
        $c = ($floor * $b) + 7;
        echo (`lantai ${a} terdiri atas`);
        echo ('<br>');
        for ($i = ($floor * $b) + 13; $i <= ($c + 12); $i++) {
            echo ("lantai " . $a . "loker" . $i);
            echo ("loker" . $i);
            echo ('<br>');
        }
    }

    if ($a % 4 === 0) {
        $floor = floor($a / 4) - 1;
        $b = 21;
        $c = ($floor * $b) + 2;
        echo (`lantai ${a} terdiri atas`);
        echo ('<br>');
        for ($i = ($floor * $b) + 20; $i <= ($c + 19); $i++) {
            echo ("lantai " . $a . "loker" . $i);
            echo ("loker" . $i);
            echo ('<br>');
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Masukan Angka Lantai</h3>
    <h5>PHP Version</h5>
    <input type="text" name="loker" id="loker">
    <button type="button" onclick="lantai(loker.value)">Lihat Loker</button>
    <script src="script.js"></script>
</body>

</html>