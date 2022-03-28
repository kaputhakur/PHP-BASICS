<!-- If statement   : if condition is ture code is executed-->
<?php 
$x=10;
$y=20;
if($x < $y){
    echo"$y is greater than $x <br>"; #we can put muliple statement in if condition
    //  echo" another statement<br>";
}
$a=20;
$b="20";  
if($b === $a){
    echo"Value is equal<br>";
}
echo" vlaue is in sting thats why it's false<br>";
?>
<?php
$x=10;
$y=10;
if($a===$b){
    
}
?>

<!-- If else staEMENT  execute code  if condition is ture or false -->
<?Php
$name="Kapu";
$age="23";
if ($age="23"){
    echo"Kapu is $age years old.<br>";
}else{
    echo" another statement <br>";
}

?>

<!-- if elseif else statement: execute different code for more than two condition -->
<?php

if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}
echo"<br>";
// While loop:The while loop executes a block of code repeatedly until the condition is FALSE

$k=10;
while($k<=20){
    echo"$k <br>";
    $k++;
}
$alphbet='A';
while($alphbet <='K'){
    echo $alphbet;
    $alphbet++;
}


for( $i=1; $i<=5;$i++){
    for($j=1; $j<=5; $j++){
        echo" *";
    }
    echo"<br>";
}
?>
