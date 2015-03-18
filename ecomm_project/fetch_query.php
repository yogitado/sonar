<?php
include "Helper.php";
$product_id=$_REQUEST['update'];
?>
<?php
include "html/adminHeader.html";
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
<form style="align:center" action="Product.php" enctype="multipart/form-data" method="post">
<div>
<pre>
<?php
 $product_id=$_REQUEST['update'];
 $result=$helper->read_record("*", "product_details", "product_id='$product_id'");
 if (is_array($result)) {
 foreach ($result as $row) {
?>
<input type="hidden" name="product_id" id="pn"  value="<?php echo $row['product_id'];?>" required /></br>
<<<<<<< HEAD
<font color="#3399FF" face="Bedrock" size="03"><b>Product Name: </b></font><input type="text" name="product_name" id="pn"  value="<?php echo $row['product_name'];?>" required/></br>
<font color="#3399FF" face="Bedrock" size="03"><b>Price:  </b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" id="price"  value="<?php  echo $row['price']; ?>" required/></br> 
<font color="#3399FF" face="Bedrock" size="03"><b>Image Name: </b></font>&nbsp;&nbsp;<input type="text" name="image_name" id="in"  value="<?php echo  $row['image_name'];?>" required/></br>
<font color="#3399FF" face="Bedrock" size="03"><b>Image Path: </b></font></br>&nbsp;&nbsp;<input type="file" class="btn btn-info active" name="image_path"  value="<?php echo $row['image_path'];?>" required/>
<font color="#3399FF"face="Bedrock"  size="03"><b><p>Description :</p></b></font>
<div><textarea name="Description" cols="38" rows="4" required><?php echo $row['description'];?></textarea></div>

=======
<b>Product Name: </b><input type="text" name="product_name" id="pn"  value="<?php echo $row['product_name'];?>" required/></br>
<b>Price:  </b> <input type="text" name="price" id="price"  value="<?php  echo $row['price']; ?>" required/></br>
<b>Image Name: </b>  <input type="text" name="image_name" id="in"  value="<?php echo  $row['image_name'];?>" required/></br>
<b>Image Path: </b>  <input type="file" name="image_path"  value="<?php echo $row['image_path'];?>" required/>
<b>Description: </b> <textarea rows="10" cols="25"name="description" required><?php echo $row['description'];?></textarea></br>
>>>>>>> 2aefdfa39f2bca935b734fa5d5957f6d362dba79
<?php
}
}
?>
<<<<<<< HEAD
<input type="submit" class="btn btn-primary" value="UPDATE" /> <input type="hidden" class="btn btn-primary" name="operation" value="update"/> <button type="button" class="btn btn-primary" onclick="newDoc()">Cancel</button>
=======
<input type="submit" value="UPDATE" /> <input type="hidden" name="operation" value="update"/>
<button type="button" onclick="newDoc()">Cancel</button> <input type="reset" value="Reset">
>>>>>>> 2aefdfa39f2bca935b734fa5d5957f6d362dba79
</pre>
</div>
</form>
<?php
include "html/adminNavigation.html";
?>
