<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shapes From While loop</title>
</head>
<body>
 <!-- Right Triangle
*
**
****
*****
-->
<?php
$R=1;
while($R<=10){
   $C=1;
   while($C<=$R){
       echo" *";
       $C++;
   }
   echo"<br>";
   $R++;
    }
?>
<br><br>
<?php
// $R=10;
// while($R<=20){
//     $b=20;
//     while($b>=$a){
//         echo " *";
//         $b--;
//     }
//     echo "<br/>";
//     $a++;
// }
?>
<!-- 
*****
****
**
* -->
 <?php
$R=1;
while($R<=10){
  $C=$R;
  while($C<=10){
        echo" *";
        $C++;
    }
   echo "<br/>";
    $R++;
}
?>
<br> <br>
<!-- *****
     *****
     *****  -->
<?php
$OUTER=1;
while($OUTER<=10){
    $INNER=1;
    while($INNER<=10){
        echo" *";
        $INNER++;
    }
    echo"<br>";
    $OUTER++;
}
?>
<br><br>
<!-- ******************
     ******************
     ****************** -->
<?php
$OUTER=1;
while($OUTER<=5){
    $INNER=1;
    while($INNER<=10){
        echo" *";
        $INNER++;
    }
    echo"<br>";
    $OUTER++;
}
?>

<?php
$i=1;
while($i<=10){
    $j=9;
    while($j>=$i){
        echo" &nbsp";
        $j--;
    }
    $k=1;
    while($k<=$i){
        echo' *';
        $k++;
    }
    echo"<br>";
    $i++;
}
?>
<br><br>







 
</body>
</html>
