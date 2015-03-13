<?php
	include "Helper.php";
	session_start();
	$name=$_SESSION['user'];
	$mob=$_POST["Mobile"];
	$addr=$_POST["Address"];
	$cit=$_POST["State"];
	$cit=$_POST["City"];
	$pinno=$_POST["PinCode"];
	$tableName="user_details";
	$obj=new Helper("ecomm");
	$val="'$mob','$addr','$cit','$pinno','$name'";
	$field="mobile,address,city,zip,user_id";
	$obj->insert($tableName,$field,$val);

	header("Location:OrderSummaryPageIncluded.php");
?>