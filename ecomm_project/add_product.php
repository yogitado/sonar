<?php 
include "html/adminHeader.html";
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
	<h2>
	<form style="align:center" action="Product.php" enctype="multipart/form-data" method="post">
	<div>
		<pre>
			<b>Product Name: </b><input type="text" name="product_name" id="pn" placeholder="Enter Product Name" autofocus required/></br>
			<b>Price       : </b><input type="text" name="price" id="price" placeholder="Enter Price" required/></br>
			<b>Image Name  : </b><input type="text" name="image_name" id="in" placeholder="Enter Image Name" required/></br>
			<b>Image Path  : </b><input type="file" name="image_path" required/>
			<b>Description : </b><textarea name="description" rows="10" cols="25" placeholder="Enter Description" required></textarea></br>
		<input type="submit" value="Add/Update" /> <button type="button" onclick="newDoc()">Cancel</button>
		<input type="hidden" name="operation" value="add"/>
		</pre>
	</div>
	</form>
	</h2>
</div>
<?php 
include "html/adminNavigation.html";
?>