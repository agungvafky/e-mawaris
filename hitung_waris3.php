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
                                Hitung Warisan 
                            </h2>
                           
                             <?php
                            $nikah=$_GET['nikah'];
                            $warisan=$_GET['warisan'];
                            $jenis_kelamin=$_GET['jenis_kelamin'];
                                
                                ?>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body">
                            <div class="demo-button">
                            <form method="post" action="">

                            Jumlah harta yang diwariskan
                            <br><br>
                             <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="warisan" class="form-control" placeholder="Warisan" readonly="" value="<?php echo $warisan ?>" />
                                        </div>
                                    </div>
                                    <br>

                            <?php 
                            if($nikah=="iya"){
                                if($jenis_kelamin=="laki-laki"){
                             ?>
                             Istri
                            <br>
                              <br>
                            <div class="form-group">
                                
                                <input type="radio" name="istri" value="ada"  id="ada3"><label for="ada3" class="m-l-20">ada
                                    </label>
                                  
                                <input type="radio" name="istri" value="tidak"  id="tidak3"><label for="tidak3" class="m-l-20" checked>tidak</label>
                                    
                            </div>
                            <br>
                        <?php } 
                        elseif($jenis_kelamin=="perempuan") {
                            ?>
                            Suami
                            <br>
                              <br>
                            <div class="form-group">
                                
                                <input type="radio" name="suami" value="ada"  id="ada4"><label for="ada4" class="m-l-20">ada
                                    </label>
                                  
                                <input type="radio" name="suami" value="tidak"  id="tidak4"><label for="tidak4" class="m-l-20" checked>tidak</label>
                                    
                            </div>
                            <br>
                        <?php }; ?>

                            Jumlah Anak Laki-laki
                            <br><br>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="anak_laki_laki" class="form-control"  value="0"  />
                                </div>
                            </div>
                            <br>

                            Jumlah Anak Perempuan
                            <br><br>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="anak_perempuan" class="form-control"  value="0"  />
                                </div>
                            </div>
                            <br>
                        <?php }; ?> 

                        
                            Ayah Kandung
                            <br>
                              <br>
                            <div class="form-group">
                                
                                <input type="radio" name="ayah_kandung" value="ada"  id="ada"><label for="ada" class="m-l-20">ada
                                    </label>
                                  
                                <input type="radio" name="ayah_kandung" value="tidak"  id="tidak"><label for="tidak" class="m-l-20" checked>tidak</label>
                                    
                            </div>
                            <br>

                            Ibu Kandung
                            <br>
                            <br>
                             <div class="form-group">
                                 

                                    <input type="radio" name="ibu_kandung" value="ada1" class="detail" id="ada1"><label for="ada1" class="m-l-20">ada
                                    </label>
                                  

                                    <input type="radio" name="ibu_kandung" value="tidak1" class="detail" id="tidak1"><label for="tidak1" class="m-l-20" checked>tidak</label>
                                    <br>
                            </div>
                            <br>
                            
                            Saudara laki-laki atau perempuan seibu
                            <br><br>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="saudara_laki_laki_atau_perempuan_seibu" class="form-control"  value="0"  />
                                </div>
                            </div>
                            <br>

                            Saudara perempuan kandung atau seayah
                            <br><br>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="saudara_perempuan_seayah" class="form-control"  value="0"  />
                                </div>
                            </div>
                            <br>

                            Saudara laki-laki kandung atau seayah
                            <br><br>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="saudara_laki_laki" class="form-control"  value="0"  />
                                </div>
                            </div>
                            <br>
  
                                <input type="submit" name="hitung" class="btn btn-primary waves-effect" value="Hitung">
                                  
                            </form>
                            <br>
                            <br>
                            


                           

                              <?php    

                            if(isset($_POST['hitung']))

                              {

                                /////deklarasi variable
                                if(!empty($_POST['istri'])){
                                $istr=$_POST['istri'];    
                                }

                                else{
                                    $istr="tidak";
                                }

                                if(!empty($_POST['suami'])){
                                $suam=$_POST['suami'];    
                                }

                                else{
                                    $suam="tidak";
                                }

                                if(!empty($_POST['anak_laki_laki'])){
                                $anak_laki_laki=$_POST['anak_laki_laki'];    
                                }

                                else{
                                    $anak_laki_laki=0;
                                }

                                if(!empty($_POST['anak_perempuan'])){
                                $anak_perempuan=$_POST['anak_perempuan'];    
                                }

                                else{
                                    $anak_perempuan=0;
                                }
                            
                                if(!empty($_POST['ayah_kandung'])){
                                $ayah_kandung=$_POST['ayah_kandung'];    
                                }

                                else{
                                    $ayah_kandung=0;
                                }
                                
                                if(!empty($_POST['ibu_kandung'])){
                                $ibu_kandung=$_POST['ibu_kandung'];    
                                }
                                else{
                                    $ibu_kandung=0;
                                }
                                
                                
                                $saudara_laki_laki_atau_perempuan_seibu=$_POST['saudara_laki_laki_atau_perempuan_seibu'];
                                $saudara_perempuan_seayah=$_POST['saudara_perempuan_seayah'];
                                $saudara_laki_laki=$_POST['saudara_laki_laki'];
                                $rad=0;


                                echo "<center><h3>Pembagian Harta Warisan</h3></center><hr>";
                                function rupiah($angka){
                                  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                                  return $hasil_rupiah;
                                  }
                                ////kondisi untuk istri
                                if($istr=="ada"&&$anak_perempuan==0&&$anak_laki_laki==0)
                                {
                                    $suami="0";
                                    $istri=4;
                                    
                                }
                                elseif($istr=="ada"&&$anak_perempuan>0&&$anak_laki_laki>0)
                                {   
                                    $suami=0;
                                    $istri=8;
                                    
                                }
                                elseif($istr=="ada"&&$anak_perempuan>0&&$anak_laki_laki==0)
                                {
                                    $suami=0;
                                    $istri=8;
                                    
                                }
                                elseif($istr=="ada"&&$anak_perempuan==0&&$anak_laki_laki>0)
                                {
                                    $suami=0;
                                    $istri=8;
                                   
                                }
                                elseif($nikah=="tidak")
                                {

                                    $suami=0;
                                    $istri=0;
                                   
                                }
                                elseif($istr=="tidak")
                                {

                                    $suami=0;
                                    $istri=0;
                                  
                                };
                                
                               
                                ///////kondisi untuk suami
                                if($suam=="ada"&&$anak_perempuan==0&&$anak_laki_laki==0)
                                {
                                    $suami=2;
                                    $istri=0;
                                  
                                }
                                elseif($suam=="ada"&&$anak_perempuan>0&&$anak_laki_laki>0)
                                {
                                    $suami=4;
                                    $istri=0;
                                   
                                }
                                elseif($suam=="ada"&&$anak_perempuan>0&&$anak_laki_laki==0)
                                {
                                    $suami=4;
                                    $istri=0;
                                  
                                }
                                elseif($suam=="ada"&&$anak_perempuan==0&&$anak_laki_laki>0)
                                {
                                    $suami=4;
                                    $istri=0;
                                    
                                }
                                elseif($nikah=="tidak")
                                {
                                    $suami=0;
                                    $istri=0;
                                   
                                }
                                elseif($suam=="tidak")
                                {
                                    $suami=0;
                                    if ($istri2=0) {
                                    $istri=0;
                                    
                                     
                                    }
                                    
                                   
                                };

                                //////kondisi anak perempuan
                                if($anak_perempuan==1&&$anak_laki_laki==0)
                                {
                                    $a_anak_perempuan=2;
                                   
                                }
                                elseif($anak_perempuan>1&&$anak_laki_laki==0)
                                {
                                    $a_anak_perempuan=3;
                                  
                                }
                               
                                elseif($anak_perempuan>1&&$anak_laki_laki>0)
                                {
                                    $a_anak_perempuan=0;
                                   
                                }
                                elseif($anak_perempuan==1&&$anak_laki_laki>0)
                                {
                                    $a_anak_perempuan=0;
                                   
                                }
                                else{
                                   $a_anak_perempuan=0; 
                                };

                                //////kondisi ayah kandung
                                if($ayah_kandung=="ada"&&$anak_laki_laki==0&&$anak_perempuan==0)
                                {
                                    $a_ayah_kandung=3;
                                    
                                }
                                elseif($ayah_kandung=="ada"&&$anak_laki_laki>0&&$anak_perempuan>0)
                                {
                                    $a_ayah_kandung=6;
                                  
                                }
                                elseif($ayah_kandung=="ada"&&$anak_laki_laki>0&&$anak_perempuan==0)
                                {
                                    $a_ayah_kandung=6;
                                   
                                }
                                elseif($ayah_kandung=="ada"&&$anak_laki_laki==0&&$anak_perempuan>0)
                                {
                                    $a_ayah_kandung=6;
                                   
                                }
                                elseif($ayah_kandung=="tidak")
                                {
                                    $a_ayah_kandung=0;
                                   
                                };

                                /////kondisi ibu kandung
                                if($ibu_kandung=="ada1"&&$anak_laki_laki==0&&$anak_perempuan==0&&$saudara_laki_laki_atau_perempuan_seibu==0&&$saudara_perempuan_seayah==0&&$saudara_laki_laki==0)
                                {
                                    $a_ibu_kandung=3;
                                   
                                }
                                elseif($ibu_kandung=="ada1"&&$anak_laki_laki>0&&$anak_perempuan>0)
                                {
                                    $a_ibu_kandung=6;
                                   
                                }
                                elseif($ibu_kandung=="ada1"&&$anak_laki_laki==0&&$anak_perempuan>0)
                                {
                                    $a_ibu_kandung=6;
                                    
                                }
                                elseif($ibu_kandung=="ada1"&&$anak_laki_laki>0&&$anak_perempuan==0)
                                {
                                    $a_ibu_kandung=6;
                                   
                                }
                                elseif($ibu_kandung=="ada1"&&$saudara_laki_laki_atau_perempuan_seibu>1&&$anak_laki_laki==0&&$anak_perempuan==0)
                                {
                                   $a_ibu_kandung=6; 
                                }
                                elseif($ibu_kandung=="ada1"&&$saudara_laki_laki>1&&$anak_laki_laki==0&&$anak_perempuan==0)
                                {
                                   $a_ibu_kandung=6; 
                                }
                                elseif($ibu_kandung=="ada1"&&$saudara_perempuan_seayah>1&&$anak_laki_laki==0&&$anak_perempuan==0)
                                {
                                   $a_ibu_kandung=6; 
                                }
                                elseif($ibu_kandung=="ada1"&&$anak_laki_laki==0&&$anak_perempuan==0&&$ayah_kandung=="ada")
                                {
                                    $a_ibu_kandung=32;
                                   
                                }
                                elseif($ibu_kandung=="tidak1")
                                {
                                    $a_ibu_kandung=0;
                                   
                                }
                                else{
                                    $a_ibu_kandung=0;
                                };

                                ////Saudara laki-laki atau perempuan seibu
                                if($saudara_laki_laki_atau_perempuan_seibu<1)
                                {
                                    $a_saudara_laki_laki_atau_perempuan_seibu=0;
                                   
                                }
                                elseif($saudara_laki_laki_atau_perempuan_seibu==1&&$anak_laki_laki==0)
                                {
                                    $a_saudara_laki_laki_atau_perempuan_seibu=6;
                                   
                                }
                                elseif($saudara_laki_laki_atau_perempuan_seibu>1&&$anak_laki_laki==0)
                                {
                                    $a_saudara_laki_laki_atau_perempuan_seibu=3;
                                   
                                }
                                
                                elseif($saudara_laki_laki_atau_perempuan_seibu>1&&$anak_laki_laki>0)
                                {
                                    $a_saudara_laki_laki_atau_perempuan_seibu=0;
                                   
                                }
                                elseif($saudara_laki_laki_atau_perempuan_seibu>1&&$anak_laki_laki>0)
                                {
                                    $a_saudara_laki_laki_atau_perempuan_seibu=0;
                                   
                                }
                                else
                                {
                                    $a_saudara_laki_laki_atau_perempuan_seibu=0;
                                   
                                }
                                ;

                                /////saudara perempuan seayah
                                if($saudara_perempuan_seayah<1)
                                {
                                    $a_saudara_perempuan_seayah=0;
                                    
                                }
                                elseif($saudara_perempuan_seayah==1&&$anak_laki_laki==0)
                                {
                                    $a_saudara_perempuan_seayah=2;
                                    
                                }
                                elseif($saudara_perempuan_seayah>1&&$anak_laki_laki==0)
                                {
                                    $a_saudara_perempuan_seayah=3;
                                    
                                }
                                
                                elseif($saudara_perempuan_seayah>1&&$anak_laki_laki>0)
                                {
                                    $a_saudara_perempuan_seayah=0;
                                    
                                }
                                else{
                                    $a_saudara_perempuan_seayah=0;
                                    
                                };

                                /////proses 2

                                ////proses suami
                                if($suami!=0){
                                     $b_suami=1/$suami*10;
                                }
                                elseif($suami==0){
                                     $b_suami=$suami;
                                }
                               

                                ////proses isitri

                                if($istri!=0){
                                     $b_istri=1/$istri*10;
                                }
                                elseif($istri==0){
                                     $b_istri=$istri;
                                }
                               

                                ///anak perempuan
                                 if($a_anak_perempuan==2){
                                     $b_anak_perempuan=1/$a_anak_perempuan*10;
                                }
                                elseif($a_anak_perempuan==3){
                                     $b_anak_perempuan=2/$a_anak_perempuan*10;
                                }
                                elseif($a_anak_perempuan==0){
                                     $b_anak_perempuan=$a_anak_perempuan;
                                }
                                

                                ///ayah kandung
                                if($a_ayah_kandung!=0){
                                     $b_ayah_kandung=1/$a_ayah_kandung*10;
                                }
                                elseif($a_ayah_kandung==0){
                                     $b_ayah_kandung=$a_ayah_kandung;
                                }
                               

                                ////ibu kandung
                                if($a_ibu_kandung!=0){
                                     $b_ibu_kandung=1/$a_ibu_kandung*10;
                                }
                                elseif($a_ibu_kandung==0){
                                     $b_ibu_kandung=$a_ibu_kandung;
                                }   
                               

                                /////saudara laki atau perempuan seibu
                                if($a_saudara_laki_laki_atau_perempuan_seibu!=0){
                                     $b_saudara_laki_laki_atau_perempuan_seibu=1/$a_saudara_laki_laki_atau_perempuan_seibu*10;
                                }
                                elseif($a_saudara_laki_laki_atau_perempuan_seibu==0){
                                     $b_saudara_laki_laki_atau_perempuan_seibu=$a_saudara_laki_laki_atau_perempuan_seibu;
                                }
                               

                                ///saudara perempuan kandung atau se ayah
                                if($a_saudara_perempuan_seayah==2){
                                     $b_saudara_perempuan_seayah=1/$a_saudara_perempuan_seayah*10;
                                }
                                if($a_saudara_perempuan_seayah==3){
                                     $b_saudara_perempuan_seayah=2/$a_saudara_perempuan_seayah*10;
                                }
                                elseif($a_saudara_perempuan_seayah==0){
                                     $b_saudara_perempuan_seayah=$a_saudara_perempuan_seayah;
                                }
                              




                                ////jumlah pembagi
                                $jumlah_pembagi=$b_suami+$b_istri+$b_anak_perempuan+$b_ayah_kandung+$b_ibu_kandung+$b_saudara_laki_laki_atau_perempuan_seibu+$b_saudara_perempuan_seayah;

                                ///hanya suami
                                if($suam=="ada"&&$anak_laki_laki==0&&$anak_perempuan==0&&$ayah_kandung=="tidak"&&$ibu_kandung=="tidak1"&&$saudara_laki_laki_atau_perempuan_seibu==0&&$saudara_perempuan_seayah==0&&$saudara_laki_laki==0){
                                 $c_suami=1/2*$warisan;
                                 echo "Suami mendapatkan warisan 1/2 yaitu sebanyak ";
                                 echo rupiah($c_suami);

                                 $sisa=$warisan-$c_suami; 
                                 echo "<br><br><br>sisa dari harta akan dibagikan ke baitul mal yaitu sebanyak ";
                                 echo rupiah($sisa);
                                $rad=1;
                                  
                                }

                                ///hanya istri
                                if($istr=="ada"&&$anak_laki_laki==0&&$anak_perempuan==0&&$ayah_kandung=="tidak"&&$ibu_kandung=="tidak1"&&$saudara_laki_laki_atau_perempuan_seibu==0&&$saudara_perempuan_seayah==0&&$saudara_laki_laki==0){
                                 $c_istri=1/4*$warisan;
                                 echo "istri mendapatkan warisan 1/4 yaitu sebanyak ";
                                 echo rupiah($c_istri);

                                 $sisa=$warisan-$c_istri; 
                                 echo "<br><br><br>sisa dari harta akan dibagikan ke baitul mal yaitu sebanyak ";
                                 echo rupiah($sisa);
                                 $rad=1;
                                }

                                //hanya ibu 
                                if($istr=="tidak"&&$anak_laki_laki==0&&$anak_perempuan==0&&$ayah_kandung=="tidak"&&$ibu_kandung=="ada1"&&$saudara_laki_laki_atau_perempuan_seibu==0&&$saudara_perempuan_seayah==0&&$saudara_laki_laki==0){
                                 $c_ibu=1/3*$warisan;
                                 echo "ibu mendapatkan warisan 1/3 yaitu sebanyak ";
                                 echo rupiah($c_ibu);

                                 $sisa=$warisan-$c_ibu; 
                                 echo "<br><br><br>sisa dari harta akan dibagikan ke baitul mal yaitu sebanyak ";
                                 echo rupiah($sisa);
                                 $rad=1;
                                }

                                //hanya anak perempuan 
                                if($istr=="tidak"&&$anak_laki_laki==0&&$anak_perempuan>0&&$ayah_kandung=="tidak"&&$ibu_kandung=="tidak1"&&$saudara_laki_laki_atau_perempuan_seibu==0&&$saudara_perempuan_seayah==0&&$saudara_laki_laki==0){
                                  if($anak_perempuan==1){
                                 $c_anak_perempuan=1/2*$warisan;
                                 echo "anak perempuan mendapatkan warisan 1/2 yaitu sebanyak ";
                                 echo rupiah($c_anak_perempuan);

                                 $sisa=$warisan-$c_anak_perempuan; 
                                 echo "<br><br><br>sisa dari harta akan dibagikan ke baitul mal yaitu sebanyak ";
                                 echo rupiah($sisa);
                                 }

                                    if($anak_perempuan>1){
                                 $c_anak_perempuan=2/3*$warisan;
                                 echo "anak perempuan mendapatkan warisan 2/3 yaitu sebanyak ";
                                 echo rupiah($c_anak_perempuan);

                                 $sisa=$warisan-$c_anak_perempuan; 
                                 echo "<br><br><br>sisa dari harta akan dibagikan ke baitul mal yaitu sebanyak ";
                                 echo rupiah($sisa);
                                 } 
                                $rad=1;
                                }

                                //hanya saudara perempuan seibu 
                                if($istr=="tidak"&&$anak_laki_laki==0&&$anak_perempuan==0&&$ayah_kandung=="tidak"&&$ibu_kandung=="tidak1"&&$saudara_laki_laki_atau_perempuan_seibu==0&&$saudara_perempuan_seayah>0&&$saudara_laki_laki==0){
                                  if($saudara_perempuan_seayah==1){
                                 $c_saudara_perempuan_seayah=1/2*$warisan;
                                 echo "saudara perempuan kandung mendapatkan warisan 1/2 yaitu sebanyak ";
                                 echo rupiah($c_saudara_perempuan_seayah);

                                 $sisa=$warisan-$c_saudara_perempuan_seayah; 
                                 echo "<br><br><br>sisa dari harta akan dibagikan ke baitul mal yaitu sebanyak ";
                                 echo rupiah($sisa);
                                 }

                                    if($saudara_perempuan_seayah>1){
                                 $c_saudara_perempuan_seayah=2/3*$warisan;
                                 echo "saudara perempuan seayah mendapatkan warisan 2/3 yaitu sebanyak ";
                                 echo rupiah($c_saudara_perempuan_seayah);

                                 $sisa=$warisan-$c_saudara_perempuan_seayah; 
                                 echo "<br><br><br>sisa dari harta akan dibagikan ke baitul mal yaitu sebanyak ";
                                 echo rupiah($sisa);
                                 } 
                                $rad=1;
                                }

                                //hanya saudara ibu 
                                if($istr=="tidak"&&$anak_laki_laki==0&&$anak_perempuan==0&&$ayah_kandung=="tidak"&&$ibu_kandung=="tidak1"&&$saudara_laki_laki_atau_perempuan_seibu>0&&$saudara_perempuan_seayah==0&&$saudara_laki_laki==0){
                                    if($saudara_laki_laki_atau_perempuan_seibu==1){
                                 $c_saudara_laki_laki_atau_perempuan_seibu=1/6*$warisan;
                                 echo "saudara perempuan seibu mendapatkan warisan 1/6 yaitu sebanyak ";
                                 echo rupiah($c_saudara_laki_laki_atau_perempuan_seibu);

                                 $sisa=$warisan-$c_saudara_laki_laki_atau_perempuan_seibu; 
                                 echo "<br><br><br>sisa dari harta akan dibagikan ke baitul mal yaitu sebanyak ";
                                 echo rupiah($sisa);
                                 }

                                    if($saudara_laki_laki_atau_perempuan_seibu>1){
                                 $c_saudara_laki_laki_atau_perempuan_seibu=1/3*$warisan;
                                 echo "saudara perempuan seibu mendapatkan warisan 1/3 yaitu sebanyak ";
                                 echo rupiah($c_saudara_laki_laki_atau_perempuan_seibu);

                                 $sisa=$warisan-$c_saudara_laki_laki_atau_perempuan_seibu; 
                                 echo "<br><br><br>sisa dari harta akan dibagikan ke baitul mal yaitu sebanyak ";
                                 echo rupiah($sisa);
                                 }

                                 $rad=1;
                                }

                                ////metode ashobah saudara prempuan
                                if($jumlah_pembagi<10&&$anak_laki_laki==0&&$anak_perempuan>0&&$ayah_kandung=="tidak"&&$ibu_kandung=="tidak1"&&$saudara_laki_laki_atau_perempuan_seibu==0&&$saudara_perempuan_seayah>0&&$saudara_laki_laki==0){

                                        $c_anak_perempuan=floor($b_anak_perempuan/10*$warisan);
                                    if ($c_anak_perempuan>0) {
                                        
                                            echo "<br><br><br>Anak Perempuan mendapatkan warisan sebesar ";
                                            echo rupiah($c_anak_perempuan);
                                    if($a_anak_perempuan==2) {
                                        echo "<br> Anak Perempuan  mendapatkan 1/2 harta warisan karena Sendirian (tidak ada anak dan cucu lain) <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }
                                    elseif($a_anak_perempuan==3) {
                                        echo "<br>anak perempu an mendapatkan 2/3 harta warisan karena anak perempuan  Dua orang atau lebih atau anak perempuan tidak ada anak atau cucu laki-laki <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }
                                }


                                    $c_saudara_perempuan_seayah=$warisan-$c_anak_perempuan;
                                     echo "<br><br><br>Saudara Perempuan mendapatkan sisa warisan dari anak perempuan sebesar ";
                                     echo rupiah($c_saudara_perempuan_seayah);
                                     echo "<br> karena saudara perempuan termasuk sebagai ashabah Ma'al Ghoir <br> sumber : pendapat Imam Muhammad Bin Alli  ";   
                                    $rad=1;
                                }                                
                                

                                ////metde ashobah anak laki-laki                                    
                                if($jumlah_pembagi<10&&$anak_laki_laki>0) {
                                   $rad=1;
                                ////harta untuk suami
                                 $c_suami=floor($b_suami/10*$warisan);
                                if($c_suami>0) {
                                    echo "<br><br><br>suami mendapatkan warisan sebesar ";
                                    echo rupiah($c_suami);
                                    if ($suami==2) {
                                        echo "<br> Suami mendapatkan 1/2 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }
                                    elseif($suami==4) {
                                        echo "<br> Suami mendapatkan 1/4 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }
                                }
                                elseif($c_suami==0) {
                                    $c_suami=0;
                                }


                                ////harta untuk istri
                                $c_istri=floor($b_istri/10*$warisan);
                                if ($c_istri>0) {
                                    echo "<br><br><br>istri mendapatkan warisan sebesar "; 
                                    echo rupiah($c_istri);
                                    if ($istri==4) {
                                        echo "<br> istri mendapatkan 1/4 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                    elseif($istri==8) {
                                        echo "<br> Istri mendapatkan 1/8 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                }
                                elseif($c_istri==0) {
                                    $c_istri=0;
                                }

                                /////ayah kandung
                                $c_ayah_kandung=floor($b_ayah_kandung/10*$warisan);
                                if ($c_ayah_kandung>0) {
                                        echo "<br><br><br>Ayah Kandung mendapatkan warisan sebesar ";
                                        echo rupiah($c_ayah_kandung);
                                    if ($a_ayah_kandung==3) {
                                        echo "<br> Ayah Kandung mendapatkan 1/3 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 11, dan pasal KHI 177";
                                    }
                                    elseif($a_ayah_kandung==6) {
                                        echo "<br>Ayah Kandung mendapatkan 1/6 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 11, dan pasal KHI 177";
                                    }
                                }
                                elseif($c_ayah_kandung==0) {
                                    $c_ayah_kandung=0;
                                }

                                //ibu kandung
                                if ($a_ibu_kandung==32) {
                                    $c_ibu_kandung=($warisan-$c_suami-$c_istri)*1/3;
                                    echo "<br><br><br>Ibu Kandung aaa mendapatkan warisan sebesar ";
                                    echo rupiah($c_ibu_kandung);
                                   
                                        echo "<br> Ibu Kandung mendapatkan 1/3 dari sisa harta yang telah diambil dari istri atau suami karena almarhum tidak ada anak/cucu, dan tidak ada dua saudara atau lebih tetapi bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";   
                                }
                                elseif ($a_ibu_kandung!=32) {
                                    $c_ibu_kandung=floor($b_ibu_kandung/10*$warisan);
                                    if ($c_ibu_kandung>0) {
                                        echo "<br><br><br>Ibu Kandung mendapatkan warisan sebesar ";
                                        echo rupiah($c_ibu_kandung);
                                    if($a_ibu_kandung==3) {
                                        echo "<br> Ibu Kandung mendapatkan 1/3 harta warisan karena almarhum  tidak ada anak/cucu, tidak ada dua saudara atau lebih, dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    elseif($a_ibu_kandung==6) {
                                        echo "<br>Ibu Kandung mendapatkan 1/6 harta warisan karena almarhum ada anak/cucu atau ada dua saudara atau lebih dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    }
                                    elseif($c_ibu_kandung==0) {
                                        $c_ibu_kandung=0;
                                    }    
                                }
                                

                                ////harta untuk anak laki-laki perempuan

                                if ($anak_laki_laki>0) {
                                    $sisa=$warisan-$c_suami-$c_istri-$c_ayah_kandung-$c_ibu_kandung;
                                    echo "<br><br>sisa = ";
                                    echo rupiah($sisa);
                                if ($anak_perempuan>0) {
                                        $hasil_anak_laki=floor($sisa*(2/((1*$anak_perempuan)+(2*$anak_laki_laki))));
                                        $hasil_anak_perempuan=floor($sisa*(1/((1*$anak_perempuan)+(2*$anak_laki_laki))));
                                        if($anak_laki_laki>0) {
                                       echo "<br><br><br> anak laki-laki mendapatkan sisa dari harta yang telah dibagikan karena ada anak laki-laki dan anak perempuan maka di bagi dengan perbandingan 2 : 1  yaitu sebanyak ";
                                       echo rupiah($hasil_anak_laki);
                                       echo "<br>sumber : surat An-nisa ayat 11, dan pasal KHI 176";  
                                        }

                                        if($hasil_anak_perempuan>0) {
                                      echo "<br><br><br> anak perempuan mendapatkan sisa dari harta yang telah dibagikan karena ada anak laki-laki dan anak perempuan maka di bagi dengan perbandingan 2 : 1  yaitu sebanyak ";
                                     echo rupiah($hasil_anak_perempuan);
                                     echo " <br>sumber : surat An-nisa ayat 11, dan pasal KHI 176";   
                                     }


                                    }

                                    elseif($anak_perempuan==0){
                                        $hasil_anak_laki=$sisa;
                                        $hasil_anak_perempuan=0;
                                    
                                    if($anak_laki_laki>0) {
                                       echo "<br> <br><br> Anak laki-laki mendapatkan sisa dari harta yang telah dibagikan  yaitu sebanyak ";
                                       echo rupiah($hasil_anak_laki);
                                       echo "<br>sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                     }
                                    }
                                }
                                elseif ($anak_laki_laki==0) {
                                    
                                $c_anak_perempuan=floor($b_anak_perempuan/10*$warisan);
                                    if ($c_anak_perempuan>0) {
                                        
                                            echo "<br><br><br>Anak Perempuan mendapatkan warisan sebesar ";
                                            echo rupiah($c_anak_perempuan);
                                    if($a_anak_perempuan==2) {
                                        echo "<br> Anak Perempuan  mendapatkan 1/2 harta warisan karena Sendirian (tidak ada anak dan cucu lain) <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }
                                    elseif($a_anak_perempuan==3) {
                                        echo "<br>anak perempu an mendapatkan 2/3 harta warisan karena anak perempuan  Dua orang atau lebih atau anak perempuan tidak ada anak atau cucu laki-laki <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }

                                        
                                       
                                    }
                                }

                                ////saudara laki-laki seayah   
                                if ($saudara_laki_laki>0&&$anak_laki_laki==0&&$anak_perempuan==0&&$ayah_kandung="tidak") {
                                    $sisa2=$warisan-$c_suami-$c_istri-$c_ayah_kandung-$c_ibu_kandung-$c_saudara_laki_laki_atau_perempuan_seibu;
                                   
                                    if ($saudara_perempuan_seayah>0) {
                                        $hasil_saudara_laki_laki=floor($sisa2*(2/((1*$saudara_perempuan_seayah)+(2*$saudara_laki_laki))));
                                        $hasil_saudara_perempuan=floor($sisa2*(1/((1*$saudara_perempuan_seayah)+(2*$saudara_laki_laki))));

                                     if($hasil_saudara_laki_laki>0) {
                                       echo "<br><br><br> saudara laki-laki mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak dan ayah kandung. perbandingan pembagian antara saudra laki-laki dan perempuan adalah2 : 1  sehingga saudara laki-laki mendapatkan sebanyak ";
                                       echo rupiah($hasil_saudara_laki_laki);
                                       echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";  
                                        }

                                        if($hasil_saudara_perempuan>0) {
                                      echo "<br><br><br> saudara perempuan mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak, memiliki saudara laki-laki, saudara perempuan, dan tidak ada ayah kandung. perbandingan pembagian antara saudra laki-laki dan perempuan adalah2 : 1  sehingga saudara laki-laki mendapatkan sebanyak "; 
                                      echo rupiah($hasil_saudara_perempuan);
                                      echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                     }

                                    }

                                    elseif($saudara_perempuan_seayah==0){
                                        $hasil_saudara_laki_laki=$sisa2;
                                        $hasil_saudara_perempuan=0;
                                        echo "<br><br><br> saudara laki-laki mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak dan ayah kandung yaitu mendapatkan sebanyak ";
                                        echo rupiah($hasil_saudara_laki_laki);
                                        echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                    
                                    }

                                    
                                    
                                }

                                if($saudara_laki_laki_atau_perempuan_seibu>0&&$anak_perempuan>0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara laki-laki atau perempuan seibu tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_laki_laki_atau_perempuan_seibu>0&&$anak_perempuan>0&&$anak_laki_laki==0) {
                                        echo "<br><br><br>saudara laki-laki atau perempuan seibu tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_laki_laki_atau_perempuan_seibu>0&&$anak_perempuan==0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara laki-laki atau perempuan seibu tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    };

                                    if($saudara_perempuan_seayah>0&&$anak_perempuan>0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara perempuan seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_perempuan_seayah>0&&$anak_perempuan>0&&$anak_laki_laki==0) {
                                        echo "<br><br><br>saudara perempuan seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_perempuan_seayah>0&&$anak_perempuan==0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara perempuan seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    };

                                    if($saudara_laki_laki>0&&$anak_perempuan>0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara laki-laki seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_laki_laki>0&&$anak_perempuan>0&&$anak_laki_laki==0) {
                                        echo "<br><br><br>saudara laki-laki seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_laki_laki>0&&$anak_perempuan==0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara laki-laki seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    };
                                
                                    
                                }

                                ///ashobah ayah

                                if($jumlah_pembagi<10&&$ayah_kandung=="ada"&&$anak_laki_laki==0) {

                                ////harta untuk suami
                                 $c_suami=floor($b_suami/10*$warisan);
                                if($c_suami>0) {
                                    echo "<br><br><br>suami mendapatkan warisan sebesar ";
                                    echo rupiah($c_suami);
                                    if ($suami==2) {
                                        echo "<br> Suami mendapatkan 1/2 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }
                                    elseif($suami==4) {
                                        echo "<br> Suami mendapatkan 1/4 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }
                                }
                                elseif($c_suami==0) {
                                    $c_suami=0;
                                }


                                ////harta untuk istri
                                $c_istri=floor($b_istri/10*$warisan);
                                if ($c_istri>0) {
                                    echo "<br><br><br>istri mendapatkan warisan sebesar "; 
                                    echo rupiah($c_istri);
                                    if ($istri==4) {
                                        echo "<br> istri mendapatkan 1/4 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                    elseif($istri==8) {
                                        echo "<br> Istri mendapatkan 1/8 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                }
                                elseif($c_istri==0) {
                                    $c_istri=0;
                                }

                                ////anak perempuan

                                $c_anak_perempuan=floor($b_anak_perempuan/10*$warisan);
                                    if ($c_anak_perempuan>0) {
                                        
                                            echo "<br><br><br>Anak Perempuan mendapatkan warisan sebesar ";
                                            echo rupiah($c_anak_perempuan);
                                    if($a_anak_perempuan==2) {
                                        echo "<br> Anak Perempuan  mendapatkan 1/2 harta warisan karena Sendirian (tidak ada anak dan cucu lain) <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }
                                    elseif($a_anak_perempuan==3) {
                                        echo "<br>anak perempu an mendapatkan 2/3 harta warisan karena anak perempuan  Dua orang atau lebih atau anak perempuan tidak ada anak atau cucu laki-laki <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }
   
                                    }
                                

                                
                               $rad=1;

                                //ibu kandung
                                if ($a_ibu_kandung==32) {
                                    $c_ibu_kandung=($warisan-$c_suami-$c_istri)*1/3;
                                    echo "<br><br><br>Ibu Kandung aaa mendapatkan warisan sebesar ";
                                    echo rupiah($c_ibu_kandung);
                                   
                                        echo "<br> Ibu Kandung mendapatkan 1/3 dari sisa harta yang telah diambil dari istri atau suami karena almarhum tidak ada anak/cucu, dan tidak ada dua saudara atau lebih tetapi bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";   
                                }
                                elseif ($a_ibu_kandung!=32) {
                                    $c_ibu_kandung=floor($b_ibu_kandung/10*$warisan);
                                    if ($c_ibu_kandung>0) {
                                        echo "<br><br><br>Ibu Kandung mendapatkan warisan sebesar ";
                                        echo rupiah($c_ibu_kandung);
                                    if($a_ibu_kandung==3) {
                                        echo "<br> Ibu Kandung mendapatkan 1/3 harta warisan karena almarhum  tidak ada anak/cucu, tidak ada dua saudara atau lebih, dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    elseif($a_ibu_kandung==6) {
                                        echo "<br>Ibu Kandung mendapatkan 1/6 harta warisan karena almarhum ada anak/cucu atau ada dua saudara atau lebih dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    }
                                    elseif($c_ibu_kandung==0) {
                                        $c_ibu_kandung=0;
                                    }    
                                }
                                

                                
                                ////harta untuk anak ayah kandung

                                if ($ayah_kandung=="ada") {
                                    $sisa=$warisan-$c_suami-$c_istri-$c_ibu_kandung;
                                    echo "<br><br>sisa = ";
                                    echo rupiah($sisa);
                                
                                        $c_ayah_kandung=$sisa;
                                        
                                    
                                    if($c_ayah_kandung>0) {
                                       echo "<br> <br><br> Ayah mendapatkan sisa dari harta yang telah dibagikan  yaitu sebanyak ";
                                       echo rupiah($c_ayah_kandung);
                                       echo "<br>sumber : surat An-nisa ayat 11, dan pasal KHI 177";
                                     }
                                    }
                               

                                ////saudara laki-laki seayah   
                                if ($saudara_laki_laki>0&&$anak_laki_laki==0&&$anak_perempuan==0&&$ayah_kandung="tidak") {
                                    $sisa2=$warisan-$c_suami-$c_istri-$c_ayah_kandung-$c_ibu_kandung-$c_saudara_laki_laki_atau_perempuan_seibu;
                                   
                                    if ($saudara_perempuan_seayah>0) {
                                        $hasil_saudara_laki_laki=floor($sisa2*(2/((1*$saudara_perempuan_seayah)+(2*$saudara_laki_laki))));
                                        $hasil_saudara_perempuan=floor($sisa2*(1/((1*$saudara_perempuan_seayah)+(2*$saudara_laki_laki))));

                                     if($hasil_saudara_laki_laki>0) {
                                       echo "<br><br><br> saudara laki-laki mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak dan ayah kandung. perbandingan pembagian antara saudra laki-laki dan perempuan adalah2 : 1  sehingga saudara laki-laki mendapatkan sebanyak ";
                                       echo rupiah($hasil_saudara_laki_laki);
                                       echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";  
                                        }

                                        if($hasil_saudara_perempuan>0) {
                                      echo "<br><br><br> saudara perempuan mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak, memiliki saudara laki-laki, saudara perempuan, dan tidak ada ayah kandung. perbandingan pembagian antara saudra laki-laki dan perempuan adalah2 : 1  sehingga saudara laki-laki mendapatkan sebanyak "; 
                                      echo rupiah($hasil_saudara_perempuan);
                                      echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                     }

                                    }

                                    elseif($saudara_perempuan_seayah==0){
                                        $hasil_saudara_laki_laki=$sisa2;
                                        $hasil_saudara_perempuan=0;
                                        echo "<br><br><br> saudara laki-laki mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak dan ayah kandung yaitu mendapatkan sebanyak ";
                                        echo rupiah($hasil_saudara_laki_laki);
                                        echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                    
                                    }

                                }

                                if($saudara_laki_laki_atau_perempuan_seibu>0&&$anak_perempuan>0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara laki-laki atau perempuan seibu tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_laki_laki_atau_perempuan_seibu>0&&$anak_perempuan>0&&$anak_laki_laki==0) {
                                        echo "<br><br><br>saudara laki-laki atau perempuan seibu tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_laki_laki_atau_perempuan_seibu>0&&$anak_perempuan==0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara laki-laki atau perempuan seibu tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    };

                                    if($saudara_perempuan_seayah>0&&$anak_perempuan>0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara perempuan seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_perempuan_seayah>0&&$anak_perempuan>0&&$anak_laki_laki==0) {
                                        echo "<br><br><br>saudara perempuan seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_perempuan_seayah>0&&$anak_perempuan==0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara perempuan seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    };

                                    if($saudara_laki_laki>0&&$anak_perempuan>0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara laki-laki seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_laki_laki>0&&$anak_perempuan>0&&$anak_laki_laki==0) {
                                        echo "<br><br><br>saudara laki-laki seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    }
                                    elseif($saudara_laki_laki>0&&$anak_perempuan==0&&$anak_laki_laki>0) {
                                        echo "<br><br><br>saudara laki-laki seayah tidak mendapatkan harta warisan karena almarhum mempunyai anak";
                                    };


                                
                                }


                                ////metde ashobah saudara                                    
                                if($jumlah_pembagi<10&&$anak_laki_laki==0&&$ayah_kandung=="tidak"&&$saudara_laki_laki>0) {

                                ////harta untuk suami
                                 $c_suami=floor($b_suami/10*$warisan);
                                if($c_suami>0) {
                                    echo "<br><br><br>suami mendapatkan warisan sebesar ";
                                    echo rupiah($c_suami);
                                    if ($suami==2) {
                                        echo "<br> Suami mendapatkan 1/2 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }
                                    elseif($suami==4) {
                                        echo "<br> Suami mendapatkan 1/4 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }
                                }
                                elseif($c_suami==0) {
                                    $c_suami=0;
                                }


                                ////harta untuk istri
                                $c_istri=floor($b_istri/10*$warisan);
                                if ($c_istri>0) {
                                    echo "<br><br><br>istri mendapatkan warisan sebesar "; 
                                    echo rupiah($c_istri);
                                    if ($istri==4) {
                                        echo "<br> istri mendapatkan 1/4 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                    elseif($istri==8) {
                                        echo "<br> Istri mendapatkan 1/8 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                }
                                elseif($c_istri==0) {
                                    $c_istri=0;
                                }

                                /////ayah kandung
                                $c_ayah_kandung=floor($b_ayah_kandung/10*$warisan);
                                if ($c_ayah_kandung>0) {
                                        echo "<br><br><br>Ayah Kandung mendapatkan warisan sebesar ";
                                        echo rupiah($c_ayah_kandung);
                                    if ($a_ayah_kandung==3) {
                                        echo "<br> Ayah Kandung mendapatkan 1/3 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 11, dan pasal KHI 177";
                                    }
                                    elseif($a_ayah_kandung==6) {
                                        echo "<br>Ayah Kandung mendapatkan 1/6 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 11, dan pasal KHI 177";
                                    }
                                }
                                elseif($c_ayah_kandung==0) {
                                    $c_ayah_kandung=0;
                                }

                                //ibu kandung
                                if ($a_ibu_kandung==32) {
                                    $c_ibu_kandung=($warisan-$c_suami-$c_istri)*1/3;
                                    echo "<br><br><br>Ibu Kandung aaa mendapatkan warisan sebesar ";
                                    echo rupiah($c_ibu_kandung);
                                   
                                        echo "<br> Ibu Kandung mendapatkan 1/3 dari sisa harta yang telah diambil dari istri atau suami karena almarhum tidak ada anak/cucu, dan tidak ada dua saudara atau lebih tetapi bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";   
                                }
                                elseif ($a_ibu_kandung!=32) {
                                    $c_ibu_kandung=floor($b_ibu_kandung/10*$warisan);
                                    if ($c_ibu_kandung>0) {
                                        echo "<br><br><br>Ibu Kandung mendapatkan warisan sebesar ";
                                        echo rupiah($c_ibu_kandung);
                                    if($a_ibu_kandung==3) {
                                        echo "<br> Ibu Kandung mendapatkan 1/3 harta warisan karena almarhum  tidak ada anak/cucu, tidak ada dua saudara atau lebih, dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    elseif($a_ibu_kandung==6) {
                                        echo "<br>Ibu Kandung mendapatkan 1/6 harta warisan karena almarhum ada anak/cucu atau ada dua saudara atau lebih dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    }
                                    elseif($c_ibu_kandung==0) {
                                        $c_ibu_kandung=0;
                                    }    
                                }
                                

                                //saudara laki atau prempuan seibu
                                $c_saudara_laki_laki_atau_perempuan_seibu=floor($b_saudara_laki_laki_atau_perempuan_seibu/10*$warisan);
                                if ($c_saudara_laki_laki_atau_perempuan_seibu>0) {
                                    echo "<br><br><br>Saudara laki-laki atau perempuan seibu mendapatkan warisan sebesar ";
                                    echo rupiah($c_saudara_laki_laki_atau_perempuan_seibu);
                                    if($a_saudara_laki_laki_atau_perempuan_seibu==3) {
                                        echo "<br> Saudara laki-laki atau perempuan seibu mendapatkan 1/3 harta warisan karena Dua orang lebih, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 181";
                                    }
                                    elseif($a_saudara_laki_laki_atau_perempuan_seibu==6) {
                                        echo "<br>Saudara laki-laki atau perempuan seibu mendapatkan 1/6 harta warisan karena Sendirian, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 181";
                                    }

                                     }  
                                elseif($c_saudara_laki_laki_atau_perempuan_seibu==0) {
                                    $c_saudara_laki_laki_atau_perempuan_seibu=0;
                                }

                                 
                               $rad=1;

                                ////saudara laki-laki seayah   
                                if ($saudara_laki_laki>0&&$anak_laki_laki==0&&$ayah_kandung="tidak") {
                                    $sisa2=$warisan-$c_suami-$c_istri-$c_ayah_kandung-$c_ibu_kandung-$c_saudara_laki_laki_atau_perempuan_seibu;
                                   
                                    if ($saudara_perempuan_seayah>0) {
                                        $hasil_saudara_laki_laki=floor($sisa2*(2/((1*$saudara_perempuan_seayah)+(2*$saudara_laki_laki))));
                                        $hasil_saudara_perempuan=floor($sisa2*(1/((1*$saudara_perempuan_seayah)+(2*$saudara_laki_laki))));

                                     if($hasil_saudara_laki_laki>0) {
                                       echo "<br><br><br> saudara laki-laki mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak dan ayah kandung. perbandingan pembagian antara saudra laki-laki dan perempuan adalah2 : 1  sehingga saudara laki-laki mendapatkan sebanyak ";
                                       echo rupiah($hasil_saudara_laki_laki);
                                       echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";  
                                        }

                                        if($hasil_saudara_perempuan>0) {
                                      echo "<br><br><br> saudara perempuan mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak, memiliki saudara laki-laki, saudara perempuan, dan tidak ada ayah kandung. perbandingan pembagian antara saudra laki-laki dan perempuan adalah2 : 1  sehingga saudara laki-laki mendapatkan sebanyak "; 
                                      echo rupiah($hasil_saudara_perempuan);
                                      echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                     }

                                    }

                                    elseif($saudara_perempuan_seayah==0){
                                        $hasil_saudara_laki_laki=$sisa2;
                                        $hasil_saudara_perempuan=0;
                                        echo "<br><br><br> saudara laki-laki mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak dan ayah kandung yaitu mendapatkan sebanyak ";
                                        echo rupiah($hasil_saudara_laki_laki);
                                        echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                    }
                                    
                                    
                                }

                                                                
                                }

                                    
                                ///// memakai metode  raddd
                                if ($rad==0) {
                                if($jumlah_pembagi<10) {

                                ////harta untuk suami
                                 $c_suami=floor($b_suami/$jumlah_pembagi*$warisan);
                                if($c_suami>0) {
                                    echo "<br><br><br>suami mendapatkan warisan sebesar ";
                                    echo rupiah($c_suami);
                                    if ($suami==2) {
                                        echo "<br> Suami mendapatkan 1/2 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }
                                    elseif($suami==4) {
                                        echo "<br> Suami mendapatkan 1/4 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }
                                }
                                elseif($c_suami==0) {
                                    $c_suami=0;
                                }


                                ////harta untuk istri
                                $c_istri=floor($b_istri/$jumlah_pembagi*$warisan);
                                if ($c_istri>0) {
                                    echo "<br><br><br>istri mendapatkan warisan sebesar "; 
                                    echo rupiah($c_istri);
                                    if ($istri==4) {
                                        echo "<br> istri mendapatkan 1/4 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                    elseif($istri==8) {
                                        echo "<br> Istri mendapatkan 1/8 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                }
                                elseif($c_istri==0) {
                                    $c_istri=0;
                                }

                                /////ayah kandung
                                $c_ayah_kandung=floor($b_ayah_kandung/$jumlah_pembagi*$warisan);
                                if ($c_ayah_kandung>0) {
                                        echo "<br><br><br>Ayah Kandung mendapatkan warisan sebesar ";
                                        echo rupiah($c_ayah_kandung);
                                    if ($a_ayah_kandung==3) {
                                        echo "<br> Ayah Kandung mendapatkan 1/3 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 11, dan pasal KHI 177";
                                    }
                                    elseif($a_ayah_kandung==6) {
                                        echo "<br>Ayah Kandung mendapatkan 1/6 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 11, dan pasal KHI 177";
                                    }
                                }
                                elseif($c_ayah_kandung==0) {
                                    $c_ayah_kandung=0;
                                }

                                //ibu kandung
                                if ($a_ibu_kandung==32) {
                                    $c_ibu_kandung=($warisan-$c_suami-$c_istri)*1/3;
                                    echo "<br><br><br>Ibu Kandung aaa mendapatkan warisan sebesar ";
                                    echo rupiah($c_ibu_kandung);
                                   
                                        echo "<br> Ibu Kandung mendapatkan 1/3 dari sisa harta yang telah diambil dari istri atau suami karena almarhum tidak ada anak/cucu, dan tidak ada dua saudara atau lebih tetapi bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";   
                                }
                                elseif ($a_ibu_kandung!=32) {
                                    $c_ibu_kandung=floor($b_ibu_kandung/$jumlah_pembagi*$warisan);
                                    if ($c_ibu_kandung>0) {
                                        echo "<br><br><br>Ibu Kandung mendapatkan warisan sebesar ";
                                        echo rupiah($c_ibu_kandung);
                                    if($a_ibu_kandung==3) {
                                        echo "<br> Ibu Kandung mendapatkan 1/3 harta warisan karena almarhum  tidak ada anak/cucu, tidak ada dua saudara atau lebih, dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    elseif($a_ibu_kandung==6) {
                                        echo "<br>Ibu Kandung mendapatkan 1/6 harta warisan karena almarhum ada anak/cucu atau ada dua saudara atau lebih dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    }
                                    elseif($c_ibu_kandung==0) {
                                        $c_ibu_kandung=0;
                                    }    
                                }
                                

                                //saudara laki atau prempuan seibu
                                $c_saudara_laki_laki_atau_perempuan_seibu=floor($b_saudara_laki_laki_atau_perempuan_seibu/$jumlah_pembagi*$warisan);
                                if ($c_saudara_laki_laki_atau_perempuan_seibu>0) {
                                    echo "<br><br><br>Saudara laki-laki atau perempuan seibu mendapatkan warisan sebesar ";
                                    echo rupiah($c_saudara_laki_laki_atau_perempuan_seibu);
                                    if($a_saudara_laki_laki_atau_perempuan_seibu==3) {
                                        echo "<br> Saudara laki-laki atau perempuan seibu mendapatkan 1/3 harta warisan karena Dua orang lebih, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 181";
                                    }
                                    elseif($a_saudara_laki_laki_atau_perempuan_seibu==6) {
                                        echo "<br>Saudara laki-laki atau perempuan seibu mendapatkan 1/6 harta warisan karena Sendirian, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 181";
                                    }

                                     }  
                                elseif($c_saudara_laki_laki_atau_perempuan_seibu==0) {
                                    $c_saudara_laki_laki_atau_perempuan_seibu=0;
                                }

                                 //saudara perempuan se ayah
                                if($saudara_laki_laki==0&&$anak_perempuan==0&&$anak_laki_laki==0){
                                 $c_saudara_perempuan_seayah=floor($b_saudara_perempuan_seayah/$jumlah_pembagi*$warisan);
                            
                                if ($c_saudara_perempuan_seayah>0) {
                                        echo "<br><br><br>Saudara perempuan mendapatkan warisan sebesar ";
                                        echo rupiah($c_saudara_perempuan_seayah);
                                    if($a_saudara_perempuan_seayah==2) {
                                        echo "<br> Saudara Perempuan seayah mendapatkan 1/2 harta warisan karena Sendirian, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                    }
                                    elseif($a_saudara_perempuan_seayah==3) {
                                        echo "<br>Saudara Perempuan seayah mendapatkan 2/3 harta warisan karena Dua orang atau lebih, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                    }
                                }
                                elseif($c_saudara_perempuan_seayah==0) {
                                    $c_saudara_perempuan_seayah=0;
                                }
                                }


                                ////harta untuk anak laki-laki perempuan

                                if ($anak_laki_laki>0) {
                                    $sisa=$warisan-$c_suami-$c_istri-$c_ayah_kandung-$c_ibu_kandung-$c_saudara_laki_laki_atau_perempuan_seibu;
                                    echo "<br><br>sisa = ";
                                    echo rupiah($sisa);
                                if ($anak_perempuan>0) {
                                        $hasil_anak_laki=floor($sisa*(2/((1*$anak_perempuan)+(2*$anak_laki_laki))));
                                        $hasil_anak_perempuan=floor($sisa*(1/((1*$anak_perempuan)+(2*$anak_laki_laki))));
                                        if($anak_laki_laki>0) {
                                       echo "<br><br><br> anak laki-laki mendapatkan sisa dari harta yang telah dibagikan karena ada anak laki-laki dan anak perempuan maka di bagi dengan perbandingan 2 : 1  yaitu sebanyak ";
                                       echo rupiah($hasil_anak_laki);
                                       echo "<br>sumber : surat An-nisa ayat 11, dan pasal KHI 176";  
                                        }

                                        if($hasil_anak_perempuan>0) {
                                      echo "<br><br><br> anak perempuan mendapatkan sisa dari harta yang telah dibagikan karena ada anak laki-laki dan anak perempuan maka di bagi dengan perbandingan 2 : 1  yaitu sebanyak ";
                                     echo rupiah($hasil_anak_perempuan);
                                     echo " <br>sumber : surat An-nisa ayat 11, dan pasal KHI 176";   
                                     }


                                    }

                                    elseif($anak_perempuan==0){
                                        $hasil_anak_laki=$sisa;
                                        $hasil_anak_perempuan=0;
                                    
                                    if($anak_laki_laki>0) {
                                       echo "<br> <br><br> Anak laki-laki mendapatkan sisa dari harta yang telah dibagikan  yaitu sebanyak ";
                                       echo rupiah($hasil_anak_laki);
                                       echo "<br>sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                     }
                                    }
                                }
                                elseif ($anak_laki_laki==0) {
                                    
                                $c_anak_perempuan=floor($b_anak_perempuan/$jumlah_pembagi*$warisan);
                                    if ($c_anak_perempuan>0) {
                                        
                                            echo "<br><br><br>Anak Perempuan mendapatkan warisan sebesar ";
                                            echo rupiah($c_anak_perempuan);
                                    if($a_anak_perempuan==2) {
                                        echo "<br> Anak Perempuan  mendapatkan 1/2 harta warisan karena Sendirian (tidak ada anak dan cucu lain) <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }
                                    elseif($a_anak_perempuan==3) {
                                        echo "<br>anak perempu an mendapatkan 2/3 harta warisan karena anak perempuan  Dua orang atau lebih atau anak perempuan tidak ada anak atau cucu laki-laki <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }

                                        
                                       
                                    }
                                }


                                ////saudara laki-laki seayah   
                                if ($saudara_laki_laki>0&&$anak_laki_laki==0&&$anak_perempuan==0&&$ayah_kandung="tidak") {
                                    $sisa2=$warisan-$c_suami-$c_istri-$c_ayah_kandung-$c_ibu_kandung-$c_saudara_laki_laki_atau_perempuan_seibu;
                                   
                                    if ($saudara_perempuan_seayah>0) {
                                        $hasil_saudara_laki_laki=floor($sisa2*(2/((1*$saudara_perempuan_seayah)+(2*$saudara_laki_laki))));
                                        $hasil_saudara_perempuan=floor($sisa2*(1/((1*$saudara_perempuan_seayah)+(2*$saudara_laki_laki))));

                                     if($hasil_saudara_laki_laki>0) {
                                       echo "<br><br><br> saudara laki-laki mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak dan ayah kandung. perbandingan pembagian antara saudra laki-laki dan perempuan adalah2 : 1  sehingga saudara laki-laki mendapatkan sebanyak ";
                                       echo rupiah($hasil_saudara_laki_laki);
                                       echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";  
                                        }

                                        if($hasil_saudara_perempuan>0) {
                                      echo "<br><br><br> saudara perempuan mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak, memiliki saudara laki-laki, saudara perempuan, dan tidak ada ayah kandung. perbandingan pembagian antara saudra laki-laki dan perempuan adalah2 : 1  sehingga saudara laki-laki mendapatkan sebanyak "; 
                                      echo rupiah($hasil_saudara_perempuan);
                                      echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                     }

                                    }

                                    elseif($saudara_perempuan_seayah==0){
                                        $hasil_saudara_laki_laki=$sisa2;
                                        $hasil_saudara_perempuan=0;
                                        echo "<br><br><br> saudara laki-laki mendapatkan sisa dari harta yang telah dibagikan karena almarhum tidak ada anak dan ayah kandung yaitu mendapatkan sebanyak ";
                                        echo rupiah($hasil_saudara_laki_laki);
                                        echo "<br>sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                    
                                    }

                                    
                                    
                                }

                               
                                
                                    echo "<br><br>nb : memakai metode radd dimana metode ini dipakai ketika harta warisan yang dibagikan berlebih";
                                }    
                                }
                                


                                ////memakai metode aul
                                if($jumlah_pembagi>=10) {
                                ////harta untuk suami
                                $c_suami=floor($b_suami/$jumlah_pembagi*$warisan);
                                if ($c_suami>0) {
                                    if ($b_suami/$jumlah_pembagi!=1) {
                                        echo "<br><br><br>suami mendapatkan warisan sebesar ";
                                        echo rupiah($c_suami);
                                    if($suami==2) {
                                        echo "<br> Suami mendapatkan 1/2 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }
                                    elseif($suami==4) {
                                        echo "<br> Suami mendapatkan 1/4 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 179";
                                    }

                                    }
                                    else{
                                        $cc_suami=1/$suami*$warisan;
                                        echo "<br>suami mendapatkan warisan sebesar Rp $cc_suami";
                                    }
                                }

                                ////harta untuk istri
                                $c_istri=floor($b_istri/$jumlah_pembagi*$warisan);
                                if ($c_istri>0) {
                                    if ($b_istri/$jumlah_pembagi!=1) {
                                        echo "<br><br><br>istri mendapatkan warisan sebesar ";
                                        echo rupiah($c_istri);
                                    if ($istri==4) {
                                        echo "<br> istri mendapatkan 1/4 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                    elseif($istri==8) {
                                        echo "<br> Istri mendapatkan 1/8 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 12, dan pasal KHI 180";
                                    }
                                    }
                                    else{
                                        $cc_istri=1/$istri*$warisan;
                                        echo "<br>istri mendapatkan warisan sebesar Rp $cc_istri";
                                    }
                                    
                                }

                                ////harta untuk anak perempuan
                                $c_anak_perempuan=floor($b_anak_perempuan/$jumlah_pembagi*$warisan);
                                if ($c_anak_perempuan>0) {
                                    if ($b_anak_perempuan/$jumlah_pembagi!=1) {
                                        echo "<br><br><br>Anak Perempuan mendapatkan warisan sebesar ";
                                        echo rupiah($c_anak_perempuan);
                                    if($a_anak_perempuan==2) {
                                        echo "<br> Anak Perempuan  mendapatkan 1/2 harta warisan karena Sendirian (tidak ada anak dan cucu lain) <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }
                                    elseif($a_anak_perempuan==3) {
                                        echo "<br>anak perempu an mendapatkan 2/3 harta warisan karena anak perempuan  Dua orang atau lebih atau anak perempuan tidak ada anak atau cucu laki-laki <br> sumber : surat An-nisa ayat 11, dan pasal KHI 176";
                                    }
                                    }
                                    else{
                                        $cc_anak_perempuan=1/$a_anak_perempuan*$warisan;
                                        echo "<br>Anak Perempuan mendapatkan warisan sebesar Rp $cc_anak_perempuan";
                                    }  
                                }

                                
                                /////ayah kandung
                                $c_ayah_kandung=floor($b_ayah_kandung/$jumlah_pembagi*$warisan);
                                if ($c_ayah_kandung>0) {
                                    if ($b_ayah_kandung/$jumlah_pembagi!=1) {
                                        echo "<br><br><br>Ayah Kandung mendapatkan warisan sebesar ";
                                        echo rupiah($c_ayah_kandung);
                                    if ($a_ayah_kandung==3) {
                                        echo "<br> Ayah Kandung mendapatkan 1/3 harta warisan karena almarhum tidak ada anak atau cucu <br> sumber : surat An-nisa ayat 11, dan pasal KHI 177";
                                        }
                                        elseif($a_ayah_kandung==6) {
                                            echo "<br>Ayah Kandung mendapatkan 1/6 harta warisan karena almarhum  ada anak atau cucu <br> sumber : surat An-nisa ayat 11, dan pasal KHI 177";
                                        }
                                    }
                                    else{
                                        $cc_ayah_kandung=1/$a_ayah_kandung*$warisan;
                                        echo "<br>Anak Perempuan mendapatkan warisan sebesar Rp $cc_ayah_kandung";
                                    }  
                                }

                                //ibu kandung
                                $c_ibu_kandung=floor($b_ibu_kandung/$jumlah_pembagi*$warisan);
                                if ($c_ibu_kandung>0) {
                                    if ($b_ibu_kandung/$jumlah_pembagi!=1) {
                                        echo "<br><br><br>Ibu Kandung mendapatkan warisan sebesar ";
                                        echo rupiah($c_ibu_kandung);

                                    if($a_ibu_kandung==3) {
                                        echo "<br> Ibu Kandung mendapatkan 1/3 harta warisan karena almarhum  tidak ada anak/cucu, tidak ada dua saudara atau lebih, dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    elseif($a_ibu_kandung==32) {
                                        echo "<br> Ibu Kandung mendapatkan 1/3 harta warisan karena almarhum  tidak ada anak/cucu, tidak ada dua saudara atau lebih, dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    elseif($a_ibu_kandung==6) {
                                        echo "<br>Ibu Kandung mendapatkan 1/6 harta warisan karena almarhum ada anak/cucu atau ada dua saudara atau lebih dan tidak bersama Ayah Kandung <br> sumber : surat An-nisa ayat 11, dan pasal KHI 178";
                                    }
                                    }
                                    else{
                                        $cc_ibu_kandung=1/$a_ibu_kandung*$warisan;
                                        echo "<br>Ibu kandung mendapatkan warisan sebesar Rp $cc_ibu_kandung";
                                    }  
                                }

                                //saudara laki atau prempuan seibu
                                $c_saudara_laki_laki_atau_perempuan_seibu=floor($b_saudara_laki_laki_atau_perempuan_seibu/$jumlah_pembagi*$warisan);
                                if ($c_saudara_laki_laki_atau_perempuan_seibu>0) {
                                    if ($b_saudara_laki_laki_atau_perempuan_seibu/$jumlah_pembagi!=1) {
                                        echo "<br><br><br>Saudara laki-laki atau perempuan seibu mendapatkan warisan sebesar ";
                                        echo rupiah($c_saudara_laki_laki_atau_perempuan_seibu);
                                        if($a_saudara_laki_laki_atau_perempuan_seibu==3) {
                                        echo "<br> Saudara laki-laki atau perempuan seibu mendapatkan 1/3 harta warisan karena Dua orang lebih, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 181";
                                    }
                                    elseif($a_saudara_laki_laki_atau_perempuan_seibu==6) {
                                        echo "<br>Saudara laki-laki atau perempuan seibu mendapatkan 1/6 harta warisan karena Sendirian, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 181";
                                    }

                                    }
                                    else{
                                        $cc_saudara_laki_laki_atau_perempuan_seibu=1/$a_saudara_laki_laki_atau_perempuan_seibu*$warisan;
                                        echo "<br>Ibu kandung mendapatkan warisan sebesar Rp $cc_saudara_laki_laki_atau_perempuan_seibu";
                                    }  
                                }

                                 //saudara perempuan se ayah
                                $c_saudara_perempuan_seayah=floor($b_saudara_perempuan_seayah/$jumlah_pembagi*$warisan);
                                if ($c_saudara_perempuan_seayah>0) {
                                    if ($b_saudara_perempuan_seayah/$jumlah_pembagi!=1) {
                                        echo "<br><br><br>Saudara perempuan seayah mendapatkan warisan sebesar ";
                                        echo rupiah($c_saudara_perempuan_seayah);
                                        if($a_saudara_perempuan_seayah==2) {
                                        echo "<br> Saudara Perempuan seayah mendapatkan 1/2 harta warisan karena Sendirian, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                        }
                                        elseif($a_saudara_perempuan_seayah==3) {
                                            echo "<br>Saudara Perempuan seayah mendapatkan 2/3 harta warisan karena Dua orang atau lebih, tidak ada anak / cucu, dan tidak ada Ayah Kandung <br> sumber : surat An-nisa ayat 12, dan pasal KHI 182";
                                        }
                                    }
                                    else{
                                        $cc_saudara_perempuan_seayah=1/$a_saudara_perempuan_seayah*$warisan;
                                        echo "<br>Ibu kandung mendapatkan warisan sebesar Rp $cc_saudara_perempuan_seayah";
                                    }   
                                }
                                    

                                echo "<br><br><font color='red'>nb: memakai metode aul yaitu bertambahnya jumlah bagian dzawil furudh atau berkurangnya kadar penerimaan warisan mereka. Sehingga jelas bahwa hal ini dapat terjadi apabila terdapat banyak ahli waris yang berhak memperoleh warisan sehingga menghabiskan harta warisan, tetapi masih ada ahli waris lainnya yang belum mendapat bagian. metode aul ini bertujuan agar semua ahli waris mendapatkan hak warisnya. </font>" ;  
                                }  ?>
                                <br><br>

                               <a href="cetak2.php?istr=<?php echo $istr ?>&&suam=<?php echo $suam ?>&&anak_laki_laki=<?php echo $anak_laki_laki ?>&&anak_perempuan=<?php echo $anak_perempuan ?>&&ayah_kandung=<?php echo $ayah_kandung ?>&&ibu_kandung=<?php echo $ibu_kandung ?>&&saudara_laki_laki_atau_perempuan_seibu=<?php echo $saudara_laki_laki_atau_perempuan_seibu ?>&&saudara_perempuan_seayah=<?php echo $saudara_perempuan_seayah ?>&&saudara_laki_laki=<?php echo $saudara_laki_laki ?>&&istri2=<?php echo $istri2 ?>&&warisan=<?php echo $warisan ?>&&nikah=<?php echo $nikah ?>&&a_ayah_kandung=<?php echo $a_ayah_kandung ?>" target="_blank" >
                                <button type="button" class="btn btn-block btn-lg btn-info waves-effect">Cetak</button>
                            </a> 
                            <?php
                            }

                            ?>  
                            <br>
                            <br>
                            <a href="hitung_warisa.php?warisan=<?php echo $warisan ?>&&jenis_kelamin=<?php echo $jenis_kelamin ?>&&nikah=<?php echo $nikah ?>">
                                <button type="button" class="btn btn-block btn-lg bg-black waves-effect">Kembali</button>
                            </a>
                            <br>
                            <br>


                           
                               
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
