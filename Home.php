<!DOCTYPE html>
<html>
<head>
<style><?php include "Header.html";?></style>
<style><?php include "design.css";?></style>
<script language="javascript" type="text/javascript" src="functions.js"></script>
</head>

<body>
        <!--Sättet att inhämta information från databas är taget från skolans exempel vi hade i kursen IT-säkerhet. Har valt ut de delar som passar i detta fall.-->
<?php $link = new mysqli("localhost", "mibl0003", "2Telefonsladdar", "mibl0003");
    if (!$link) {    
        die('Not connected : ' . $link->error());
    }
?>

<!--Första dropdown. Alla select ligger i en form med post-metod för att posta val till db från orderDB.php -->
<div class="container">
<h2>Choose your new kitchen! </h2>
<form method="POST" name=drop1 action='orderDB.php'>
<select name="appliancesList" id="SelectFirst" onChange="getSelectedValue(this);">
<option value="selectObject" selected Disabled>--Appliances--</option>
<?php 
 $query = "SELECT * FROM Appliances;"; //väljer min Appliances tabel från databas.
    echo "<br><br>";
    $result = $link->query($query);
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['Id'].">".$row['Product']."</option>";
}
    mysqli_free_result($result);
?>        
</select>
<!--Inkluderar andra och tredje dropdown -->
<div>
<?php include ('selection2.php'); ?>
</div>
<div>
<?php include ('selection3.php'); ?>
</div>

<!--Presenterar vad som är valt. Förtydligande för användare -->
<h3>Order list</h3>
<p id=selectedItem1></p>
<p id=selectedItem2></p>
<p id=selectedItem3></p>

<input type="submit" name="order" id="order" value="Order" />

</form>
</div>
</body>
</html>