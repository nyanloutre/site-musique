<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de la musique de Meyenheim">
    <meta name="author" content="Paul TREHIOU">

    <title>Musique fraternité - La Salle</title>

    <?php include('include_head.html'); ?>

</head>

<body id="page-top">

    <?php include('navbar.html'); ?>

    <header style="background-image: url('img/salle.jpg')">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" style="text-shadow: 0px 0px 7px #000; margin-bottom: 300px;">La salle de l’association<br>pour tous vos évenements festifs</h1>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Plus d'informations</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Adresse de la salle</h2>
                    <hr class="light">
                    <p class="text-faded">10, rue de l'Ill<br>68890 MEYENHEIM</p>
                    <h2 class="section-heading">Présentation de la salle</h2>
                    <hr class="light">
                    <p class="text-faded">Une salle principale pour 20 à 80 personnes assises à table</p>
                    <p class="text-faded">Une scène pour un DJ, un orchestre, une projection…</p>
                    <p class="text-faded">Piano droit à disposition sur demande</p>
                    <p class="text-faded">Une cuisine équipée (plaques, fours, lave-verre, vaisselle), ouverte vers la salle et vers une salle annexe de 25m2 ;</p>
                    <p class="text-faded">Un espace vert privé engazonné de 100m2 sous 2 tilleuls à disposition à côté de la salle pour apéritif extérieur ou barbecue ;</p>
                    <p class="text-faded">Salle entièrement rénovée en 2015-2016 avec notamment une mise aux normes accessibilité (notamment des sanitaires). Travaux en partie financés grâce aux subventions de la Commune de Meyenheim et du Conseil Départemental du Haut-Rhin</p>
                    <h2 class="section-heading">Mise à disposition pour évènements privés</h2>
                    <hr class="light">
                    <h3>Tarifs valables jusqu'en aout 2017</h3>
                    <ul class="list-group" style="color: #333;">
                            <li class="list-group-item">Mise à disposition “week-end” (mariage, communion, anniversaire,…) : 130€
                            <li class="list-group-item">Réunion (1/2 journée à 1 journée) : 50 € 
                            <li class="list-group-item">+ Charges éventuelles (mise à disposition de la cuisine, vaisselle, chauffage,…)
                            <li class="list-group-item">Caution : 150€
                        </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="carousel-salle" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-salle" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-salle" data-slide-to="1"></li>
        <li data-target="#carousel-salle" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/salle/01.jpg" alt="Photo interieur salle">
        </div>
    </div>
    
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-salle" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-salle" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
    </section> <!-- Carousel -->
    
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <hr class="primary">
                    <p>Céline TREHIOU</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>07 68 40 11 38</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-at fa-3x sr-contact"></i>
                    <p><a href="mailto:contact@musique-meyenheim.fr">salle@musique-meyenheim.fr</a></p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <i class="fa fa-envelope fa-3x sr-contact"></i>
                    <p>Mme TREHIOU Céline</br>4 rue St Michel</br>68890 MEYENHEIM</p>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.html'); ?>

    <?php include('include_foot.html'); ?>

</body>

</html>
