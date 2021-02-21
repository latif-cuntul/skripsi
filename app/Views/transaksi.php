<?=$this->extend('layout/template')?>

<?=$this->section('content')?>
		<div class="row">
			<div class="col s6">
				<div class="card grey darken-2">
				<div class="card-content white-text">
					<span class="card-title">Form Upload</span>
					<form action="<?=base_url('/transaksi/upload')?>" method="post" enctype="multipart/form-data" class="white black-text" style="padding: 1em;">
						<input type="file" name="fileexcel"  required accept=".xls, .xlsx" />
						<button type="submit" class="btn">Upload</button>
					</form>
				</div>
				</div>
			</div>
			<div class="col s6">
				<div class="card grey darken-2">
					<div class="card-content white-text">
						<span class="card-title">Detail Data</span>
							<div class="white black-text" style="height: 65px; padding : 20px">
								<p class="col s8">Total Data : <?=$total_data ? $total_data : 0?></p>
								<a class="btn red col s4" href="<?=base_url('/transaksi/destroy')?>"  onclick="return confirm('Yakin ingin menhapus?')">Hapus</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<table>
			<thead>
				<tr>
					<th style="width: 10%">id</th>
					<th style="width: 70%">Produk</th>
					<th style="width: 20%">tanggal</th>
				</tr>
			</thead>
			<tbody id="contactTable">
			<?php if (!empty($transaksi)): ?>
				<?php foreach ($transaksi as $rowTransaksi): ?>
					<tr>
						<td style="width: 10%"><?=$rowTransaksi['transaksi_id']?></td>
						<td style="width: 70%; text-align: left;"><?=$rowTransaksi['produk']?></td>
						<td style="width: 20%"><?=$rowTransaksi['tanggal']?></td>
					</tr>
				<?php endforeach;?>
			<?php else: ?>
				<tr>
					<td colspan="3">Tidak ada data</td>
				</tr>
			<?php endif;?>
			</tbody>
		</table>
<?=$this->endSection()?>