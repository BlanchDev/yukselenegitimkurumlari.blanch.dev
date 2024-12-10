<!DOCTYPE html>
<html lang="tr" >
<head>

	<title>Kamplarımız - Yükselen Eğitim Kurumları</title>
	<meta name="description" content="Yükselen Eğitim Kurumları olarak Eğitim Kampları oluşturuyoruz ve bunu öğrencilerimiz ile paylaşıyoruz.">

	<?php require $_SERVER['DOCUMENT_ROOT']."/components/head.php" ?>

</head>
<body>

	<?php require $_SERVER['DOCUMENT_ROOT']."/components/header.php" ?>

	<main class="column aic" style="color: #3C3950; width: 100%; height: 100%;">
		<section class="mainContent" style="padding: 75px 0;">
			<section class="pageW row-reverse aic" style="gap: 10px; color: gray;">
				<div class="row aic" style="gap: 10px;">
					<a href="/" title="Anasayfa">Anasayfa</a>
					<span>▸</span>
					<a href="/kamplarimiz" title="Kamplarımız">Kamplarımız</a>
				</div>
			</section>
			<section class="pageW row aic" style="padding: 25px 0;">
				<div class="column" style="width: 50%;">
					<div class="row aic" style="gap: 10px;">
						<div style="width: 50px; height: 3px; border-radius: 3px; background: #3C3950;"></div>
						<p>Yükselen Eğitim Kurumları</p>
					</div>
					<h2 style="font-size: 2.3rem;" >KAMPLARIMIZ</h2>
				</div>
			</section>
			<section class="pageW column" style="padding: 25px 0; gap: 25px;">
				<p style="line-height: 29px; letter-spacing: 0.5px; font-size: 1.2rem;" >
					Tüm etütlerimizi & kamplarımızı sosyal medya hesaplarımızda aktif bir şekilde paylaşıyoruz lütfen daha fazla detay için bizi TAKİP ETmeyi unutmayın ve en küçük sorularınızda bile bizimle İLETİŞİM KURmaktan çekinmeyin.
				</p>

				<nav>
					<ul class="row aic" style="gap: 25px;">
						<li><a href="https://wa.me/05433745596" title="WhatsApp Adresi"><img src="/resources/photos/whatsapp_logo.webp" alt="WhatsApp" width="40" height="40"></a></li>
						<li><a target="_blank" href="https://www.facebook.com/profile.php?id=100068707435338&locale=tr_TR" title="Facebook Adresi"><img src="/resources/photos/facebook_logo.webp" alt="Facebook" width="35" height="35"></a></li>
						<li><a target="_blank" href="https://www.instagram.com/corluyukselenegitimkurumlari/" title="Instagram Adresi"><img src="/resources/photos/instagram_logo.webp" alt="Instagram" width="35" height="35"></a></li>
						<li><a target="_blank" href="https://goo.gl/maps/AjZHa1s44TcurrUz8" title="Google Maps Adresi"><img src="/resources/photos/maps_logo.webp" alt="Google Maps" width="25" height="35"></a></li>
					</ul>
				</nav>

				<div class="row mWrap jcc" style="width: 100%; gap: 25px;">
					<?php

					$dbuser = "USER";
					$dbpass = "PASS";

					try {
						$baglanti = new PDO('mysql:host=localhost;dbname=DBNAME', $dbuser, $dbpass);
						$baglanti -> exec("set names utf8");
						$baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					} catch (PDOException $e) {
						echo "Error!: " . $e->getMessage();
					}

					$selectDB = $baglanti->prepare("SELECT * FROM kamplar WHERE trash=? ORDER BY id DESC");
					$selectDB->execute( array("0") );

					while ($select = $selectDB->fetch(PDO::FETCH_ASSOC)) {
						?>

						<section class="column aic jcc" style="width: 400px; padding: 10px; border: 1px solid #DCDFE8;">
							<img style="object-fit: cover;" class="mW100"  src="<?php echo $select["img"]; ?>" alt="<?php echo $select["title"]; ?>" width="312" height="207">
							<div class="column" style="width: 90%; gap: 20px; padding: 0 10px; padding-top: 25px;">
								<h3><?php echo $select["title"]; ?></h3>
								<div style="width: 100%; height: 1px; background: #DCDFE8;"></div>
								<p><?php echo $select["kamptext"]; ?></p>
								<div style="width: 100%; height: 1px; background: #DCDFE8;"></div>
								<p><time><?php echo $select["eventTarihi"]; ?></time></p>
								<div style="width: 100%; height: 1px; background: #DCDFE8;"></div>
								<a style="background: darkgreen;" target="_blank" href="https://wa.me/05433745596" title="Kamp Detay" class="greenBtn">İletişime Geç</a>
							</div>
						</section>

						<?php
					}

					?>

				</div>
			</section>
		</section>
	</main>


	<?php require $_SERVER['DOCUMENT_ROOT']."/components/footer.php"; ?>

</body>
</html>