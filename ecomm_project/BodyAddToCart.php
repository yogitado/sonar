<pre>
<link rel="stylesheet" type="text/css" href="css/bodyCss.css">
<div id="body">
<h1 style="color:red;text-align:center">Your Cart</h1>
<table class="table table-striped table-bordered" border="2">
	<thead>
		<tr>
			<th>Product_Name</th>
			<th>Price</th>
			<th>Image name</th>
			<th>Image_path</th>
			<th>Description </th>
		</tr>
	</thead>
<?php
	$var=$_SERVER['QUERY_STRING'];
	$_SESSION['key']=$var;
	$price=0;
	$arra=[];	
	$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SERVER['QUERY_STRING'])))))));
	$array1 = $arra[0];
	foreach ($array1 as $key =>$value) {
		if($key == 0){
			$array1[$key]= substr($value,18,-18);
		} else {
			$array1[$key] = substr($value,14,-14);
		}
	}
	echo '<tr>';
	foreach ($arra[0] as $booking) {
		$temp=$booking;
		$temp=explode(",", $temp);
		foreach ($temp as $key=>$booking2) {
		if ($key == 0) {	
		}
		if ($key == 1 or $key==2 or $key==3) {
			echo "<td>".$booking2."</td>";
		}
		 if ($key == 4) {
			echo "<td>";
			echo '<img src="'.$booking2.'" alt="images" >';
			echo "</td>";
		}
		if ($key==5) {
			echo "<td>".$booking2."</td>";
			echo '<tr>';
			echo '</tr>';
		}
	   if ($key==2) {
				$price+=$booking2;
			}
		}
	}
echo "</tr>";
?>
		<tr>
		<td colspan="4"><h4 style="color:blue;text-align:center">Total Price</h4></td>
		<td><h4 style="color:blue;text-align:center"><?php  echo $price;?></h4></td>
		</tr>
</table>
<form action="Summary.php" method="POST">
<input type="submit" class="btn btn-info" value="Confirm Order"/>&nbsp;<input type="button" value="Cancel"
class="btn btn-info" id="cancel_addtoCart"/>
</form>
</div>
</pre>
