<?php $title = "Create User" ?>

<?php include_once "header.php" ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản Lý Khách Hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản Lý Khách Hàng</li>
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
                            <form action="?ctr=create-user" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">User Name</label>
                                            <input class="form-control" type="text" name="makh" value="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Họ Và Tên</label>
                                            <input class="form-control" type="text" name="hoten" value="" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" type="email" name="email" value="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Số Điện Thoại</label>
                                            <input class="form-control" type="text" name="sdtt" value="" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Mật Khẩu</label>
                                            <input class="form-control" type="text" name="pass" value="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Vai trò:</label>
                                            <select class="form-control" name="vaitro" id="">
                                                <option value="0">---Chọn vai trò---</option>
                                                <option value="0">Thành Viên</option>
                                                <option value="1">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col">
                                        <div class="form-group">
                                            <label for="">Kích hoạt:</label>
                                            <select class="form-control" name="kichhoat" id="">
                                                <option value="0">Chưa kích hoạt</option>
                                                <option value="1">Kích hoạt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Hình</label>
                                            <input class="form-control" type="text" name="" value="" disabled>
                                        </div>
                                    </div>
                                   
                                </div>

                                <button class="btn btn-primary" type="submit" name="create" value="create">Tạo</button>
                                <button class="btn btn-info"><a class="text-white" href="?ctr=user">Hủy</a></button>

                            </form>
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