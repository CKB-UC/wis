<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define("MINSIZE", 50);
define("ONE", 1);
define("TWO2", 2);
define("THREE_3", 3);

echo MINSIZE;
echo ("<br>");
echo constant("MINSIZE"); // same thing as the previous line
echo ("<br>");
echo constant("ONE");
echo ("<br>");
echo constant("TWO2");
echo ("<br>");
echo constant("THREE_3");

define("GAMES", ["LOL", "DOTA 2", "CS2", "VALO"]);echo ("<br>");
    echo GAMES[0];
    echo ("<br>");
    echo GAMES[1];
    echo ("<br>");
    echo GAMES[2];
    echo ("<br>");
    echo GAMES[3];echo GAMES[3];
    echo GAMES[3];echo GAMES[3];
    echo GAMES[3];echo GAMES[3];
    echo GAMES[3];echo GAMES[3];
    echo GAMES[3];
?>
</body>
</html>