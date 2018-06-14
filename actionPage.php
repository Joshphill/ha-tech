<?php

session_start();


if(empty($_SESSION['total']))
    $_SESSION['total'] = 0;

$total = $_SESSION['total'];

if(isset($_POST['submit'])){
    $total = $total + $_POST['Camount'];
    $_SESSION['total'] = $total;
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Chrsitmas</title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Savings</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


    <div class="jumbotron">
        <h1 class="text-center">Savings Dashboard</h1>
        <h2 class="text-center">Your Current total saved is</h2>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="icon-big icon-success text-center">
                                    <i class="fa fa-user fa-4x"></i>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="numbers">
                                    <p>Revenue</p>
                                    $1,345
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="icon-big icon-success text-center">
                                    <i class="fa fa-user fa-4x"></i>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="numbers">
                                    <p>Revenue</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="icon-big icon-success text-center">
                                    <i class="fa fa-user fa-4x"></i>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="numbers">
                                    <p>Revenue</p>
                                    $1,345
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</head>
<body>
    <div class="row">
        <div class="card col-4">
            <div class="card-header">
                <h2 class="card-title text-center">Christmas Savings</h2>
                <div class="card-body"> 
                    <form action="" class="form-horizontal" method="post">
                        <input class="form-control" type="number" name="Camount" placeholder="Save it">
                        <br>
                        <br>
                        <input class="form-control" type="date" name="Cdate">
                        <br>
                        <br>
                        <input class="form-control" type="text" name="who" placeholder="Who saved it?">
                        <input type="submit" name="submit">
                    </form>      
                </div>
            </div>       
        </div>
        <div class="card col-4">
            <div class="card-header">
                <h2 class="card-title text-center">Holiday Savings</h2>
                <div class="card-body">
                    <form action="" class="form-center" method="post">
                        <input class="form-control" type="number" name="Hamount" placeholder="Save it">
                        <br>
                        <br>
                        <input class="form-control" type="date" name="Hdate">
                        <br>
                        <br>
                        <input class="form-control" type="text" name="who" placeholder="Who saved it?">
                        <br>
                        <div class="row pull-right">
                            <input class="btn btn-primary pull-right" type="submit" name="submit">
                        </div>
                        
                    </form>
                            
                </div>
            </div>       
        </div>
        <div class="card col-4">
            <div class="card-header">
                <h2 class="card-title text-center">General Savings</h2>
                <div class="card-body">  
                    <form action="" class="form-center" method="">
                        <input class="form-control" type="number" name="Gamount" placeholder="Save it">
                        <br>
                        <br>
                        <input class="form-control" type="date" name="Cdate">
                        <br>
                        <br>
                        <input class="form-control" type="text" name="who" placeholder="Who saved it?">
                        <input type="submit" name="submit">
                    </form>      
                </div>
            </div>       
        </div>
    </div>

</body>
</html>

