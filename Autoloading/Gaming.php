<?php
class Gaming
{
    public $a, $b, $c;
    function  Sum()
    {
        echo "The sum of C1 is " . $this->c = $this->a + $this->b . "<br>";
    }
    function Sub()
    {
        echo "The subtraction of C2" . $this->c = $this->a - $this->b;
    }
}
$c1 = new Calculation();
$c1->a = '20';
$c1->b = '40';


$c2  = new Calculation();
$c2->a = '30';
$c2->b = '13';

$c1->Sum();
$c2->Sub();

?>
