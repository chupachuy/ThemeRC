
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Modelos Edificio California</h2>
          <!--<p>Disfruta, con el mejor estilo, de los hermosos atardeceres de este bello Puerto en tu hogar</p>-->
       

        <div class="row">
          <div class="col-lg-12">
            <ul id="california-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <!--<li data-filter=".estudio-1">Estudio 1</li>
              <li data-filter=".estudio-2">Estudio 2</li>
              <li data-filter=".estudio-3">Estudio 3</li>-->
              <li data-filter=".presidential">Presidential</li>
              <li data-filter=".penthouse">Penthouse</li>
              <li data-filter=".jrpenthouse">Jr. Penthouse</li>
              <li data-filter=".jimbaran">Jimbaran</li>
              <li data-filter=".residence">Residence</li>
              <li data-filter=".imperial">Imperial</li>
              <li data-filter=".villa">Villa</li>
              <li data-filter=".duomo">Duomo</li>
              <li data-filter=".venice">Venice</li>
              <li data-filter=".premier">Premier</li>
              <li data-filter=".parlor">Parlor</li>
              <li data-filter=".executive">Executive</li>
              <li data-filter=".luxury">Luxury</li>
              <li data-filter=".interiores">Interiores</li>
            </ul>
          </div>
        </div>

        
        <div class="row california-container">
          <?php
              $args = array(
                  'post_type' => 'california',
                  'orderby' => 'rand',
                  'posts_per_page' => -1

              );
              $the_query = new WP_Query( $args );
          ?>

          <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="col-lg-3 col-md-3 col-sm-6 california-item <?php foreach ( ( get_the_category() ) as $category ) {
                  echo $category->slug; } ?>"> 
            <div class="california-wrap">
              <?php the_post_thumbnail('home-modelos'); ?>
              <div class="california-info">
                
                <div class="california-links">
                  <a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" data-california="californiaGallery" class="california-lightbox" title="<?php the_content(); ?>"><i class="bi bi-plus"></i></a>
                  <!--<a href="california-details.html" title="More Details"><i class="bi bi-link"></i></a>-->
                </div>
              </div>
            </div>
          </div>

          <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

          <?php endif; ?>
    

        </div>
        
      </div>
    </div>