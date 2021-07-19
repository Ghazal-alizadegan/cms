<?php
$id=$_GET['id'];
$show=showeditproduct($id);
if (isset($_POST['btn'])){
    $data=$_POST;
    editproduct($data,$id);
    header("location:dashbord.php?m=product&p=list");
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش محصولات            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان" value="<?php echo $show['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea class="form-control" name="about" placeholder="توضیحات" id="editor"> <?php echo $show['about']?> </textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="parent">
                            <?php
                            $subproduct=subproduct();
                            foreach ($subproduct as $sub){
                                echo "<option value='$sub[id]' ";
                                if($show['parent']==$sub['id']){
                                    echo " selected";
                                }
                                  echo ">$sub[title]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status"value="1" <?php
                            if($show['status']==1){
                                echo "checked";
                            }
                            ?>>
                            فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="0" <?php
                            if($show['status']==0){
                                echo "checked";
                            }
                            ?> >

                            غیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب</label>
                        <input type="" class="form-control" name="sort" placeholder="ترتیب" value="<?php echo $show['sort']?>">
                    </div>
                    <button type="submit" class="btn btn-info" name="btn">Submit</button>
                </form>

            </div>
        </section>
    </div>
</div>
