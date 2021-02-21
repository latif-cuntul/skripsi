<?=$this->extend('layout/template')?>

<?=$this->section('content')?>
	<div class="" style="padding: 1em;">
		<div class="" style="">
			<div class="row">
				<div class="col s12 m6">
					<div class="card  grey darken-2">
					<div class="card-content white-text">
						<span class="card-title">Detail Mining</span>
						<p><?="Kode mining : kd_" . $kd_mining?></p>
						<p><?="Input Support : " . $riwayat[0]['support']?></p>
						<p><?="Input Confiden : " . $riwayat[0]['confiden']?></p>
						<p><?="Tgl Mulai : " . date('d-m-Y', strtotime($riwayat[0]['tgl_mulai']))?></p>
						<p><?="Tgl Selesai: " . date('d-m-Y', strtotime($riwayat[0]['tgl_selesai']))?></p>
					</div>
					</div>
				</div>
			</div>

			<table class="">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk nama</th>
						<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>
				<?php if (!empty($riwayat)): ?>
					<?php $no = 1;?>
					<?php foreach ($riwayat as $r): ?>
						<tr>
							<td ><?=$no;?></td>
							<td style="text-align: left;"><?=$r['produk_nama']?></td>
							<td ><?=$r['jumlah_produk']?></td>
						</tr>
						<?php $no++;?>
					<?php endforeach;?>
				<?php else: ?>
					<tr>
						<td colspan="3">Tidak ada data</td>
					</tr>
				<?php endif;?>
				</tbody>
			</table>
		</div>
	</div>
<?=$this->endSection()?>