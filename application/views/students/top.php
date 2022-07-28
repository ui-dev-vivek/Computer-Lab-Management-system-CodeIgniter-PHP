<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>Home|Lab Info</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        swal("Hello world!");
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="container-fluid">

    <div class="row tempting-azure-gradient border-top fixed-top">
        <div class="col-3 pt-2 text-center ">
            <h6 style="line-height:1px;" class="h3">&nbsp;&nbsp;<i class="fa fa-laptop" aria-hidden="true"></i>
                Lab Info</h6>
            <small>Student Portal</small>
        </div>
        <div class="col-6 border-left border-info  pt-2">
            <h6 class="h6"> <?= $getAll[0]->name; ?></h6>
            <p><b> <?= $getAll[0]->sid; ?>- <?= $getAll[0]->branch; ?> - <?= $getAll[0]->year; ?> Year</b></p>
        </div>
        <div class="col-3  pt-3">
            <a class="btn btn-danger btn-sm" href="<?= base_url() . 'Auth/logout'; ?>">Logout</a>
        </div>
    </div>
    <br><br><br><br>