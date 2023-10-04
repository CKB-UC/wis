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

?>

</body>
</html>