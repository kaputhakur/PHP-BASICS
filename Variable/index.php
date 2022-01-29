<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<h1> Predefinded Variable</h1><hr>
<!-- variable name start with  $ _or letter   -->
<h2>$Globals</h2>
<p> $globals is used to acess global variables from anywhere in php script also from within function <b>the variable names are the key of the array</b></p>

<!------------------------------------------------------ $_Server----------------------------------------------- -->
   
<h2> $_SERVER  Variable</h2>
<?php
// we can change variable name with & SIGN
// $a="kapu";
// $b=&$a;
// $b="helo my name is $b";
// echo"$b";

// $_SERVER hold the information of header,path, and scripts location.... serever information
echo$_SERVER['PHP_SELF'];
echo"<br>";
echo$_SERVER['SERVER_NAME'];
echo"<br>";

echo$_SERVER['HTTP_HOST'];echo"<br>";
 echo$_SERVER['HTTP_USER_AGENT'];// which browser is used 
?>


<!------------------------------------------------------ $_GET----------------------------------------------- -->
 <h2>$_GET Variable</h2>
<?php
// isset check weather variable is set and it is not null

// if(isset($_GET['name'])){
//     print_r($_GET);
// }

 if(isset($_GET['name']) || isset($_GET['age'])){
  echo"Welcome".$_GET['name']."<br>";
    echo"Your age is".$_GET['age']; 
 }
?>
<form method="get" action="#">
 Name:<input type="text" name="name"/>
 Age:<input type="text" name="age"/>
 <input type="submit">
</form>
<!------------------------------------------------------ $_files----------------------------------------------- -->
<h2>$_FILES Variable</h2>
<?php
if(isset($_FILES['file'])){
    echo "Filename: " . $_FILES['file']['name']."<br>";
    echo"Type:" .$_FILES['file']['type']; 
}
?>
<form method="post" action="index.php" enctype="multipart/form-data">
  FILE:<input type="file" name="file" id="file">
 <input type="submit" value="send file">   
</form>
 <hr>
 <!------------------------------------------------------Variable scope----------------------------------------------- -->
  <h1>Variable Scope </h1>
  <!--local scope variable declared within the function are local scope and can only accessed  within that function --->
   <?php
   function test(){
        $a="Kpu";
        echo"hey $a <br>";
    }
    test();
    
    //global and local variable 
     $age=23;
    function myfunction(){
        $name="Tanu";
        echo"hey $name How old are you";
    }
    myfunction();
    echo"I am $age years old";
    ?>
    <br>
   <!--  Global scope variable declared outside a function and can only accessed outside that function --->
    <?php
     $B="hello";
     function mytest(){
         
     }
     echo"$B Himanshii <br>";
    
    //  <!-- declared global variable with in function -->
      $a=20;
      $b=10;
      function sum(){
          global $a,$b;
          $c=$a+$b;
          echo $c;
      } 
      sum();
     
      ?>
      <?php
       $a="Kpu";
       $b="Thakur";
      
       function newtest(){
           global $a,$b;
             return $a.$b;
       }
      echo newtest();
 
      ?>
    </body>
</html>
