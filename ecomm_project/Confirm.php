<?php
session_start();
include "Helper.php";
$helperObj=new Helper("ecomm");
$table="buy_details";
$field="user_id,product_id,price";
$arra=array(explode(";", $_SESSION['key']));
foreach ($arra as $booking) {
  $temp=$booking;
  $a=implode(",", $temp);
  echo "<br>";
  $temp=explode(",", $a);
  echo "<br>";
$cnt=0;
     foreach ($temp as $booking2) {
	   $cnt++;
      $user=$_SESSION['user'];
		if ($cnt==1) {
		$prod=$booking2;
		}
		if ($cnt==3) {
		$price=$booking2;
		}
		if ($cnt==6) {
		$values="'$user','$prod','$price'";
		$result=$helperObj->insert($table, $field, $values);
		if ($result) {
		header("location:ThankyouPageIncluded.php");
		if ($result) {
        echo "THANK YOU...VISIT AGAIN...!!!   ";
        echo "<br>";
    }
    $cnt=0;
    }
}
}
}
?>
