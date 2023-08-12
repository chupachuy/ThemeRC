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
                                    <strong id="modalValuesParkingspaces">{Parkingspaces}</strong> cajón de estacionamiento
                                </h4>
                                <hr>
                                <h4>Características:<br>
                                    Piso: <strong id="modalValuesFloor">{floor}</strong><br>
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
                    <button type="button" class="btn btn-info">Solicitar información</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                     <input type="hidden" name="selectedUnit" id="selectedUnit" value="{unit}" />
                </div>
            </div>
        </div>
    </div>
</div>