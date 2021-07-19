<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست  محصولات
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان محصول</th>
                    <th> عنوان سرگروه</th>
                    <th> توضیحات</th>
                    <th> ترتیب</th>
                    <th> وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listproduct=listproduct();
                if($listproduct){
                foreach ($listproduct as $product){?>
                    <tr>
                        <td><?php echo $product['title']; ?></td>
                        <td><?php


                                $parent=productparent($product['parent']);
                                echo $parent;
                            ?>
                        </td>
                        <td><?php echo $product['about']; ?></td>
                        <td><?php echo $product['sort']; ?></td>
                        <td>
                            <?php
                            if($product['status']==0){
                                echo"<span> غیر فعال </span>";
                            }
                            else{
                                echo"<span>  فعال </span>";
                            }
                            ?>
                        </td>
                        <td><a class="btn btn-primary btn-xs"href="dashbord.php?m=product&p=edit&id=<?php echo $product['id']; ?>"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=product&p=delete&id=<?php echo $product['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                }}?>

                </tbody>
            </table>
        </section>
    </div>
</div>

