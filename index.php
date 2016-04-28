<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, height=device-heightinitial-scale=1">
        
        <title>Bienvenue</title>

        <meta name="robots" content="noindex, nofollow">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" charset="utf-8">

        <link rel="stylesheet" href="css/styles.less.css" media="screen" charset="utf-8">

        <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <!--<div class="visible-xs">XS</div>
        <div class="visible-sm">SM</div>
        <div class="visible-md">MD</div>
        <div class="visible-lg">LG</div>-->

        <div class="container-fluid">
            <div class="main-col">
                <!--<div class="row">-->
                    <div class="col-aside-left">
                        <?php include("aside.php"); ?>
                    </div>

                    <main>
                        <div class="col-main">
                            <?php //include("header.php"); ?>

                                <?php include("experiences.php"); ?>

                                <?php include("formations.php"); ?>

                                <?php include("autres_competences.php"); ?>
                        </div>

                        <div class="col-aside-right">
                            <?php include("competences_dev.php"); ?>

                            <?php include("logiciels.php"); ?>

                            <?php include("langues.php"); ?>

                            <?php include("loisirs.php"); ?>
                        </div>
                    </main>
                <!--</div>-->
            </div>

            <?php //include("footer.php"); ?>
            <?php include("modal.php"); ?>
    </body>
</html>
