<?php
$id=$_GET['id'];
deletenewsparent($id);
deletenews($id);
header("location:dashbord.php?m=news_pr&p=list");