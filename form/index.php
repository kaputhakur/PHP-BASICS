<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
<center>
  <h1> Form Validation </h1>
 <?php
if(isset($_POST['name'])){
  print_r($_POST);
}
  array();
  ?>
 <form action="#" method="post">
  Name: <input type="text" name="name"> <br><br>
   E-mail:  <input type="text" name="email"><br><br>
   Password: <input type="password" name="pwd"><br><br>
  Address:<input type="text" name="address"> <br><br>
  Gender:
  <input type="radio" name="gender" value="female">
  <input type="radio" name="gender" value="male"> 
  <input type="radio" name="gender" value="other"> <br><br>
  Write your thoughts:
   <textarea id="text" name="story" placeholder="Write Somthing here:" ></textarea><br><br>
                
     <input type="reset" value="reset">
     <input type="submit" value="submit">
            
 </form>
 </center>  
 <?php
  $arr=$arrayName = array('abw' => heloo, );
 ?>

</body>
</html>
