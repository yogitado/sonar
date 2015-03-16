<pre>
<link rel="stylesheet" type="text/css" href="css/bodyCss.css">
<div id="body" >
	<fieldset>
	<legend>Order summery page</legend>
	<table border="2" class="table table-striped table-bordered" align="center">
	<thead>
		<tr>
		<th>Product_Id</th>
		<th>Product_Name</th>
		<th>Price</th>
		<th>Image name</th>
		<th>Your Products</th>
		<th>Description </th>
		</tr>
	</thead>
<?php
include "Helper.php";
$var=$_SESSION['user'];
$obj = new Helper("ecomm");
$field="user_id,mobile,address,city,zip";
$table="user_details";
$condition="user_id='".$var."'";
$record=$obj->read_record($field, $table, $condition);
$arra=[];
$arra=array(explode(";", $_SESSION['key']));

echo '<tr>';
foreach ($arra as $booking) {
$temp=$booking;
$a=implode(",", $temp);
$temp=explode(",", $a);
$cnt=0;
    foreach ($temp as $booking2) {
		$cnt++;
		if ($cnt==5) {
			echo "<td>";
			echo '<img src="'.$booking2.'" alt="images" >';
			echo "</td>";
		} else {
			echo "<td>".$booking2."</td>";
		}
		if ($cnt==6) {
			echo "</tr>";
			echo "<tr>";
			$cnt=0;
		}
	}
}
echo "</tr>";
?>
</table>
<?php
foreach ($record as $key) {
	session_start();
	//print_r($record);
    $_SESSION["user_details_id"]= $key['user_id'];
	//echo  $_SESSION["user_details_id"];
    foreach ($key as $subElement) {
        echo  "$subElement";
		echo "</br>";
    }
}
?>
<form method="POST" action="Validate.php">
	<input type="submit" name="btn_submit" value="Address" />
	<input type="submit" name="btn_submit" value="Confirm" />
	<input type="submit" name="btn_submit" value="Cancel" />
</form>
	</fieldset>
</div>
</pre>
