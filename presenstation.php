<?php 
	$page = 'presenstation';
	require_once('parts/header.php');
?>
<div class="row" id="pres">
	<?php 
		require_once('salles.php');
		foreach ($salles as $salle) {
		require('parts/salle.php');
	} ?>
	
</div>
<?php require_once('parts/footer.php'); ?>