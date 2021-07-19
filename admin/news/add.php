<?php

if (isset($_POST['btn'])){
    addnews($_POST);

}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن خبر جدید            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">تاریخ خبر</label>
                    <input type="date" class="form-control" name="date" >
            </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات خبر</label>
                        <textarea class="form-control" name="about" placeholder="توضیحات خبر" id="editor1"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="parent">
                            <?php
                            $subparent=subnewsparent();
                            foreach ($subparent as $sub){
                                echo "<option value='$sub[id]'>$sub[title]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-info" name="btn">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
