<?php
		include "Helper_page.php";
		
		$value=$_GET['value1'];
		$order=$_GET['value2'];
		
		 switch($value)
		 {
		 
		 case "price":
			$sql="order by $value $order";
		
			break;
		case "product_name":
				$sql="order by $value $order";
				break;
		default: 
				echo "<b> Invalid option</b>";
		 
		 }
						$result=$helper_page->read_page("*","product_details","$sql");
						//print_r($result);

						echo "<table align='center' width=90% >";
						
						?>
						<tr>
   						    <th width="80" class="ab">Image</th>
    						<th width="60" class="ab">Product Name</th>
    						<th width="30" class="ab">Price</th>
   						    <th width="80" class="ab">Description</th>
    						<th width="10" class="ab">Select</th>
    						<br/>
 					    </tr><tr>
			<?php
			if(is_array($result))
				{
					foreach($result as $row)
					{
						$product_id=$row['product_id'];
							
							//echo $product_id;
							
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