<?php
include_once('./libs/globals.php');

if(isset($_REQUEST['page'])) $page = $_REQUEST['page'];
else $page = '';
?>
<html>
    
    <head>
        <!-- <Charset UTF-8 (alternativ iso-8859-1)> -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <Seitentitel> -->
        <title>Tut - Forum</title>

        <!-- <Bootstrap Stylesheet> -->
        <link href="./frontend/css/bootstrap.min.css" rel="stylesheet" />

        <!-- <Bootstrap Stylesheet (Superhero)> -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css" rel="stylesheet" />

        <!-- <Fontawesome Stylesheet> -->
        <link href="./frontend/css/font-awesome.min.css" rel="stylesheet" />

        <!-- <HTML5 Elemente für IE> -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- <Self Stylesheet> -->
        <link href="./frontend/css/self.css" rel="stylesheet" />
    </head>
    
    <body>
        <!-- <Navigation> -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Projekt Name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Startseite</a></li>
                        <li><a href="index.php?page=newCat">Kategorie</a></li>
                        <li><a href="index.php?page=newBoard">Foren</a></li>
                        <li><a href="index.php?page=newThread">Themen</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <!-- <Content Container> -->
        <div class="container fMain">
            <h1>Tut - Forum</h1>
            <p class="lead">Wir programmieren ein Forum</p>
        </div>
        <!-- /.container -->

        <?php
            $pages = new Page($page);
        ?>
        
        <footer>
            <div class="container">
                <div class="row">
                    <hr />
                    <div class="col-lg-12">
                        <div class="col-md-8">
                            <a href="#">Impressum</a> &middot; <a href="#">Kontakt</a> &middot; <a href="#">Datenschutz</a>
                        </div>
                        <div class="col-md-4">
                            <p class="muted pull-right">&copy; 2017 Projekt Name &bull; All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- <jQuery Javascript> -->
        <script src="./frontend/js/jquery-3.1.1.min.js"></script>
        <!-- <Bootstrap Javascript> -->
        <script src="./frontend/js/bootstrap.min.js"></script>
    </body>

</html>