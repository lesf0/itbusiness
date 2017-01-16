<?
$clients = array(
	"ЭКС" => "eks.JPG",
	"Fashion look group" => "fshnlook.jpg",
	"Киты Еды" => "Kity-logotype-correct.jpg",
	"Сеть магазинов «Семья»" => "Semya_logos_new_2015.jpg",
	"Сода хлорат" => "soda.jpg",
	"ТРК «Семья»" => "trk_semya.JPG",
	"ЦУМ" => "tsum.jpg",
);
?>
<div id="clients" class="content p-t-45 p-b-50 cGrayBlue regular f-14">
	<h3 class="default-title panton f-34 upper bold cBlue ws-nowrap m-b-20">
		Наши клиенты
	</h3>
	
	<div class="m-t-35 p-t-25 p-b-25 relative onmiddle clear cGrayBlue f-12">
		<div class="absolute wrap-left wrap-right top bottom onbottom w-100-pc m-a-auto brd-a-5 brdInvisibleBlue p-a-20 w-100-pc"></div>
<?		foreach($clients as $name => $photo): ?>
		<div class="pull-left w-25-pc w-50-pc-sm h-150 text-center valign-middle-hack"><div class="inblock w-100-pc">
			<div class="inblock w-100 h-100 bg-contain bg-center bg-no-repeat brd-b-1 brdEC m-b-5" style="background-image:url(assets/img/clients/<?= $photo ?>)"></div>
			<p><?= $name ?></p>
		</div></div>
<?		endforeach; ?>
	</div>
</div>