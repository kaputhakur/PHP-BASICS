<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<h2>Variable</h2>
<!-- variable name start with _or letter   -->
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
<br><br>
<!------------------------------------------------------ $_GET----------------------------------------------- -->
 <h2>$_GET Variable</h2>
<?php
// isset check weather variable is set and it is not null
/*
if(isset($_GET['name'])){
    print_r($_GET);
}
*/
if($_GET['name'] || $_GET['age']){
   echo"Welcome"."\n".$_GET['name']."<br>";
   echo"Your age is".$_GET['age']; 
}
?>
<form method="get" action="#">
 Name:<input type="text" name="name"/>
 Age:<input type="text" name="age"/>
 <input type="submit">
</form>
<!------------------------------------------------------ $_GET----------------------------------------------- -->

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


</body>
</html>
