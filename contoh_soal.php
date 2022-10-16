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
                <h2>Contoh soal</h2>
            </div>
             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Contoh Soal
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body">
                        Kasus 1 :<br>

Ahli Waris : Suami dan 2 Saudari Kandung Harta : 70 jt
<br>
JAWABAN
<br>
*Metode Biasa

<div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ahli Waris</th>
                                        <th>Bagian</th>
                                        <th>AM(6)</th>
                                        <th>HW Rp. 70.000.000</th>
                                        <th>Penerimaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Suami</td>
                                        <td>1/2</td>
                                        <td>3/6</td>
                                        <td>3/6 x 70.000.000</td>
                                        <td>35.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>2 saudara Kandung</td>
                                        <td>2/3</td>
                                        <td>4/6</td>
                                        <td>4/6 x 70.000.000</td>
                                        <td>46.666.666</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>7/6</td>
                                        <td>jumlah</td>
                                        <td>81.666.666</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        Terjadi Kekurangan harta sebesar <br>
                        81.666.666-70.000.000=11.666.666
                        <br><br>
                        *Metode Aul 
                        
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ahli Waris</th>
                                        <th>Bagian</th>
                                        <th>AM(7)</th>
                                        <th>HW Rp. 70.000.000</th>
                                        <th>Penerimaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Suami</td>
                                        <td>1/2</td>
                                        <td>3/7</td>
                                        <td>3/7 x 70.000.000</td>
                                        <td>30.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>2 saudara Kandung</td>
                                        <td>2/3</td>
                                        <td>4/7</td>
                                        <td>4/7 x 70.000.000</td>
                                        <td>40.000.000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>7/7</td>
                                        <td>jumlah</td>
                                        <td>70.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
<br><br><br>
Kasus 2 :
<br>
Ahli Waris : Istri, 2 Saudara Seibu dan Ibu Harta : 9 jt
<br>
JAWABAN
<br>

*Metode Biasa

<div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ahli Waris</th>
                                        <th>Bagian</th>
                                        <th>AM(12)</th>
                                        <th>HW Rp. 9.000.000</th>
                                        <th>Penerimaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Istri</td>
                                        <td>1/4</td>
                                        <td>3/12</td>
                                        <td>3/12 x 9.000.000</td>
                                        <td>2.250.000</td>
                                    </tr>
                                    <tr>
                                        <td>2 saudara seibu</td>
                                        <td>1/3</td>
                                        <td>4/12</td>
                                        <td>4/12 x 9.000.000</td>
                                        <td>3.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>ibu</td>
                                        <td>1/6</td>
                                        <td>2/12</td>
                                        <td>2/12 x 9.000.000</td>
                                        <td>1.500.000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>9/12</td>
                                        <td>jumlah</td>
                                        <td>6.750.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        Terdapat sisa harta sebesar <br>
                        9.000.000-6.750.000=2.250.000
                        <br><br>
                        *Metode Radd 
                        <br>
                        Cara menggunakan metode radd sama dengan cara menggunakan metode aul yaitu dengan menggunakan jumlah pembilang menjadi masalah (AM).
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ahli Waris</th>
                                        <th>Bagian</th>
                                        <th>AM(12)</th>
                                        <th>HW Rp. 9.000.000</th>
                                        <th>Penerimaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Istri</td>
                                        <td>1/4</td>
                                        <td>3/9</td>
                                        <td>3/9 x 9.000.000</td>
                                        <td>3.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>2 saudara seibu</td>
                                        <td>1/3</td>
                                        <td>4/9</td>
                                        <td>4/9 x 9.000.000</td>
                                        <td>4.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>ibu</td>
                                        <td>1/6</td>
                                        <td>2/9</td>
                                        <td>2/9 x 9.000.000</td>
                                        <td>2.000.000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>9/9</td>
                                        <td>jumlah</td>
                                        <td>9.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
<br><br><br>
Kasus 3 :
<br>
ahli waris : istri, 2 anak laki-laki, 1 anak perempuan <br>
Jawaban<br> 
menggunakan metode biasa <br>
istri = 1/8 x 60.000.000 = 12.500<br>
sisa = 87.500<br>

anak laki-laki = 2 : 1  dengan anak perempuan, maka anak laki-laki mendapatkan harta warisan sebesar 35.000/org
<br>    
anak perempuan = 2 : 1 dengan anak laki-laki, maka anak perempuan mendapatkan harta warisan sebesar 17.500
<br><br><br>
                            
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
  </section>


        
<?php include('partial2/js.php'); ?>
    
</body>

</html>
O