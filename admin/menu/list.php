<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست منو های اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان منو</th>
                    <th> عنوان سرگروه</th>
                    <th> لینک منو</th>
                    <th> ترتیب</th>
                    <th> وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listmenu=listmenuadmin();
                if($listmenu){
                foreach ($listmenu as $menu){?>
                    <tr>
                        <td><?php echo $menu['title']; ?></td>
                        <td><?php
                            if($menu['parent']==0){
                                echo "ندارد";
                            }
                            else{
                                $parent=parentmenu($menu['parent']);
                                echo $parent;
                            }?>
                        </td>
                        <td><?php echo $menu['url']; ?></td>
                        <td><?php echo $menu['sort']; ?></td>
                        <td>
                            <?php
                            if($menu['status']==0){
                                echo"<span> غیر فعال </span>";
                            }
                            else{
                                echo"<span>  فعال </span>";
                            }
                            ?>
                        </td>
                        <td><a class="btn btn-primary btn-xs"href="dashbord.php?m=menu&p=edit&id=<?php echo $menu['id']; ?>"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=menu&p=delete&id=<?php echo $menu['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                }}?>

                </tbody>
            </table>
        </section>
    </div>
</div>

