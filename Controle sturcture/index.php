<!-- If statement   : if condition is ture code is executed-->
<?php
$x = 10;
$y = 20;
if ($x < $y) {
    echo "$y is greater than $x <br>"; #we can put muliple statement in if condition
    //  echo" another statement<br>";
}
 $a = 20; //we used identical oprator 
$b = "20";
if ($b === $a) {
    echo "Value is equal<br>";
}
echo " vlaue is in sting thats why it's false<br>";
?>
<br><br>
<!-- If else staEMENT  execute code  if condition is ture or false -->
<?Php
$name = "Kapu";
$age = "23";
if ($age = "23") {
    echo "Kapu is $age years old.<br>";
} else {
    echo " another statement <br>";
}
?>
<br><br>
<!-- if elseif else statement: execute different code for more than two condition -->
<?php
if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}
echo "<br>";
// While loop:The while loop executes a block of code repeatedly until the condition is FALSE
$k = 10;
while ($k <= 20) {
    echo "$k";
    $k++;
}
echo"<br>";
$alphbet = 'A';
while ($alphbet <= 'K') {
    echo $alphbet;
    $alphbet++;
}
?>
<br><br>
<!-- Do while loop :block of code execute one time always// execute the block of code once,
 then it will check condition and repeat the loop while the specified condition is true -->
 <?php
 $num=1;
 do{
     echo"$num";
     $num++;
 }while($num<=10);
 ?>
<!--  for loop :first expression is execute once unconditionally at the beging of the loop
 second expression is condition the condition is true then the code excute and the third expression is execute end
of the iteration-->
<?php
for ($i=0; $i<=100; $i+=20) {
     echo"$i<br>";
}
?>
<!--
 break loop
 continue
switch -->
<?php
// $i = 2;
// switch ($i) {
//     case 0:
//         echo "i equals 0";
//     case 1:
//         echo "i equals 1";
//     case 2:
//         echo "i equals 2";
// }
?>
