 <!-- ======= Our Galerias Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Galerias</h2>
          <p>Disfruta, con el mejor estilo, de los hermosos atardeceres de este bello Puerto en tu hogar</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="gallery-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".interiores">Interiores</li>
              <li data-filter=".exteriores">Exteriores</li>
            </ul>
          </div>
        </div>

        
        <div class="row gallery-container">
          <?php
              $args = array(
                  'post_type' => 'image',
                  'orderby' => 'rand',
                  'posts_per_page' => -1

              );
              $the_query = new WP_Query( $args );
          ?>

          <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="col-lg-4 col-md-4 col-sm-6 gallery-item <?php foreach ( ( get_the_category() ) as $category ) {
                  echo $category->slug; } ?>"> 
            <div class="gallery-wrap">
              <?php the_post_thumbnail('home-gallery'); ?>
              <div class="gallery-info">
                
                <div class="gallery-links">
                  <a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'home-gallery'); echo $large_image_url[0]; ?>" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <!--<a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>-->
                </div>
              </div>
            </div>
          </div>

          <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

          <?php endif; ?>
    

        </div>
        
      </div>
    </section>
    <!-- End Our Galleria Section -->