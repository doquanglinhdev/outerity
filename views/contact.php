<?php $title = "Contact" ?>

<?php include_once "header.php" ?>
<main class="mainContent-theme ">
    <div class="pageAbout-us page-layout">
        <div class="breadcrumb-shop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                        <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="?ctr=home" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1" />
                            </li>

                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item" content=""><span itemprop="name">Liên hệ</span></span>
                                <meta itemprop="position" content="2" />
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
    <section class="dark-grey-text">
        <p class="w-responsive mx-auto mb-5 h3">Liên hệ với chúng tôi</p>
        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">
                <form>
                    <div class="row mt-2 mb-2">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="contact-name" class="form-control" placeholder="Tên của bạn">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="contact-email" class="form-control" placeholder="Địa chỉ email">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-2">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="contact-Subject" class="form-control" placeholder="Tiêu đề">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-2">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea id="contact-message" class="form-control md-textarea" rows="3" placeholder="Nội dung chi tiết"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-center text-md-left">
                    <a class="btn btn-secondary">Gửi ở đây nè !!!</a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li>
                        <i class="fa fa-map-marker fa-2x"></i>
                        <p class="bold">Hà Nội, Việt Nam</p>
                    </li>
                    <li>
                        <i class="fa fa-phone fa-2x mt-4"></i>
                        <p>033 5535000</p>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-2x mt-4"></i>
                        <p class="mb-0">doquanglinhdev@gmail.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
        
    </div>

</main>
<?php include_once "footer.php" ?>