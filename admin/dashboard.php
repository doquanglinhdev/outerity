<?php $title = "Dashboard" ?>
<?php include_once "header.php" ?>
<?php $all = user_all() ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div id="thongbao"></div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 id="total_users">
                            <?= count_user() ?>
                        </h3>
                        <p>Tổng thành viên</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 id="total_money">
                            <?= count_produc() ?>
                        </h3>
                        <p>Tổng sản phẩm</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-money-bill-alt"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3 id="the_hop_le">
                            <?= count_category() ?>
                        </h3>
                        <p>Tổng danh mục</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-store"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3 id="tong_tien_the">
                            Loading...
                        </h3>
                        <p>Loading</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PIE CHART -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Thống kê danh mục</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <script type="text/javascript" src="admin/assets/js/Chart.min.js"></script>
                    <script type="text/javascript" src="admin/assets/js/jquery.min.js"></script>

                    <script type="text/javascript">
                        <?php $all = thongke_all();
                        $dem = count($all);
                        $i = 1; ?>


                        var donutData = {
                            labels: [
                                <?php foreach ($all as $value) { ?> '<?= $value['ten_loai'] ?>',
                                <?php
                                } ?>
                            ],
                            datasets: [{
                                data: [
                                    <?php foreach ($all as $valuee) {
                                        if ($i == $dem) {
                                            $dau = "";
                                        } else {
                                            $dau = ",";
                                        }; ?>
                                        <?= $valuee['sluong'] ?><?= $dau ?>
                                    <?php $i++;
                                    } ?>
                                ],
                                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8db2', '#d2d6de', '#6610f2', '#3d9970', '#001f3f'],
                            }]
                        }
                        //-------------
                        //- PIE CHART -
                        //-------------
                        // Get context with jQuery - using jQuery's .get() method.
                        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
                        var pieData = donutData;
                        var pieOptions = {
                            maintainAspectRatio: false,
                            responsive: true,
                        }
                        //Create pie or douhnut chart
                        // You can switch between pie and douhnut using the method below.
                        new Chart(pieChartCanvas, {
                            type: 'pie',
                            data: pieData,
                            options: pieOptions
                        })
                    </script>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

    <section class="col-lg-12 connectedSortable ui-sortable">
        <section class="card card-primary card-outline" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    THỐNG KÊ HÀNG HÓA TỪNG LOẠI
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
                                            <th>STT</th>
                                            <th>Tên loại hàng</th>
                                            <th>Số lượng sản phẩm</th>
                                            <th>Giá cao nhất</th>
                                            <th>Giá thấp nhất</th>
                                            <th>Giá trung bình</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; $thongke = thongke_minmax();
                                        foreach ($thongke as $tkesp) { ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $tkesp['ten_loai'] ?></td>
                                                <td><span class="badge badge-pill badge-info"><?php echo $tkesp['sluong'] ?></span></td>
                                                <td><span class="badge badge-pill badge-success"><?php echo $tkesp['maxgia'] ?></span></td>
                                                <td><span class="badge badge-pill badge-warning"><?php echo $tkesp['mingia'] ?></span></td>
                                                <td><span class="badge badge-pill badge-primary"><?php echo $tkesp['giatb'] ?></span></td>
                                            </tr>
                                        <?php $i++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>



<?php include_once "footer.php" ?>