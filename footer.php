<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <div class="logo-footer">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/logotipo_B.png" alt="">
            </div>
            
            <p>Paseo de la Industria s/n Las Juntas<br />Puerto Vallarta, Jalisco<br>
              <strong>Teléfono:</strong> <a class="disable-link" href="tel:+523222655909">+52 322 265 5909</a><br>
              <strong>Email:</strong> <a href="mailto:info@ranchocalifornia.mx">info@ranchocalifornia.mx</a><br>
            </p>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Rancho California</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://ranchocalifornia.mx/">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#amenidades">Amenidades</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#ubicacion">Ubicación</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Galería</a></li>-->
              <li><i class="bx bx-chevron-right"></i> <a href="#fianciamiento">Financiamiento</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contacto">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
             <h4>Redes Sociales</h4>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/ranchocaliforniamx" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/california.rancho/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
            <div class="social-links mt-3">
              <p>Ubicado a solo 5 km del aeropuerto, y a tan solo 10 minutos de playas, centros comerciales , Vidanta World, Restaurantes, Club de Yates, Marina Vallarta, entre otros.</p>
            </div>
          </div>

        </div>
        <div class="row justify-content-center">
          <div class="col-md-3 text-center">
            <p>Este es un desarrollo de:</p>
            <div class="logo-footer-dupont">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/rachild-logoF.png" alt="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="logo-footer-dupont">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/duponstates.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Rancho California <?php echo Date('Y'); ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Grafvity</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          
          <div class="modal-body">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
            </button>        
            <!-- 16:9 aspect ratio -->
          <div class="ratio ratio-16x9">
        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>s
    </div>
        
        
      </div>

    </div>
  </div>
</div> 

  <!-- Vendor JS Files -->
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 


/** ESCONDER MODEALES **/


    
// document ready  
});

</script>


<!--***** EDIFICIOS 3D -->

<script src="https://ranchocalifornia.mx/svg/dataproperties.js"></script>
  <script>
    function setSVGAvailability(){
      $('path').each(function(){
        var currentPolygon = $(this);        
        var id = currentPolygon.attr('id');
        var unit = currentPolygon.attr('data-attributes');
        var parentAnchor = $(currentPolygon).parent('a.unit-link'); 
        var propertyInformation = propertyList[unit];
        


        if(propertyInformation != undefined){
          var statusClass = propertyInformation.Status; 
          statusClass = statusClass.toLowerCase(); 
          statusClass = statusClass.replace('hold', 'pending'); 
          currentPolygon.addClass(statusClass);
          currentPolygon.attr('data-attributes-status', propertyInformation.StatusInt);
          currentPolygon.attr('data-attributes-bedrooms', propertyInformation.Bedrooms);          
          currentPolygon.attr('data-attributes-floor', propertyInformation.Floor);          
          currentPolygon.attr('data-attributes-bathrooms', propertyInformation.Bathrooms);

          currentPolygon.attr('data-attributes-Parkingspaces', propertyInformation.Parkingspaces);
          currentPolygon.attr('data-attributes-price', propertyInformation.Price); 

          currentPolygon.attr('data-attributes-totalM2', propertyInformation['TotalM2']);          
          currentPolygon.attr('data-attributes-feets', propertyInformation['TotalFeets']);          
          currentPolygon.attr('data-attributes-type', propertyInformation['Type']);                    
          currentPolygon.attr('data-attributes-isometricURLFull', propertyInformation.IsometricURLFull);                   

          parentAnchor.attr('href', finderBaseURL + propertyInformation.Id + '?pp=all');
          parentAnchor.attr('target','_blank');
          parentAnchor.addClass(statusClass);
          
        }
      });
    }
    </script>
    <script type="text/javascript">
      $('path.unit-item').click(function(event){
      event.preventDefault();
      var currentPolygon = $(this);   
      var unitStatus = currentPolygon.attr('data-attributes-status'); 
      var unitStatusText =""; 
      var unitStatusBadgeClass =""; 
      $('.modalPriceContainer').hide();

      switch(unitStatus){
        case '1': //Disponible
          unitStatusText="Disponible";
          unitStatusBadgeClass="badge-success";
          $('.modalPriceContainer').show();
        break; 
        case '2': //Apartado
          unitStatusText="Apartado";
          unitStatusBadgeClass="badge-warning";          
        break; 
        case '3': //Vendido
          unitStatusText="Vendido";
          unitStatusBadgeClass="badge-danger";
        break; 
      }

      $('#modalValuesUnit').text(currentPolygon.attr('data-attributes')); 
      $('#modalValuesStatus').text(unitStatusText); 
      $('#modalValuesStatus').removeClass('badge-success');
      $('#modalValuesStatus').removeClass('badge-warning');
      $('#modalValuesStatus').removeClass('badge-danger');
      $('#modalValuesStatus').addClass(unitStatusBadgeClass);

      $('#modalValuesIsometricURL').attr('src', currentPolygon.attr('data-attributes-isometricURLFull')); 
      
      $('#modalValuesPrice').text(currentPolygon.attr('data-attributes-price')); 
      $('#modalValuesBedrooms').text(currentPolygon.attr('data-attributes-bedrooms')); 
      $('#modalValuesFloor').text(currentPolygon.attr('data-attributes-floor')); 
      $('#modalValuesParkingspaces').text(currentPolygon.attr('data-attributes-Parkingspaces')); 
      $('#modalValuesBathrooms').text(currentPolygon.attr('data-attributes-bathrooms')); 
      $('#modalValuesTotalMeters').text(currentPolygon.attr('data-attributes-totalM2'));
      $('#modalValuesTotalFeets').text(currentPolygon.attr('data-attributes-feets')); 
      $('#modalValuesType').text(currentPolygon.attr('data-attributes-type')); 

      $('#selectedUnit').val(currentPolygon.attr('data-attributes'));
      }); 
    </script>
    <script>
      

      let vistaResidencias = document.getElementById("pills-residencias-tab");
      let vistaSurBtn = document.getElementById("pills-sur-tab");
      let vistaNorteBtn = document.getElementById("pills-norte-tab");
      let statusParkinSpaces = document.getElementById("parkinSpacesDiv");
      let numberFloorbuild = document.getElementById("numberFloor");

      vistaResidencias.addEventListener("click", mostrarStatus);
      vistaSurBtn.addEventListener("click", mostrarStatus);
      vistaNorteBtn.addEventListener("click", mostrarStatus);

      function mostrarStatus(){
        console.log(`El estado de el boton esta en: ${vistaResidencias.ariaSelected}`);
        if(vistaResidencias.ariaSelected === "true"){
          statusParkinSpaces.style.display = 'none';
          numberFloorbuild.style.display = 'none';
          console.log("invisible");
        }else{
          statusParkinSpaces.style.display = 'block';
          numberFloorbuild.style.display = 'block';
          console.log("visible");
        }
      }

      let infoBtnModal = document.getElementById("infobuilding");
      let myModal = new bootstrap.Modal("#unitDetails");
      function cerrarModal(){
        setTimeout(function(){
          myModal.hide();
        }, 500);
      }

      infoBtnModal.addEventListener("click", cerrarModal);


    </script>

  <?php wp_footer(); ?>

</body>

</html>