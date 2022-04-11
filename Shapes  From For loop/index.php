<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>

<body>
    <!-- Square -->
    <h3>1.</h3>
    <?php
    for ($r = 1; $r <= 10; $r++) {
        for ($c = 1; $c <= 10; $c++) {
            echo " x";
        }
        echo "<br>";
    }
    ?>
    <br><br>

    <!-- Rectangle -->
    <h3>2.</h3>
    <?php
    for ($outer = 1; $outer <= 5; $outer++) {
        for ($inner = 1; $inner <= 10; $inner++) {
            echo " x";
        }
        echo "<br>";
    }
    ?>
    <br><br>
    <!-- right triangle -->
    <h3>3.</h3>
    <?php
    for ($r = 1; $r <= 10; $r++) {
        for ($c = 1; $c <= $r; $c++) {
            echo " x";
        }
        echo "<br>";
    }

    ?>
    <br><br>
    <!-- reverse -->
    <?php
    for ($outer = 1; $outer <= 10; $outer++) {
        for ($inner = 10; $inner >= $outer; $inner--) {
            echo " x";
        }
        echo "<br>";
    }

    ?>
    <br><br>


    <h3>4.</h3>
    <?php

    for ($outer = 0; $outer <= 10; $outer++) {
        for ($space = 9; $space >= $outer; $space--) {
            echo "&nbsp ";
        }
        for ($print = 0; $print <= $outer; $print++) {
            echo "x";
        }
        echo "<br>";
    }

    ?>
    <br><br>
    <!-- reverse -->
    <?php

    for ($outer = 10; $outer >=0; $outer--) {
        for ($space = 9; $space >= $outer; $space--) {
            echo "&nbsp ";
        }
        for ($print = 0; $print <= $outer; $print++) {
            echo "x";
        }
        echo "<br>";
    }

    ?>
    <br><br>

    <!--  triangle -->
    <h3>5.</h3>
    <?php

    for ($outer = 1; $outer <= 10; $outer++) {
        for ($space = 9; $space >= $outer; $space--) {
            echo " &nbsp ";
        }
        for ($print = 1; $print <= $outer; $print++) {
            echo "x  ";
        }
        echo "<br>";
    }

    ?>
    <br><br>
    <!-- reverse triangle -->
    <?php
    for ($outer = 10; $outer >= 1; $outer--) {
        for ($space = 9; $space >= $outer; $space--) {
            echo "&nbsp ";
        }
        for ($print = 1; $print <= $outer; $print++) {
            echo "x  ";
        }
        echo "<br>";
    }
    ?>
    <br><br>

    <h3>6.</h3>
    <?php
    for ($outer = 1; $outer <= 5; $outer++) {
        for ($inner = 1; $inner <= $outer; $inner++) {
            echo "x ";
        }
        echo "<br>";
    }
    for ($outer1 = 1; $outer1 <= 5; $outer1++) {
        for ($inner1 = 5; $inner1 >= $outer1; $inner1--) {
            echo "x ";
        }
        echo "<br>";
    }
    ?>

    <!-- M -->
    <h3>7.</h3>
    <?php
    for ($outer1 = 1; $outer1 <= 10; $outer1++) {
        for ($inner1 = 10; $inner1 >= $outer1; $inner1--) {
            echo "x ";
        }
        echo "<br>";
    }
    for ($outer = 1; $outer <= 10; $outer++) {
        for ($inner = 1; $inner <= $outer; $inner++) {
            echo "x ";
        }
        echo "<br>";
    }
    ?>
    <br><br>
    <h3>8.</h3>
    <?php
    for ($outer = 10; $outer >= 2; $outer--) {
        for ($space = 9; $space >= $outer; $space--) {
            echo "&nbsp ";
        }
        for ($print = 1; $print <= $outer; $print++) {
            echo "x ";
        }
        echo "<br>";
    }
    for ($outer1 = 2; $outer1 <= 10; $outer1++) {
        for ($space1 = 9; $space1 >= $outer1; $space1--) {
            echo "&nbsp ";
        }
        for ($print1 = 1; $print1 <= $outer1; $print1++) {
            echo "x ";
        }
        echo "<br>";
    }
    ?>
    <br><br>
    <h3>9.</h3>
    <?php
    for($outer=1;$outer<=10;$outer++){
        for($space=9;$space>=$outer;$space--){
            echo"&nbsp ";
        }
        for($print=1;$print<=$outer;$print++){
            echo"x ";
        }
        echo"<br>";
    }
    for($R=1;$R<=5;$R++){
        for($S=3;$S>= $R;$S--){
            echo"&nbsp ";
        }
        for($C=1;$C<=5;$C++){
            echo"x ";
        }
        echo"<br>";
    }
?>





</body>

</html>
