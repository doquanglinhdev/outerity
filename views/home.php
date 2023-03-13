<?php $title = "Home" ?>

<?php include_once "header.php" ?>


<main class="mainContent-theme  main-index ">

    <h1 class="hidden entry-title">Outerity</h1>

    <div id="home-slider">
        <!-- <div class="container-fluid"> -->
        <!-- Carousel container -->
        <div id="my-pics" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#my-pics" data-slide-to="0" class="active"></li>
                <li data-target="#my-pics" data-slide-to="1"></li>
                <li data-target="#my-pics" data-slide-to="2"></li>
            </ol>

            <!-- Content -->
            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="item active">
                    <img src="public/images/banner2.jpg" alt="">
                </div>

                <!-- Slide 2 -->
                <div class="item">
                    <img src="public/images/banner1.jpg" alt="">
                </div>

                <!-- Slide 3 -->
                <div class="item">
                    <img src="public/images/banner3.jpg" alt="Longtail boats at Phi Phi">
                </div>

            </div>
            <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        <!-- jQuery library -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })

            $(function() {
                $('[data-toggle="popover"]').popover()
            })
        </script>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
<section class="section section-collection">
        <div class="wrapper-heading-home animation-tran text-center">
            <div class="container-fluid">
                <h2>
                    <a href="">
                    SẢN PHẨM YÊU THÍCH 
                    </a>
                </h2>
            </div>
        </div>
        <div class="wrapper-collection-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="clearfix content-product-list">
                        <?php $hang_hoa_like = hang_hoa_like(); ?>
                        <!--  -->
                        <?php foreach ($hang_hoa_like as $spp) { ?>
                            <div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">
                                <div class="product-block product-resize ">
                                    <div class="product-img ">
                                        <div class="product-sale"><span>-<?php echo $spp['giam_gia'] ?>%</span>
                                        </div>
                                        <a href="?ctr=product&id=<?php echo $spp['ma_hh'] ?>" title="<?php echo $spp['ten_hh'] ?>" class="image-resize ratiobox">
                                            <img class="lazyload img-loop" src="public/images/<?php echo $spp['hinh'] ?>" alt=" <?php echo $spp['ten_hh'] ?> " />
                                            </picture>
                                        </a>
                                        <div class="button-add hidden">
                                            <button type="submit" title="Buy now" class="action">Mua ngay<i class="fa fa-long-arrow-right"></i>
                                            </button>
                                        </div>
                                        <div class="pro-price-mb">
                                            <span class="pro-price"><?php echo number_format($spp['don_gia']) ?>₫</span>
                                            <span class="pro-price-del"><del class="compare-price"><?php echo number_format(($spp['don_gia'] * $spp['giam_gia']) / 10) ?>₫</del></span>
                                        </div>
                                    </div>
                                    <div class="product-detail clearfix">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="?ctr=product&id=<?php echo $spp['ma_hh'] ?>" title="<?php echo $spp['ten_hh'] ?>">
                                                    <?php echo $spp['ten_hh'] ?>
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price highlight">
                                                    <span><?php echo number_format($spp['don_gia'])  ?>₫</span>

                                                    <span class="pro-price-del">
                                                        <del class="compare-price">
                                                            <?php echo number_format(($spp['don_gia'] * $spp['giam_gia']) / 10) ?>₫
                                                        </del>
                                                    </span>

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="section section-collection">
        <div class="wrapper-heading-home animation-tran text-center">
            <div class="container-fluid">
                <h2>
                    <a href="?ctr=category">
                        SẢN PHẨM
                    </a>
                </h2>
            </div>
        </div>
        <div class="wrapper-collection-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="clearfix content-product-list">
                        <?php $hang_hoa = hang_hoa_home(); ?>
                        <?php foreach ($hang_hoa as $sp) { ?>
                            <div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">
                                <div class="product-block product-resize ">
                                    <div class="product-img ">
                                        <div class="product-sale"><span>-<?php echo $sp['giam_gia'] ?>%</span>
                                        </div>
                                        <a href="?ctr=product&id=<?php echo $sp['ma_hh'] ?>" title="<?php echo $sp['ten_hh'] ?>" class="image-resize ratiobox">
                                            <img class="lazyload img-loop" src="public/images/<?php echo $sp['hinh'] ?>" alt=" <?php echo $sp['ten_hh'] ?> " />
                                            </picture>
                                        </a>
                                        <div class="button-add hidden">
                                            <button type="submit" title="Buy now" class="action">Mua ngay<i class="fa fa-long-arrow-right"></i>
                                            </button>
                                        </div>
                                        <div class="pro-price-mb">
                                            <span class="pro-price"><?php echo number_format($sp['don_gia']) ?>₫</span>
                                            <span class="pro-price-del"><del class="compare-price"><?php echo number_format(($sp['don_gia'] * $sp['giam_gia']) / 10) ?>₫</del></span>
                                        </div>
                                    </div>
                                    <div class="product-detail clearfix">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="?ctr=product&id=<?php echo $sp['ma_hh'] ?>" title="<?php echo $sp['ten_hh'] ?>">
                                                    <?php echo $sp['ten_hh'] ?>
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price highlight">
                                                    <span><?php echo number_format($sp['don_gia'])  ?>₫</span>

                                                    <span class="pro-price-del">
                                                        <del class="compare-price">
                                                            <?php echo number_format(($sp['don_gia'] * $sp['giam_gia']) / 10) ?>₫
                                                        </del>
                                                    </span>

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>

                        <div class="product__seemore ">
                            <a href="?ctr=category" class="button dark">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</main>
<?php include_once "footer.php" ?>