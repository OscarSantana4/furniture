<!-- Page Wrap ===========================================-->
<div id="wrap" class="home-1">
  <script src="<?php echo base_url('js/jquery-1.11.0.min.js')?>"></script>
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

<link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/main.css')?>" rel="stylesheet">
<link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">
<link href="<?php echo base_url('css/animate.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/responsive.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <!--======= TOP BAR =========-->
  <div class="top-bar">
    <div class="container">
      <ul class="left-bar-side">
        <li>
          <p><i class="fa fa-phone"></i> LLamanos : 829-944-9590 </p>
          <span>|</span> </li>
        <li>
          <p><i class="fa fa-envelope-o"></i> <p> </p>Info@ourinfomail.com </p>
          <span>|</span> </li>
        <li>
         <?php $this->load->helper('URL'); ?>
          <li></li>
          <li><a href="<?php  echo site_url(); ?>/Register_Controller/index"?>Sign Up</a></li>
          <p><a href="<?php  echo site_url(); ?>/LoginController/index"?>Sign In</a></p>
          <span>|</span> </li>
      </ul>

    </div>
  </div>

  <!--======= HEADER =========-->
  <header class="sticky">
    <div class="container">
      <!--php foreach ($record as  $maill) {
             echo "<li>".$maill->email."</li>";
        }      ?>-->
      <!--======= LOGO =========-->

      <!--======= NAV =========-->
      <h1 style="float:left;">HOMESPOT</h1>
      <nav>

        <!--======= MENU START =========-->
        <ul class="ownmenu">
          <li class="active"><a href="<?php echo site_url('Inicio/index'); ?>">Inicio</a>
          </li>
          <li><a href="<?php echo site_url('Inicio/propiedad')?>">Ver propiedades</a></li>
          <li class="green"><a href="<?php echo site_url('Inicio/publicar_propiedad');?>">Publicar propiedad</a></li>
              </div>
            </div>
          </li>
        </ul>
