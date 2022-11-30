<!DOCTYPE HTML> 
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$Product = $email = $Shipping = $comment = $Quantity = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$Product = $_POST["Product"];
$email = $_POST["email"];
$Quantity = $_POST["Quantity"];
$comment = $_POST["comment"];
$Shipping = $_POST["Shipping"];
}

?>

<h2>PHP Gonzalez_PHP3 Shipping Form </h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"> 
Product: <input type="text" name="Product">
<br><br>
E-mail: <input type="text" name="email">
<br><br>
Quantity: <input type="text" name="Quantity">
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Shipping:
<input type="radio" name="Shipping" value="no">NO
<input type="radio" name="Shipping" value="yes">YES
<input type="radio" name="Shipping" value="other">PICK-UP
<br><br>
<input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Output:</h2>";
echo $Product;
echo "<br>";
echo $email;
echo "<br>";
echo $Quantity;
echo "<br>";
echo $comment;
echo "<br>";
echo $Shipping;
?>

</body>
</html>