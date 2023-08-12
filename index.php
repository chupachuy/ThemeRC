<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <?php
              $args = array(
                  'post_type' => 'slider',
              );
              $the_query = new WP_Query( $args );
          ?>

          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <!--<div class="row">
                  <div class="col-md-3">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logotipo.png" alt="" class="img-fluid">
                  </div>
                </div>-->
               
                <h2 class="animate__animated animate__fadeInDown"><?php the_title(); ?></h2>
                <p class="animate__animated animate__fadeInUp"><?php the_content(); ?></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Leer más</a>
              </div>
            </div>
          </div>

          <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    

    <!-- ======= About Us Section ======= -->

    <?php
      $query = new WP_query( 'pagename=rancho-california');

      if( $query->have_posts()){
        while ( $query->have_posts()){
          $query->the_post(); 
    ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" class="img-fluid" alt="Rancho california">
          </div>

          <div class="col-lg-6 about-content text-center">

            <div class="section-title">
              <h2><?php the_title(); ?></h2>
              <?php the_excerpt(); ?>
            </div>

            <a href="<?php the_permalink(); ?>" type="button" class="btn btn-primary btn-lg"><i class="fa-solid fa-house"></i>&nbsp;Más información</a>
            <!--<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>-->

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <?php }
      }
      wp_reset_postdata();
    ?>

    <section id="amenidades">
      <div class="container">
        <div class="section-title">
          <h2>Amenidades</h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
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
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="d-grid gap-2 col-6 mx-auto">
            <a href="<?php bloginfo('url'); ?>/amenidades/" class="btn btn-primary" type="button">Ver todas las amenidades</a>
          </div>
        </div>
      </div>
    </section>



     <!-- ======= Modelos Section ======= -->

     <section id="modelos" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <!--<h2>Modelos</h2>-->
          <h2>Residencias</h2>
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".fresno">Fresno</li>
              <li data-filter=".sacramento">Sacramento</li>
              <li data-filter=".san-jose">San José</li>
              <li data-filter=".san-diego">San Diego</li>
              
            </ul>
          </div>
        </div>

        <?php
          $args = array(
            'post_type' => 'modelo',
            'orderby' => 'rand',
            'posts_per_page' => -1,

          );
          $the_query = new WP_Query( $args );
        ?>

        <div class="row portfolio-container">
          
          <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item <?php foreach ( ( get_the_category() ) as $category ) {
                  echo $category->slug . ' '; } ?>">
            <div class="portfolio-wrap">
              <?php the_post_thumbnail('home-modelos'); ?>
              <div class="portfolio-info">
                <!--<h4><?php the_title(); ?></h4>-->
                <div class="portfolio-links">
                  <a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php the_content(); ?>"><i class="bi bi-plus"></i></a>
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
    </section>

    <!--- RANCHO CALIFORNIA MODELOS -->
    <section id="california" class="california section-bg">
      <?php include('includes/california.php'); ?>
    </section>

     <!-- ======= Our MAPS ======= -->
    <section id="ubicacion" class="team">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-title">
          <h2>Ubicación</h2>
          <p>Paseo de la Industria s/n Las Juntas<br />Puerto Vallarta, Jalisco</p>
        </div>
        <div class="row">
          <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3732.0140270114316!2d-105.24087492472248!3d20.70965499866223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDQyJzM0LjciTiAxMDXCsDE0JzE3LjkiVw!5e0!3m2!1ses-419!2smx!4v1682310105482!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>

    <section id="comercial">
      <div class="container">
        <div class="section-title">
          <h2>zona comercial</h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <!-- TILE -->
          <?php
            $args = array(
                'post_type' => 'comercial',
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
      <div class="row">
        <div class="col-md-12">
          <div class="d-grid gap-2 col-6 mx-auto">
            <p><small>* Todas las imágenes son para fines ilustrativos únicamente.</small></p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- EDIFICIO 3d -->

    <div id="disponibilidad"></div>

    <?php include('includes/modulo3d.php'); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>*Precios sujetos a cambio sin previo aviso.</p>
            </div>
        </div>
    </div>

    <!-- EDIFICIO 3d -->


    
    <!-- ======= Services Section ======= -->
    <section id="financiamiento" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Financiamiento</h2>
        </div>

        <div class="row">
          <div class="col">
            <p>Nos complace anunciar que ahora ofrecemos una amplia gama de opciones de financiamiento para la adquisición de nuestros exclusivos departamentos y residencias de lujo en preventa. </p>
            <p>Nuestro objetivo es brindarles flexibilidad y comodidad al adquirir su nuevo hogar. A continuación, detallamos las opciones disponibles:</p>

              <ol>
                <li><strong>Enganches</strong>:

                  <ul>
                    <li><strong>30% de enganche</strong>: Disponible para aquellos que prefieren realizar un pago inicial más bajo.</li>
                    <li><strong>40% de enganche</strong>: Una opción intermedia para aquellos que desean equilibrar el pago inicial y el saldo remanente.</li>
                    <li><strong>50% de enganche</strong>: Ideal para aquellos que desean reducir significativamente el saldo remanente.</li>
                    <li><strong>90% de pago de contado</strong>: Para aquellos que desean aprovechar un descuento adicional, ofrecemos un 10% de descuento en el precio total.</li>
                  </ul>
                </li>
                <li><strong>Financiamiento directo con los desarrolladores</strong>: <br>Ofrecemos la opción de financiamiento directo sin intereses hasta 36 mensualidades. Esto le brinda la oportunidad de distribuir el pago del saldo remanente en cuotas cómodas y accesibles.</li>
                <li><strong>Apoyo para la solicitud de un crédito hipotecario:</strong>
                </li>
              </ol>

              <p>Si prefiere obtener un crédito hipotecario para cubrir el saldo remanente, nuestro equipo estará encantado de brindarle asesoramiento y apoyo durante el proceso de solicitud. Trabajaremos en estrecha colaboración con usted para facilitar el acceso a las mejores opciones de financiamiento disponibles en el mercado.</p>
              <p>Nos enorgullece ofrecer estas opciones de financiamiento para que pueda hacer realidad su sueño de adquirir un departamento de lujo en preventa. Nuestro objetivo es brindarle una experiencia sin complicaciones y garantizar su satisfacción en cada etapa del proceso de compra.</p>
              <p>Si está interesado en obtener más información sobre nuestras opciones de financiamiento o desea programar una cita con alguno de nuestros agentes, no dude en ponerse en contacto con nuestro equipo de ventas. Estaremos encantados de atender todas sus consultas y brindarle la asistencia necesaria.</p>
              <h4 class="text-center">Atentamente<br><span class="title"><strong>Rancho California</strong></span></h4>
          </div>
        </div>
        </div>

    </section><!-- End Services Section -->

     <!-- BORCHURE -->

  <section id="brouchure" class="section-brouchure">
    <div class="wrapper-full">
    <div class="cta-wrapper text-center">
      <h2>Conoce más sobre nosotros</h2>
        <p>Descarga nuestros Brochures de Rancho California</p>
        <div class="row">
          <div class="col-md-4">
            <a class="blue-cta-button" target="_blank" href="<?php bloginfo('template_url'); ?>/assets/brochure/BROCHURE-CONDOS-ESPANOL.pdf">Condominios Español</a>
          </div>
          <div class="col-md-4">
            <a class="blue-cta-button" target="_blank" href="<?php bloginfo('template_url'); ?>/assets/brochure/BROCHURE-CONDOS-ENGLISH.pdf">Condominios Ingles</a>
          </div>
          <div class="col-md-4">
            <a class="blue-cta-button" target="_blank" href="<?php bloginfo('template_url'); ?>/assets/brochure/BROCHURE-RC-ESPANOL.pdf">Rancho California Español</a>
          </div>
          <div class="col-md-4">
            <a class="blue-cta-button" target="_blank" href="<?php bloginfo('template_url'); ?>/assets/brochure/BROCHURE-RC-INGLES.pdf">Rancho California Ingles</a>
          </div>
          <div class="col-md-4">
            <a class="blue-cta-button" target="_blank" href="<?php bloginfo('template_url'); ?>/assets/brochure/BROCHURE-RESIDENCES-ESPANOL.pdf">Residencias Español</a>
          </div>
          <div class="col-md-4">
            <a class="blue-cta-button" target="_blank" href="<?php bloginfo('template_url'); ?>/assets/brochure/BROCHURE-RESIDENCES-ENGLISH.pdf">Residencias Ingles</a>
          </div>
        </div>
      <div class="clearfix"></div>
    </div>
  </div>
  </section>

  <!-- BORCHURE -->


 


    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contáctanos</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Dirección</h3>
              <p>Paseo de la Industria s/n Las Juntas<br />Puerto Vallarta, Jalisco</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@ranchocalifornia.mx">info@ranchocalifornia.mx</a></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Llamanos</h3>
              <p><a class="disable-link" href="tel:+523222655909">+52 322 265 5909</a></p>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <!--<form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
              <?php echo do_shortcode( '[contact-form-7 id="127" title="Formulario de contacto 1"]' ); ?>
            <!--</form>-->
          </div>
            
          </div>
        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

<?php get_footer(); ?>