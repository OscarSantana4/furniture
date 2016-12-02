<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Realtor | Real Estate HTML5 Template</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Realtor | Real Estate HTML5 Templates" >
<meta name="description" content="Realtor | Real Estate HTML5 Template">
<meta name="author" content="M_Adnan">

<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!--MAIN STYLE-->
<?php $this->load->helper('url'); ?>
<link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/main.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/style.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/animate.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/responsive.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<?php include('header.php'); ?>
  <?php $this->load->helper('URL'); ?>
 


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
</body>
</html>