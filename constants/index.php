<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constants</title>
</head>
<body>
<?php
//once they are definded the value cannot be changed
// syntex: define(name,value,case-insensitive)
// case-sensitive
define("name","kalpana thakur");
 echo name."<br>";
//  case-insesitive
define("constant","Hello World",true);
echo Constant."<br>";
// constant are global
define("num","45");
function test(){
    echo num;
}
 test();
?> 
<!--     const -->
   <?php
   const age = "23";
   echo age;
   
//    constant as array
    
    ?>
</body>
</html>
