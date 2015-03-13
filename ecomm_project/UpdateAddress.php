
<?php
include ("Helper.php");
session_start();
$email_id=$_SESSION['email'];
 $result=$helper->read_record("*","user_details","user_id in(select user_id from user where email_id='$email_id' )");
 //print_r($result);
 if(is_array($result)){
 foreach($result as $row){

?>



<head>
<link rel="stylesheet" type="text/css" href="css/bodyCss.css">
</head>
<div id="body">
<form  action="UpdateAddressDetails.php" method="POST" style="text-align: center;font:xx-large;" theme="simple">
<pre>
	<b>Full Name : </b><input type="text" name="UserName" id="FullName" value="<?php echo $row['user_name'];?>"></br>
	<b>Mobile No.: </b><input type="text" name="Mobile" id="Mobile" value="<?php echo $row['mobile'];?>"><br/>
	<b>Address Details :</b><input type="text" name="Address" rows="10" cols="30" id="Address" value="<?php echo $row['address'];?>" style="height:50px;width:330px"><br/>
	<b>City : </b><input type="text" name="City" id="City" value="<?php echo $row['city'];?>" ><br/>
	<b>Pin Code : </b><input type="number" name="PinCode" id="PinCode" value="<?php echo $row['zip'];?>"><br/>
	</pre>
	<input type="submit" value="add detail">
</form>
</div>

<?php
}
}
else
{
	header("location:AddAddressIncluded.php");
}
?>