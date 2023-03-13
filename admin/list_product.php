<?php $title = "List Product" ?>

<?php include_once "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản Lý Hàng Hóa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản Lý Hàng Hóa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <?php if (isset($_COOKIE['edit'])) : ?>
                                <p class="font-weight-bold text-success">
                                    <?= $_COOKIE['edit'] ?>
                                </p>
                            <?php endif ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã hàng hóa</th>
                                        <th>Tên hàng hóa</th>
                                        <th>Đơn giá</th>
                                        <th>Giảm giá</th>
                                        <th>Ảnh</th>
                                        <th>Mã loại</th>
                                        <th>View</th>
                                        <th>Mô tả</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($product as $value) { ?>
                                        <tr>
                                            <td><?php echo $value['ma_hh'] ?></td>
                                            <td><?php echo $value['ten_hh'] ?></td>
                                            <td><?php echo $value['don_gia'] ?></td>
                                            <td><?php echo $value['giam_gia'] ?></td>
                                            <td><img class="img-thumbnail" src="public/images/<?php echo $value['hinh'] ?>" alt="" width="60%"></td>
                                            <td><?php echo $value['ma_loai'] ?></td>
                                            <td><?php echo $value['so_luot_xem'] ?></td>
                                            <td><?php echo $value['mo_ta'] ?></td>
                                            <td>
                                                <button class="btn btn-default"><a href="?ctr=edit-product&id=<?php echo $value['ma_hh'] ?>">Sửa</a></button>
                                                <button class="btn btn-danger"><a href="?ctr=delete-product&id=<?php echo $value['ma_hh'] ?>">Xóa</a></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<?php include_once "footer.php" ?>