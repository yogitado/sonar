<?php
/**
*This Helper_page class consist of a function required for LIMIT query in ProductViewPage.php 
*
*The constructor is used to establish connection with database
*
*This class is inherited from Helper class
*/
include('Helper.php');
class Helper_page extends Helper
{
function __construct($databasename)
	{
		parent::__construct($databasename);
	}

	/**
	*Fetches all values from the table in database with a condition
	*
	*@param string $field
	*
	*@param string $table
	*
	*@param string $condition
	*
	*@name sql
	*
	*@return $data
	*/

function read_page($field, $table ,$condition)

	{
		$sql="SELECT $field FROM $table $condition";
		$result=$this->con->query($sql) or die($this->con->error);
		if ($result->num_rows==0) {
			return "No rows found";
			} else {
				while ($row=$result->fetch_array(MYSQL_ASSOC)) {
					$data[]=$row;
					}
					return $data;
				}
	}
	/**
	*Class destruct which closes connection
	*/
	function __destruct()
	{
		 parent::__destruct();
	}
}
/**
*Creates an object of an Helper_page
*/
$helper_page=new Helper_page("ecomm");
?>
