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
<br><br>
<?php
// $a=10;
// while($a<=20){
//     $b=20;
//     while($b>=$a){
//         echo " *";
//         $b--;
//     }
//     echo "<br/>";
//     $a++;
// }
?>
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
<?php


    
  


?>

 
</body>
</html>
