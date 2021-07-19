<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست  سرگروه محصولات
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان سرگروه</th>
                    <th> ترتیب</th>
                    <th> وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listparent=listproductparent();
                if($listparent){
                foreach ($listparent as $parent){?>
                    <tr>
                        <td><?php echo $parent['title']; ?></td>
                        <td><?php echo $parent['sort']; ?></td>
                        <td>
                            <?php
                            if($parent['status']==0){
                                echo"<span> غیر فعال </span>";
                            }
                            else{
                                echo"<span>  فعال </span>";
                            }
                            ?>
                        </td>
                        <td><a class="btn btn-primary btn-xs"href="dashbord.php?m=product_pr&p=edit&id=<?php echo $parent['id']; ?>"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=product_pr&p=delete&id=<?php echo $parent['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                }}?>

                </tbody>
            </table>
        </section>
    </div>
</div>

