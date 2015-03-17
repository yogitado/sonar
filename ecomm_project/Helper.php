<?php
include('config1.php');
/**
* A Helper class which consists all the functions required for CRUD operations
*/
class Helper
{
  /**
  *Sample class variables
  *@access private
  *@var string
  */
  
	public $con;
	
	/**
	*Class constructor ,establishes connection with database
	*$param string $databasename
	*/
	function __construct($databasename)
	{
		$this->con=new mysqli(Config::HOST,Config::USER,Config::PASSWORD,$databasename);
	}
	/********Insert Function**************/
	/**
	* Inserts values into particular fields in database
	*@param string $table
    *@param string $field
    *@param string $values
    *@return number 	
	*/
	
	function insert($table,$field,$values)
	{
		$sql="INSERT INTO $table($field)VALUES($values)";
		$this->con->query($sql)or die($this->con->error);
		return 1;
	}
	
	/**
	* Inserts all values into database
	*@param string $table
    *@param string $values
	*@name sql
    */
	function insert_all($table,$values)
	{
		$sql="INSERT INTO $table VALUES($values)";
		$this->con->query($sql)or die($this->con->error);
	}
	/*************Delete Function ***************/
	/**
	* Deletes particular values from database
	*@param string $table
    *@param string $condition
	*@name sql
    */
	function delete($table,$condition)
	{
		$sql="DELETE FROM $table WHERE $condition";
		$this->con->query($sql);
	}
	/************Select Function**************/
	
	/**
	* Fetches required values from database
	*@param string $table
    *@param string $field
	*@param string condition
	*@var array
	*@name sql
    */
	
	function read_record($field,$table,$condition)
	{
		$sql="SELECT $field FROM $table WHERE $condition";
		$result=$this->con->query($sql) or die($this->con->error);
		//var_dump($sql);
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
	/****** Read all record*********************/
	
	/**
	* Fetches all values from table in database
	*@param string $table
    *@param string $field
	*@var array
	*@name sql
	*@rertun $data
    */
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
	
	/**
	* Updates the database
	*@param string $table
    *@param string $field
	*@param string condition
	*@name sql
    */
	
	function update($table,$field,$condition)
	{
		$sql="UPDATE $table SET $field WHERE $condition"; 
		$this->con->query($sql); 
	}
	
	/**
	* Class destructor which closes connection 
	*/
	
	function __destruct()
	{
		$this->con->close();
	}
}
$helper=new Helper("ecomm");
?>