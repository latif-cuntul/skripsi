<?=$this->extend('layout/template')?>

<?=$this->section('content')?>
		<div class="center-align" style="">
			<h1 style="margin-bottom: 0px">PIGURA KAFE</h1>

		   	<div class="carousel">
			    <a class="carousel-item" href="#one!"><img src="<?=base_url('assets/img/g1.jpg')?>" style="height: 200px; width: 200px"></a>
			    <a class="carousel-item" href="#one!"><img src="<?=base_url('assets/img/g2.jpg')?>" style="height: 200px; width: 200px"></a>
			    <a class="carousel-item" href="#one!"><img src="<?=base_url('assets/img/g3.jpg')?>" style="height: 200px; width: 200px"></a>
			    <a class="carousel-item" href="#one!"><img src="<?=base_url('assets/img/g4.jpg')?>" style="height: 200px; width: 200px"></a>
			</div>

			<h3 style="margin-bottom: 0px;margin-top: 43px; font-style: italic;">Enjoy your work & talk less do more</h3>

			<p style="margin-top: 0px; margin-bottom: 0px">Jl. Raya Berbah No.135, Karang Bendo, Banguntapan, Kec. Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55197</p>
		</div>

<script type="text/javascript">
	$(document).ready(function(){
	    $('.carousel').carousel({
		    padding: 200    
		});
		autoplay();
		function autoplay() {
		    $('.carousel').carousel('next');
		    setTimeout(autoplay, 4500);
		}
	});
</script>

<?=$this->endSection()?>
