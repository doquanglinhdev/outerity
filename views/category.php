<?php $title = "Sản phẩm" ?>

<?php include_once "header.php" ?>
<main class="mainContent-theme ">
    <div id="collection" class="collection-page">

        <div class="breadcrumb-shop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                        <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="index.php" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1" />
                            </li>

                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="name">Danh mục</span>
                                <meta itemprop="position" content="2" />
                            </li>


                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item" content=""><span itemprop="name"><?php if (isset($namecate)) {
                                                                                            echo $namecate['ten_loai'];
                                                                                        } ?></span></span>
                                <meta itemprop="position" content="3" />
                            </li>



                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content ">
            <div class="container-fluid">
                <div class="row">
                    <div id="collection-body" class="wrap-collection-body clearfix">
                        <div class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
                            <div class="wrap-filter">
                                <div class="box_sidebar">
                                    <div class="block left-module">
                                        <div class=" filter_xs">
                                            <div class="layered">

                                                <div class="group-menu">
                                                    <div class="title_block visible-sm visible-xs">
                                                        Danh mục sản phẩm
                                                        <span><i class="fa fa-angle-down"></i></span>
                                                    </div>
                                                    <div class="block_content layered layered-category">
                                                        <div class="layered-content">
                                                            <ul class="tree-menu">
                                                                <li class="tree-menu-lv1 has-child  menu-uncollap ">
                                                                    <a class="" href="javascript:void(0)" title="TOPS" target="_self">
                                                                        <span class="">TOPS</span>
                                                                        <span class="icon-control"><i class="fa fa-minus"></i></span>
                                                                    </a>
                                                                    <ul class="tree-menu-sub">
                                                                        <?php $loai = loai_all() ?>
                                                                        <?php foreach ($loai as $cateproduct) { ?>
                                                                            <?php if ($cateproduct['hien_thi'] == 1) { ?>
                                                                                <li>
                                                                                    <span></span>
                                                                                    <a href="?ctr=category&idcategory=<?php echo $cateproduct['ma_loai'] ?>" title="<?php echo $cateproduct['ten_loai'] ?>">
                                                                                        <?php echo $cateproduct['ten_loai'] ?>
                                                                                    </a>
                                                                                </li>
                                                                        <?php }
                                                                        } ?>
                                                                    </ul>
                                                                </li>
                                                                <li class="tree-menu-lv1 has-child  menu-collap ">
                                                                    <a class="" href="javascript:void(0)" title="BOTTOM" target="_self">
                                                                        <span class="">BOTTOM</span>
                                                                        <span class="icon-control"><i class="fa fa-minus"></i></span>
                                                                    </a>
                                                                    <ul class="tree-menu-sub">

                                                                        <li>
                                                                            <span></span>
                                                                            <a href="/collections/short" title="SHORT">SHORT</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>
                                                                <li class="tree-menu-lv1 has-child  menu-collap ">
                                                                    <a class="" href="javascript:void(0)" title="ACCESSORIES" target="_self">
                                                                        <span class="">ACCESSORIES</span>
                                                                        <span class="icon-control"><i class="fa fa-minus"></i></span>
                                                                    </a>
                                                                    <ul class="tree-menu-sub">

                                                                        <li>
                                                                            <span></span>
                                                                            <a href="/collections/tote" title="TOTE BAG">TOTE BAG</a>
                                                                        </li>

                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="wrap-collection-title row">
                                <div class="heading-collection row">
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <h1 class="title">
                                            <?php if (isset($namecate)) {
                                                echo $namecate['ten_loai'];
                                            } else {
                                                echo "Tất cả sản phẩm";
                                            } ?>
                                        </h1>

                                        <div class="alert-no-filter"></div>

                                    </div>

                                    <div class="col-md-4 hidden-sm hidden-xs">
                                        <div class="option browse-tags">
                                            <label class="lb-filter hide" for="sort-by">Sắp xếp theo:</label>
                                            <span class="custom-dropdown custom-dropdown--grey">
                                                <select class="sort-by custom-dropdown__select">
                                                    <option value="manual">Sản phẩm nổi bật</option>
                                                    <option value="price-ascending" data-filter="&sortby=(price:product=asc)">Giá: Tăng dần</option>
                                                    <option value="price-descending" data-filter="&sortby=(price:product=desc)">Giá: Giảm dần</option>
                                                    <option value="title-ascending" data-filter="&sortby=(title:product=asc)">Tên: A-Z</option>
                                                    <option value="title-descending" data-filter="&sortby=(price:product=desc)">Tên: Z-A</option>
                                                    <option value="created-ascending" data-filter="&sortby=(updated_at:product=desc)">Cũ nhất</option>
                                                    <option value="created-descending" data-filter="&sortby=(updated_at:product=asc)">Mới nhất</option>
                                                    <option value="best-selling" data-filter="&sortby=(sold_quantity:product=desc)">Bán chạy nhất</option>
                                                    <option value="quantity-descending">Tồn kho: Giảm dần</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row filter-here">
                                <div class="content-product-list product-list filter clearfix">
                                    <?php foreach ($cate as $sp) { ?>
                                        <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">

                                            <div class="product-block product-resize ">
                                                <div class="product-img ">
                                                    <div class="product-sale"><span>-<?php echo $sp['giam_gia'] ?>%</span></div>
                                                    <a href="?ctr=product&id=<?php echo $sp['ma_hh'] ?>" title="<?php echo $sp['ten_hh'] ?>" class="image-resize ratiobox">
                                                        <picture>
                                                            <img class="img-loop img-hover lazyload" src="public/images/<?php echo $sp['hinh'] ?>" alt=" ACUTE COLOR TEE / BLACK COLOR " />
                                                        </picture>
                                                    </a>
                                                    <div class="button-add hidden">
                                                        <button type="submit" title="Buy now" class="action" onclick="buy_now('1091009983')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                                                    </div>
                                                    <div class="pro-price-mb">
                                                        <span class="pro-price"><?php echo number_format($sp['don_gia']) ?>₫</span>
                                                        <span class="pro-price-del"><del class="compare-price"> <?php echo number_format(($sp['don_gia'] * $sp['giam_gia']) / 10) ?>₫</del></span>
                                                    </div>
                                                </div>
                                                <div class="product-detail clearfix">
                                                    <div class="box-pro-detail">
                                                        <h3 class="pro-name">
                                                            <a href="" title="<?php echo $sp['ten_hh'] ?>">
                                                                <?php echo $sp['ten_hh'] ?>
                                                            </a>
                                                        </h3>
                                                        <div class="box-pro-prices">
                                                            <p class="pro-price highlight">
                                                                <span><?php echo number_format($sp['don_gia']) ?>₫</span>

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
                                </div>

                                <div class="sortpagibar pagi clearfix text-center">
                                    <div id="pagination" class="clearfix">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <span class="page-node current">1</span>

                                            <a class="page-node" href="/collections/outerity-ver-3-0?page=2">2</a>

                                            <a class="next" href="/collections/outerity-ver-3-0?page=2">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31 10" style="enable-background:new 0 0 31 10; width: 31px; height: 10px;" xml:space="preserve">
                                                    <polygon points="31,5 25,0 25,4 0,4 0,6 25,6 25,10 "></polygon>
                                                </svg> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="text" class="hidden" id="coll-handle" value="(collectionid:product=1003113545)" />
    </div>
</main>
<?php include_once "footer.php" ?>