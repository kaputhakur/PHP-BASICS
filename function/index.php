<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Functions</h1>
    <h3>User-defined function</h3>
    <!-- function decleration strat with function and then functionName() -->
    <?php
    function sayHello(){
        echo"Hello php function";
    }
    sayHello();
?>
    
<?php
    
// function sumName($a,$b){
//   $sum=$a+$b;
//   return $sum;
// }

// $total=sumName(5,10);
// echo"$total";
  ?>
  <br><br>
    
    <?php 
    function familyName($name,$age){
        echo"$name is $age years old.<br>";
    }
    familyName("Kapu",23);
    familyName("Himanshi",24);
    familyName("Manish Rana",26);
    
    ?>
    <?php
    echo addNumber(5,4);
    function addNumber($a, $b){
        return $a+$b;
    }
    
    ?>
    
  

    
    
</body>
</html>
