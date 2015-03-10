<!DOCTYPE html>
<html>

<head>

<script type="text/javascript">
				function delete_user(value)
				{
				
				window.location="deleteuser_query.php?delete="+value;
				}
				
		
		</script>
<link type="text/css" rel="stylesheet" href="css/header.css"/>	
	<link type="text/css" rel="stylesheet" href="css/styleView.css"/>	
	<link type="text/css" rel="stylesheet" href=".css/styleViewTable.css"/>
</head>

<body>

<div id="header">
<table style="width:100%">
  <tr>
	<td><h2 style="color:white"><A href="ProductViewPage.php">HOME</A></h2></td>
     <td><h2><a href="html/CustomerSupport.html"> Customer Support</a></h2></td>
	
   	<td><h2><a href="html/AboutUs.html"> About Us</a></h2></td>
	
	<td><h2><a href="registerAdmin.html"> Log Out</a></h2></td>
	
  
    		

  </tr>
</table>
</div>

<div id="nav">

</div>
<div id="section" >
		
						<style>
						table, th, td {
						    
							border: 1px solid black;
							border-collapse: collapse;
						}
						th, td {
 							   padding: 5px;
    						   text-align: left;
							   
                               }
                               
						</style>
						
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
   						    <th width="80" class="ab">USer_ID</th>
    						<th width="60" class="ab">Email Address</th>
    						<th width="30" class="ab">Password</th>
    						<th width="10" class="ab">De-Activate</th>
    						<br/>
 					    </tr>
 				
						<?php  
						include "Helper.php";

						$result=$helper->read_all("*","user");
						
						//var_dump($result);
				
					if(is_array($result))
					{
						foreach($result as $row)
						{
							$user_id=$row['user_id'];
							?>
						<tr>
								<td width="60" class="ab"><b><?= $row["user_id"]?></b></td> <!-- columns can have both text and images -->
								<td width="60" class="ab"><b><?=$row['email_id']?></b></td>
						    	<td width="30" class="ab"><?=$row['password'] ?></td>
								<td width="80" class="ab"><input type="button" value="DEACTIVATE" onClick='delete_user("<?=$row['user_id'] ?>")'/>
                                </td>
									
				            </tr>
					   
					    <?php     
						}
						echo "</table>";
					}
					?>
			</div>
<div id="footer">
Copyright © ALM_E-COM@cybage.com
</div>

</body>
</html>
