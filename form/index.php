<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>

  <h1> Form Validation </h1>
 <?php
//  echo"<pre>";
//     if(isset($_POST['name'])){
//     print_r($_POST);
//     }
//     echo"</pre>";
  ?>
 <!-- <form action="#" method="post">
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
            
 </form> -->
 <br><br><br><br>

 <form action="action.php" method="post">
   First Name:<input type="text" name="name"><br><br>
   Last Name:<input type="text" name="lname"><br><br>
   Gender:<br>
        Female:<input type="radio" name="gender" value="Female">
        Male:<input type ="radio" name="gender" value="Male">
        Other:<input type= "radio" name= "gender" vlaue="other"> <br><br>
   Email Id:<input type="text" name="email"><br><br>
   Password:<input type="password" name="pwd"><br><br>
     
  
   <input type="submit" >
 </form>

</body>
</html>
