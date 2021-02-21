<?=$this->extend('layout/template')?>

<?=$this->section('content')?>
	<ul class="collapsible">
		<li class="<?=$proses ? "" : "active"?>">
			<div class="collapsible-header grey lighten-3 black-text">Form Input</div>
			<div class="collapsible-body grey darken-2">
				<div class="card">
					<div class="card-content white-text">
						<form action="<?=base_url('mining/proses')?>" method="post" class="row white black-text" style="padding: 1em; margin-bottom: 0px">
							<div class="input-field col s6">
								<input id="support" name="support" type="number" class="validate" step="0.01">
								<label for="support">Nila Support</label>
							</div>
							<div class="input-field col s6">
								<input id="confiden" name="confiden" type="number" class="validate" step="0.01">
								<label for="confiden">Nila Confiden</label>
							</div>
							<div class="input-field col s6">
								<input type="text" class="datepicker" name="mulai" >
								<label>Tanggal Mulai</label>
							</div>
							<div class="input-field col s6">
								<input type="text" class="datepicker" name="sampai" >
								<label>Tanggal Sampai</label>
							</div>
							<div class="center-align">
								<button type="submit" class="btn  brown darken-4"> Proses </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<?php if ($proses): ?>
	<ul class="collapsible">
		<li class="active">
			<div class="collapsible-header grey lighten-3 black-text">Hasil Mining</div>
			<div class="collapsible-body grey darken-2">
				<ul class="collapsible">
					<!-- INPUT -->
					<li>
						<div class="collapsible-header grey lighten-3 black-text">Input</div>
						<div class="collapsible-body grey darken-2">
							<div class="card">
								<div class="card-content black-text">
								<p> Support : <?=$keterangan['support']?></p>
								<p> Confiden : <?=$keterangan['confiden']?></p>
								<p> Tgl Mulai : <?=$keterangan['tanggalMulai']?></p>
								<p> Tgl Selesai : <?=$keterangan['tanggalSelesai']?></p>
								<p> Jumlah Transaksi : <?=$keterangan['jumlahTransaksi']?></p>
								</div>
							</div>
						</div>
					</li>

					<!-- ITEMSET 1 -->
					<li>
						<?php if (!empty($itemset1)): ?>
						<div class="collapsible-header grey lighten-3 black-text">Itemset 1</div>
						<div class="collapsible-body grey darken-2">
							<table class="highlight">
								<thead>
									<tr>
										<th>No</th>
										<th>Produk</th>
										<th>jumlah</th>
										<th>Support</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1;foreach ($itemset1 as $rowItem1 => $valItem1): ?>
										<tr>
											<td><?=$no?></td>
											<td><?=$rowItem1?></td>
											<td><?=$valItem1['jumlah']?></td>
											<td><?=$valItem1['support']?></td>
											<td><?=$valItem1['keterangan']?></td>
										</tr>

								<?php $no++;endforeach;?>
								</tbody>
							</table>
						</div>
						<?php endif;?>
					</li>

					<!-- ITEMSET 1 LOLOS -->
					<li>
						<?php if (!empty($itemset1Lolos)): ?>
						<div class="collapsible-header grey lighten-3 black-text">Itemset 1 Lolos </div>
						<div class="collapsible-body grey darken-2">
							<table class="highlight">
								<thead>
									<tr>
										<th>No</th>
										<th>Produk</th>
										<th>jumlah</th>
										<th>Support</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1;foreach ($itemset1Lolos as $rowItem1Lolos => $valItem1Lolos): ?>
										<tr>
											<td><?=$no?></td>
											<td><?=$rowItem1Lolos?></td>
											<td><?=$valItem1Lolos['jumlah']?></td>
											<td><?=$valItem1Lolos['support']?></td>
										</tr>

								<?php $no++;endforeach;?>
								</tbody>
							</table>
						</div>
						<?php endif;?>
					</li>

					<!-- ITEMSET 2 -->
					<li>
						<?php if (!empty($itemset2)): ?>
						<div class="collapsible-header grey lighten-3 black-text">Kombinasi Itemset 2</div>
						<div class="collapsible-body grey darken-2">
							<table class="highlight">
								<thead>
									<tr>
										<th>No</th>
										<th>Produk 1</th>
										<th>Produk 2</th>
										<th>jumlah</th>
										<th>Support</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1;foreach ($itemset2 as $rowItemset2 => $valItemset2): ?>
										<tr>
											<td><?=$no?></td>
											<td><?=$valItemset2['item1']?></td>
											<td><?=$valItemset2['item2']?></td>
											<td><?=$valItemset2['jumlah']?></td>
											<td><?=$valItemset2['support']?></td>
											<td><?=$valItemset2['keterangan']?></td>
										</tr>

								<?php $no++;endforeach;?>
								</tbody>
							</table>
						</div>
						<?php endif;?>
					</li>

					<!-- ITEMSET 2 LOLOS -->
					<li>
						<?php if (!empty($itemset2Lolos)): ?>
						<div class="collapsible-header grey lighten-3 black-text">Kombinasi Itemset 2 Lolos</div>
						<div class="collapsible-body grey darken-2">
							<table class="highlight">
								<thead>
									<tr>
										<th>No</th>
										<th>Produk 1</th>
										<th>Produk 2</th>
										<th>jumlah</th>
										<th>Support</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1;foreach ($itemset2Lolos as $rowItemset2Lolos => $valItemset2Lolos): ?>
										<tr>
											<td><?=$no?></td>
											<td><?=$valItemset2Lolos['item1']?></td>
											<td><?=$valItemset2Lolos['item2']?></td>
											<td><?=$valItemset2Lolos['jumlah']?></td>
											<td><?=$valItemset2Lolos['support']?></td>
										</tr>

								<?php $no++;endforeach;?>
								</tbody>
							</table>
						</div>
						<?php endif;?>
					</li>

					<!-- ITEMSET 3 -->
					<li>
						<?php if (!empty($itemset3)): ?>
						<div class="collapsible-header grey lighten-3 black-text">Kombinasi Itemset 3</div>
						<div class="collapsible-body grey darken-2">
							<table class="highlight">
								<thead>
									<tr>
										<th>No</th>
										<th>Produk 1</th>
										<th>Produk 2</th>
										<th>Produk 3</th>
										<th>jumlah</th>
										<th>Support</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1;foreach ($itemset3 as $rowItemset3 => $valItemset3): ?>
										<tr>
											<td><?=$no?></td>
											<td><?=$valItemset3['item1']?></td>
											<td><?=$valItemset3['item2']?></td>
											<td><?=$valItemset3['item3']?></td>
											<td><?=$valItemset3['jumlah']?></td>
											<td><?=$valItemset3['support']?></td>
											<td><?=$valItemset3['keterangan']?></td>
										</tr>

								<?php $no++;endforeach;?>
								</tbody>
							</table>
						</div>
						<?php endif;?>
					</li>

					<!-- ITEMSET 3 LOLOS -->
					<li>
						<?php if (!empty($itemset3Lolos)): ?>
						<div class="collapsible-header grey lighten-3 black-text">Kombinasi Itemset 3 Lolos</div>
						<div class="collapsible-body grey darken-2">
							<table class="highlight">
								<thead>
									<tr>
										<th>No</th>
										<th>Produk 1</th>
										<th>Produk 2</th>
										<th>Produk 3</th>
										<th>jumlah</th>
										<th>Support</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1;foreach ($itemset3Lolos as $rowItemset3Lolos => $valItemset3Lolos): ?>
										<tr>
											<td><?=$no?></td>
											<td><?=$valItemset3Lolos['item1']?></td>
											<td><?=$valItemset3Lolos['item2']?></td>
											<td><?=$valItemset3Lolos['item3']?></td>
											<td><?=$valItemset3Lolos['jumlah']?></td>
											<td><?=$valItemset3Lolos['support']?></td>
										</tr>

								<?php $no++;endforeach;?>
								</tbody>
							</table>
						</div>
						<?php endif;?>
					</li>

					<!-- DEBUG DATA -->
					<li>
						<?php if (!empty($debugData)): ?>
						<div class="collapsible-header grey lighten-3 black-text">Debug Data</div>
						<div class="collapsible-body grey darken-2">
							<table class="highlight">
								<thead>
									<tr>
										<th>No</th>
										<th>Kombinasi</th>
										<th>Produk X</th>
										<th>Produk Y</th>
										<th>Jumlah X</th>
										<th>jumlah XY</th>
										<th>Support</th>
										<th>Confiden</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1;foreach ($debugData as $rowdebugData => $valdebugData): ?>
										<tr>
											<td><?=$no?></td>
											<td style="text-align: left"><?=$rowdebugData?></td>
											<td><?=$valdebugData['itemX']?></td>
											<td><?=$valdebugData['itemY']?></td>
											<td><?=$valdebugData['X']?></td>
											<td><?=$valdebugData['XY']?></td>
											<td><?=$valdebugData['support']?></td>
											<td><?=$valdebugData['confiden']?></td>
										</tr>

								<?php $no++;endforeach;?>
								</tbody>
							</table>
						</div>
						<?php endif;?>
					</li>

					<!-- HASIL ASOSIASI 3 -->
					<li>
					<?php if (!empty($hasilAsosiasi3)): ?>
						<div class="collapsible-header grey lighten-3 black-text">Hasil Asosiasi</div>
						<div class="collapsible-body grey darken-2">
							<table class="highlight">
								<thead>
									<tr>
										<th>No</th>
										<th>Produk</th>
										<th>jumlah X</th>
										<th>jumlah XY</th>
										<th>confiden</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1;foreach ($hasilAsosiasi3 as $rowhasilAsosiasi3 => $valhasilAsosiasi3): ?>
										<tr>
											<td><?=$no?></td>
											<td style="text-align:left"><?=$rowhasilAsosiasi3?></td>
											<td><?=$valhasilAsosiasi3['X']?></td>
											<td><?=$valhasilAsosiasi3['XY']?></td>
											<td><?=$valhasilAsosiasi3['confiden']?></td>
										</tr>

								<?php $no++;endforeach;?>
								</tbody>
							</table>
						</div>
						<?php endif;?>
					</li>
					<li>
					<?php if (!empty($saran)): ?>
						<div class="collapsible-header grey lighten-3 black-text">Saran dan Kesimpulan</div>
						<div class="collapsible-body grey darken-2">
							<p>Dari hasil kombinasi asosiasi yang didapat dari tanggal <?=date("d-F-Y", strtotime($keterangan['tanggalMulai'])) . " sampai " . date("d-F-Y", strtotime($keterangan['tanggalSelesai'])) . " dengan jumlah data transaksi " . $keterangan['jumlahTransaksi'] . ", terdapat produk yang harus ditambah jumlah stoknya. List produk yang harus ditambah jumlah stok dapat dilihat pada tabel di bawah ini. "?></p>
							<table class="highlight">
								<thead>
									<tr>
										<th>No</th>
										<th>Produk</th>
										<th>Jumlah Transaksi</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1;?>
								<?php foreach ($saran as $rowsaran => $valsaran): ?>
										<tr>
											<td><?=$no?></td>
											<td><?=$rowsaran?></td>
											<td><?=$valsaran['jumlah']?></td>
										</tr>

								<?php $no++;endforeach;?>
								</tbody>
							</table>
						</div>
						<?php endif;?>
					</li>
				</ul>
			</div>
		</li>
	</ul>
	<?php endif;?>
<?=$this->endSection()?>

<?=$this->section('footer')?>
	<script>
	  $(document).ready(function(){
			$('.datepicker').datepicker({
				format: 'yyyy-mm-dd'
			});
    		$('.collapsible').collapsible();
		});
	</script>
<?=$this->endSection()?>

