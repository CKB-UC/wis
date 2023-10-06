<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php    
$x = "Hello world!";
$y = 'Hello world!';

    echo $x;
    echo "<br>";
    echo $y;

$i = 5;
$j = 10;

    echo "<br>";
    echo $i + $j;


    
// multiply a value by 10 and return it to the caller
function multiply ($value) {
 $value = $value * 10;
 return $value;
}
$retval = multiply (10);
echo "<br>";
Print "Return value is $retval\n";

echo "<br>";

$t = date("H");

if ($t < "12") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$a = 10;
$b = 50;

echo "<br>";

if ($a > $b){ 
  echo "Hello World";
} else {
  echo "Wassup";  
}

?>

</body>
</html>