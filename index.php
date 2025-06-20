<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GiftSerwis - Home</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/swiper-bundle.css" />
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/common/topbar.php"; ?> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper">
            <?php include "./components/main_page/hero_swiper.php"; ?> 
            <?php include "./components/main_page/popular_categories.php"; ?> 
            <?php include "./components/main_page/promo_products.php"; ?>  
            <?php include "./components/main_page/banners.php"; ?> 
            <?php include "./components/main_page/why_we.php"; ?> 
            <?php include "./components/main_page/about_us.php"; ?> 
            <?php include "./components/main_page/opinions.php"; ?> 
            <?php include "./components/main_page/info_section.php"; ?> 
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/swiper/swiper-bundle.js"></script>
        <script src="./js/swiper/swiper.js"></script>
        <script src="./js/swiper/promo-products-swiper.js"></script>
        <script src="./js/swiper/news-swiper.js"></script>
        <script src="./js/swiper/blog-swiper.js"></script>
        <script src="./js/swiper/our-brands-swiper.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>