<?php $title = "Edit User" ?>

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
                            <!-- <?php if (isset($_COOKIE['edit'])) {
                                        printf($_COOKIE['edit']);
                                    } else {
                                        echo "null";
                                    }  ?> -->
                            <form action="?ctr=edit-user&id=<?php echo $edit_user['ma_kh'] ?>" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">User Name</label>
                                            <input class="form-control" type="text" name="makh" readonly value="<?php echo $edit_user['ma_kh'] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Họ Và Tên</label>
                                            <input class="form-control" type="text" name="hoten" value="<?php echo $edit_user['ho_ten'] ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" type="text" name="email" value="<?php echo $edit_user['email'] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Số Điện Thoại</label>
                                            <input class="form-control" type="text" name="sdtt" value="<?php echo $edit_user['so_dien_thoai'] ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Mật Khẩu</label>
                                            <input class="form-control" type="text" name="pass" value="<?php echo $edit_user['mat_khau'] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Vai trò: <span style="color:red"><?php if ($edit_user['vai_tro'] == 1) {
                                                                                                echo "Admin";
                                                                                            } else {
                                                                                                echo "Thành viên";
                                                                                            } ?></span></label>
                                            <select required class="form-control" name="vaitro" id="">
                                                <?php $arr = array('0' => 'Thành Viên', '1' => 'Admin'); ?>
                                                <?php foreach ($arr as $key => $value) { ?>
                                                    <option value="<?php echo $key; ?>" <?php echo ($key ==  $edit_user['vai_tro']) ? ' selected="selected"' : ''; ?>><?php echo $value; ?></option>
                                                <?php } ?>

                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col">
                                        <div class="form-group">
                                            <label for="">Kích hoạt: <span style="color:red"><?php if ($edit_user['kich_hoat'] == 1) {
                                                                                                echo "Đã kích hoạt";
                                                                                            } else {
                                                                                                echo "Chưa kích hoạt";
                                                                                            } ?></span></label>
                                            <select required class="form-control" name="kichhoat" id="">
                                                <?php $arrrr = array('0' => 'Chưa kích hoạt', '1' => 'Đã kích hoạt'); ?>
                                                <?php foreach ($arrrr as $key => $value) { ?>
                                                    <option value="<?php echo $key; ?>" <?php echo ($key ==  $edit_user['kich_hoat']) ? ' selected="selected"' : ''; ?>><?php echo $value; ?></option>
                                                <?php } ?>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Avatar</label>
                                            <input class="form-control" type="text" name="" value="" disabled>
                                        </div>
                                    </div>
                                    
                                </div>
                                <?php if (isset($_COOKIE['updatedone'])) : ?>
                                    <p class="font-weight-bold text-success">
                                        <?= $_COOKIE['updatedone'] ?>
                                    </p>
                                <?php endif ?>
                                <input class="btn btn-primary" type="submit" name="update" value="Cập nhật"></input>
                                <button class="btn btn-info"><a class="text-white" href="?ctr=list-user">Quay lại</a></button>

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