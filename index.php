<?php
//Iteration 1
echo ("Hello World!\n");


$sayHello = ("Hello, World!\n");
echo $sayHello;

$sayHello = ("Hello World!\n");
print_r ($sayHello);


//Iteration 2

$num1 = 1;
$num2 = 2; 
$num3 = $num1 + $num2;
echo "Total of the sum $num1 + $num2 = $num3\n";

function add($num1, $num2) {
    return $num1 + $num2;
}

$result = add(10,20);
    echo "Once again the function result is $result \n";


//Iteration 3

$name = "Jim"; 
$age = 17;
function three($name, $age) {
    if ($age <18) {
        return "Welcome to Reboot University\n";}
        else {return "Welcome to Reboot High School\n";}
};

$show = three($name, $age); 

echo "Hello, $name! - $show\n";

//Iteration 4

//Option A, only using While
$number = 8;

echo "First Line of addition: \n";
while ($number <= 18) {
    echo $number++;
};
echo "\n \n";


//Option B, using While into a function

echo "Second Line of addition: \n";

$number2 = 12;
function adding($number2) {
    while($number2 < 18) {
        echo $number2++;
    } return $number2;
}

$show = adding($number2);
echo $show;

echo "\n \n";



//Iteration 5
$info = phpinfo();
