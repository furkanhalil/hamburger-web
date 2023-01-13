<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Burger De La Vie</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!--stil dosylaları için   -->
	<link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

</head>
<body>
	<!-- header (başlık) başlangıç -->
	<header>
		<a href="#" class="logo"><img src="webFotoğraflar/en yeni.png" width="165rem"></a>

		<nav class="navbar">
			<a href="#home" class="active">Ana Sayfa</a>
			<a href="#about">Hakkımızda</a>
			<a href="#menu">Menu</a>
			<a href="#reservation">Rezervasyon</a>
			<a href="#blog">Blog</a>
		</nav>

		<div class="icons">
			<i class="fas fa-bars" id="menu"></i>
			<a href="#reservation"><i class="fas fa-heart"></i></a>
			<a href="https://goo.gl/maps/T2zawt7uYoHMatLq8"><i class="fas fa-map-location"></i></a>
		</div>
	</header>
	<!-- header (başlangıç) bitişi -->

	<!-- ana sayfa yazılar -->
	<div class="home" id="home">
		<div class="swiper home-slider">
			<div class="swiper-wrapper wrapper">
				<div class="swiper-slide slide slide1">
					<div class="content">
						<img src="">

						<h3>Burger De La Vie </h3>
						<h1>Lezzetli ve Kaliteli</h1>
					
						<a href="#reservation" class="btn">Rezervasyon için tıklayınız</a>
					</div>
				</div>

				<div class="swiper-slide slide slide2">
					<div class="content">
						<img src="">

						<h3>Burger De La Vie</h3>
						<h1>eşsiz ve benzersiz</h1>
						<a href="#reservation" class="btn">Rezervasyon için tıklayınız</a>
					</div>
				</div>

				</div>
			</div>

			<div class="swiper-pagination"></div>
		</div>
	</div>
	<!-- ana sayfa yazı sonu -->

	<!-- hakkımızda başlangıç -->
	<section class="welcome" id="about">
		<h1 class="heading">Burger De La Vie'ye Hoşgeldiniz</h1>
		<center><h3 class="sub-heading"> ~ Lüks & Kalite ~ </h3></center>

		<div class="box-container">
			<div class="box">
				<div class="image">
					<img src="webFotoğraflar/restoran.jpg">
				</div>

				<div class="content">
					<h3>profosyonel hizmet anlayışı</h3>
					<p>kuruluşumuzun ilk gününden beri Fransız yemek ve servis kültürünü yaşatmak amacı ile her zaman daha profosyonel hizmet anlayışı ile hizmet ettik</p>

					<a href="#" class="btn">daha fazla bilgi edin</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="webFotoğraflar/Adsız tasarım (1).png">
				</div>

				<div class="content">
					<h3> değişmeyen lezzet sırrı</h3>
					<p>1952'den bu yana değişmeyen tarifimizi kuşaklardan kuşaklara aktarak hizleri bu tanrısal lezzet ile tanıştırmak bizim için onurdur</p>

					<a href="#" class="btn">daha fazla bilgi edin</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="webFotoğraflar/garson.jpg">
				</div>

				<div class="content">
					<h3>güler yüzlü ekip </h3>
					<p>kökleşmiş iş ekibimiz ile sizlere her zaman en Kaliteli hizmet anlayışı için buradayız</p>

					<a href="#" class="btn">daha fazla bilgi edin</a>
				</div>
			</div>
		</div>
	</section>
	<!-- hakkımızda bitiş -->

	<!-- Menü başlangıç -->
	<section class="our-menu" id="menu">
		<h1 class="heading">our food menu</h1>
		<center><h3 class="sub-heading"> ~Menümüzden En Sevilenler~ </h3></center>

		<div class="menu-container">

			<div class="item">
				<div class="item-name">
					<h2>Hamburgerler</h2>
					<img src="webFotoğraflar/notify.png">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Texas Smokehouse Burger</h3>
						<span class="dots"></span>

						<ul>
							<li><a href="#">Füme Eti,</a></li> <br>
							<li><a href="#">Cheddar peyniri,</a></li> <br>
							<li><a href="#">Barbekü Sos ve</a></li> <br>
							<li><a href="#">Altın Çıtır Kaplamalı Soğan</a></li> <br>
						</ul>
					</div>

					<div class="item-menu">
						<h3>High Mendza Burger</h3>
						<span class="dots"></span>

						<ul>
							<li><a href="#">Dana Burger,</a></li>
							<li><a href="#">Gravyer Mantarlı Türüflü Monay Sos,</a></li>
							<li><a href="#">Karamelize soğan ve </a></li>
							<li><a href="#">Chill Biber Turşusu</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="item">
				<div class="item-name">
					<h2>Salatalar</h2>
					<img src="webFotoğraflar/soups-and-salads.png">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Panzella Salatası</h3>
						<span class="dots"></span>

						<ul>
							<li><a href="#">Somunbayat Ekmek,</a></li>
							<li><a href="#">Zeytinyağı,</a></li>
							<li><a href="#">Sirke ve </a></li>
							<li><a href="#">Karabiber</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Niçoise Salatası</h3>
						<span class="dots"></span>

						<ul>
							<li><a href="#">Ton balıklı,</a></li>
							<li><a href="#">Taze Fasulye,</a></li>
							<li><a href="#">Ançüez,</a></li>
							<li><a href="#">Haşlanmış Yumurta,</a></li>
						</ul>
					</div>

				</div>
			</div>


			<div class="item">
				<div class="item-name">
					<h2>İçecekler</h2>
					<img src="webFotoğraflar/drinks.png">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Aperol</h3>
						<span class="dots"></span>
						

						<ul>
							<li><a href="#">Kan Portakalı,</a></li>
							<li><a href="#">yaban mersini,</a></li>
							<li><a href="#">lime,</a></li>
							<li><a href="#">elmalı soda,</a></li>
							<li><a href="#">ince dilimlenmiş portakal ve nane dilimleri</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Virgin mary</h3>
						<span class="dots"></span>

						<ul>
							<li><a href="#">Worcestershire Sos,</a></li>
							<li><a href="#">Tabasco,</a></li>
							<li><a href="#">Limon suyu,</a></li>
							<li><a href="#">biber ve</a></li>
							<li><a href="#">tuz</a></li>
						</ul>
					</div>

				</div>
			</div>


			<div class="item">
				<div class="item-name">
					<h2>Tatlılar</h2>
					<img src="webFotoğraflar/desserts.png">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Creme au chocolat</h3>
						<span class="dots"></span>

						<ul>
							<li><a href="#">süt,</a></li>
							<li><a href="#">kakao,</a></li>
							<li><a href="#">vanilin ve</a></li>
							<li><a href="#">nişasta</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Madeleine</h3>
						<span class="dots"></span>

						<ul>
							<li><a href="#">Dark kakao,</a></li>
							<li><a href="#">bitter çikolata ve</a></li>
							<li><a href="#">baston şeker</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!---Menü sonu  -->
      <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
      <br>
	  <br>
	<!-- Rezervasyon başlangıç -->
		<div class="reservation" id="reservation">
			<div class="image">
				
			</div>

			<div class="form">
				<h1 class="heading">Rezervasyon Bölümümüz</h1>
				<center><h3 class="sub-heading">~ restorantımıza sizeleri de bekliyoruz ~ </h3></center>

				<form action="index.php" method="post">
                  <label for="Ad"></label>
                  <input type="text" id="Add" name="Ad"required placeholder="Adınız">
                   <label for="telefon"></label>
                  <input type="text" id="telefonn" name="telefon"required placeholder="Telefon Numarası">  
                  <label for="saat"></label>
                  <input type="text" id="saatt" name="saat"required placeholder="Saat">
				  <label for="tarih"></label>
				  <input type="text" id="tarihh" name="tarih"required placeholder="Tarih">
                  <input type="submit" value="Rezervasyon İçin tıkayınız">
                </form>

				  
					</div>
				</form>
			</div>
		</div>
	<!-- rezervasyon sonu -->

	<!-- müşteri yorumu başlangıç -->
	<section class="blog welcome" id="blog">
		<h1 class="heading">Sizden Haberler</h1>
		<center><h3 class="sub-heading"> ~ Müşteri Yorumları ~ </h3></center>

		<div class="box-container">
			<div class="box">
				<div class="image">
					<img src="webFotoğraflar/post-thumb-4.jpg">
				</div>

				<div class="content">
					<h3>Yemek ve Eğlence</h3>
					<p>dekorasyon, yemek ve çalışanların misafirliğe yaklaşımı dörtdörlük.
						Kapıdan karşılandığımız ve masamıza oturduğumuz andan itibaren bu özelliği yaşayıp kendinizi evinizde hissediyorsunuz</p>
				
					<a>Ömer Akkaya</a>
					
		
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="webFotoğraflar/13.jpg">
				</div>

				<div class="content">
					<h3>Kaliteli ve Lezzetli</h3>
					<p>Şahane ve Lezzetli hamburgerler. Özel yapılmış soslar ve patates ile yediğimiz hamburgerlerden bir tanesiydi.
					  Ayrıca servis kalitesi mükemmeldi. Garsonlar ise harika ve güleryüzlüydü. </p>
					<a>Ekrem Öztürk</a>
					
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="webFotoğraflar/post-thumb-6.jpg">
				</div>

				<div class="content">
					<h3>En İyisi</h3>
					<p>Kesinlikle içtiğim en iyi içeceklerden bir tanesiydi. En kaliteli içecekleri, içkileri ve malzemeleri kullanıyorlar.</p>
					<a>Berat Karaismail</a>
				</div>
			</div>

		</div>
	</section>
	<!-- müşteri yorumu sonu-->
	

	<!-- altkısım başlangıç -->
	<section class="footer">
		<img src="" class="logo">

		<div class="container">
			<div>
				<h3>Cihat Furkan Halil</h3>
				<ul>
					<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
				</ul>
				
			</div>

			<div>
				<h3>Burger De La Vie</h3>
				<ul>
					<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
				</ul>
			</div>

			<div>
				<h3>Berkay İlhan</h3>
				<ul>
					<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
					<li><a href="www.linkedin.com/in/berkay-ilhan-6a31bb20a"><i class="fa-brands fa-linkedin-in"></i></a></li>
				</ul>
			</div>
		</div>

		<p>&copy;2022 Reserved by Berkay İlhan ve Cihat Furkan Halil</p>
	</section>
	<!-- altkısım sonu -->

	

	<a href="#"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>

	<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!--  Swiper -->
    <script>
      var swiper = new Swiper(".home-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 7500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        loop:true,
      });
    </script>
	<script type="text/javascript">
		let menu = document.querySelector('#menu');
		let navbar = document.querySelector('.navbar');

		menu.onclick = () =>{
			menu.classList.toggle('fa-times');
			navbar.classList.toggle('active');
		}
	</script>

</body>
</html>

<?php
include("baglanti.php");
if(isset($_POST["Ad"],$_POST["telefon"],$_POST["saat"],$_POST["tarih"]))
{
  $ad=$_POST["Ad"];
  $telefon=$_POST["telefon"];
  $saat=$_POST["saat"];
  $tarih=$_POST["tarih"];

  $ekle= "INSERT INTO `iletisim`( Ad, telefon, saat, tarih)
   VALUES ('".$ad."','".$telefon."','".$saat."','".$tarih."')";

   if($baglan->query($ekle)===TRUE)
   echo"<script>alert('Rezervasyonunuz Tamamlanmıştır.')</script>";
}
?>


