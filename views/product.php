<?php $title = $product['ten_hh'] ?>

<?php include_once "header.php" ?>
<main class="mainContent-theme ">
    <div id="product" class="productDetail-page">
        <div class="breadcrumb-shop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                        <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1" />
                            </li>

                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="" target="_self" itemprop="item">
                                    <span itemprop="name"><?php echo $product['ma_loai'] ?></span>
                                </a>
                                <meta itemprop="position" content="2" />
                            </li>

                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item" content="">
                                    <span itemprop="name"><?php echo $product['ten_hh'] ?></span>
                                </span>
                                <meta itemprop="position" content="3" />
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-detail-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row product-detail-main pr_style_03">
                            <div class="col-md-5 col-sm-12 col-xs-12 product-content-img">
                                <div class="product-gallery">
                                    <div class="product-gallery__thumbs-container hidden-sm hidden-xs">
                                        <div class="product-gallery__thumbs thumb-fix">

                                            <div class="product-gallery__thumb active">
                                                <a class="product-gallery__thumb-placeholder" href="javascript:" data-image="images/<?php echo $product['hinh'] ?>" data-zoom-image="images/<?php echo $product['hinh'] ?>">
                                                    <img alt=" ACUTE COLOR TEE / BLACK COLOR " data-image="images/<?php echo $product['hinh'] ?>" src="public/images/<?php echo $product['hinh'] ?>">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-image-detail box__product-gallery scroll">
                                        <ul id="sliderproduct" class="site-box-content slide_product clearfix hidden-lg hidden-md">

                                            <li class="product-gallery-item gallery-item">
                                                <img class="product-image-feature" src="public/images/<?php echo $product['hinh'] ?>" alt=" ACUTE COLOR TEE / BLACK COLOR ">
                                            </li>

                                        </ul>
                                        <div class="hidden-sm hidden-xs">
                                            <img class="product-image-feature" src="public/images/<?php echo $product['hinh'] ?>" alt=" ACUTE COLOR TEE / BLACK COLOR ">
                                        </div>
                                        <div class="product-image__button">
                                            <div id="product-zoom-in" class="product-zoom icon-pr-fix " aria-label="Zoom in" title="Zoom in">
                                                <span class="zoom-in" aria-hidden="true">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36; width: 30px; height: 30px;" xml:space="preserve">
                                                        <polyline points="6,14 9,11 14,16 16,14 11,9 14,6 6,6 " />
                                                        <polyline points="22,6 25,9 20,14 22,16 27,11 30,14 30,6 " />
                                                        <polyline points="30,22 27,25 22,20 20,22 25,27 22,30 30,30 " />
                                                        <polyline points="14,30 11,27 16,22 14,20 9,25 6,22 6,30 " />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12 product-content-desc" id="detail-product">
                                <div class="product-title">
                                    <h1><?php echo $product['ten_hh'] ?></h1>

                                    <span id="pro_sku"><strong>SKU:</strong>ORT.B 139 - S</span>


                                </div>
                                <div class="product-price" id="price-preview">

                                    <span class="pro-sale">-<?php echo $product['giam_gia'] ?>% </span>

                                    <span class="pro-price"><?php echo number_format($product['don_gia']) ?>₫</span>

                                    <del><?php echo number_format(($product['don_gia'] * $product['giam_gia']) / 10) ?>₫</del>

                                </div>


                                <form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">
                                    <div class="selector-actions">

                                        <div class="quantity-area clearfix">
                                            <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                                            <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                                            <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                                        </div>
                                        <div class="wrap-addcart clearfix">
                                            <button type="button" id="add-to-cart" class=" add-to-cartProduct button dark btn-addtocart addtocart-modal " name="add">
                                                Thêm vào giỏ
                                            </button>
                                            <button type="button" id="buy-now" class=" add-to-cartProduct button dark btn-addtocart addtocart-modal hidden " name="add">
                                                Mua ngay
                                            </button>
                                        </div>
                                    </div>


                                    <div class="product-action-bottom visible-xs">
                                        <div class="input-bottom">
                                            <input id="quan-input" type="number" value="1" min="1">
                                        </div>
                                        <button type="button" id="add-to-cartbottom" class=" add-to-cartProduct add-cart-bottom button dark addtocart-modal" name="add">
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </form>
                                <div class="product-description">
                                    <div class="title-bl">
                                        <h2>Mô tả</h2>
                                    </div>
                                    <div class="description-content">
                                        <div class="description-productdetail">
                                            <p>
                                                <?php echo $product['mo_ta'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-productRelated clearfix">
                            <div class="heading-title text-center">
                                <h2>Sản phẩm liên quan</h2>
                            </div>
                            <div class="content-product-list row">
                                <?php foreach ($product_list as $splq) { ?>
                                    <div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">
                                        <div class="product-block product-resize ">
                                            <div class="product-img ">
                                                <div class="product-sale"><span>-<?php echo $splq['giam_gia'] ?>%</span></div>
                                                <a href="?ctr=product&id=<?php echo $splq['ma_hh'] ?>" title=" <?php echo $splq['ten_hh'] ?>" class="image-resize ratiobox">
                                                    <picture>
                                                        <img class="lazyload img-loop" data-sizes="auto" src="public/images/<?php echo $splq['hinh'] ?>" alt="" />
                                                    </picture>

                                                </a>
                                                <div class="button-add hidden">
                                                    <button type="submit" title="Buy now" class="action" onclick="buy_now('1087075655')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                                                </div>
                                                <div class="pro-price-mb">
                                                    <span class="pro-price"><?php echo number_format($splq['don_gia']) ?>₫</span>
                                                    <span class="pro-price-del"><del class="compare-price"><?php echo number_format(($splq['don_gia'] * $splq['giam_gia']) / 10) ?>₫</del></span>
                                                </div>
                                            </div>
                                            <div class="product-detail clearfix">
                                                <div class="box-pro-detail">
                                                    <h3 class="pro-name">
                                                        <a href="" title=" <?php echo $splq['ten_hh'] ?>">
                                                            <?php echo $splq['ten_hh'] ?>
                                                        </a>
                                                    </h3>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price highlight">
                                                            <span><?php echo number_format($splq['don_gia']) ?>₫</span>

                                                            <span class="pro-price-del">
                                                                <del class="compare-price">
                                                                    <?php echo number_format(($splq['don_gia'] * $splq['giam_gia']) / 10) ?>₫
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
            </div>
        </div>
    </div>
    <style>
        .be-comment-block {
            margin-bottom: 50px !important;
            border: 1px solid #edeff2;
            border-radius: 2px;
            padding: 0 0 0 30px;
            border: 1px solid #ffffff;
        }

        .comments-title {
            font-size: 16px;
            color: #262626;
            margin-bottom: 15px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }

        .be-img-comment {
            width: 60px;
            height: 60px;
            float: left;
            margin-bottom: 15px;
        }

        .be-ava-comment {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .be-comment-content {
            margin-left: 80px;
        }

        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }

        .be-comment-name {
            font-weight: 700;
            font-size: 13px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }

        .be-comment-content a {
            color: #383b43;
        }

        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }

        .be-comment-time {
            text-align: right;
        }

        .be-comment-time {
            font-weight: 700;
            font-size: 11px;
            color: #b4b7c1;
        }

        .be-comment-text {
            font-weight:500;
            font-size: 13px;
            line-height: 18px;
            color: black;
            display: block;
            background: #f6f6f7;
            border: 1px solid #edeff2;
            padding: 15px 20px 20px 20px;
        }

        .form-group.fl_icon .icon {
            position: absolute;
            top: 1px;
            left: 16px;
            width: 48px;
            height: 48px;
            background: #f6f6f7;
            color: #b5b8c2;
            text-align: center;
            line-height: 50px;
            -webkit-border-top-left-radius: 2px;
            -webkit-border-bottom-left-radius: 2px;
            -moz-border-radius-topleft: 2px;
            -moz-border-radius-bottomleft: 2px;
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
        }

        .form-group .form-input {
            font-size: 13px;
            line-height: 50px;
            font-weight: 400;
            color: #b4b7c1;
            width: 100%;
            height: 50px;
            padding-left: 20px;
            padding-right: 20px;
            border: 1px solid #edeff2;
            border-radius: 3px;
        }

        .form-group.fl_icon .form-input {
            padding-left: 70px;
        }

        .form-group textarea.form-input {
            height: 150px;
        }
    </style>

    <div class="container-fluid">
        <div class="be-comment-block">
            <h1 class="heading-title">Comments</h1>
            <?php foreach ($cmt as $allcmt) { ?>
                <div class="be-comment">
                    <div class="be-img-comment">
                        <a href="blog-detail-2.html">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
                        </a>
                    </div>

                    <div class="be-comment-content">

                        <span class="be-comment-name">
                            <a href=""><?php echo $allcmt['ma_kh'] ?></a>
                        </span>
                        <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            <?php echo $allcmt['ngay_bl'] ?>
                        </span>

                        <p class="be-comment-text" >
                            <?php echo $allcmt['noi_dung'] ?>
                        </p>
                    </div>
                <?php } ?>
                </div>
                <?php if (isset($_SESSION['user'])) { ?>
                    <form class="form-block" method="post" action="?ctr=product&id=<?php echo $product['ma_hh'] ?>">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <textarea class="form-input text" required="" placeholder="Your text" name="inputcmt" style="color:black; font-weight:600"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-default pull-right mb-5" type="submit" name="comment" value="Comment">
                            </div>
                        </div>
                    </form>
                <?php } else { ?>
                    <div>
                        <p style="color: red">Vui lòng đăng nhập để Comment !!!</p>
                    </div>

                <?php } ?>

        </div>
    </div>
    <div id="divzoom">
        <div class="divzoom_main">
            <div class="product-thumb text-center">
                <img class="product-image-feature" src="public/images/<?php echo $product['hinh'] ?>" alt=" ACUTE COLOR TEE / BLACK COLOR ">
            </div>
        </div>
        <div id="positionButtonDiv" class="hidden">
            <p>
                <span>
                    <button type="button" class="buttonZoomIn"><i></i></button>
                    <button type="button" class="buttonZoomOut"><i></i></button>
                </span>
            </p>
        </div>
        <button id="closedivZoom"><i></i>
        </button>
    </div>

</main>
<?php include_once "footer.php" ?>