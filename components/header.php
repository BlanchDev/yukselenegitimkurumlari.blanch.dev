	<?php 

	date_default_timezone_set('Europe/Istanbul');
	$bugun = date("H:i:s d.m.Y"); 
	$ip = $_SERVER['REMOTE_ADDR'];
	$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

	?>
	<header class="column aic jcc">

		<div class="headerContainer mHide">
			<div class="topContainer column aic jcc">
				<div class="topHeader row aic jcsa">
					<a href="/" title="Anasayfa"><img src="/resources/photos/logo.webp" alt="Yükselen Eğitim Kurumları logo" width="75" height="75"></a>

					<div class="row aic" style="gap: 25px;">
						<nav>
							<ul class="row aic" style="gap: 25px;">
								<li><a target="_blank" href="https://wa.me/05433745596" title="WhatsApp Adresi"><img src="/resources/photos/whatsapp_logo.webp" alt="WhatsApp" width="35" height="35"></a></li>
								<li><a target="_blank" href="https://www.facebook.com/profile.php?id=100068707435338&locale=tr_TR" title="Facebook Adresi"><img src="/resources/photos/facebook_logo.webp" alt="Facebook" width="35" height="35"></a></li>
								<li><a target="_blank" href="https://www.instagram.com/corluyukselenegitimkurumlari/" title="Instagram Adresi"><img src="/resources/photos/instagram_logo.webp" alt="Instagram" width="35" height="35"></a></li>
								<li><a target="_blank" href="https://goo.gl/maps/AjZHa1s44TcurrUz8" title="Google Maps Adresi"><img src="/resources/photos/maps_logo.webp" alt="Google Maps" width="25" height="35"></a></li>
							</ul>
						</nav>

					</div>

				</div>
			</div>
			<div class="bottomContainer column aic jcc">
				<div class="bottomHeader row aic">
					<nav style="width: 100%; height: 100%;">
						<ul class="row aic" style="width: 100%; height: 100%;">
							<li><a href="/" title="Anasayfa">Anasayfa</a></li>
							<li><a href="/hakkimizda" title="Hakkımızda">Hakkımızda</a></li>
							<li><a href="/kamplarimiz" title="Kamplarımız">Kamplarımız</a></li>
						</ul>
					</nav>
					<a href="/online-kayit-formu" title="Online Kayıt Formu" style="width: 225px;" class="orangeBtn column aic">Online Kayıt Formu</a>
				</div>
			</div>

		</div>

		<section class="mHeader aic jcsa mShow mW100">
			<img src="/resources/photos/logo.webp" alt="Yükselen Eğitim Kurumları logo" width="75" height="75">

			<div>
				<label for="openMenu">
					<img id="mMenuBtn" src="/resources/photos/menu.webp" alt="Burger Menu" width="55" height="55">
				</label>
				<div style="display: none;">
					<input type="radio" id="openMenu" name="mobileMenu">
					<input type="radio" id="closeMenu" name="mobileMenu" checked>
				</div>
			</div>
		</section>
	</header>

	<section id="mMenu">
		<label for="closeMenu" style="width: 30%; height: 100%;" >
			<section style="width: 30%; height: 100%;">

			</section>
		</label>

		<section class="column aic jcsa" style="width: 70%; background: #FFFFFF;">
			<nav class="column aic" style="width: 100%; height: max-content;">
				<ul class="column aic" style="gap: 20px; list-style: none; height: 100%; font-weight: 500; font-size: 1.7rem; color: #0F2A5B; padding: 100px 20px;">
					<li class="mNavBtn row aic" >
						<a class="row aic" href="/" title="Anasayfa">
							Anasayfa
						</a>
					</li>
					<li class="mNavBtn row aic" >
						<a class="row aic" href="/hakkimizda" title="Hakkımızda">
							Hakkımızda
						</a>
					</li>
					<li class="mNavBtn row aic" >
						<a class="row aic" href="/kamplarimiz" title="Kamplarımız">
							Kamplarımız
						</a>
					</li>
					<li class="redBtn row aic" >
						<a class="row aic orangeBtn" href="/online-kayit-formu" title="Online Kayıt">
							Online Kayıt
						</a>
					</li>
				</ul>
			</nav>
			<nav class="column aic" style="gap: 5px;">
				<h4>Sürekli İletişimde Kalalım</h4>
				<ul class="row aic" style="gap: 25px;">
					<li><a href="https://wa.me/05433745596" title="WhatsApp Adresi"><img src="/resources/photos/whatsapp_logo.webp" alt="WhatsApp" width="35" height="35"></a></li>
					<li><a target="_blank" href="https://www.facebook.com/profile.php?id=100068707435338&locale=tr_TR" title="Facebook Adresi"><img src="/resources/photos/facebook_logo.webp" alt="Facebook" width="35" height="35"></a></li>
					<li><a target="_blank" href="https://www.instagram.com/corluyukselenegitimkurumlari/" title="Instagram Adresi"><img src="/resources/photos/instagram_logo.webp" alt="Instagram" width="35" height="35"></a></li>
					<li><a target="_blank" href="https://goo.gl/maps/AjZHa1s44TcurrUz8" title="Google Maps Adresi"><img src="/resources/photos/maps_logo.webp" alt="Google Maps" width="25" height="35"></a></li>
				</ul>
			</nav>
		</section>
	</section>

	<script type="text/javascript">
		function mobileMenu() {
			if (document.getElementById('openMenu').checked) {
				document.getElementById("mMenu").style.display = "flex";
			} else if (document.getElementById('closeMenu').checked){
				document.getElementById("mMenu").style.display = "none";
			}
		}

		var radios = document.getElementsByName('mobileMenu');
		for (var i = 0; i < radios.length; i++) {
			radios[i].addEventListener('change', mobileMenu);
		}

		mobileMenu();
	</script>