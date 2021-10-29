<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>the trial calculator</title>
</head>
<body>
<h2>Simple Arithmetic Calculator V1</h2>
<form action="" method="get">
    <input type="text" name="dgt1" placeholder="Enter first value">
    <input type="text" name="dgt2" placeholder="Enter second value">
    <select name="OpSelect">
        <option name="none">none</option>
        <option name="add">add</option>
        <option name="subtract">subtract</option>
        <option name="multiply">multiply</option>
        <option name="divide">divide</option>
    </select>
    <br>
    <button value="submit" type="submit" name="submit">Calculate</button>
</form>

<p>The answer is: </p>
<br>
<?php
    if (isset($_GET['submit'])){
        $num1 = $_GET["dgt1"];
        $num2 = $_GET['dgt2'];
        $operator = $_GET['OpSelect'];
        switch ($operator){
            case "none":
                echo "you need to select a method";
                break;
            case "add":
                echo $num1 + $num2;
                break;
            case "subtract":
                echo $num1 - $num2;
                break;
            case "multiply":
                echo $num1 * $num2;
                break;
            case "divide":
                echo $num1 / $num2;
                break;
        }

    }
?>
</body>
</html>