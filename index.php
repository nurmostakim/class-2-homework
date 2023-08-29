<?php


echo "<h1>sum</h1>";
function sum($user_name, $bangla, $english, $math)
{
    $results = $bangla + $english + $math;
    echo "$user_name mark is $results";
    echo "<br>";
}

sum('Sayem', '76', '86', '90',);
sum('Rakib', '96', '80', '69',);
sum('Ananda', '98', '97', '75',);
sum('Hasnat', '96', '45', '87',);

echo "<h1>minus </h1>";

function minus($product, $sell_price, $buy_price)
{
    $result = $sell_price - $buy_price;
    echo "After Buy $product, left money is $result";
    echo "<br>";
}

minus('bickit', '50', '25');
minus('robar', '15', '12');
minus('Scale', '40', '30');
echo "<br>";

echo"<h1>multiply </h1>";

function multiply($product_name, $price, $quantity)
{
    $result = $price * $quantity;
    echo "After Buy $product_name, left money is $result";
    echo "<br>";
}

multiply('bickit', '20', '2');
multiply('robar', '15', '6');
multiply('Scale', '40', '16');
echo "<br>";

echo"<h1>division </h1> ";

function division($numberOne, $numberTwo)
{
    $result = $numberOne / $numberTwo ;
    echo "The Answer is $result";
    echo "<br>";
}

division(10,2);
division(20,2);
division(50,2);

echo "<br>";

echo"<h1>power </h1>";

function power($numberOne, $numberTwo)
{
    $result = $numberOne ** $numberTwo;
    echo "Mathmatical Number is $result";
    echo "<br>";
}

power(2,3);
power(5,5);
power(9,2);
echo "<br>";

echo"<h1>modulus </h1> ";

function modulus($num_one, $lnum_two)
{
    $result = $num_one % $lnum_two;
    echo "Modulus Number Is $result";
    echo "<br>";
}

modulus(48,5);
modulus(64,5);
modulus(87,6);
echo "<br>";

echo"<h1>Upper </h1> ";

function output($name_print)
{
    
    echo strtoupper($name_print);
    echo "<br>";
}

output('nur mostakim');
output('shah hasnat');
output('ananda roy');
output('hemel arefin');
echo "<br>";

echo"<h1>assignment </h1> ";

function assignment($number_one, $number_two)
{
    $result = $number_one += $number_two;
    echo "Assaignment Output is $result";
    echo "<br>";
}

assignment('10', '5');
assignment('40', '4');
assignment('109', '76');
assignment('580', '71');
assignment('297', '184');
echo "<br>";


echo"<h1>Lower </h1> ";

function lower($name_print)
{
    
    echo strtolower($name_print);
    echo "<br>";
}

lower('nur mostakim');
lower('shah hasnat');
lower('ananda roy');
echo "<br>";

echo"<h1>Multi</h1> ";

function all($numberOne,$numberTwo,$numberThree,$numberFour){
    $result= $numberOne+$numberTwo-$numberThree*$numberFour;
    echo "Result : $result";
    echo "<br>";
}

all(100,2,2,3);
all(200,2,2,3);
all(300,2,2,3);