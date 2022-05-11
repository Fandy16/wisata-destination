<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wisata || Ya Kota Jember </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="icon" href="<?php echo base_url();?>assets/dist/images/logo_wj.ico" type="image/ico" />
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/highcharts.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/highcharts/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/highcharts/css/highcharts.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Merienda&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet"> 

  <link href="<?php echo base_url().'assets/slide/css/slider.css' ?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/slide/css/bootstrap.min.css' ?>">

</head>

<style type="text/css">
  
  .content-wrapper {
    min-height: calc(100vh - 101px);
    background-color: #e8fbff;
    z-index: 800;
  }

  /*HEADER MODAL*/
  .modal-header {
    background-color: #17a2b8;
    color: white;
  }

  /*HEADER TABEL*/
  .header-tabel {
    color:#fff;
    font-size: 11px;
    background-color: #337ab7;
  }

  /*HEADER TABEL*/
  .header-tabel-sub {
    color:#fff;
    font-size: 11px;
    background-color: #44ada8;
  }
  .header-tabel-num {
    color:#fff;
    font-size: 10px;
    background-color: #1d558682;
  }

  table {
      font-family: verdana, arial, sans-serif;
      font-size: 11px;
      color: #333333;
      border-width: 1px;
      border-color: #3A3A3A;
      border-collapse: collapse;
  }

  td {
    vertical-align: center;
  }

  table tr:hover td {
      cursor: pointer;
  }
  table tr:nth-child(even) td{
      background-color: #bfefd773;
  }
  table td {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #bfefd773;
      background-color: #ffffff;
  }

  .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #e8e8e8 !important;
    vertical-align: center !important;
  }

  /*SELECT2*/
  .select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 35px !important;
    user-select: none;
    -webkit-user-select: none;
  }

  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #738AE6 !important;
    border: 1px solid #045da9 !important;
    color: #ffffff !important;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px;
  }

  .box.box-purple {
    border-top-color: #5f5ca8;
  }

  .box.box-blue {
    border-top-color: #042fa5;
  }

  .box.box-blue-light {
    border-top-color: #0089ff;
  }

  .box.box-orange {
    border-top-color: #FF851B;
  }

  .box.box-maroon {
    border-top-color: #D81B60;
  }

  .box.box-olive {
    border-top-color: #3D9970;
  }

  .btn-purple {
    color: #fff;
    background-color: #5f5ca8;
    border-color: #5f5ca8;
  }

  .btn-blue {
    color: #fff;
    background-color: #042fa5;
    border-color: #042fa5;
  }

  .btn-blue-light {
    color: #fff;
    background-color: #0089ff;
    border-color: #0089ff;
  }

  .btn-orange {
    color: #fff;
    background-color: #FF851B;
    border-color: #FF851B;
  }

  .btn-maroon {
    color: #fff;
    background-color: #D81B60;
    border-color: #D81B60;
  }


  /*HEADER TEXT*/
  .title-text-success {
    background: #00a65a;
    color: white;
    padding: 7px;
    border-radius: 7px;
  }

  .title-text-olive {
    background: #3D9970;
    color: white;
    padding: 7px;
    border-radius: 7px;
  }

  .title-text-info {
    background: #00c0ef;
    color: white;
    padding: 7px;
    border-radius: 7px;
  }

  .title-text-warning {
    background: #f39c10;
    color: white;
    padding: 7px;
    border-radius: 7px;
  }

  .title-text-danger {
    background: #dd4a39;
    color: white;
    padding: 7px;
    border-radius: 7px;
  }

  .title-text-purple {
    background: #5e5ca8;
    color: white;
    padding: 7px;
    border-radius: 7px;
  }

  .title-text-blue-light {
    background: #0089ff;
    color: white;
    padding: 7px;
    border-radius: 7px;
  }

  .title-text-maroon {
    background: #d81b5f;
    color: white;
    padding: 7px;
    border-radius: 7px;
  }

  .title-text-blue {
    background: #042fa5;
    color: white;
    padding: 7px;
    border-radius: 7px;
  }

  .sweet-alert button.cancel:hover {
    background-color: #d73925;
  }

  .sweet-alert button.cancel {
    background-color: #d73925;
  }

  .sweet-alert button:hover {
    background-color: #12a6e7;
  }

  .sweet-alert button {
    background-color: #12a6e7;
    color: white;
    border: 0;
    box-shadow: none;
    font-size: 17px;
    font-weight: 500;
    -webkit-border-radius: 4px;
    border-radius: 5px;
    padding: 10px 32px;
    margin: 26px 5px 0 5px;
    cursor: pointer;
  }

  .nav-tabs-custom>.nav-tabs {
    margin: 0;
    border-bottom-color: #337ab7;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
  }

  .nav-tabs-custom>.nav-tabs>li.active>a {
    border-top-color: transparent;
    border-left-color: #337ab7;
    border-right-color: #337ab7;
  }

  .nav-tabs-custom>.nav-tabs>li.active>a, .nav-tabs-custom>.nav-tabs>li.active:hover>a {
    background-color: #ffffff;
    color: #333333;
    font-weight: bold;
  }

  a {
    color: #738ae6;
  }

  a:hover, a:active, a:focus {
    outline: none;
    text-decoration: none;
    color: #3c3e9e;
  }

</style>
