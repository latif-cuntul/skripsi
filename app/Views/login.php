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
	<style>

	</style>
</head>
<body style="overflow: hidden;">
	<div class="row kanan">
		<!-- <div class="col s9" style="height: 100vh">

		</div> -->
		<div class="col s12" style="display: flex; justify-content:center; align-items: center; height: 100vh;">
			<form action="<?=base_url('auth/login')?>" method="post" class="grey lighten-3" style="height: 300px; width: 300px ;padding: 1em; border: 1px solid #4b4b4b; border-radius: 10px">
		      <div class="row">
		      	<div class="col s12 center-align">
					<h6>MASUK APP</h6>
					<?php if (session()->getFlashdata('msg')): ?>
						<span class="red-text"><?=session()->getFlashdata('msg')?></span>
					<?php endif;?>
				</div>
		        <div class="input-field col s12">
		          <input id="username" name="username" type="text" autocomplete="off">
		          <label for="username">Username</label>
		        </div>
		        <div class="input-field col s12">
		          <input id="password" name="password" type="password">
		          <label for="password">Password</label>
		        </div>
		        <div class="col s12 center-align">
					<button type="submit" class="btn brown darken-4"> Masuk </button>
				</div>
		      </div>
		    </form>
		</div>
	</div>
</body>
</html>