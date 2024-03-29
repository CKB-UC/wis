<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<style>
<form method="post" action="">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 justify-content-center">
                <div class="col text-center mb-3 mb-md-5">
                        <label for="Operand1" class="form-label fs-3">First Number</label>
                        <input id="Operand1" name="Operand1" type="number" step="any" class="form-control form-control-custom" value="<?php echo isset($Operand1)?$Operand1:''; ?>">
                </div>
                <div class="col text-center mb-3 mb-md-4">
                        <label for="Operand2" class="form-label fs-3">Second Number</label>
                        <input id="Operand2" name="Operand2" type="number" step="any" class="form-control form-control-custom" value="<?php echo isset($Operand2)?$Operand2:''; ?>">
                </div>
        </div>
        <div class="row justify-content-center mb-3">
                <div class="col-auto">
                        <input class="btn btn-success fs-2" type="submit" name="Calculate" value="+">
                        <input class="btn btn-success fs-2" type="submit" name="Calculate" value="-">
                        <input class="btn btn-success fs-2" type="submit" name="Calculate" value="x">
                        <input class="btn btn-success fs-2" type="submit" name="Calculate" value="/">
                </div>
        </div>
</form>

<div class="row justify-content-center">
        <div class="col text-center">
                <label for="Result" class="fs-4">Result</label>
                <input id="Result" name="Result" type="number" step="any" class="form-control form-control-custom" value="<?php echo $Result; 
                ?>">
        </div>
</div>

<div class="row justify-content-center">
        <div class="col">
                <div class="alert alert-danger shadow-sm" role="alert">Error: <?php echo $Error; ?></div>
        </div>
</div>


</style>
    
</head>
<body>






    <?php
    
    $a = 615123186;
    $b = 784864;
 
    $c = $a + $b;
    echo "Addition Operation Result: $c <br/>";
    $c = $a - $b;
    echo "Subtraction Operation Result: $c <br/>";
    $c = $a * $b;
    echo "Multiplication Operation Result: $c <br/>";
    $c = $a / $b;
    echo "Division Operation Result: $c <br/>";
    $c = $a % $b;
    echo "Modulus Operation Result: $c <br/>";
    $c = $a++;
    echo "Increment Operation Result: $c <br/>";
    $c = $a--;
    echo "Decrement Operation Result: $c <br/>";
    echo ("<br><hr><br>");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Operand1=$_POST['Operand1'];
        $Operand2=$_POST['Operand2'];
        $Operator=$_POST['Calculate'];
    
        /*Validation begins from here.*/
        if($Operand1 == '' || $Operand2 == ''){
            $Error = "The input values are required.";
        }
        elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
            $Error = "The input value must be a number only.";
        }
        elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
            $Error = "Cannot divide by zero.";
        }
        else{
            /*Calculation begins from here.*/
            if($Operator=="+")
                $Result=$Operand1+$Operand2;
            else if($Operator=="-")
                $Result=$Operand1-$Operand2;
            else if($Operator=="x")
                $Result=$Operand1*$Operand2;
            else if($Operator=="/")
                $Result=$Operand1/$Operand2;
        }
    } 
    
        

    ?>
    
</body>
</html>