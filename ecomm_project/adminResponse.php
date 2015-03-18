<?php
include "Helper_page.php";

$result=$helper_page->readPage("count(*) as active","user","group by is_active order by is_active");
echo json_encode($result);


?>
