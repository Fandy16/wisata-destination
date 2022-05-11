<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wisata || Ya Kota Jember</title>

    <link href="<?php echo base_url();?>assets/dist/images/logo_wj.ico" rel="icon">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/fame/asset/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="<?php echo base_url();?>assets/fame/css/font-awesome.min.css" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="<?php echo base_url();?>assets/fame/css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fame/css/owl.carousel.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fame/css/owl.theme.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fame/css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/fame/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/fame/css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fame/css/color/green.css">
    
    
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fame/css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fame/css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fame/css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fame/css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fame/css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fame/css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="<?php echo base_url();?>assets/fame/js/modernizr.custom.js"></script>

    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">
    
    
    <!-- Styleswitcher
================================================== -->
        <!-- <div class="colors-switcher">
          <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>        
            <ul class="colors-list">
              <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
              <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
              <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
              <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>
              <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
              <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>
            </ul>
        </div>   -->
<!-- Styleswitcher End
================================================== -->


<style type="text/css">
    
    .call-to-action {
        background: url(../assets/wisata_slide_home/jfc-6.jpg) !important;
        background-attachment: fixed;
        background-size: cover;
        background-position: 50% 90%;
        color: #fff;
        text-align: center;
        padding: 80px 0;
    }

    .pricing-section {
        padding: 80px 0;
        background: url(../assets/wisata_slide_home/jfc-5.jpg) !important;
        background-attachment: fixed;
        background-size: cover;
        background-position: 50% 50%;
    }

    .contact {
        background: url(../assets/wisata_slide_home/kantor-bupati.jpg) !important;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        padding-top: 80px;
        //padding-bottom: 100px;
    }

    .footer-wj-info {
        color: #fff;
        padding: 20px 30px;
        margin-top: 80px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -o-border-radius: 3px;
        border-radius: 10px;
        border-style: solid;
        border-width: 2px;
        border-color: #edf125;
    }

    .portfolio-caption a.link-1 i {
        left: 45%;
    }

    .modal-backdrop.in {
        filter: alpha(opacity=50);
        opacity: .0 !important;
    }

</style>

<script type="text/javascript">
    
    function lihatDetail(kode_wis, kode_gbr) {

        $('#kode_wisata').val(kode_wis);
        $('#kode_gambar').val(kode_gbr);

        $('#modal_det_wisata').modal('show');

        jQuery.ajax({
          type: "POST",
          url: "<?php echo base_url() ?>wisata_home/lihatDetailGaleri", 
          type: "POST",
          data:  {
              kode_wisata : kode_wis,
              kode_gambar : kode_gbr,
          },
          // dataType: 'json',
          success: function (data) {
            $('#detail_glr').html(data);

          },
          error: function (xhr,status,error) {
            // swal({
            //   title: "Data tidak ditemukan!",
            //   text: "Silahkan cek nomor yang Anda input",
            //   icon: "error",
            // });
          }
      });

    }

    function lihatDetailTentang(id_jbr) {

        $('#modal_det_tentangjbr').modal('show');

        jQuery.ajax({
          type: "POST",
          url: "<?php echo base_url() ?>wisata_home/lihatDetailTentangJbr", 
          type: "POST",
          data:  {
              id_jbr : id_jbr,
              // kode_gambar : kode_gbr,
          },
          // dataType: 'json',
          success: function (data) {
            $('#detail_tentng_jbr').html(data);

          },
          error: function (xhr,status,error) {
            // swal({
            //   title: "Data tidak ditemukan!",
            //   text: "Silahkan cek nomor yang Anda input",
            //   icon: "error",
            // });
          }
      });

    }

    function lihatDetailWisata(id_gbr) {

        $('#modal_det_wisata_jbr').modal('show');

        jQuery.ajax({
          type: "POST",
          url: "<?php echo base_url() ?>wisata_home/lihatDetailWisataJember", 
          type: "POST",
          data:  {
              id_gbr : id_gbr,
              // kode_gambar : kode_gbr,
          },
          // dataType: 'json',
          success: function (data) {
            $('#detail_wisata_jbr').html(data);

          },
          error: function (xhr,status,error) {
            // swal({
            //   title: "Data tidak ditemukan!",
            //   text: "Silahkan cek nomor yang Anda input",
            //   icon: "error",
            // });
          }
      });

    }

    function lihatDetailKuliner(id_gbr_kulin) {

        $('#modal_det_kuliner_jbr').modal('show');

        jQuery.ajax({
          type: "POST",
          url: "<?php echo base_url() ?>wisata_home/lihatDetailKuliner", 
          type: "POST",
          data:  {
              id_gbr_kulin : id_gbr_kulin,
              // kode_gambar : kode_gbr,
          },
          // dataType: 'json',
          success: function (data) {
            $('#detail_kuliner_jbr').html(data);

          },
          error: function (xhr,status,error) {
            // swal({
            //   title: "Data tidak ditemukan!",
            //   text: "Silahkan cek nomor yang Anda input",
            //   icon: "error",
            // });
          }
      });

    }

