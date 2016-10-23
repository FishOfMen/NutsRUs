<?php
/**
 * Created by PhpStorm.
 * User: petr_the_P1G
 * Date: 10/20/2016
 * Time: 9:09 PM
 */?>
        <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
<form>
    <label name="CheckOut">Check Out</label>
    <input type="submit" value="EditMyData">Edit My Data</input><br>
    <input type="submit" value="History">History</input><br>
    //divider
    <label name="item">Item</label>
    <label name="unit">Unit</label><br>

    <label name="peanut">Peanuts</label>
    <input type="checkbox" value="peanutCheck"><br>
    <label name="almond">Almonds</label>
    <input type="checkbox" value="almondCheck"><br>
    <label name="mac">Macademians</label>
    <input type="checkbox" value="macCheck"><br>
    <label name="walnut">Walnuts</label>
    <input type="checkbox" value="walnutCheck"><br>
    <label name="driedrasp">Dried Raspberries</label>
    <input type="checkbox" value="raspCheck"><br>
    <label name="mnm">M&M's</label>
    <input type="checkbox" value="mnmCheck"><br>

    <label name="total">Total</label>
    <input type="text" name="totalcalcu"><br>

    <input type="submit" name="toCheckout">Proceed to Checkout<br>
</form>
</body>
</html>
