<div id="certs" class="content p-t-45 p-b-75 cGrayBlue regular f-14">
	<h3 class="default-title panton f-34 upper bold cBlue ws-nowrap m-b-20">
		Сертификаты
	</h3>
	
	<div class="m-t-65 h-240 relative onmiddle">
		<div id="certs_slider" class="swiper-container absolute left right top bottom o-visible clip-lr pointer-auto">
			<div class="swiper-wrapper">
<?				for($i=0;$i<17;++$i): ?>
				<div class="swiper-slide text-center cert-img-container onmiddle h-240 valign-middle-hack"><?
					?><a href="assets/img/certs/<?= $i+1 ?>.jpg" class="inblock">
						<img src="assets/img/certs/<?= $i+1 ?>.jpg" class="w-165">
					</a><?
				?></div>
<?				endfor; ?>
			</div>
		</div>

		<a href="#" id="certs_slider_prev" class="main-slider-button absolute right-100-pc	top bottom ontop w-25 h-40 m-a-auto m-l-40">
			<img src="assets/img/ico/larr.png" class="absolute right	top w-100-pc trans-300">
			<img src="assets/img/ico/larr_h.png" class="absolute right	top w-100-pc trans-300">
		</a>
		<a href="#" id="certs_slider_next" class="main-slider-button absolute left-100-pc	top bottom ontop w-25 h-40 m-a-auto m-r-40">
			<img src="assets/img/ico/rarr.png" class="absolute left	top w-100-pc trans-300">
			<img src="assets/img/ico/rarr_h.png" class="absolute left	top w-100-pc trans-300">
		</a>
	</div>
</div>