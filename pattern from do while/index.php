<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while</title>
</head>

<body>

    <!-- squre -->
    <?php
    $outer = 1;
    do {
        $inner = 1;
        do {
            echo "x ";
            $inner++;
        } while ($inner <= 5);
        echo "<br>";
        $outer++;
    } while ($outer <= 5);

    ?>
    <br><br>
    <!-- Recangle -->
    <h3>2.</h3>
    <?php
    $outer = 1;
    do {
        $inner = 1;
        do {
            echo "x ";
            $inner++;
        } while ($inner <= 10);
        $outer++;
        echo "<br>";
    } while ($outer <= 5);
    ?>
    <br><br>
    <h3>3.</h3>
    <?php
    $outer = 1;
    do {
        $inner = 1;
        do {
            echo " x";
            $inner++;
        } while ($inner <= $outer);
        echo "<br>";
        $outer++;
    } while ($outer <= 10);
    ?>
    <br><br>
    <h3>4.</h3>
    <?php
    $outer = 1;
    do {
        $inner = 10;
        do {
            echo " x";
            $inner--;
        } while ($inner >= $outer);

        echo "<br>";
        $outer++;
    } while ($outer <= 10);

    ?>
    <br><br>
    <h3>5</h3>
    <?php
    // $outer = 1;
    // do {
    //     $space = 9;
    //     do {
    //         echo "&nbsp";
    //         $space--;
            
    //         } while ($space>=$outer);
    //        $print=1;
    //        do{
    //         echo"*";
    //         $print++;   
    //     }while($print<=$outer);
   
    // } while ($outer <= 10);
    ?>
    <?php
function star($star){
switch($star){
    case '1':
        return '*&nbsp;';
        break;

    case '2':
        return '*&nbsp;*&nbsp;';
        break;

    case '3':
        return '*&nbsp;*&nbsp;*&nbsp;';
        break;

    case '4':
        return '*&nbsp;*&nbsp;*&nbsp;*&nbsp;';
        break;

    case '5':
        return '*&nbsp;*&nbsp;*&nbsp;*&nbsp;*&nbsp;';
        break;

    default :
    break;
}
}
echo star('1')."<br>".star('2')."<br>".star('3')."<br>".star('4')."<br>".star('5');
?>
</body>

</html>
