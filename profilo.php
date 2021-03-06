<?php include "php/api.php"; logged_or_die(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aulapp - Profilo</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <!-- Optional theme -->
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="./styles/styles.css" </head>

    <body>
        <div class="container">
            <div class="header">

                <h2 class="text-muted brand" style="text-align: center">Aulapp</h2>

                <nav class="padLeft">
                    <button type="button" class="btn btn-default btnLeft visible-xs pull-left"><a href="home.php"><span class="glyphicon bianco glyphicon-home"></a>
                    </button>
                    <button type="button" class="btn btn-default btnLeft visible-xs pull-right"><a href="index.php"><span class="glyphicon bianco glyphicon-log-out"></a>
                    </button>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="hidden-xs"><a href="home.php"><span class="glyphicon bianco glyphicon-home"></span>
                        <p class="bianco">Home</p>
                        </a>
                        </li>

                        <li role="presentation" class="hidden-xs"><a href="index.php"><span class="glyphicon bianco glyphicon-log-out"></span><p class="bianco"> Logout</p> </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="center-profile">
                <div class="row">

                    <img class="img-circle" src="./img/ricalco-circle.png" style="height: 140px;">

                </div>

                <div class="row-marketing">
                    <h3>Brunella Lorenz</h3>
                </div>
                <hr>
                <div class="row-marketing">
                    <label class="lblPunti">Punti 25</label>
                </div>

                <div class="row-marketing">
                    <img class="img" src="./img/graph.png" style="height: 180px;">
                </div>

                <div class="row-marketing">
                    <table align="center" class="tblLikes">
                        <tr>
                            <th class="leftTh"><span class="glyphicon glyphicon-thumbs-up"></span>46</th>
                            <th class="rightTh"><span class="glyphicon glyphicon-thumbs-up"></span>22</th>
                        </tr>
                    </table>

                </div>

                <footer class="footer">
                    <p>Brunella © Company 2014</p>
                </footer>
            </div>
        </div>
        <!-- /.container -->

        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>

</html>
