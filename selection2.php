<!DOCTYPE html>
<html>
<head>
<script>
<script language="javascript" type="text/javascript" src="functions.js"></script>
</script>
</head>

<body>
      
<select name="brandList" id="SelectSecond" disabled="disabled" onChange="secondSelected(this);">
<option selected disabled>--Brand--</option>
<?php 
include '(mySQL_config.php)';
 $query = "SELECT * FROM Brand;"; 
    echo "<br><br>";
    $result = $link->query($query);
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['BrandID'].">".$row['Name']."</option>";
}
    mysqli_free_result($result);
?>        
</select>

</body>
</html>