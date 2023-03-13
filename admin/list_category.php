<?php $title = "List Category" ?>

<?php include_once "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản Lý Loại Hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản Lý Loại Hàng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">DANH SÁCH LOẠI HÀNG</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">
                        <div class="table-responsive">
                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable" class="table table-bordered table-striped table-hover dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting">Mã loại</th>
                                                    <th class="sorting">Tên Loại</th>
                                                    <th class="sorting">Trạng Thái MENU</th>
                                                    <th class="sorting">Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($loai as $value) { ?>
                                                    <tr>
                                                        <td><?php echo $value['ma_loai'] ?></td>
                                                        <td><?php echo $value['ten_loai'] ?></td>
                                                        <td><?php if ($value['hien_thi'] == 1) {
                                                                echo "<span class='badge badge-success'>Hiện</span>";
                                                            } else {
                                                                echo "<span class='badge badge-secondary'>Ẩn</span>";
                                                            } ?></td>
                                                        <td>
                                                            <button class="btn btn-default"><a href="?ctr=edit-category&id=<?php echo $value['ma_loai'] ?>">Sửa</a></button>
                                                            <button class="btn btn-danger"><a href="?ctr=delete-category&id=<?php echo $value['ma_loai'] ?>">Xóa</a></button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="thongbao">
                            <?php if (isset($_COOKIE['edit'])) : ?>
                                <p class="font-weight-bold text-success">
                                    <?= $_COOKIE['edit'] ?>
                                </p>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<?php include_once "footer.php" ?>