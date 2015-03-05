<!DOCTYPE html>
<html>

<head>
		<script type="text/javascript" src="js/scriptFunction.js">
		
		</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/script_jquery.js">	
		</script>
	<link type="text/css" rel="stylesheet" href="css/header.css"/>	
	<link type="text/css" rel="stylesheet" href="css/styleView.css"/>	
	<link type="text/css" rel="stylesheet" href="css/styleViewTable.css"/>
		
</head>

<body>
<?php include "Header.php";?>


	<?php	include "Navigation.php";?>
			
			
			<div id="content" >
		
						
						<?php 
						echo "<table align='center' width=90% >";
						
						?>
					<!--  	<col width="80">
                        <col width="60">
                        <col width="30">
                        <col width="80">
                        <col width="30">
                        <col width="10"> 
						-->
						<tr>
   						    <th width="80" class="ab">Image</th>
    						<th width="60" class="ab">Product Name</th>
    						<th width="30" class="ab">Price</th>
   						    <th width="80" class="ab">Description</th>
    						
    						<th width="10" class="ab">Select</th>
    						<br/>
 					    </tr>
 				
						<?php  
						include "Helper.php";

				$result=$helper->read_all("*","product_details");
				
					if(is_array($result))
					{
						foreach($result as $row)
						{
							$product_id=$row['product_id'];
							
						
							
							?>
						
								<td width="" class="ab"><img src='<?=$row["image_path"]?>' width=150px height=150px></td> <!-- columns can have both text and images -->
								<td width="60" class="ab"><b><?=$row['product_name'] ?></b></td>
						    	<td width="30" class="ab"><?=$row['price'] ?>              </td>
								<td width="80" class="ab"><?=$row['description'] ?>        </td>
								
								<td width="80" class="ab">
                           
						   
						   <input type="button" value="DELETE" onClick='delete_product("<?=$row['product_id'] ?>")'/>
						   <input type="button" value="UPDATE" onClick='update_product("<?=$row['product_id'] ?>")'/>
						    
                                </td>
									
				            </tr>
					   
					    <?php     
						}
						echo "</table>";
					}
					?>
			</div>
		
			
<?php include "footer.php";?>

</body>
</html>
			
























