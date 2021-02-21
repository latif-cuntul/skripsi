<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/materialize.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/custom.css')?>">
	<script src="<?=base_url('assets/js/jquery-3.5.1.min.js')?>"></script>
	<script src="<?=base_url('assets/js/materialize.min.js')?>"></script>
    <title>Appriori</title>
</head>
<body>
	<div class="row grey lighten-3" style="margin:0px;">
		<div class="col s2" style="padding:0.5em;overflow: hidden">
			<div class="z-depth-3 center-align" style="padding:0.5em" >
				<img src="<?=base_url('assets/img/default.jpeg')?>" alt="" class="circle responsive-img" style="width:120px; border:1px solid black; margin: 10px 0">
				<h6 class="truncate"><strong><?=session()->get('nama')?></strong></h6>
				<div class="collection" style="margin-top: 100px">
					<a href="<?=base_url('')?>" class="collection-item <?=session()->get('url') == "home" ? "active" : ""?>">Home</a>
					<a href="<?=base_url('transaksi')?>" class="collection-item <?=session()->get('url') == "transaksi" ? "active" : ""?>">Transaksi</a>
					<a href="<?=base_url('mining')?>" class="collection-item <?=session()->get('url') == "mining" ? "active" : ""?>">Mining</a>
					<a href="<?=base_url('riwayat')?>" class="collection-item <?=session()->get('url') == "riwayat" ? "active" : ""?>">Riwayat</a>
				</div>
				<div class="collection" style="margin-top: 150px">
					<a href="<?=base_url('auth/logout')?>" class="collection-item red white-text">Logout</a>
				</div>
			</div>
		</div>

		<div class="col s10" style="height:100vh;padding:0.5em">
			<div class="z-depth-3 white-text bg-gambar" style="padding:0.5em; height:100%;overflow-y:scroll; overflow-x:hidden">
				<?=$this->renderSection('content')?>
			</div>
		</div>
	</div>


    <?=$this->renderSection('footer')?>

</body>
</html>

