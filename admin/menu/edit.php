<?php
$id=$_GET['id'];
$show=showedit($id);
if (isset($_POST['btn'])){
    $data=$_POST;
    editmenu($data,$id);
    header("location:dashbord.php?m=menu&p=list");
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن منو جدید            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان" value="<?php echo $show['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">لینک</label>
                        <input type="text" class="form-control" name="url" placeholder="لینک" value="<?php echo $show['url']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="parent">
                            <option value="0">سرگروه</option>
                            <?php
                            $submenu=submenu();
                            foreach ($submenu as $sub){
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
