<?php
/*
Template Name: Rancho California
*/
?>

<?php get_header('interiores'); ?>

<div class="separar"></div>
<div class="container">
	<div class="row">
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		<div class="col-md-5 img-full">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<div class="col-md-6">
			<h1 class="text-center"><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
		<?php } } ?>
	</div>
</div>
<div class="separar"></div>


<?php get_footer(); ?>