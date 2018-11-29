<?php 
	require_once "../../source/template/template-header.php";
 ?>

	
<div class="container col-md-10 offset-md-1">

	<main class="hero">
		<div class="card hero-card-left">
			<img src="<?php echo SOURCE_IMAGES; ?>header1.jfif" alt="Woman writing in a notebook" class="card-img-top">
		</div>

		<div class="card hero-card-right">
			<img src="<?php echo SOURCE_IMAGES; ?>header2.jfif" alt="Fountain Pen" class="card-img-top">
		</div>
		
		<div class="card hero-card-right-2">
			<div class="card-body">
				<h2 class="card-title">Welcome to NoteWorthy</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quibusdam commodi neque, quod minima sequi.</p>
				<a href="#" class="btn animate-btn cta-btn">Shop Now</a>
			</div>
		</div>	
	</main>

	<section class="featured">
		<header class="featured-header">
			<h5>Featured</h5>
		</header>
		<div class="featured-container d-flex justify-content-start flex-wrap">
				<div class="card featured-one col-md-12 mb-3">
		
					<img src="<?php echo SOURCE_IMAGES; ?>p1.png" alt="" class="card-img-top">
	
				</div>	
				<div class="card featured-two col-md-6 mb-3">
					<img src="<?php echo SOURCE_IMAGES; ?>p2.png" alt="" class="card-img-top">
				</div>	
				<div class="card featured-three col-md-6">
					<img src="<?php echo SOURCE_IMAGES; ?>p3.png" alt="" class="card-img-top">
				</div>	
		</div>
	</section>

	<section class="featured">
		<header class="featured-header">
			<h5>Best Sellers</h5>
		</header>
		<div class="featured-container d-flex justify-content-start flex-wrap">
				<div class="card featured-one col-md-12 mb-3">
					<img src="<?php echo SOURCE_IMAGES; ?>p1.png" alt="" class="card-img-top">
				</div>	
				<div class="card featured-two col-md-6 mb-3">
					<img src="<?php echo SOURCE_IMAGES; ?>p2.png" alt="" class="card-img-top">
				</div>	
				<div class="card featured-three col-md-6">
					<img src="<?php echo SOURCE_IMAGES; ?>p3.png" alt="" class="card-img-top">
				</div>	
		</div>
	</section>




</div> <!-- End container -->


 <?php 
	require_once "../../source/template/template-footer.php";
 ?>