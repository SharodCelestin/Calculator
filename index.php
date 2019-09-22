<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form>
    <div class="container">
        <div class="tip-calculator">
            <p>What is the total bill?</p>
            <br>
            <input type="text" name="num1" placeholder=" Number 1">  
            <br>
            <p>
            <input type="text" name="num2" placeholder=" Number 2">
            <select name="operator">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit">Calculate</button>
        </div>
</form>
<p>The answer is: </p>
<?php
    if(isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];


        switch($operator){
            case "None":
            echo "You did not give any numbers though?";
            break;
            case "Add":
                $total = $result1 + $result2;
                echo $total;
            break;
            case "Subtract":
            $total = $result1 - $result2;
            echo $total;
            break;
            case "Multiply":
            $total = $result1 * $result2;
            echo $total;
            break;
            case "Divide":
            $total = $result1 / $result2;
            echo $total;
            break;

        }
    }
?>
</body>
</html> 