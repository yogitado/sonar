

	






<?php 

include "html/adminHeader.html";

?>

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
<h2>
<form style="align:center" action="Product.php" enctype="multipart/form-data" method="post">
<div>
<pre>
<b>Product Name: </b><input type="text" name="product_name" id="pn" /></br>
<b>Price       : </b><input type="text" name="price" id="price" /></br>
<b>Image Name  : </b><input type="text" name="image_name" id="in" /></br>
<b>Image Path  : </b><input type="file" name="image_path">
<b>Description : </b><textarea name="description" rows="10" cols="25"></textarea></br>
<input type="submit" value="Add/Update" />
<input type="hidden" name="operation" value="add"/>
  <button type="button" onclick="newDoc()">Cancel</button>
  </pre>
</div>

</form>
</h2>
<?php 
include "html/adminNavigation.html";?>



