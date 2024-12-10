<section class="mainContent" style="padding: 75px 0;">
	<section class="pageW row-reverse aic" style="gap: 10px; color: gray;">
		<div class="row aic" style="gap: 10px;">
			<a href="/" title="Anasayfa">Anasayfa</a>
			<span>▸</span>
			<a href="/online-kayit-formu" title="Online Kayıt Formu">Online Kayıt Formu</a>
		</div>
	</section>
	<section class="pageW row aic" style="padding: 25px 0;">
		<div class="column" style="width: 50%;">
			<div class="row aic" style="gap: 10px;">
				<div style="width: 50px; height: 3px; border-radius: 3px; background: #3C3950;"></div>
				<p>SİZE EN KISA ZAMANDA ULAŞALIM</p>
			</div>
			<h2 style="font-size: 2.3rem;"><em style="color: orangered; text-shadow: 1px 1px 1px black;">HEMEN</em> KAYDINI
				<u>YAPTIR</u>
			</h2>
		</div>

	</section>

	<div class="pageW row aic jcc mWrap" style="">


		<section class="mW95 column aic jcc"
		style="padding: 30px 50px; width: 50%; height: 650px; background: #F5F4F7; gap: 25px; color: #6C83A2;">

		<div class="column" style="gap: 5px; width: 75%;">
			<label for="ogrenci_ismi">Öğrenci ya da Veli İsmi</label>
			<input type="text" id="ogrenci_ismi" maxlength="40"
			style="color: black; background: white; padding: 10px; border: 3px solid #B4BAC8; font-size: 1.1rem;"
			placeholder="İsim Soyisim">
		</div>

		<div class="column" style="gap: 5px; width: 75%;">
			<label for="tel_no">Telefon Numarası</label>
			<input type="text" id="tel_no" maxlength="20"
			style="color: black; background: white; padding: 10px; border: 3px solid #B4BAC8; font-size: 1.1rem;"
			placeholder="0530 123 45 67">
		</div>

		<div class="column" style="gap: 5px; width: 75%;">
			<label for="msg">Kısa Mesaj</label>
			<input type="text" id="msg" maxlength="50"
			style="color: black; background: white; padding: 10px; border: 3px solid #B4BAC8; font-size: 1.1rem;"
			placeholder="YÖS için ulaşmak istiyorum.">
		</div>

		<div class="row aic" style="gap: 25px; width: 75%;">
			<!--<input type="checkbox" id="onay">-->
			<label for="onay" style="user-select: none; cursor: pointer;">Bu formu onayladığınızda Yükselen Eğitim Kurumları'nın WhatsApp numarasına mesaj yollamayı kabul etmiş olursunuz.</label>
		</div>

		<div class="row aic" style="gap: 25px;">
			<button id="FormOnay" class="greenBtn" style="font-size: 1.5rem;">Formu Onayla</button>
		</div>

		<div id="formResp" class="column aic" style="gap: 10px;">

		</div>

		<script type="text/javascript">

			$("#FormOnay").click(function () {

				var ogrenci_ismi = $("#ogrenci_ismi").val();
				var tel_no = $("#tel_no").val();
				var msg = $("#msg").val();
				var onay = $("#onay").is(":checked");

				window.open("https://wa.me/05433745596?text=Öğrenci İsmi: " + ogrenci_ismi + "%0ATel No: " + tel_no + "%0AMesaj: " + msg + "%0A%0A- https://yukselenegitimkurumlari.com.tr tarafından iletildi. -");

			});

		</script>

	</section>

	<section class="column jcsb mW95" style="width: 50%; height: 650px; background: #302640;">

		<?php

		$saat = date("H");
		$min = date("i");

		if ($saat >= 9 and $saat <= 18) {
			if ($saat == 18) {
				if ($min < "30") {
					$durum = "Şu an açık.";
					$border = "border-left: 3px dotted greenyellow;";
				} else {
					$durum = "Şu an kapalı.";
					$border = "border-left: 3px dotted indianred;";
				}
			} else {
				$durum = "Şu an açık.";
				$border = "border-left: 3px dotted greenyellow;";
			}
		} else {
			$durum = "Şu an kapalı.";
			$border = "border-left: 3px dotted indianred;";
		}

		?>

		<div class="column jcc" style="height: 100%; gap: 25px; padding: 30px 50px; color: #ECECEC;">
			<h2>Çalışma<br>Saatlerimiz</h2>
			<p style="<?php echo $border; ?> padding-left: 5px; letter-spacing: 0.5px; font-size: 1.2rem; color: white;"> Her Gün<br><time>09:00-18:30</time><br><span style="color: gray;"><?php echo $durum; ?></span>
			</p>
		</div>

		<div style="padding: 25px 50px; background: #231834;">
			<iframe title="Google Maps"
			src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12015.826499582708!2d27.8095617!3d41.1572978!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b4e75b7a876085%3A0xfc9e38c80694a9b5!2zw4dvcmx1IFnDvGtzZWxlbiBFxJ9pdGltIEt1cnVtbGFyxLE!5e0!3m2!1str!2str!4v1683984970012!5m2!1str!2str"
			style="border:0; width:100%; height: 200px; border-radius: 20px;" allowfullscreen="" loading="lazy"
			referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>

	</section>

</div>
</section>