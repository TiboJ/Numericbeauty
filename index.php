<?php 
require_once('config/functions.php');
require_once('config/items.php'); 
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Numericbeauty - Tibo Juge, Infographiste & WebDesigner</title>
        <meta name="description" content="NumericBeauty, l'agence web nouvelle génération ! Création web et mobile, solutions print et digital." />
        <meta name="viewport" content="width=800, initial-scale=1">
        <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="style/text.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="style/mobile-text.css" media="screen" type="text/css"/>
        <!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]--> 
        <!--[if lte IE 9]> 
<link rel="stylesheet" href="style/ie8.css" media="screen" type="text/css"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <![endif]--> 
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico" />
        <link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" media="screen" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Crafty+Girls' rel='stylesheet' type='text/css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
        <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://www.numericbeauty.com",
  "logo": "http://www.numericbeauty.com/style/img/logo.png",
  "sameAs" : [ "https://www.facebook.com/numericbeauty",
    "https://twitter.com/TiboJuge"] 
}
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58577950-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <?php /* MENU */ ?>
        <header id="drag" class="screen">
            <img class="draggy" src="style/img/drag.gif" alt="dragndrop">
            <nav>
                <a class="logotop" href="#ct1"></a>
                <ul id="nav_n1">

                    <li><a href="#ct2">Nous</a></li>

                    <li id="you"><a  href="#ct3">Vous</a>
                    </li>

                    <li><a href="#ct4">Ils</a></li>				
                </ul>			
            </nav>
        </header>

        <?php /* ACCUEIL */ ?>
        <div class="main content">
            <?php require('pages/home.php'); ?>
        </div>
        <div class="cb"></div>

        <?php /* NOUS */ ?>
        <div class="content">
            <?php require('pages/nous.php'); ?>
        </div>
        <div class="cb"></div>

        <?php /* ILS */ ?>
        <div class="content">
            <?php require('pages/ils.php'); ?>
        </div>
        <div class="cb"></div>

        <?php /* REFERENCES, CONTACT, MAP */ ?>
        <div class="content">
            <?php require('pages/ref_contact.php'); ?>
        </div>
        <script type="text/javascript" src="js/min/bootstrap-filestyle.min.js"></script>
        <script type="text/javascript" src="js/cover-video.js"></script>
        <script type="text/javascript" src="js/min/all.min.js"></script>
    </body>
</html>
