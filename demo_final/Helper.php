<?php
include('config1.php');
class Helper
{
	
	function __construct($databasename)
	{
		$this->con=new mysqli(config::HOST,config::USER,config::PASSWORD,$databasename);
	}
	/********Insert Function**************/
	function insert($table,$field,$values)
	{
		$sql="INSERT INTO $table($field)VALUES($values)";
		if($this->con->query($sql))
		{
		$this->value=true;
		echo "<h3 color='green'> 1 Record Added</b>";
		}else 
		{
				die($this->con->error);
				echo "<h3 color='red'> Error</b>";
				$this->value=false;
		}
			return $value;
	}
	function insert_all($table,$values)
	{
		$sql="INSERT INTO $table VALUES($values)";
		$this->con->query($sql)or die($this->con->error);
	}
	/*************Delete Function ***************/
	function delete($table,$condition)
	{
		$sql="DELETE FROM $table WHERE $condition";
		$this->con->query($sql);
	}
	/************Read all record with condition**************/
	function read_record($field,$table ,$condition)
	{
		$sql="SELECT $field FROM $table WHERE $condition";
		$result=$this->con->query($sql) or die($this->con->error);
		if($result->num_rows==0)
		{
			return "No rows found";
			}
			else
			{
				while($row=$result->fetch_array(MYSQL_ASSOC))
				{
					$data[]=$row;
					}
					return $data;
				}
	}
	/****** Read all record without condition*********************/
	function read_all($field,$table)
	{
		$sql="SELECT $field FROM $table";
		$result=$this->con->query($sql) or die($this->con->error);
		if($result->num_rows==0)
		{
			return "No rows found";
			}
			else
			{
				while($row=$result->fetch_array(MYSQL_ASSOC))
				{
					$data[]=$row;
					}
					return $data;
				}
	}
	
	/************Update Function**************/
	function update($table,$field,$condition)
	{
		$sql="UPDATE $table SET $field WHERE $condition";
		$this->con->query($sql);
	}
	function __destruct()
	{
		$this->con->close();
	}

}
 $helper=new Helper("ecomm");
?>	