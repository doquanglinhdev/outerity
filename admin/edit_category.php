<?php $title = "Edit Category" ?>

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
                            <form action="?ctr=edit-category&id=<?php echo $loai['ma_loai'] ?>" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Mã loại</label>
                                            <input class="form-control" type="text" name="maloai" readonly value="<?php echo $loai['ma_loai'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Tên loại</label>
                                            <input class="form-control" type="text" name="name_category" value="<?php echo $loai['ten_loai'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Hiện thị ở Menu: <span style="color:red"><?php if($loai['hien_thi']==1){echo "Hiện" ;}else{echo "Ẩn";} ?></span></label>
                                    <select required class="form-control" name="hien_thi" id="">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiện</option>
                                        </select>
                                </div>
                                <button class="btn btn-primary" type="submit" name="btn_edit" value="update">Cập nhật</button>
                                <button class="btn btn-info"><a class="text-white" href="">Hủy</a></button>

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