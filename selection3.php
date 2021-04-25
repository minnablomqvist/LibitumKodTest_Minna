<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php $link = new mysqli("localhost", "mibl0003", "2Telefonsladdar", "mibl0003");
    if (!$link) {    
        die('Not connected : ' . $link->error());
    }
?>

<select name="productList" value="Enable" id="SelectThird" disabled="disabled" onChange="showSelectedValue()">
<option selected disabled>--Product--</option>
<?php 
 $query = "SELECT * FROM Product;"; 
    echo "<br><br>";
    $result = $link->query($query);
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['ProductID'].">".$row['Name']."</option>";
}
    mysqli_free_result($result);
?>        
</select>

</body>
</html>