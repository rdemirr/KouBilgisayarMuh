<?php
   include('../session.php');
   include_once '../dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

?>

<!DOCTYPE HTML5>
<html>
   
   <head>
	    <title>Koü Ceng</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" />
	    <link rel="stylesheet" href="../css/panel.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
   </head>
   
   <body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header" style="padding-right: 10px;">
					<a href=".">
						<img id="brand_img" alt="Brand" width="60" height="60" src="../img/kou_logo.png">
						Bilgisayar Mühendisliği
					</a>
				</div>

				<div style="padding-top:5px;" id="navs" class="collapse navbar-collapse">
					<ul id="navLinks" class="nav navbar-nav">
						
						<li id="nav_duyurular" class="active">
								<a href="#" onclick="duyuruGoster()">
									<span class="glyphicon glyphicon-inbox"></span> Duyurular
								</a>
						</li>

						<li id="nav_users">
								<a href="#" onclick="kullaniciGoster()">
									<i class="fa fa-users" aria-hidden="true"></i> 
									Kullanıcılar 
									<span id="usersBadge" class="badge"><?php echo $kullanici_sayisi?></span>
								</a>
						</li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						
						<li><a>Sayın,<b> <?php echo $login_session_name?></b> Hoşgeldiniz!</a></li>
						
						<li id="nav_profile">
							<a href="#" onclick="profilGoster()">
								<span class="glyphicon glyphicon-user"></span> Profilim
							</a>
						</li>
						
						<li> 
								<a href="logout.php">
									<i class="fa fa-sign-out" aria-hidden="true"></i> Çıkış
								</a>
						</li>
					
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- Sayfalar div başlangıcı -->
	<div id="pages" class="container-fluid">


	<!-- Duyurular Sayfası Başlangıcı -->
		<div id="duyurular_page">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h3>Duyurular Sayfası!!!!</h3>
				</div>
			</div>
		</div>
	<!-- Duyurular Sayfası Bitişi -->


	<!-- Kullanıcılar Sayfası Başlangıcı -->
		<div id="users_page" style="display: none;">
		<?php include('kullanicilar.php');  ?>
		</div>
		<!-- Kullanıcılar Sayfası Sonu -->

		<!-- Profilim Sayfası Başlangıcı -->
		<div id="profile_page" class="row" style="display: none;">
			<?php include('profile.php') ?>
		</div>
		<!-- Profilim Sayfası Bitişi -->
		

	</div>
	<!-- Sayfalar div'i-->

	<!-- Add User Modal -->
	<div id="kullanici_ekle_modal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Yeni Kullanıcı Ekle</h4>
				</div>
				<div class="modal-body">
					<p style="text-align: center; font-size: 15px;" id="kullaniciEkleMesaj" class="label label-danger"></p>
					<br>
					<br>
					      <fieldset>
                                        <div class="form-group">
                                           <input class="form-control" required placeholder="Ünvan , Ad ve Soyad Giriniz" id="adSoyad" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required placeholder="E-mail Giriniz" id="mailAdresi" type="text">
                           
                                        </div>
                                        	
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Şifreyi Giriniz" id="sifre" type="password" required value="">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Şifreyi tekrar Giriniz" id="sifreTekrar" required type="password" value="">
                                        </div>
                                        <div>
                                        	<b>Rol:</b>
												<div id="selectedUserRoles" class="checkbox form-control">
													<label class="checkbox-inline">
													<input type="radio" name="userRole" id="" checked="checked" >   Normal Kullanıcı
													</label>
													<label class="checkbox-inline">
														<input type="radio" name="userRole" id="adminRadio">   Admin
													</label>
												</div>
											</div>
                                   </fieldset>
				</div>
				<div class=" modal-footer">
					<button id="kullaniciKaydetButton" class="btn btn-success">Kaydet</button>
					<button class="btn btn-primary" data-dismiss="modal">Kapat</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Add User Modal end -->


		<!-- JAVASCRIPT Dosyaları -->
		<script type="text/javascript" src="../vendor/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="../js/basic.js"></script>
   </body>
   
</html>


<?php
   if ($login_session_role == "user") {
	?>
		<style type="text/css">#users_page{display:none}</style>
		<script type="text/javascript">kullaniciDivGizle();</script> 
		<?php	
	}else{
		?>
		<script type="text/javascript"> 
				    console.log( "admin giris yaptı pnp!  Kullanıcılar Sekmesi açık!!!!!" );
		</script>
		<?php
	}
?>