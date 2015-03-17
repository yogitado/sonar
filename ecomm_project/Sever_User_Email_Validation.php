<?php

class Sever_User_Email_Validation extends Helper
{
function __construct($databasename)
	{
		 parent::__construct($databasename);
		
		 	}
	




function email_Exitence($field,$table ,$condition)
	{
		echo "$field &&";
		echo " $table &&";
		echo " $condition";
		$sql="SELECT $field FROM $table WHERE $condition";
		
		
		$result=$this->con->query($sql) or die($this->con->error);
		
		#var_dump ($result); 
		
		$row_cnt = mysqli_num_rows($result);
		#echo "$row_cnt";
		if($row_cnt > 0)
		{
		
			
			return true;
			
		}else
		{
			return false;
			
		}
		
		
	}








	function __destruct()
	{
		 parent::__destruct();
	}
}
$sever_User_Email_Validation=new Sever_User_Email_Validation("ecomm");

?>