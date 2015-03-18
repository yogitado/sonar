<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/adminDashboard.js">

</script>
<body>
<h1 class="page-header">Active User Summary</h1>
 <div id="chart_div"> </div>
<h2 class="sub-header">Order Catalog</h2>
						<?php
					include_once ('Helper_page.php');
					$sql =$helper_page->read_record("u.user_name as username, o.total_price as total_price", "user_details u, order_details o, buy_details b", "b.user_id=u.user_id and b.buy_id=o.buy_id order by u.user_id desc");
					$counter=0;

   if (is_array($sql)) {
      foreach ($sql as $row) {
    ?>
       <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>User Name</th>
                  <th>Total  Price</th>
 
                </tr>
              </thead>
              <tbody>
				<tr>
       <td width="60" ><b><?=++$counter ?></b></td>
       <td width="30" ><?=$row['username'] ?>              </td>
       <td width="80" ><?=$row['total_price'] ?>        </td>
       </tr>
					
              </tbody>
           <?php
    }
echo "</table>";
   }
	?>
          </div>

</body>
</html>
