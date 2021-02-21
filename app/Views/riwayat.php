<?=$this->extend('layout/template')?>

<?=$this->section('content')?>
	<div class="" style="padding:1em">
		<table class="">
			<thead>
				<tr>
					<th>No</th>
					<th>Riwayat Mining</th>
					<th>Tanggal</th>
					<th>Aksi</th>

				</tr>
			</thead>
			<tbody>
			<?php date_default_timezone_set("Asia/Jakarta");?>
			<?php if (!empty($riwayat)): ?>
				<?php $no = 1;foreach ($riwayat as $r): ?>
					<?php $link = base_url('riwayat/show') . "/" . $r['riwayat_kd'];?>
					<?php $link_delete = base_url('riwayat/delete') . "/" . $r['riwayat_kd'];?>

					<tr>
						<td style="width: 10%"><?=$no;?></td>
						<td style="width: 70%; text-align: left;"><a href="<?=$link?>"><?="kd_" . $r['riwayat_kd']?></a></td>
						<td style="width: 20%"><?=date('d/m/Y, H:i', $r['riwayat_kd']);?></td>
						<td style="width: 70%; text-align: left;"><a href="<?=$link_delete?>"  onclick="return confirm('Yakin ingin menhapus?')">Hapus</a></td>
					</tr>
				<?php $no++;endforeach;?>
			<?php else: ?>
				<tr>
					<td colspan="3">Tidak ada data</td>
				</tr>
			<?php endif;?>
			</tbody>
		</table>
	</div>
<?=$this->endSection()?>

