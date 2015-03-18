<?php
include('Helper_page.php');
include "html/adminHeader.html";
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
	<div class="table-responsive">
	<?php
		echo "<table align='left' width=90% border='1'class='table table-striped'>";
	?>
	<tr>
   	<th width="80">User ID</th>
    	<th width="60" >Email Address</th>
    	<th width="30" >Password</th>
    	<th width="10">De-Activate</th>
	<th width="10">Activate</th>
    	<br/>
 	</tr>
	<?php
		$result=$helper->read_all("*", "user");
		if (is_array($result)) {
			foreach ($result as $row) {
				$user_id=$row['user_id'];
	?>
	<tr>
		<td width="60"><b><?= $row["user_id"]?></b></td> <!-- columns can have both text and images -->
		<td width="60"><b><?=$row['email_id']?></b></td>
		<td width="30"><?=$row['password'] ?></td>
		<td width="80"><input type="button" value="DEACTIVATE" onClick='updateUser("<?=$row['user_id'] ?>")'/></td>
		<td width="80"><input type="button" value="ACTIVATE" onClick='updateUser1("<?=$row['user_id'] ?>")'/></td>
	</tr>
<?php
			}
		echo "</table>";
		}
?>
	</div>
</div>
<div>
<?php
include "html/adminNavigation.html";?>
</div>