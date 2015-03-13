<?php
session_start();

if($_REQUEST['btn_submit']=="Address")
{
echo "Address";
header("Location:UpdateAddress.php");
}

if($_REQUEST['btn_submit']=="Confirm")
{
echo "Confirm";
header("Location:Confirm.php");
}

if($_REQUEST['btn_submit']=="Cancel")
{
header("Location:index.php");
}  
?>