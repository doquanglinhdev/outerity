<?php $title = "List User" ?>

<?php include_once "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản Lý Thành Viên</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản Lý Thành Viên</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">DANH SÁCH THÀNH VIÊN</h3>
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
                                                    <th>STT</th>
                                                    <th class="sorting">Username</th>
                                                    <th class="sorting">Email</th>
                                                    <th class="sorting">Họ và tên</th>
                                                    <th class="sorting">Vai trò</th>
                                                    <th class="sorting">Trạng thái</th>
                                                    <th class="sorting">Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($user as $value) { ?>
                                                    <tr role="row" class="even">
                                                        <td><?php echo $i ?></td>
                                                        <td><?php echo $value['ma_kh'] ?></td>
                                                        <td><?php echo $value['email'] ?></td>
                                                        <td><?php echo $value['ho_ten'] ?></td>
                                                        <td><?php if ($value['vai_tro'] == 1) {
                                                                echo "<span class='badge badge-danger'>Admin</span>";
                                                            } else {
                                                                echo "<span class='badge badge-primary'>Thành viên</span>";
                                                            } ?></td>
                                                        <td><?php if ($value['kich_hoat'] == 1) {
                                                                echo "<span class='badge badge-success'>Đã kích hoạt</span>";
                                                            } else {
                                                                echo "<span class='badge badge-warning'>Chưa kích hoạt</span>";
                                                            } ?></td>
                                                        <td>
                                                            <button class="btn btn-default"><a href="?ctr=edit-user&id=<?php echo $value['ma_kh'] ?>">Sửa</a></button>
                                                            <button class="btn btn-danger"><a href="?ctr=delete-user&iduser=<?php echo $value['ma_kh'] ?>">Xóa</a></button>
                                                        </td>
                                                    </tr>
                                                <?php $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="thongbao">
                                <?php if (isset($_COOKIE['create'])) : ?>
                                    <p style="color: green ; font-weight:700">
                                        <?= $_COOKIE['create'] ?>
                                    </p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<?php include_once "footer.php" ?>