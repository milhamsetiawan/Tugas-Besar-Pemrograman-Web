<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/jquery.dataTables.css"/>

    <title>Logistik!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Logistik</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Dashboard/');?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Dashboard/Order');?>">Order</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Dashboard/route');?>">Rute</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Dashboard/user');?>">User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Dashboard/updateResi ');?>">Update Resi</a>
        </li>
        </ul>
        <a style="color:white;" class="nav-link" href="#"><?php echo $this->session->userdata('fullname');?></a>
        <a href="<?php echo base_url('Dashboard/logout');?>" class="btn btn-danger my-sm-0">Logout</a>
    </div>
    </nav>