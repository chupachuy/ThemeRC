<?php
/*
Template Name: Amenidades
*/
?>

<?php get_header('interiores'); ?>



<section>
	<div class="container">
		<div class="text-center">
          <h2>Amenidades Rancho California</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
        </div>
    </div>
    <div class="separar"></div>
      <div class="container">
        <div class="row">
          <!-- TILE -->
          <?php
            $args = array(
                'post_type' => 'amenidad',
                'orderby' => 'rand',
                'posts_per_page' => -1,
            );
            $the_query = new WP_Query( $args );
          ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-4 col-amenidades">
              <div class="card card-01 height-fix">
                <img class="card-img-top img-amenidades" height="236" src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" alt="Card image cap">
                <div class="card-img-overlay">
                  <p class="card-text text-center"><?php the_title(); ?></p>
                </div>
            </div>
          </div>
        <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="separar"></div>
    </section>



<?php get_footer(); ?>