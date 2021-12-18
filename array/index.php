 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body>
   
 
<h1> Array</h1>
<?php
// print_r define sturcture of array;
// Index array 
echo"<h3> Index array</h3>";
$names=array('himanshu','kapu','apu','gitu');
echo"<pre>";
print_r($names);
echo"$names[3] <br>";

//  Associative array (we define key value in associative array)
 echo"<h3>associative array</h3>";
 $age= array('kapu' => 23, 'himanshu'=>24,'apu'=>25,);
 echo" $age[himanshu]";

// multidimensional index Array
echo"<h3>multidimensional index array</h3>";
 $movie=array('movi1', 'movi2','movi3',array('newmovi','newmovi2'));
 print_r($movie);

//  multidimensional associate array
echo"<h3> multidimensional associative array</h3>";
 $colors=array('c1'=>'white','c2'=>'yellow','c3'=>'pink',
             'color'=>array('c4'=>'black','c5'=>'blue',) ,
             'color2'=>array('c6'=>'red','c7'=>'green',), 
             );
print_r($colors);

// array functions 
//1. (array_change_key_case(array,CASE_UPPER/CASE_LOWER))
//2. is_array=> return 1 or true
 echo"<h1> Arrayfunctions</h1>";
$age=['kapu'=>'23','himanshii'=>'22','sushma'=>'24','akshu'=>'21',];
  print_r(array_change_key_case($age,CASE_UPPER));
  echo is_array ($age);
  
// 3.  array_merge
 echo"<h3>Array merge function</h3>";
   $array= array(
          'website'=>array('search'=>'google','social'=>'facbook',),
           'frinds'=>['himnsshii','manish rana','Sushma'],
        );
$merged=array_merge($array['website'],$array['frinds'] );
print_r($merged);
 ?>
 
 
<?php
$emp=[
   [ 1,'Manish' ,'Manger','70,000' ],
   [ 2,'Manu' ,'Salesman','50,000' ],
   [ 3,'Manju' ,'Shopkeeper','40,000' ],
   [ 4,'Monu' ,'computer operator','60,000' ],
     
];
print_r($emp);

// One way to create an indexed array
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");
 
// Accessing the elements directly
echo "Accessing the 1st array elements directly:\n";
echo $name_one[2], "\n";

echo $name_one[4], "\n";


?>

</body>
 </html>
