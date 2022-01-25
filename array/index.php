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


//  Associative array (we define key value in associative array)
 echo"<h3>associative array</h3>";
 $age= array('kapu' => 23, 'himanshu'=>24,'apu'=>24,'manju'=>25,);
  foreach ($age as $key => $value) {
    echo"<br>Age of $key is $value";
  }
 

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
 echo"<h2>Array merge function</h2>";
   $array= array(
          'website'=>array('search'=>'google','social'=>'facbook',),
           'frinds'=>['himnsshii','manish rana','Sushma'],
        );
$merged=array_merge($array['website'],$array['frinds'] );
print_r($merged);
 ?>
 
<?php
echo"<h2> Table</h2>";
$data=[
  ["id"=>1,"name"=>"maksud","mobile"=>"0187","address"=>"chandpur"],
  ["id"=>2,"name"=>"tonmoy","mobile"=>"0177","address"=>"dhaka"],
  ["id"=>3,"name"=>"abir","mobile"=>"0155","address"=>"khulna"]];

echo '<table><tbody>'; 
foreach(['id','name','mobile'] as $attribute) {
echo '<tr><td>'.$attribute.'</td>';
foreach($data as $row) {
    echo '<td>'.$row[$attribute].'</td>';
}
echo '</tr>';
}
echo '</tbody></table>';

?>

</body>
 </html>
