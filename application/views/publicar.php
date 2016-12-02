<!DOCTYPE html>
<html>
<head>
	<title>Publicar Propiedad</title>
	<script src="<?php echo base_url('js/wow.min.js')?>"></script>
<script src="<?php echo base_url('js/bootstrap-select.js')?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('js/jquery.stellar.js')?>"></script>
<script src="<?php echo base_url('js/jquery.flexslider-min.js')?>"></script>
<script src="<?php echo base_url('js/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('js/jquery.sticksy.js')?>"></script>
<script src="<?php echo base_url('js/own-menu.js')?>"></script>
<script src="<?php echo base_url('js/jquery.nouislider.min.js')?>"></script>
<script src="<?php echo base_url('js/main.js')?>"></script>
<script src="<?php echo base_url('js/jquery.sticky.js')?>"></script>
<script src="<?php echo base_url('js/jquery-1.10.2.min')?>"></script>

<link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/main.css')?>" rel="stylesheet">
<link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">
<link href="<?php echo base_url('css/animate.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/responsive.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
</head>
<body>

<?php include('header.php') ?>

<body>

<div class="container">

<div class="page-header">

</div>

<!-- Contact with Map - START -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">PUBLICACIÓN DE PROPIEDADES</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="Titulo" type="text" placeholder="Titulo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="Direccion" type="Direccion" placeholder="Direccion" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="radio-inline">
							      <input type="radio" name="Tipo" value="Casa"> Casa
							    </label>
							    <label class="radio-inline">
							      <input type="radio" name="Tipo" value="Apartamento"> Apartamento
							    </label>
							    <label class="radio-inline">
							      <input type="radio" name="Tipo" value="Finca"> Finca
							    </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="Precio" type="number" placeholder="Precio" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="Descripcion" placeholder="Describe tu propiedad!" rows="7"></textarea>
                            </div>
                        </div>


						<div class="form-group">
						    <div class="col-md-10 col-md-offset-1">
						 <label class="radio-inline">
							      <input type="radio" name="Accion" value="Comprar" >Comprar
							    </label>
							    <label class="radio-inline">
							      <input type="radio" name="Accion" value="Alquilar" >Vender
							    </label>
							       </div>


							       <div class="form-group">
						           <div class="col-md-10 col-md-offset-1">
									  <label class="radio-inline">
							       <input type="text" name="Longitud" value="Longitud"  class="form-control">
							    </label>
							    <label class="radio-inline">
							      <input type="text" name="Latitud" value="Latitud"  class="form-control">
							    </label>
							       </div>
						              </div>
										</br>

							       <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input type="text" name="foto" placeholder="Url foto" class="form-control">
                                <?php echo form_open_multipart('upload_controller/do_upload');?>
                                <?php echo "<input type='file' name='userfile' size='20' />"; ?>
                                <?php echo "<input class="."btn btn-success"." type='submit' name='submit' value='Agregar' /> ";?>
                                <?php echo "</form>"?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">

                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <h4>Ubicacion en mapa!</h4>
                        <div>
                          <div id="map"></div>
                        </div>
                        <hr />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!--======= MAP =========-->
  <div id="map"></div>
  <!--======= CONTACT =========-->
  <section class="contact">
  <!--======= RIGHTS =========-->
  <div class="rights">
    <div class="container">
      <p class="font-montserrat">© 2015 Realtor. All rights reserved</p>
    </div>
  </div>
</div>
<script src="<?php echo base_url('js/jquery-1.11.0.min.js')?>"></script>
<script src="<?php echo base_url('js/wow.min.js')?>"></script>
<script src="<?php echo base_url('js/bootstrap-select.js')?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('js/jquery.stellar.js')?>"></script>
<script src="<?php echo base_url('js/jquery.flexslider-min.js')?>"></script>
<script src="<?php echo base_url('js/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('js/jquery.sticky.js')?>"></script>
<script src="<?php echo base_url('js/own-menu.js')?>"></script>
<script src="<?php echo base_url('js/jquery.nouislider.min.js')?>"></script>
<script src="<?php echo base_url('js/bootstrap-select.js')?>"></script>
<script src="<?php echo base_url('js/main.js')?>"></script>
<script src="<?php echo base_url('js/mapmarker.js')?>"></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>


<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<!-- begin map script-->
<script type="text/javascript">
// Use below link if you want to get latitude & longitude
// http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude.php
$(document).ready(function(){
//set up markers
var myMarkers = {"markers": [{

  "latitude": "-37.8176419",
  "longitude":"144.9554397",

  "icon": "images/map-locator.png",
  "baloon_text": '121 King St, Melbourne VIC 3000, Australia'
}]};

//set up map options
$("#map").mapmarker({
  zoom  : 17,
  center  : '121 King Street Melbourne Victoria 3000 Australia',
  markers : myMarkers
  });
});
</script>
<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 500px;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>
</div>

</body>
</html>
