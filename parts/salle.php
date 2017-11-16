<article class="col-md-6">
		<h4><?php echo $salle['nom']; ?></h4>
		<img src="img/<?php echo $salle['id']; ?>.jpg" id='imgpres' >
		<ul>
			<li>Capacité : <?php echo $salle['capacite']; ?> personnes</li>
			<li>Equipements : <?php echo $salle['equipement']; ?></li>
		</ul>
</article>