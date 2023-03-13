<?php $title = "List User" ?>

<?php include_once "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản Lý Comment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản Lý Comment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="col-lg-12 connectedSortable ui-sortable">
        <section class="card card-primary card-outline" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    CHI TIẾT BÌNH LUẬN
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize"><i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn bg-danger btn-sm" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <div class="table-responsive">
                    <div id="datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable1" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" aria-describedby="datatable1_info">
                                    <thead>
                                        <tr role="row">
                                            <th>ID</th>
                                            <th>Tên hàng hóa</th>
                                            <th>Nội dung cmt</th>
                                            <th>Người dùng</th>
                                            <th>Thời gian</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($allcmt as $value) { ?>
                                            <tr>
                                                <td><?php echo $value['ma_bl'] ?></td>
                                                <td><?php echo $value['ten_hh'] ?></td>
                                                <td><?php echo $value['noi_dung'] ?></td>
                                                <td><?php echo $value['ma_kh'] ?></td>
                                                <td><?php echo $value['ngay_bl'] ?></td>
                                                <td>
                                                    <button class="btn btn-default"><a href="">Chi tiết</a></button>
                                                    <button class="btn btn-danger"><a href="?ctr=delete-cmt&id=<?php echo $value['ma_bl'] ?>&iddm=<?php echo $value['ma_hh'] ?>">Xóa</a></button>
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
        </section>
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