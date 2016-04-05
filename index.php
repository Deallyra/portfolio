<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenue</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" charset="utf-8">

        <link rel="stylesheet" href="css/styles.less.css" media="screen" charset="utf-8">

        <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--<script src="js/script.js"></script>-->
    </head>
    <body>
        <div class="visible-xs">XS</div>
        <div class="visible-sm">SM</div>
        <div class="visible-md">MD</div>
        <div class="visible-lg">LG</div>

        <div class="main-col">
            <div class="col-aside">
                <?php require_once("fonctions.php"); ?>

                <aside>
                    <nav>
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href="">Portfolio</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </nav>

                    <section class="coords">
                        <h2>Coordonnées et infos</h2>
                        <ul>
                            <li><strong>Laura AGRAFEIL</strong></li>
                            <li><span class="glyphicon glyphicon-home"></span>6a route de Klingenthal<div class="cp">67530 OTTROTT</div></li>
                            <li><span class="glyphicon glyphicon-earphone"></span>06.32.31.80.19</li>
                            <li><span class="glyphicon glyphicon-send"></span><a href="mailto:laura.agrafeil@gmail.com">laura.agrafeil@gmail.com</a></li>
                            <li><span class="glyphicon glyphicon-thumbs-up"></span>Permis B et véhiculée</li>
                        </ul>
                    </section>
                </aside>
            </div>
            <div class="col-main">
                <?php include("header.php"); ?>
                <main>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <?php include("experiences.php"); ?>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <?php include("competences_dev.php"); ?>

                            <?php include("logiciels.php"); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <?php include("formations.php"); ?>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <?php include("langues.php"); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <?php include("autres_competences.php"); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <?php include("loisirs.php"); ?>
                        </div>
                    </div>
                </main>
            </div>

            <?php include("footer.php"); ?>
    </body>
</html>
