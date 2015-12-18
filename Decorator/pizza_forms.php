<?php
include_once "constants.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pizza Order Form</title>
</head>
<body>
<form action="process_pizza.php" method="post">
<ul>
    <li>
        <label for="pizza">Pizza, $<?php echo PIZZA_PRICE ?></label>
        <input id="pizza" name="pizza" type="checkbox">
        <ul>
            <li>
                <label for="olives">Olives, $<?php echo OLIVES_PRICE ?></label>
                <input id="olives" name="olives" type="checkbox" value="true">
            </li>
            <li>
                <label for="green_peppers">Green Peppers, $<?php echo GREEN_PEPPERS_PRICE ?></label>
                <input id="green_peppers" name="green_peppers" type="checkbox" value="true">
            </li>
        </ul>
    </li>
</ul>
    <input type="submit" value="Place Order">
</form>
</body>
</html>