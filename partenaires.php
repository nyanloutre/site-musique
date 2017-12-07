<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de la musique de Meyenheim">
    <meta name="author" content="Paul TREHIOU">

    <title>Musique fraternité - Partenaires</title>

    <?php include('include_head.html'); ?>
    
        <style>
        @media (min-width: 768px) {
            .navbar-default .nav > li > a,
            .navbar-default .nav > li > a:focus {
                color: #222222;
            }
            .navbar-default .nav > li > a:hover,
            .navbar-default .nav > li > a:focus:hover {
                color: #F05F40;
            }
        }
        
        #partenaires {
            overflow: hidden;
        }
        
    </style>

</head>

<body id="page-top">

    <?php include('navbar.html'); ?>
    
    <section id="partenaires">
        <h1 class="text-center">Nos partenaires</h1>
        <a href="https://www.vialis.tm.fr/particulier/cable/internet" class="col-sm-6 col-md-4"><img class="img-responsive" src="img/partenaires/vialis.jpg"></a>
    </section>

    <?php include('footer.html'); ?>

    <?php include('include_foot.html'); ?>

</body>

</html>
