<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $sSiteTitle; ?> | Home</title>
        <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=G-5EKS4HV73Z"></script>
        <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-5EKS4HV73Z');
        </script>
        <meta name="description" content="Read Bangladesh latest news updates, political affairs news, business news, crime news, government briefings, Bangladesh law & rights at Businessinsiderbd.com">
        <meta name="keywords" content="<?php echo $sSiteTitle; ?>">
        <meta http-equiv="refresh" content="6000">
        <meta name="author" content="<?php echo $sAuthor; ?>">
        <meta name="Developer" content="<?php echo $sDeveloper; ?>">
        <meta name="resource-type" content="document">
        <meta name="contact" content="<?php echo $sEmail; ?>">
        <meta name="copyright" content="Copyright (c) <?php echo date("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">
        <meta name="p:domain_verify" content="c0b55870314e28b95906c5cd302b5d39" />
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="googlebot-news" content="index, follow">
        <meta name="msnbot" content="index, follow">
        <meta property="fb:app_id" content="<?php echo $sAppId; ?>">
        <meta property="fb:pages" content="102310071621132">
        <meta property="og:site_name" content="<?php echo $sSiteName; ?>">
        <meta property="og:title" content="<?php echo $sSiteTitle; ?>">
        <meta property="og:description" content="<?php echo $sSiteTitle; ?>">
        <meta property="og:url" content="<?php echo $sSiteURL; ?>">
        <meta property="og:type" content="article">
        <meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
        <meta property="og:locale" content="en_US">
        <link rel="image_src" href="<?php echo $sLogoURLfb; ?>">
        <link rel="canonical" href="<?php echo $sSiteURL; ?>">
        <link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
        <link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <?php echo $sCSSBootStrap;
        echo $sCSSFontAwesome;
        echo $sCSSKiron;
        echo $sCSSBootstrapIcon;
        echo $sCSSEMM;
        ?>
    </head>
    <body>
        <?php echo $sFbRoot; ?>
        <?php include_once("common/header.php"); ?>
        <main>
            <div class="slider">
                <div id="slideshow" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative">
                            <div class="overly"></div>
                            <div class="MainSlider">
                                <div class="Imgresize">
                                    <figure class="ImgViewer">
                                        <picture class="FixingRatio">
                                            <img src="Media/imgAll/slide-1.jpg" alt="" title="" class="img-fluid img100 ImgRatio">
                                        </picture>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                        <div class="carousel-item position-relative active">
                            <div class="overly"></div>
                            <div class="carousel-gradient"></div>
                            <div class="MainSlider">
                                <div class="Imgresize">
                                    <figure class="ImgViewer">
                                        <picture class="FixingRatio">
                                            <img src="Media/imgAll/slide-2.jpg" alt="" title="" class="img-fluid img100 ImgRatio">
                                        </picture>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                        <div class="carousel-item position-relative">
                            <div class="overly"></div>
                            <div class="carousel-gradient"></div>
                            <div class="MainSlider">
                                <div class="Imgresize">
                                    <figure class="ImgViewer">
                                        <picture class="FixingRatio">
                                            <img src="Media/imgAll/slide-3.jpg" alt="" title="" class="img-fluid img100 ImgRatio">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>                    
                    </div>
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="popular">
                <div class="container">
                    <div class="MostPopular">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="content-gutter popular-title">
                                    <span>Most Popular</span>
                                    <a href="">
                                        <span>See all</span>
                                    </a>
                                </p>
                            </div> 
                            <div class="multiple-items">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/Khorkuto.jpg" alt="" title="Khorkuto" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Khorkuto</h2>
                                                <p class="content-rating">
                                                    <span>4.6</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/shoinuproo.jpg" alt="" title="Shoinu Proo" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Shoinu Proo</h2>
                                                <p class="content-rating">
                                                    <span>4.5</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/paltahowa.jpg" alt="" title="Palta Hawa" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Palta Hawa</h2>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/motimaster.jpg" alt="" title="Moti Masterer Meye" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Moti Masterer Meye</h2>
                                                <p class="content-rating">
                                                    <span>4.6</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/shoinuproo.jpg" alt="" title="Shoinu Proo" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Shoinu Proo</h2>
                                                <p class="content-rating">
                                                    <span>4.5</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/pori.jpg" alt="" title="Pori" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Pori</h2>
                                                <p class="content-rating">
                                                    <span>4.7</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="latestPart">
                <div class="container">
                    <div class="BestLatest">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="content-gutter latestPart-title">
                                    <span>Best & Latest</span>
                                    <a href="">
                                        <span>See all</span>
                                    </a>
                                </p>
                            </div> 
                            <div class="row-slider">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/shapod.jpg" alt="" title="Shapod" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Shapod</h2>
                                                <p class="content-rating">
                                                    <span>4.7</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/mukh.jpg" alt="" title="Mukh O Mukhosher Golpo" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Mukh O Mukhosher Golpo</h2>
                                                <p class="content-rating">
                                                    <span>4.5</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/lastfriday.jpg" alt="" title="Last Friday" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Last Friday</h2>
                                                <p class="content-rating">
                                                    <span>4.4</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/masterpaln.jpg" alt="" title="The Master Plan" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">The Master Plan</h2>
                                                <p class="content-rating">
                                                    <span>4.6</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/gora.jpg" alt="" title="Gora" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Gora</h2>
                                                <p class="content-rating">
                                                    <span>4.5</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/Nilacholey-Kiriti.jpg" alt="" title="Nilacholey Kiriti" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Nilacholey Kiriti</h2>
                                                <p class="content-rating">
                                                    <span>4.7</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="serisePart">
                <div class="container">
                    <div class="Mega Series Part">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="content-gutter serisePart-title">
                                    <span>Mega Series Natok</span>
                                    <a href="">
                                        <span>See all</span>
                                    </a>
                                </p>
                            </div> 
                            <div class="series-slider">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/boudour.jpg" alt="" title="Bou Dour" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Bou Dour</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>10</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/harkipte.jpg" alt="" title="Har Kipte" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Har Kipte</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>105</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/paltahowa.jpg" alt="" title="Palta Hawa" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Palta Hawa</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>14</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/tiniasben.jpg" alt="" title="Tini Asben" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Tini Asben</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>49</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/hollabaji.jpg" alt="" title="Hollabaji" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Hollabaji</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>64</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="Banner-Add d-flex justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="" target="_blank">
                                <img src="Media/imgAll/channels4_banner.jpg" alt="" title="Add" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="specialPart">
                <div class="container">
                    <div class="Special Part">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="content-gutter specialPart-title">
                                    <span>Special Of</span>
                                    <a href="">
                                        <span>Sikandar Box</span>
                                    </a>
                                </p>
                            </div> 
                            <div class="series-slider">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/biratmodel.jpg" alt="" title="Sikandar Box Ekhon Birat Model" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Sikandar Box Ekhon Birat Model</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>6</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/bandorban.jpg" alt="" title="Sikandar Box Ekhon Bandarban" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Sikandar Box Ekhon Bandarban</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>6</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/howaigari.jpg" alt="" title="Sikandar Box-er Hawai Gari" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Sikandar Box-er Hawai Gari</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>14</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/pagolpray.jpg" alt="" title="Sikandar Box Ekhon Pagol Praay" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Sikandar Box Ekhon Pagol Praay</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>3</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/onekboro.jpg" alt="" title="Sikandar Box Ekhon Onek Boro" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Sikandar Box Ekhon Onek Boro</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>64</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/biratmodel.jpg" alt="" title="Sikandar Box Ekhon Birat Model" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Sikandar Box Ekhon Birat Model</h2>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>6</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="movies">
                <div class="container">
                    <div class="AllMovie">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="content-gutter movies-title">
                                    <span>Movies</span>
                                    <a href="">
                                        <span>See all</span>
                                    </a>
                                </p>
                            </div> 
                            <div class="multiple-items">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/garilla.jpg" alt="" title="Guerrilla" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Guerrilla</h2>
                                                <p class="content-rating">
                                                    <span>4.6</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/dhakaattack.jpg" alt="" title="Dhaka Attack" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Dhaka Attack</h2>
                                                <p class="content-rating">
                                                    <span>4.5</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/chorabali.jpg" alt="" title="Chorabali" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Chorabali</h2>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/rajdhani.jpg" alt="" title="Rajdhani" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Rajdhani</h2>
                                                <p class="content-rating">
                                                    <span>4.2</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/monpura.jpg" alt="" title="Monpura" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Monpura</h2>
                                                <p class="content-rating">
                                                    <span>4.7</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/television.jpg" alt="" title="Television" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h2 class="Title">Television</h2>
                                                <p class="content-rating">
                                                    <span>4.8</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once("common/footer.php"); ?>
        <?php include_once("common/scrollBreaking.php"); ?>
        <?php echo $sJSjQuery; ?>
        <?php echo $sJSBootStrap; ?>
        <!--[if lt IE 9]>
        <?php echo $sJShtml5shiv; ?>
        <?php echo $sJSrespond; ?>
        <![endif]-->
        <?php echo $sJSEMM; ?>
        <script>
            $(document).ready(function() {

                var counters = $(".count");
                var countersQuantity = counters.length;
                var counter = [];

                for (i = 0; i < countersQuantity; i++) {
                    counter[i] = parseInt(counters[i].innerHTML);
                }

                var count = function(start, value, id) {
                    var localStart = start;
                    setInterval(function() {
                        if (localStart < value) {
                            localStart++;
                            counters[id].innerHTML = localStart;
                        }
                    }, 1);
                }

                for (j = 0; j < countersQuantity; j++) {
                    count(0, counter[j], j);
                }
            });
        </script>
        <div id="fb-root"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="5W80qaTR"></script>
        <script>
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 2
            });
        </script>
        <script>
            $('.series-slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1
            });
        </script>
        <script>
            $('.row-slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 3,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]
            });
        </script>
    </body>
</html>