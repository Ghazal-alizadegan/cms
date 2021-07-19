<?php
$id=$_GET['id'];
$show=showcontactdetail($id);
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                جزییات            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            <p style="font-size: 15px"> نام: </p></label>
                        </br>
                        <p for="exampleInputEmail1"><?php echo $show['name']?></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            <p style="font-size: 15px">ایمیل: </p></label>
                        </br>
                        <p for="exampleInputEmail1"><?php echo $show['email']?></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            <p style="font-size: 15px">موضوع: </p></label>
                        </br>
                        <p for="exampleInputEmail1"><?php echo $show['subject']?></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            <p style="font-size: 15px">توضیحات: </p></label>
                        </br>
                        <p for="exampleInputEmail1"><?php echo $show['about']?></p>
                    </div>


                </form>

            </div>
        </section>
    </div>
</div>
