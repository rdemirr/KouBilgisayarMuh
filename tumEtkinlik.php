<?php
	include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

	?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">
<meta name="author" content="">

<title>Kocaeli Üniversitesi Bilgisayar Muhendisligi</title>

<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
	rel="stylesheet" type="text/css">

<!-- Theme CSS -->
<link href="css/agency.min.css" rel="stylesheet">
<link href="css/dummy.css" rel="stylesheet">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body id="page-top" class="index" style="background:#f8f8f8;">

	<!-- Navigation -->
	
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="padding-bottom :25px ">
             <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
                  <a class="navbar-brand" href="index.php"><img
					src="img/kou_logo.png" alt="KOÜ" width="50" height="50"/></a> <a
					class="navbar-brand" href="index.php">Kocaeli
					Üniversitesi</br>Bilgisayar Muhendisligi
				</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse js-navbar-collapse" style="margin-top: 15px">
		<ul class="nav navbar-nav navbar-right">
		<li class="dropdown nav-item"><a class="dropdown-toggle" href="#"
							data-toggle="dropdown">Hakkımızda<span class="caret"></span></a>

							<ul class="dropdown-menu" style="background-color: #2E363F;border-radius: 6px;">
								<li><a style="color:#afafaf" href="#section41">Tarihçe</a></li>

								<li><a style="color:#afafaf" href="#section42">Hakkımızda</a></li>
								<li><a style="color:#afafaf" href="#section40">Misyon</a></li>
								<li><a style="color:#afafaf" href="#section43">Vizyon</a></li>
								<li><a style="color:#afafaf" href="#section43">Ana Bilim Dalları</a></li>
								<li><a style="color:#afafaf" href="#section43">Program Çıktıları</a></li>
							</ul></li>
			<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Eğitim <b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Lisans</li>
							<li><a href="#section41">Dilekçe Formları</a></li>
								<li><a href="#section42">Ders Planı</a></li>
								<li><a href="#section40">Ders İçerikleri</a></li>
								
								<li><a href="#section40">Proje ve Bitirme</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Y.Lisans</li>
							<li><a href="#section41">Çalışma Alanları</a></li>
							<li><a href="#section42">Ders Listesi</a></li>
							<li><a href="#section40">Ders Programı</a></li>
							<li><a href="#section43">Tezler</a></li>
							<li class="divider ek"></li>
						</ul>
					</li>
						<li class="col-sm-3">
						<ul>
							
							<li class="dropdown-header">Doktora</li>
							<li><a href="#section42">Ders Listesi</a></li>
							<li><a href="#section40">Ders Programı</a></li>
							<li><a href="#">Tezler</a></li>
							<li><a href="#">Çalışma Alanları</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Ekler</li>
							<li><a href="#section41">Aday Öğrenciler</a></li>
							<li><a href="#section42">Mezunlar</a></li>
							<li><a href="#section40">Müdek</a></li>
							<li><a href="#section43">Akademik Takvim</a></li>
							<li><a href="#section43">İntibak Öğrencileri</a></li>
							<li><a href="#section43">Diploma Sorgulama</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>


				
				</ul>
				
			</li>
			<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik <b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Personel</li>
								 
								<li><a href="kadro.php">Bölüm Personelleri</a></li>
								  
								<li><a href="giris.php">Sisteme Giriş</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>
					<li class="col-md-6">
						<ul>
							<li class="dropdown-header">Araştırma</li>
							<li><a href="#section41">Akıllı Sistemler Araştırma	Laboratuvarı</a></li>
								<li><a href="#section42">Bilgisayar Ağları ve Haberleşme Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">Gömülü ve Algılayıcı Sistemler Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">Yapay Zeka ve Benzetim Sistemleri Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">İnsan Bilgisayar Etkileşimi Araştırma Laboratuvarı</a></li>
								<li class="divider ek"></li>
								
							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Yönetim</li>
							<li><a href="#section41">Bilgisayar Mühendisliği Yönetimi</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>
				</ul>
				
			</li>
			<li><a href="iletisim.php">Ulaşım/İletişim</a>				

					</li>
			
			 				
						
		</ul>

		
	</div><!-- /.nav-collapse -->
            
        </div>
        <!-- /.container -->
    </nav>
    <span class="header_shadow" style="top:74px"></span>
