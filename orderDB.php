<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
/* kod hämtad från: https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php */
$link = mysqli_connect('localhost', 'mibl0003', '2Telefonsladdar', 'mibl0003');

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$appliance = mysqli_real_escape_string($link, $_REQUEST['appliancesList']);
$brand = mysqli_real_escape_string($link, $_REQUEST['brandList']);
$product = mysqli_real_escape_string($link, $_REQUEST['productList']);

if($appliance == null || $brand == null || $product == null ){
echo '<script type="text/javascript"> alert("You must choose from all three") </script>';
echo '<script type="text/javascript">window.history.back()</script>';
}
else{
$sql = "INSERT INTO `OrderLibitium` (`ApplianceId`,`BrandId`,`ProductId`) VALUES ('$appliance', '$brand', '$product')";
if(mysqli_query($link, $sql)){

    echo  '<script type="text/javascript"> alert("Records added successfully!") </script>';     
} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>
 <a href="Home.php">Tillbaka</a>
</body>

</html>