</script>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" style="font-size: 21px; font-weight: bold; text-shadow: 4px 3px 3px black;" href="#page-top">Wisata <strong style="color: #edf125;">J</strong><strong style="color: #edf125;">ember</strong></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#galeri">Galeri</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about-us">Tentang Jember</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#wisata-favorite">Wisata Favorite</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#daftar-wisata">Daftar Wisata</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#daftar-kuliner">Daftar Kuliner</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#feature">Feature</a>
                    </li> -->
                    <!-- <li>
                        <a class="page-scroll" href="#service">Services</a>
                    </li> -->
                    <!-- <li>
                        <a class="page-scroll" href="#testimonial">Testimonials</a>
                    </li> -->
                    <!-- <li>
                        <a class="page-scroll" href="#partner">Partner</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    
    
    
    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <div class="carousel-inner">
                <?php 
                    $i=0;
                    foreach ($daftarSlideUtama->result() as $utama) {

                    if ($i == 0){                         
                 ?>
                    <div class="item active">
                        <img class="img-responsive" src="<?php echo base_url('assets/wisata_slide_home/'.$utama->gbr_slide);?>" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h1 class="animated3">
                                    <span><?php echo $utama->nm_slide;?></span>
                                </h1>
                                <p class="animated2"><?php echo $utama->ket_slide;?></p> 
                                <a href="#feature" class="page-scroll btn btn-primary animated1">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="item">
                        <img class="img-responsive" src="<?php echo base_url('assets/wisata_slide_home/'.$utama->gbr_slide);?>" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h1 class="animated3">
                                    <span><?php echo $utama->nm_slide;?></span>
                                </h1>
                                <p class="animated2"><?php echo $utama->ket_slide;?></p> 
                                <a href="#feature" class="page-scroll btn btn-primary animated1">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php
                        } $i++; 
                    }
                ?>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    
    
    <!-- Start Feature Section -->
        <section id="feature" class="feature-section">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-magic"></i>
                            <div class="feature-content">
                                <h4>Web Design</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-gift"></i>
                            <div class="feature-content">
                                <h4>Graphics Design</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-wordpress"></i>
                            <div class="feature-content">
                                <h4>Wordpress Theme</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-plug"></i>
                            <div class="feature-content">
                                <h4>Wordpress Plugin</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            
            </div>
        </section>
        <!-- End Feature Section -->
    
    
    <!-- Start Call to Action Section -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h1>Libero tempore soluta nobis est eligendi</br> optio cumque nihil impedit minus id quod maxime </br>placeat facere possimus, omnis voluptas assumenda est</h1>
                    <button type="submit" class="btn btn-primary">Buy This Template</button> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->
    
    
    
    <!-- Start Daftar Galeri Section -->
        <section id="galeri" class="portfolio-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Daftar Galeri</h3>
                            <p>Nikmati Keindahan Alam Yang Masih Asri disetiap Lokasi Wisata</p>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                        <!-- Start Daftar Galeri Wisata -->
                        <ul id="portfolio-list">
                            <?php 
                                $i=0;
                                foreach ($lihatDaftarGaleri->result() as $galeri) {

                                if ($i == 0){                         
                            ?>
                                <li>
                                    <div class="portfolio-item">
                                        <img style="width: 400px; height: 320px;" src="<?php echo base_url('assets/wisata_photo/'.$galeri->nm_gbr);?>" class="img-responsive" alt="" />
                                        <div class="portfolio-caption">
                                            <h4><?php echo $galeri->nm_wisata;?></h4>
                                            <a onclick="lihatDetail(<?php echo $galeri->kd_wisata;?>, <?php echo $galeri->id_gbr;?>)" class="link-1"><i class="fa fa-magic"></i></a>
                                            <!-- <a href="#" class="link-2"><i class="fa fa-link"></i></a> -->
                                        </div>
                                    </div>
                                </li>
                            <?php }else{ ?>
                                <li>
                                    <div class="portfolio-item">
                                        <img style="width: 400px; height: 320px;" src="<?php echo base_url('assets/wisata_photo/'.$galeri->nm_gbr);?>" class="img-responsive" alt="" />
                                        <div class="portfolio-caption">
                                            <h4><?php echo $galeri->nm_wisata;?></h4>
                                            <a onclick="lihatDetail(<?php echo $galeri->kd_wisata;?>, <?php echo $galeri->id_gbr;?>)" class="link-1"><i class="fa fa-magic"></i></a>
                                            <!-- <a href="#" class="link-2"><i class="fa fa-link"></i></a> -->
                                        </div>
                                    </div>
                                </li>
                            <?php
                                    } $i++; 
                                }
                            ?>
                        </ul>

                        <!-- End Daftar Galeri Wisata -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Daftar Galeri Section -->

        <!-- Modal Detail Diagnosa-->
        <div class="modal fade" id="modal_det_wisata" role="dialog">
          <div class="modal-dialog modal-lg">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Detail Galeri</h4>
              </div>
              <div class="modal-body" style="margin-bottom: 30px;">
                <div class="row">
                    <div id="detail_glr" name="detail_glr"></div>
                </div>
              </div>
              <div class="modal-footer" style="padding-top: 15px; padding-right: 15px;">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-fw fa-lg fa-close'></i>Tutup</button>
              </div>
            </div>
            
          </div>
        </div>
    
    <!-- Start About Us Section -->
    <section id="about-us" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Tentang Jember</h3>
                            <p style="font-size: 14px;"><strong>Kabupaten Jember</strong> adalah kabupaten di Provinsi Jawa Timur, Indonesia yang beribu kota di Jember. Kabupaten ini berbatasan dengan Kabupaten Probolinggo dan Kabupaten Bondowoso di utara, Kabupaten Banyuwangi di timur, Samudera Hindia di selatan, dan Kabupaten Lumajang di barat. Kabupaten Jember terdiri dari 31 kecamatan.</p>
                        </div>
                </div>
            </div>
            <div class="row">

                <?php 
                    $i=0;
                    foreach ($aboutMe->result() as $tentang_jember) {

                    if ($i == 0){                         
                ?>

                    <div class="col-md-4">
                        <div class="welcome-section text-center">
                            <center><img style="width: 350px; height: 250px;" src="<?php echo base_url('assets/wisata_slide_home/profile-jember/'.$tentang_jember->nm_gbr_jbr);?>" class="img-responsive" alt=".."></center>
                            <h4><?php echo $tentang_jember->nm_jbr;?></h4>
                            <div class="border"></div>
                            <p style="text-align: center;"><?php echo substr($tentang_jember->ket_jbr,0, 130);?> ....</p>
                            <a class="btn btn-primary" onclick="lihatDetailTentang(<?php echo $tentang_jember->id_jbr;?>)">Read More</a>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="col-md-4">
                        <div class="welcome-section text-center">
                            <center><img style="width: 350px; height: 250px;" src="<?php echo base_url('assets/wisata_slide_home/profile-jember/'.$tentang_jember->nm_gbr_jbr);?>" class="img-responsive" alt=".."></center>
                            <h4><?php echo $tentang_jember->nm_jbr;?></h4>
                            <div class="border"></div>
                            <p style="text-align: center;"><?php echo substr($tentang_jember->ket_jbr,0, 130);?> ....</p>
                            <a class="btn btn-primary" onclick="lihatDetailTentang(<?php echo $tentang_jember->id_jbr;?>)">Read More</a>
                        </div>
                    </div>
                <?php
                        } $i++; 
                    }
                ?>
                
            </div>
            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="<?php echo base_url();?>assets/fame/images/about-01.jpg" class="img-responsive" alt="..">
                        <h4>Office Philosophy</h4>
                        <div class="border"></div>
                        <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="<?php echo base_url();?>assets/fame/images/about-02.jpg" class="img-responsive" alt="..">
                        <h4>Office Mission & Vission</h4>
                        <div class="border"></div>
                        <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="<?php echo base_url();?>assets/fame/images/about-03.jpg" class="img-responsive" alt="..">
                        <h4>Office Value & Rules</h4>
                        <div class="border"></div>
                        <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p>
                    </div>
                </div>   
            </div> -->
            
        </div>
    </section>

    <!-- Modal Detail Tentang Jember-->
    <div class="modal fade" id="modal_det_tentangjbr" role="dialog">
      <div class="modal-dialog modal-lg">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Detail Tentang Jember</h4>
          </div>
          <div class="modal-body" style="margin-bottom: 30px;">
            <div class="row">
                <div id="detail_tentng_jbr" name="detail_tentng_jbr"></div>
            </div>
          </div>
          <div class="modal-footer" style="padding-top: 15px; padding-right: 15px;">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-fw fa-lg fa-close'></i>Tutup</button>
          </div>
        </div>
        
      </div>
    </div>
    <!-- End About Us Section -->


    <!-- Start About Us Section 2 -->
    <!-- <div class="about-us-section-2">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="skill-shortcode">
                        
                        <div class="skill">
                            <p>Web Design</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="60">
                                    <span class="progress-bar-span" >60%</span>
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <div class="skill">
                            <p>HTML & CSS</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="95">
                                    <span class="progress-bar-span" >95%</span>
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <div class="skill">
                            <p>Wordpress</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="80">
                                    <span class="progress-bar-span" >80%</span>
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <div class="skill">
                            <p>Joomla</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="100">
                                    <span class="progress-bar-span" >100%</span>
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <div class="skill">
                            <p>Extension</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="70">
                                    <span class="progress-bar-span" >70%</span>
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>  
                        </div>
                                                            
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div id="carousel-example-generic" class="carousel slide about-slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo base_url();?>assets/fame/images/about-01.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url();?>assets/fame/images/about-02.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url();?>assets/fame/images/about-03.jpg" alt="">
                            </div>
    
                        </div>
  
                    </div>
                </div>
                
            </div>
        </div>
    </div> -->
    <!-- Start About Us Section 2 -->


    


    <!-- Start Feature Section -->
        <!-- <section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Our Services</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-magic"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Web Design</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-css3"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">HTML5 & CSS3</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-wordpress"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Wordpress Theme</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-plug"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Wordpress Plugin</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-joomla"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Joomla Template</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-cube"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Joomla Extension</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section> -->
        <!-- End Feature Section -->
    
    
    
    <!-- Start Fun Facts Section -->
   <!--  <section class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="counter-item">
                    <i class="fa fa-cloud-upload"></i>
                    <div class="timer" id="item1" data-to="991" data-speed="5000"></div>
                    <h5>Files uploaded</h5>                               
                  </div>
                </div>  
                <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="counter-item">
                    <i class="fa fa-check"></i>
                    <div class="timer" id="item2" data-to="7394" data-speed="5000"></div>
                    <h5>Projects completed</h5>                               
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="counter-item">
                    <i class="fa fa-code"></i>
                    <div class="timer" id="item3" data-to="18745" data-speed="5000"></div>
                    <h5>Lines of code written</h5>                               
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="counter-item">
                    <i class="fa fa-male"></i>
                    <div class="timer" id="item4" data-to="8423" data-speed="5000"></div>
                    <h5>Happy clients</h5>                               
                  </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Fun Facts Section -->



    <!-- Start Team Member Section -->
    <section id="wisata-favorite" class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h3>Tempat Wisata Yang Terpopuler</h3>
                        <p>Destinasi wisata alam yang WAJIB dikunjungi saat berada di kota JEMBER.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div id="team-section">

                        <div class="our-team">

                            <?php 
                                $i=0;
                                foreach ($daftarWisataSlide->result() as $slideWisata) {

                                if ($i == 0){                         
                             ?>

                             <div class="team-member">
                                <center>
                                    <img style="width: 280px; height: 350px;" src="<?php echo base_url('assets/wisata_photo/'.$slideWisata->nm_gbr);?>" class="img-responsive" alt="">
                                </center>
                                <div class="team-details">
                                    <h4><?php echo $slideWisata->nm_wisata;?></h4>
                                    <p>Jangan lupa Like dan Follow kami di</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <?php }else{ ?>

                            <div class="team-member">
                                <center>
                                    <img style="width: 280px; height: 350px;" src="<?php echo base_url('assets/wisata_photo/'.$slideWisata->nm_gbr);?>" class="img-responsive" alt="">
                                </center>
                                <div class="team-details">
                                    <h4><?php echo $slideWisata->nm_wisata;?></h4>
                                    <p>Jangan lupa Like dan Follow kami di</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <?php
                                    } $i++; 
                                }
                            ?>

                         </div>
                    
                    </div>
                </div>
            </div>
                
        </div>
    </section>
    <!-- End Team Member Section -->



    <!-- Start Pricing Table Section -->
    <div id="daftar-wisata" class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Daftar Wisata Jember</h3>
                            <p class="white-text">Berikut adalah tempat-tempat wisata yang WAJIB dikunjungi saat berada di kota Jember</p>
                        </div>
                    </div>
                </div>
            </div>
                    
            <div class="row">
                        
                <div class="pricing">

                    <?php 
                        $i=0;
                        foreach ($daftarWisataDetail->result() as $wisataDetail) {

                        if ($i == 0){                         
                    ?>

                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
                                <h3 style="font-size: 16px; font-weight: bold;"><?php echo $wisataDetail->nm_wisata;?></h3>
                                </div>
                                <div class="plan-price">
                                    <center><img style="width: 300px; height: 400px;" src="<?php echo base_url('assets/wisata_photo/'.$wisataDetail->nm_gbr);?>" class="img-responsive" alt=""></center>
                                </div>
                                <div class="plan-list">
                                    <p style="padding: 5px; text-align: left;"><?php echo substr($wisataDetail->ket_wisata,0, 150);?> ....</p>
                                </div>
                                <div class="plan-signup">
                                    <a  onclick="lihatDetailTentang(<?php echo $wisataDetail->id_gbr;?>)" class="btn-system btn-small">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
                                <h3 style="font-size: 16px; font-weight: bold;"><?php echo $wisataDetail->nm_wisata;?></h3>
                                </div>
                                <div class="plan-price">
                                    <center><img style="width: 300px; height: 400px;" src="<?php echo base_url('assets/wisata_photo/'.$wisataDetail->nm_gbr);?>" class="img-responsive" alt=""></center>
                                </div>
                                <div class="plan-list">
                                    <p style="padding: 5px; text-align: left;"><?php echo substr($wisataDetail->ket_wisata,0, 150);?> ....</p>
                                </div>
                                <div class="plan-signup">
                                    <a onclick="lihatDetailWisata(<?php echo $wisataDetail->id_gbr;?>)" class="btn-system btn-small">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php
                            } $i++; 
                        }
                    ?>

                </div>


                <!-- <div class="pricing">
                        
                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                            <h3>Free</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                            <h3>Standard</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                            <h3>Premium</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                            <h3>Professional</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                            <h3>Premium</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Professional</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    
                </div> -->
            
            
            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->

    <!-- Modal Detail Tentang Jember-->
    <div class="modal fade" id="modal_det_wisata_jbr" role="dialog">
      <div class="modal-dialog modal-lg">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Detail Wisata Jember</h4>
          </div>
          <div class="modal-body" style="margin-bottom: 30px;">
            <div class="row">
                <div id="detail_wisata_jbr" name="detail_wisata_jbr"></div>
            </div>
          </div>
          <div class="modal-footer" style="padding-top: 15px; padding-right: 15px;">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-fw fa-lg fa-close'></i>Tutup</button>
          </div>
        </div>
        
      </div>
    </div>
    

    <!-- Start Latest News Section -->
    <section id="daftar-kuliner" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Daftar Kuliner Jember</h3>
                        <p>Kurang lengkap rasanya jika berkunjung kesuatu tempat belum mencicipi makanan khas kota tersebut, berikut merupakan makanan atau jajanan khas kota Jember.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="latest-news">

                    <?php 
                        $i=0;
                        foreach ($daftarTempatKuliner->result() as $wisataKuliner) {


                        if ($i == 0){                         
                    ?>

                    <div class="col-md-12">
                        <div class="latest-post" style="width: 100%; height: 100%;">
                            <center>
                                <img style="width: 350px; height: 250px;" src="<?php echo base_url('assets/kuliner_photo/'.$wisataKuliner->nm_gbr_kulin);?>" class="img-responsive" alt="">
                                <h4 style="text-align: left;"><a href="#"><?php echo $wisataKuliner->nm_kuliner;?></a></h4>
                                <div class="post-details">
                                    <span class="date"><strong>Wisata</strong> <br>Jember</span>
                                    
                                </div>
                                <p style="text-align: left;"><?php echo substr($wisataKuliner->ket_kuliner,0, 150);?> ....</p>
                            </center>
                            <a onclick="lihatDetailKuliner(<?php echo $wisataKuliner->id_gbr_kulin;?>)" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                    <?php }else{ ?>

                    <div class="col-md-12">
                        <div class="latest-post" style="width: 100%; height: 100%;">
                            <center>
                                <img style="width: 350px; height: 250px;" src="<?php echo base_url('assets/kuliner_photo/'.$wisataKuliner->nm_gbr_kulin);?>" class="img-responsive" alt="">
                                <h4 style="text-align: left;"><a href="#"><?php echo $wisataKuliner->nm_kuliner;?></a></h4>
                                <div class="post-details">
                                    <span class="date"><strong>Wisata</strong> <br>Jember</span>
                                    
                                </div>
                                <p style="text-align: left;"><?php echo substr($wisataKuliner->ket_kuliner,0, 150);?> ....</p>
                            </center>
                            <a onclick="lihatDetailKuliner(<?php echo $wisataKuliner->id_gbr_kulin;?>)" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                    <?php
                            } $i++; 
                        }
                    ?>

                </div>

            </div>
        </div>
    </section>

    <!-- Modal Detail Tentang Kuliner Jember-->
    <div class="modal fade" id="modal_det_kuliner_jbr" role="dialog">
      <div class="modal-dialog modal-lg">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Detail Kuliner Jember</h4>
          </div>
          <div class="modal-body" style="margin-bottom: 30px;">
            <div class="row">
                <div id="detail_kuliner_jbr" name="detail_kuliner_jbr"></div>
            </div>
          </div>
          <div class="modal-footer" style="padding-top: 15px; padding-right: 15px;">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-fw fa-lg fa-close'></i>Tutup</button>
          </div>
        </div>
        
      </div>
    </div>
    <!-- End Latest News Section -->



    
    
    
    <!-- Start Testimonial Section -->
    <!-- <div id="testimonial" class="testimonial-section">
        <div class="container">
            <div id="testimonial-carousel" class="testimonials-carousel">
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url();?>assets/fame/images/testimonial/face_1.png" alt="" >
                        <div class="testimonial-author">
                            <div class="author">John Doe</div>
                            <div class="designation">Organization Founder</div>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br> laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                    </div>
                </div>
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url();?>assets/fame/images/testimonial/face_2.png" alt="" >
                        <div class="testimonial-author">
                            <div class="author">Jane Doe</div>
                            <div class="designation">Lead Developer</div>
                        </div>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia<br> consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                </div>
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url();?>assets/fame/images/testimonial/face_3.png" alt="" >
                        <div class="testimonial-author">
                            <div class="author">John Doe</div>
                            <div class="designation">Honorable Customer</div>
                        </div>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit<br> anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Testimonial Section -->
    
    

    <!-- Clients Aside -->
    <!-- <section id="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Our Honorable Partner</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clients">
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/themeforest.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/creative-market.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/designmodo.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/creative-market.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/microlancer.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/themeforest.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/microlancer.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/designmodo.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/creative-market.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?php echo base_url();?>assets/fame/images/logos/designmodo.jpg" class="img-responsive" alt="...">
                    </div>
                    
                </div>
            </div>
        </div>
    </section> -->
    
    
    
    

    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Hubungi Kami,</h3>
                        <p class="white-text">Tinggalkan pesan pada kolom dibawah, untuk memberikan kritik dan saran agar data yang kami tampilkan dapat bermanfaat dan selalu informatif kepada para pengunjung.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap *" id="name" required data-validation-required-message="Harap isi kolom nama ini!">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email yang masih aktif *" id="email" required data-validation-required-message="Harap isikan email yang masih aktif!">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Nomor HP / WhatsApp *" id="phone" required data-validation-required-message="Harap isikan Nomor HP / WhatsApp">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Tuliskan pesan pada kolom ini! *" id="message" required data-validation-required-message="Harap isikan pesan Anda"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-wj-info">
                        <img style="width: 170px; height: 120px;" src="<?php echo base_url();?>assets/dist/images/wj.png" alt=""><br>
                        <div style="font-size: 20px; margin-top: 10px; font-family: Kaushan Script,Helvetica Neue,Helvetica,Arial,cursive;">Wisata Jember</div>
                        <!-- <h4>Informasi</h4>
                        <ul>
                            <li><i class="fa fa-envelope-o"></i>&nbsp; : &nbsp; emailku@gmail.com</li>
                            <li><i class="fa fa-whatsapp"></i>&nbsp; : &nbsp; +62812 3456 7890</li>
                            <li><i class="fa fa-facebook"></i>&nbsp; : &nbsp; +62812 3456 7890</li>
                            <li><i class="fa fa-firefox"></i>&nbsp; : &nbsp; www.wisatajember.com</li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="footer-contact-info">
                        <h4>Informasi</h4>
                        <ul>
                            <li><i class="fa fa-envelope-o"></i>&nbsp; : &nbsp; emailku@gmail.com</li>
                            <li><i class="fa fa-whatsapp"></i>&nbsp; : &nbsp; +62812 3456 7890</li>
                            <li><i class="fa fa-facebook"></i>&nbsp; : &nbsp; +62812 3456 7890</li>
                            <li><i class="fa fa-firefox"></i>&nbsp; : &nbsp; www.wisatajember.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <strong>Jember Kota Wisata</strong> 2020. All Rights Reserved</span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li>
                                  <a href=""><b>Design by</b></a>
                                </li>
                                <li>
                                  <a href=""><b>Akhmad Afandik</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    

    <!-- jQuery Version 2.1.1 -->
    <script src="<?php echo base_url();?>assets/fame/js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/fame/asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/fame/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/fame/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/fame/js/count-to.js"></script>
    <script src="<?php echo base_url();?>assets/fame/js/jquery.appear.js"></script>
    <script src="<?php echo base_url();?>assets/fame/js/cbpAnimatedHeader.js"></script>
    <script src="<?php echo base_url();?>assets/fame/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/fame/js/jquery.fitvids.js"></script>
  <script src="<?php echo base_url();?>assets/fame/js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>assets/fame/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/fame/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/fame/js/script.js"></script>

</body>

</html>
