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

                            <form action="index.php?ctr=save-add-product" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Mã hàng hóa</label>
                                            <input class="form-control" type="text" name="ma_hh" readonly placeholder="auto number" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Tên hàng hóa</label>
                                            <input class="form-control" type="text" name="ten_hh" placeholder="tên hàng">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Đơn giá</label>
                                            <input class="form-control" type="number" name="don_gia" min="0" value="0">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Loại hàng</label>
                                            <select class="form-control" name="ma_loai" id="">
                                                <option value="">Mã loại</option>
                                                <?php foreach ($loai as $l) : ?>
                                                    <option value="<?= $l['ma_loai'] ?>"><?= $l['ten_loai'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Số lượng</label>
                                            <input class="form-control" type="number" name="giam_gia" placeholder="Theo phần trăm" max="100" min="0">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Hình</label>
                                            <input type="file" name="hinh" placeholder="">
                                        </div>
                                    </div>

                                    <div class="full">
                                        <div class="form-group">
                                            <label for="">Mô tả</label>
                                            <textarea name="mo_ta"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <button class="btn" type="submit" name="btn_insert">Thêm</button>
                                <!-- <button class="btn"><a href="">Danh sách</a></button> -->
                            </form>
                            <?php if (isset($_COOKIE['success'])) : ?>
                                <p>
                                    <?= $_COOKIE['success'] ?>
                                </p>
                            <?php endif ?>
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