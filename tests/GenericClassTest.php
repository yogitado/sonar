<?php

require("C:/xampp/htdocs/eco/ecomm_project/GenericClass.php");

class GenericClassTest extends PHPUnit_Framework_TestCase
	{
		public function testHelperobj()
		{
			$this->assertInstanceof('Helper',GenericClass::obj);
		}
	}
	
?>