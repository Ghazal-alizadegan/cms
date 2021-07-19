<?php
$id=$_GET['id'];
deleteproductparent($id);
deleteproduct($id);
header("location:dashbord.php?m=product_pr&p=list");