<div class="container-fluid" style="margin-top: 125px">
<li class="list-group-item" style="background-color:#F3FBEE">
			  <div>
    		<h3 style="text-align:center">TÜM ETKİNLİKLER</h3>
    			</div>
			  </li>

    	<div class="row">
    		<div class="col-md-12">
				  <ul class="list-group">
			           <?php


						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE DUYURU_TURU='Etkinlik' ORDER BY ID DESC ";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										$sayac=1;
								        while($row = mysqli_fetch_array($result)){
								        	if($sayac%2==0){
								        		echo "<li class='list-group-item' style='background: #ebf9e0;'>";
								        	}else{
								        		echo "<li class='list-group-item'>";
								        	}
								        	$sayac++;
								      echo "<div class='event postcard-left'><div class='event-date'>
								      <span class='event-month' style='color:#6B140E; padding-right:20px;font-size: 1.4em;font-weight: 200; '>".$row['ETKINLIK_AY']."</span></br>
								       <span class='event-day'style='color:#009745;padding-right:20px;font-size: 2.2em;font-weight: 200;'>".$row['ETKINLIK_GUN']."</span></div>";
								    	
							


echo "<div class='event-text'><h3 style='margin: 0 0 5px 0;'><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."' class='su-link' data-ua-action='hp-event' data-ua-label='id'>".$row['TITLE']."</a></h3><p class='timestamp'><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."'>".$row['MESSAGE']."</a></p></div></div></li>";



						 echo "<div class='modal fade' id='duyuru".$row['ID']."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display:none;'>
                    <div class='modal-dialog'>
                      <div class='modal-content'>
                        <div class='modal-header' style='background-color: #009E49;'>
                          <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>
                          <h4 style='color:white;' class='modal-title' id='myModalLabel'>";
                          echo "<div>".$row['TITLE']."</div></h4></div>";
                          
                          $bosluk = array("\n","/g");
                          $row['MESSAGE'] = str_replace($bosluk, "<br />", $row['MESSAGE']); 

                          echo " <div class='modal-body'>
                          <div class='duyuruMetni'>".$row['MESSAGE']."</div>";
                          echo " <div class='modal-footer'>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Kapat</button>
                        </div></div></div></div></div>";
			
								        }


								        mysqli_free_result($result);
								    } else{
								        echo "Aranan kayıtlar bulunamadı :( .";
								    }
								} else{
								    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
								}						
			
	?>
			  
			</ul>
		<br><br>

			  </li>
			  </div>
			   </div>
			    </div>
	
	
	
	
	
	
		<script src="vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

 <footer class="footer" role="contentinfo">
					
						<div id="inner-footer" class="row clearfix">
							<div class="container" >
							<div class="row" >
							<!-- Logo -->
							<div class="col-md-4">								
								<div id="footer-logo" style="margin-top: 19px"></div>
		    				</div>
		    				<!-- Contact Info -->
		    				<div class="col-md-4">
		    					<h5 class="footer-title" style="padding-left:15px">İletişim</h5>
								<p style="padding-left: 20px">KOÜ Mühendislik Fakültesi (B Blok)<br/>
								   Bilgisayar Mühendisliği<br/>
								   Umuttepe Yerleşkesi 41380 Kocael<br/>
								   <br/>
								   <a href="tel:25353574"1"1">+90 (262) 303 35 60</a><br/>
								   <a href="mailto:concierge@plu.edu">bilgisayar@kocaeli.edu.tr</a>
								</p>
								<ul class="social-media-icons" style="padding-left: 15px">
									<a href="http://www.facebook.com/Pacific.Lutheran.University" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-facebook fa-stack-1x"></i>
											</span>
											<span class="social-type-tooltip" style="left:-9px;">facebook</span>								
										</li>
									</a>
									
									<a href="http://twitter.com/PLUNEWS" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-twitter fa-stack-1x"></i>
											</span>									
											<span class="social-type-tooltip" style="left:-2px;">twitter</span>
										</li>
									</a>
									<a href="http://instagram.com/pacificlutheran" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-instagram fa-stack-1x"></i>
											</span>									
											<span class="social-type-tooltip" style="left:-11px;">instagram</span>
										</li>
									</a>
									<a href="http://www.linkedin.com/edu/school?id=19647&trk=tyah&trkInfo=tas%3APacific%20Lutheran%20%2Cidx%3A3-1-4" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-linkedin fa-stack-1x"></i>
											</span>									
											<span class="social-type-tooltip" style="left:-5px;">linkedin</span>
										</li>
									</a>
									<a href="https://www.snapchat.com/add/pacificlutheran" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-snapchat-ghost fa-stack-1x"></i>
											</span>									
											<span class="social-type-tooltip" style="left:-9px;">snapchat</span>
										</li>
									</a>
									
									
								</ul>
								<br/>
		    				</div>
		    				<!-- Global Footer Links -->
		    				<div class="col-md-4">
		    					<h5 class="footer-title" style="padding-left: 15px">Faydalı Linkler</h5>
		    					<div style="padding-left: 20px">
								<i class="fa fa-globe"></i><a href="http://kocaeli.edu.tr" style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Kocaeli Üniversitesi</a><br/>
								<i  class="fa fa-users"></i><a  href="http://bilsis.kocaeli.edu.tr/" style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Öğrenci Bilgi Sistemi</a><br/>
							    <i class="fa fa-child"></i><a id="mundi" style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Kou Günlük Yemek Listesi</a><br/>
								<i class="fa fa-bar-chart"></i><a style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Istatistik</a><br/>
								<i class="fa fa-map-marker"></i><a style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Mühendislik Fakültesi</a><br/>
								<i class="fa fa-book"></i><a style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Kocaeli Üniversitesi Kütüphane</a><br/>
		    				</div>
		    							</div>
		    							</div>                		
						</div> <!-- end #inner-footer -->								
					</footer> <!-- end .footer -->
	
</body>

</html>