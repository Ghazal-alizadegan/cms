<?php

$id=$_GET['id'];
deletepage($id);
header("location:dashbord.php?m=page&p=list");
//ob_end_flush();