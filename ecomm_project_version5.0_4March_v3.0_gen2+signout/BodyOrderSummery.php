 <body>
 
 
 <pre>  

<link rel="stylesheet" type="text/css" href="css/bodyCss.css">
 
 <div id="body" >
 <fieldset>
<legend>Order summery page</legend>
 
 <table border="2" align="center">
  <thead>
    <tr>
      <th>Product_Id</th>
      <th>Product_Name</th>
      <th>Price</th>
	   <th>Image name</th>
	   <th>Your Products</th>
      <th>Description </th>
 
	  
    </tr>
  </thead>
<?php
include "Helper.php";
		session_start();
		
		

		#var_dump($_SESSION['key']);
			$var=$_SESSION['user'];
			
			var_dump($var);
			//$var='USER001';
			
$obj = new Helper("ecomm");


$field="user_id,mobile,address,city,zip";
		$table="user_details";
		$condition="user_id='".$var."'";
		
		$record=$obj->read_record($field,$table,$condition);
	#print_r($_POST);

	
print_r ($record);
	
	
	$arra=[];
	
	$arra=array(explode(";",$_SESSION['key']));
	
	
	
	
	
	


  
 echo '<tr>';
 foreach ($arra as $booking) 
 {
  #print_r($booking);
  $temp=$booking;
  
  
  $a=implode(",",$temp);
  $temp=explode(",",$a);
  
 # print_r($temp);
  
	$cnt=0;
     foreach ($temp as $booking2) 
	 {
	 
	 $cnt++;
	 #print_r($booking2);
        
		
		#echo $cnt;
	
	
		
		
		
		if($cnt==5)
		{
		echo "<td>";
		echo '<img src="'.$booking2.'" alt="images" >';
		echo "</td>";
		
		}
		else
		{		
		echo "<td>".$booking2."</td>";
		}	
			
		if($cnt==6)
		{
		echo "</tr>";
		echo "<tr>";
		$cnt=0;
		}
		
		
	}
	
}
	
	echo "</tr>";
 # print_r($record[0]);
	
		//session_destroy();

	
?>
</table>





<?php

echo "<pre>";







foreach($record as $key => $element)
{
    
    foreach($element as $subKey => $subElement)
	{
        echo "$subKey"."=". "$subElement";
		echo "</br>";
    }
    
}















?>








<!--
<input type="text" value="<?php  var_dump($record["mobile"]);   ?>"  /> 



<textarea rows="1" cols="50" readonly>


</textarea>
-->

<form action="AddressDetails.php" method="POST">



  <input type="button" value="Address" id ="address_button"/>
  <input type="submit" value="Submit"/>
  <input type="button" value="Cancel"/>
</form>
</fieldset>

</div>
 </pre>
 
 </body>
 
