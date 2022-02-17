<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>
   <h1> Array</h1>

   <?php
  echo'<pre>';
  
  
  $array=['school'=>['Class'=>
                      ['Class10'=>['ClassRoom'=>['RomNo11','RoomNo12'],
                      'Subject'=>['Maths','Hindi','Science','English','Social Science','Computer Science'],
                      'Student'=>['Name'=>['Himanshi','Ashu','Kapu','Manish'],
                      'RollNo','EmailId'],
                      'Teacher','ClassTime'],
                     'Class+1','Class+2'],
                     'Subject','Teacher'],];
  
       
   


   
  print_r($array);
   ?>

</body>
</html>
