<?php 
	$page = 'presenstation';
	require_once('parts/header.php');
?>
<p>Voici nos salles</p>
<div class="row">
	<?php 
		require_once('salles.php');
		foreach ($salles as $salle) {
		require('parts/salle.php');
	} ?>
	
</div>
<?php require_once('parts/footer.php'); ?>