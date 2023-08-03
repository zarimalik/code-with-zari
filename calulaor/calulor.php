<?php

   if(isset($_GET['operation'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['operation'];

        switch($op){
            case 'add' : $result = $x  +  $y;
                break;
             case 'sub' : $result = $x - $y;
                break;
            case 'pro' : $result = $x * $y;
                break;
            case 'div' : $result = $x / $y;
                break;
            case 'greater' : $result = $x  < $y;
                break;
            case 'less' :$result = $x > $y;
                    }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP - calculator</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
       <!-- Number 1 -->
       <div>
           <label for="num1">Number 1</label>
           <input type="number" name="num1" id="num1" value="<?= $x ?>">
        </div>

        <!-- Number2 -->
        <div>
            <label for="number2">Number 2</label>
            <input type="number" name="num2" id="num2" value="<?= $y ?>">
        </div>

        <!-- Result -->
        <div>
            <label for="result">Result</label>
            <input type="number" id="result"  value="<?= $result ?>" disabled>
        </div>

        <!-- Operation -->
        <div>
            <input type="submit" value="add" name="operation">
            <input type="submit" value="sub" name="operation">
            <input type="submit" value="pro" name="operation">
            <input type="submit" value="div" name="operation">
            <input type="submit" value="less then" name="operation">
            <input type="submit" value="greater then" name="operation">
        </div>
</form>
</body>
</html>
