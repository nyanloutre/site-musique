<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de la musique de Meyenheim">
    <meta name="author" content="Paul TREHIOU">

    <title>Musique fraternité - Harmonie Intercommunale</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="icon" type="image/jpg" href="img/favicon.jpg" />
    
    <!-- Piwik -->
    <script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
    var u="//musique-meyenheim.fr/analytics/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
    </script>
    <noscript><p><img src="//musique-meyenheim.fr/analytics/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->

</head>

<body id="page-top">

    <?php include('navbar.html'); ?>

    <header style="background-image: url('img/harmonie.jpg')">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" style="text-shadow: 0px 0px 7px #000;">Harmonie intercommunale Centre Haut-Rhin</br>Des airs traditionnels ou classiques aux musiques actuelles</h1>
                <hr>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Plus d'informations</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <h2 class="section-heading">Dirigée par Mimo ILIEV, l’harmonie intercommunale réunit des musiciens de tous les âges dans une ambiance conviviale.</h2>
                    <hr class="light">
                    <p class="text-faded">Le répertoire est des plus variés, toujours renouvelé, suivant les services et évènements musicaux prévus, passant des airs classiques et traditionnels aux musiques les plus actuelles.</p>
                    <p class="text-faded">Les répétitions ont lieu le vendredi de 20h à 22h à Oberhergheim dans un local dédié mis à disposition par la Commune d’Oberhergheim.</p>
                    <p class="text-faded">Les prestations musicales sont tout aussi variées, entre Cérémonies et animations diverses, jusqu’aux concerts, véritables temps forts. Un concert de printemps se tient chaque année à Oberhergheim.</p>
                    <p class="text-faded">Un concert-spectacle a lieu le dernier samedi de novembre tous les deux ans à Meyenheim intitulé Music’IllFest, avec à chaque fois des découvertes proposées au public, dans une ambiance des plus festives.</p>
                    <p class="text-faded">D’autres concerts ponctuent l’année, notamment en partenariat avec l’Harmonie municipale de Kembs ou encore la Chorale d’Oberhergheim.</p>
                    <p class="text-faded">L’harmonie intercommunale est née de la réunion des harmonies de Meyenheim, Oberhergheim et Réguisheim mais est ouverte à tout musicien, notamment les jeunes musiciens après quelques années de pratiques mais aussi les adultes souhaitant reprendre une activité musicale après quelques années de pause.</p>
                    <p class="text-faded">L’Harmonie intercommunale est financée par la Communauté de Communes Centre Haut-Rhin.</p>
                </div>
                <img src="img/IllFest_2013_Corentin_Christophe.jpg" class="col-lg-6 img-responsive">
            </div>
        </div>
    </section>

    <?php include('contact.html'); ?>
    <?php include('footer.html'); ?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
