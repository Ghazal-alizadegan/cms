
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست اخبار
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان خبر</th>
                    <th> تاریخ خبر</th>
                    <th> عنوان سرگروه</th>
                    <th> توضیحات</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listnews=listnews();
                if($listnews){
                foreach ($listnews as $news){?>
                    <tr>
                        <td><?php echo $news['title']; ?></td>
                        <td><?php echo $news['date']; ?></td>
                        <td><?php
                                $parent=newsparent($news['parent']);
                                echo $parent;
                            ?>
                        </td>
                        <td><?php echo $news['about']; ?></td>

                        <td><a class="btn btn-primary btn-xs"href="dashbord.php?m=news&p=edit&id=<?php echo $news['id']; ?>"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=news&p=delete&id=<?php echo $news['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                }}?>

                </tbody>
            </table>
        </section>
    </div>
</div>

