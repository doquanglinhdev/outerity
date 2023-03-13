<?php $title = "Edit Product" ?>

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
                            <form action="index.php?ctr=edit-product&id=<?php echo $hanghoa['ma_hh'] ?>" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Mã hàng hóa</label>
                                        <input required type="text" class="form-control" readonly value="<?php echo $hanghoa['ma_hh'] ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Tên Hàng</label>
                                        <input required type="text" class="form-control" name="ten_loai" value="<?php echo $hanghoa['ten_hh'] ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Đơn giá</label>
                                        <input required type="number" class="form-control" name="price" value="<?php echo $hanghoa['don_gia'] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Loại hàng</label>
                                        <select name="ma_loai" required class="form-control">
                                            <?php foreach ($loai as $l) : ?>
                                                <option value="<?= $l['ma_loai'] ?>" <?= ($l['ma_loai'] == $hanghoa['ma_loai']) ? 'selected' : '' ?>>
                                                    <?= $l['ten_loai'] ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Giảm giá %</label>
                                        <input required type="number" class="form-control" name="discoust" value="<?php echo $hanghoa['giam_gia'] ?>" max="100" min="0">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Hình</label>
                                        <input class="form-control" type="file" name="hinh" multiple">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <textarea class="form-control ckeditor" name="describe" rows="3"><?php echo $hanghoa['mo_ta'] ?></textarea>
                                </div>

                                <button class="btn btn-primary" type="submit" name="btn_editt" value="1">Cập Nhật</button>
                                <!-- <button class="btn"><a href="">Danh sách</a></button> -->
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