
<?php
session_start();
include "html/BodyHomeHtml.html";


echo '<link rel="stylesheet" type="text/css" href="css/bodyCss.css"> ';


echo ' <div id="body"> ' ;
include "Helper.php";





$helperObj=new Helper("ecomm");
$fields="'product_id','product_name','price','image_name','image_path','description'";

$resultSet=$helperObj->read_all($fields,"product_details");

if(is_array($resultSet))
{

   echo '<form method="POST">';
	foreach($resultSet as $row)
	{
		
			echo "<div id='".$row['product_id']."' class='pagedivision'>"; 
			echo  '<div id="imagesect" >'; 
				
			echo  '<img src="'. $row['image_path'] .'" alt="Mountain View" style="height:300px; width:200px " >';
				
				
			echo '</div>'; 
				
				
			echo '<div id="datashow" >'; 
					
				
			echo '<h2>'. "Second Div " .'</h2>'; 
			echo $row['product_name'] ; 
			
			echo '<br>';
			
			echo $row['product_id']; 
			echo '<br>';
			
			echo $row['price']; 
			echo '<br>';
					
			echo $row['description']; 
			echo '<br>';		
					
			echo '<input type="checkbox" class="items" name="cartarr[]" value="'.implode(",",$row).'">';
		#	echo "<input type='hidden'  name='".$row['product_id']."' value='".implode(",",$row)."' />";
			echo '</div>'; 
			echo '</div>'; 
				
	
	
	}
	
	echo '<input type="button" name="cartarr" id="submitCart" value="Add To Cart">';
	
	echo '</form>';
	
	
}

echo ' </div> ';
echo '<div id="response4" style="height:100px;width:100px;border:5px solid blue"></div>';
?>




