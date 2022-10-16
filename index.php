<!DOCTYPE html>
<html>

<head>
<?php include('partial2/head.php'); ?>
</head>

<body class="theme-blue">
   
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Bersabar</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
  <?php include('partial2/topbar.php'); ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
       <?php include('partial2/lsidebar.php'); ?> 
        
    </section>
    <section class="content">
        <div class="container-fluid">
    <div class="block-header">
                <h2>Home</h2>
            </div>
             
            <div class="row clearfix">
                <!-- Basic Example -->
                
                <!-- With Captions -->
                <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                   
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/logo.png" />
                                        <div class="carousel-caption">
                                            
                                        </div>
                                        <h1><center>SELAMAT DATANG</center></h1> 
                                    </div>
                                    <div class="item">
                                        <img src="images/warisan.jpg" width="100%" />
                                        <div class="carousel-caption">
                                            <h3>Surat An-Nisa ayat 11</h3>
                                            <p>Allah mensyariatkan (mewajibkan) kepadamu tentang (pembagian warisan untuk) anak-anakmu.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# With Captions -->
            </div>
        </div>
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Navigasi
                               
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body">
                            <div class="demo-button">
                               
                                <a href="index.php"><button type="button" class="btn btn-block btn-lg btn-primary waves-effect">Home</button></a><br>

                                <a href="dasar_hukum.php"><button type="button" class="btn btn-block btn-lg btn-success waves-effect">Dasar Hukum</button></a><br>

                                <a href="hitung_warisa.php"><button type="button" class="btn btn-block btn-lg btn-info waves-effect">Hitung Waris</button></a><br>

                                <a href="contoh_soal.php"><button type="button" class="btn btn-block btn-lg btn-success waves-effect">contoh soal</button></a><br>
                                
                                <a href="bantuan.php"><button type="button" class="btn btn-block btn-lg btn-warning waves-effect">Bantuan</button></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </section>      
        
<?php include('partial2/js.php'); ?>
    
</body>

</html>
