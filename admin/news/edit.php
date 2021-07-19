<?php
$id=$_GET['id'];
$show=showeditnews($id);
if (isset($_POST['btn'])){
    $data=$_POST;
    editnews($data,$id);
    header("location:dashbord.php?m=news&p=list");
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش خبر
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان" value="<?php echo $show['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">تاریخ خبر</label>
                        <input type="date" class="form-control" name="date" value="<?php echo $show['date']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea class="form-control" name="about" placeholder="توضیحات" id="editor1"> <?php echo $show['about']?></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="parent">
                            <?php
                            $subnews=subnews();
                            foreach ($subnews as $sub){
                                echo "<option value='$sub[id]' ";
                                if($show['parent']==$sub['id']){
                                    echo " selected";
                                }
                                  echo ">$sub[title]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info" name="btn">Submit</button>
                </form>

            </div>
        </section>
    </div>
</div>
