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
                <h2>Hitung Waris</h2>
            </div>
             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Informasi Pewaris
                               
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body">
                            <form method="post" action="">
                            Jenis Kelamin Pewaris
                            <br><br>
                             <div class="form-group">
                                    <input type="radio" name="jenis_kelamin" id="male" class="with-gap" value="laki-laki" required="">
                                    <label for="male">Laki-laki</label>

                                    <input type="radio" name="jenis_kelamin" id="female" class="with-gap" value="perempuan" required="">
                                    <label for="female" class="m-l-20">Perempuan</label>
                                </div>
                                <br>
                                <br>
                                  Apakah Pewaris telah menikah secara sah
                            <br><br>
                             <div class="form-group">
                                    <input type="radio" name="nikah" id="iya" class="with-gap" value="iya" required="">
                                    <label for="iya">Iya</label>

                                    <input type="radio" name="nikah" id="tidak" class="with-gap" value="tidak" required="">
                                    <label for="tidak" class="m-l-20">Tidak</label>
                                </div>
                                <br>
                                <br>

                                Masukkan Jumlah harta yang diwariskan
                            <br><br>
                             <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="warisan" class="form-control" placeholder="Warisan" required="" />
                                        </div>
                                    </div>
                              
                                  <button type="submit" name="lanjut" class="btn btn-primary waves-effect">
                                    <i class="material-icons">input</i>
                                    <span>Lanjut</span>
                                </button>
                            </form>
                             <?php    

    if(isset($_POST['lanjut']))

      {
         ///deklarasi variable   
        $jenis_kelamin=$_POST['jenis_kelamin'];

        $nikah=$_POST['nikah'];
        $warisan=$_POST['warisan'];
        
      

        echo "<script> window.location='hitung_waris3.php?jenis_kelamin=$jenis_kelamin&&nikah=$nikah&&warisan=$warisan';</script>";
       

        

    }

        ?>  
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
  </section>


        
<?php include('partial2/js.php'); ?>
    
</body>

</html>
