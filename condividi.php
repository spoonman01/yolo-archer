<?php
    include "php/api.php";
    logged_or_die();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Condividi</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <!-- Optional theme -->
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="./css/bootstrap-datetimepicker.min.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active hidden-xs"><a href="#">Add</a>
                    </li>
                    <li role="presentation" class="hidden-xs"><a href="#">Profile</a>
                    </li>
                </ul>

                <h3 class="text-muted brand" style="text-align: center">Aulapp</h3>
            </nav>
        </div>
        <div>
            <form id="numericinput" class="form-horizontal" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                <div class=form-group>
                    <label class="col-sm-2 control-label">Zona</label>
                    <div class="col-sm-5 col-md-8">
                        <select class=" form-control">
                            <option value="povo1">Povo 1</option>
                            <option value="povo2">Povo 2</option>
                        </select>
                    </div>
                </div>
                <div class=form-group>
                    <label class="col-sm-2 control-label">Aula</label>
                    <div class="col-sm-5 col-md-8">
                        <select class="form-control">

                            <?php
                                $arrrgh = get_edifici();
                                $s = "";
                                foreach ($arrrgh as &$value) {
                                    $s = $s.'<option value="$value">$value</option>';
                                }
                                echo s;
                            ?>
                        </select>
                    </div>
                </div>
                <div class=form-group>
                    <label class="col-sm-2 control-label">Aula</label>
                    <div class="col-sm-5 col-md-8">
                        <select class="form-control">
                            <option value="a101">A101</option>
                            <option value="a102">A102</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label ">Number of</label>
                    <div class="col-sm-5 col-md-8 inputContainer">
                        <input class="form-control" name="number" type="number" min="0" placeholder="People in the room" data-bv-integer-message="The value is not an integer" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Notes</label>
                    <div class="col-sm-5 col-md-8">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Share</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
        </div>

        <footer class="footer">
            <p>Brunella © Company 2014</p>
        </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#numericinput').bootstrapValidator();

        });
    </script>
</body>

</html>

