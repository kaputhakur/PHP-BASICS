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
    <?php
    for ($r=1; $r<= 10 ; $r++) { 
        for($c=1; $c<=10; $c++){
            echo" X";
        }
        echo"<br>";
    }
    ?>
    <br><br>
    <!-- Rectangle -->
    <?php
    for ($outer=1; $outer<=5 ; $outer++) { 
      for ($inner=1; $inner<=10 ; $inner++) { 
          echo" X";
      }
      echo"<br>";
    }
    ?>
    <br><br>
 <!--right triangle  -->
    
<?php
for ($r=1; $r<=10; $r++) { 
   for($c=1; $c<=$r; $c++){
       echo" X";
   }
   echo"<br>";
}

?>
<br><br>
<!-- mirror right  triangle -->
<?php
for ($outer=1; $outer<=10; $outer++) {
    for ($inner=10; $inner>=$outer ; $inner--) { 
     echo" X";
    } 
    echo"<br>";
}

 ?>
  <br><br>
 <!--reverse right  triangle -->
 <?php

 for ($outer=1; $outer <=10; $outer++) { 
     for ($space=9 ;$space >=$outer; $space--) { 
         echo"&nbsp ";
     }
   for($print=1;$print<=$outer; $print++){
       echo"*";
   }
   echo"<br>";
 }
 
 ?>
 <br><br>
 <!--  triangle -->
 <?php

 for ($outer=1; $outer <=10; $outer++) { 
     for ($space=9 ;$space >=$outer; $space--) { 
         echo" &nbsp";
     }
   for($print=1;$print<=$outer; $print++){
       echo"X ";
   }
   echo"<br>";
 }
 
 ?>
 
 
</body>
</html>
