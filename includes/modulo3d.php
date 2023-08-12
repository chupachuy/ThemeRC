<section id="section3d" class="section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Disponibilidad</h2>
        </div>

        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-sur-tab" data-bs-toggle="pill" data-bs-target="#pills-sur" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Vista Sur</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-norte-tab" data-bs-toggle="pill" data-bs-target="#pills-norte" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Vista Norte</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-residencias-tab" data-bs-toggle="pill" data-bs-target="#pills-residencias" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Residencias</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-sur" role="tabpanel" aria-labelledby="pills-sur-tab">
            <?php include('vistasur.php'); ?>
          </div>
          <div class="tab-pane fade" id="pills-norte" role="tabpanel" aria-labelledby="pills-norte-tab">
              <?php include('vistanorte.php'); ?>
          </div>
          <div class="tab-pane fade" id="pills-residencias" role="tabpanel" aria-labelledby="pills-residencias-tab">
             <?php include('residencias.php'); ?>
          </div>
        </div>
        
        </div>
    </div>
</section>

<div class="edificio-3d">
    <!-- Modal -->
    <div class="modal fade" id="unitDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Número: <strong><span id="modalValuesUnit">{unit}</span></strong> <span id="modalValuesStatus" class="badge">{status}</span></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Precio: <strong id="modalValuesPrice">{price}</strong> Pesos</h4>
                                <hr>
                                <h4>Superficie:<br /> <strong id="modalValuesTotalMeters">{meters}</strong> m<sup>2</sup> <br>
                                    <strong id="modalValuesTotalFeets">{TotalFeets}</strong> Pies<br>
                                    <script type="text/javascript"></script>
                                    <div id="parkinSpacesDiv"><strong id="modalValuesParkingspaces">{Parkingspaces}</strong> cajón de estacionamiento</div>
                                </h4>
                                <hr>
                                <h4>Características:<br>
                                    <div id="numberFloor">Piso: <strong id="modalValuesFloor">{floor}</strong><br></div>
                                    Recamaras: <strong id="modalValuesBedrooms">{bedrooms}</strong><br />
                                    Baños: <strong id="modalValuesBathrooms">{bathrooms}</strong><br />
                                    <!--Vista: <strong>Sur</strong>-->
                                </h4>
                                <hr>
                                <h4>Tipo: <strong id="modalValuesType">{type}</strong></h4>
                            </div>
                            <div class="col-md-7 modal-image">
                                <img src="" alt="" style="max-width:100%" id="modalValuesIsometricURL">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#contact" id="infobuilding" type="button" class="btn btn-info">Solicitar información</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                     <input type="hidden" name="selectedUnit" id="selectedUnit" value="{unit}" />
                </div>
            </div>
        </div>
    </div>
   
</div>