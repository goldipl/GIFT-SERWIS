<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GiftSerwis - Nie znalazłeś tego, czego szukasz?</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/common/topbar.php"; ?> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper">
            <div class="breadcrumbs container">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="./index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span>Szukaj</span>
                    </li>
                </ul>
            </div>
            <div class="category-wrapper">
                <div class="container category-top-menu">
                    <?php include "./components/category/category_top_seo_text.php"; ?> 
                    <?php include "./components/category/category_top_filters.php"; ?> 
                </div>
                <div class="container">
                    <aside class="category-wrapper__left">
                        <?php include "./components/category/category_left_filters.php"; ?>
                        <?php include "./components/category/category_left_helpbox.php"; ?>  
                    </aside>
                    <div class="category-wrapper__right">
                        <?php include "./components/category/category_not_found.php"; ?> 
                    </div>
                </div>
            </div> 
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
        <script src="./js/script.js"></script>
        <script src="./js/category/show_menu.js"></script>
    </body>
</html>