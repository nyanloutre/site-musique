<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de la musique de Meyenheim">
    <meta name="author" content="Paul TREHIOU">
    <meta name="google-site-verification" content="vfIxnQkU6NJ__BiBJu2OXPP4JlijXV5Iq2R4Yskf3Ss" />

    <title>Musique fraternité</title>

    <?php include('include_head.html'); ?>
    
    <style>
        .portfolio-box {
            overflow: hidden;
            max-height: 350px;
        }
        .portfolio-box img {
            max-height: 350px;
        }
    </style>

</head>

<body id="page-top">

    <?php include('navbar.html'); ?>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" style="text-shadow: 0px 0px 7px #000; margin-bottom: 300px;">Musique fraternité</br>Meyenheim</h1>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Plus d'informations</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">5 raisons de mieux nous connaître</h2>
                    <hr class="light">
                    <p class="text-faded">De nombreux évènements et activités organisés tout au long de l’année, un comité directeur bénévole dynamique pour faire vivre une association presque centenaire, une collaboration avec les Musiques voisines au travers de l’Harmonie intercommunale, une école de musique s’appuyant sur des professeurs qualifiés au sein d’une pédagogie basée sur la pratique instrumentale, une salle de musique entièrement rénovée et fonctionnelle disponible à la location.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="harmonie.php" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    L’harmonie intercommunale, on y joue de tout
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="ecole.php" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    l’École de Musique, ce n’est pas que pour les enfants…mais aussi
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="evenements.php" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Des évènements musicaux, des lotos…et mêmes des puces
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="direction.php" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    La direction de l’association, du pur jus de bénévolat
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="salle.php" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    La salle, entre scène et cuisine, pour tous vos évènements festifs
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="partenaires.php" class="portfolio-box">
                        <img src="img/partenaires/vialis.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Partenaires
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include('contact.html'); ?>
    
    <?php include('footer.html'); ?>

    <?php include('include_foot.html'); ?>

</body>

</html>
