<?php
$id=$_GET['id'];
$show=showeditnewsparent($id);
if (isset($_POST['btn'])){
    $data=$_POST;
    editnewsparent($data,$id);
    header("location:dashbord.php?m=news_pr&p=list");
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش سرگروه اخبار
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان" value="<?php echo $show['title']?>">
                    </div>
                    <button type="submit" class="btn btn-info" name="btn">Submit</button>
                </form>

            </div>
        </section>
    </div>
</div>
