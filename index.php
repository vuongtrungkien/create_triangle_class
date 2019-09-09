<form method="post" action="index.php">
    <label for="side1">Side 1</label>
    <input type="number" name="side1">
    <label for="side2">Side 2</label>
    <input type="number" name="side2">
    <label for="side3">Side 3</label>
    <input type="number" name="side3">
    <label for="color">color</label>
    <input type="text" name="color">
    <input type="submit">
</form>


<?php
include "class/Shape.php";
include "class/Triangle.php";
$side1 = null;
$side2 = null;
$side3 = null;
$color = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];
    $color = $_POST["color"];
}
$triangle = new Triangle();
$triangle->setSide($side1, $side2, $side3);
$triangle->setColor($color);
echo $triangle->toString();



