<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shapes From While loop</title>
</head>
<body>
 <!-- Right Triangle-->
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

<!-- mirror right triangle -->
 <?php
// $R=1;
// while($R<=10){
//   $C=$R;
//   while($C<=10){
//         echo" *";
//         $C++;
//     }
//    echo "<br/>";
//     $R++;
// }
?>
<br> <br>
<?php
$R=1;
while($R<=10){
  $C=10;
  while($C>=$R){
        echo"* ";
        $C--;
    }
   echo "<br/>";
    $R++;
}
?>
<br> <br>
<!--square  -->
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
<!-- rectangle -->
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
<br><br>
<!-- reverse right triangle -->
<?php
$outer=1;
while($outer<=10){
    $space=9;
    while($space>=$outer){
        echo"&nbsp ";
        $space--;
    }
    $print=1;
    while($print<=$outer){
        echo'*';
        $print++;
    }
    echo"<br>";
    $outer++;
}
?>
<br><br>
<!-- reverse mirror right triangle -->
<?php
$outer=10;
while($outer>=1){
    $space=9;
    while($space>=$outer){
        echo"&nbsp ";
        $space--;
    }
    $print=1;
    while($print<=$outer){
        echo"*";
        $print++;
    }
    echo"<br>";
    $outer--;
}
?>
<br><br>
<!-- triangle -->
<?php
$outer=1;
while($outer<=10){
    $space=9;
    while($space>=$outer){
        echo"&nbsp";
        $space--;
    }
   $print=1;
   while($print<=$outer){
       echo"* ";
       $print++;
       
   }
   echo"<br>";
   $outer++;
}
?>
<br><br>
<!-- reverse triangle -->
<?php
$outer=10;
while($outer>=1){
    $space=9;
    while($space>=$outer){
        echo"&nbsp";
        $space--;
    }
    $print=1;
    while($print<=$outer){
        echo"* ";
        $print++;
    }
    echo"<br>";
    $outer--;
}
?>




 
</body>
</html>
