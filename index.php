    <?php
    $page = 'index';
    require_once('parts/header.php');
    ?>

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	
		 <ol class="carousel-indicators">
		   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		   <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		   <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		 </ol>


		 <div class="carousel-inner" role="listbox">
		   <div class="item active">
		     <img src="img/moto2.jpg">
		     
		   </div>
		   <div class="item">
		     <img src="img/moto.jpg">
		    
		   </div>
		   <div class="item">
		     <img src="img/car.jpg">
		     
		   </div>
		   
		   ...
		 </div>


		 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		   <span class="sr-only">Previous</span>
		 </a>
		 <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		   <span class="sr-only">Next</span>
		 </a>
		</div>


	<?php require_once('parts/footer.php'); ?>

	