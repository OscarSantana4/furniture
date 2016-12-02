<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<head>
  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HOMESPOT</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Realtor | Real Estate HTML5 Templates" >
<meta name="description" content="Realtor | Real Estate HTML5 Template">
<meta name="author" content="M_Adnan">

<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!--MAIN STYLE-->

<link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/main.css')?>" rel="stylesheet">
<link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">
<link href="<?php echo base_url('css/animate.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/responsive.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
s

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>


        <!--======= SUBMIT COUPON =========-->
        <div class="sub-nav-co"> <a href="#."><i class="fa fa-search"></i></a> </div>
      </nav>
    </div>
  </header>

  <!--======= BANNER =========-->
  <div id="banner">
    <div class="flex-banner">
      <ul class="slides">
        <!--======= SLIDER =========-->
        <li> <img src="<?php echo base_url('images/slider-img-1.jpg')?>" alt="" > </li>

        <!--======= SLIDER =========-->
        <li> <img src="<?php echo base_url('images/slider-img-2.jpg')?>" alt="" > </li>
      </ul>
    </div>


    <!--======= FIND PROPERTY =========-->
    <div class="finder">
      <div class="container">
        <h1>Welcome to homespot</h1>

        <!--======= FORM SECTION =========-->
        <div class="find-sec">
          <ul class="row">

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Choose The City</label>
              <select class="selectpicker">
                <option>New York</option>
                <option>Sydany</option>
                <option>Relish</option>
              </select>
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Location</label>
              <select class="selectpicker">
                <option>National parks</option>
                <option>State parks</option>
                <option>City parks</option>
              </select>
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Property Status</label>
              <select class="selectpicker">
                <option>Appartment</option>
                <option>House</option>
                <option>Villa</option>
                <option>Land</option>
              </select>
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Property Type</label>
              <select class="selectpicker">
                <option>Choose</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>No of Bedrooms</label>
              <select class="selectpicker">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>No of Bathrooms</label>
              <select class="selectpicker">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>

            <!--======= Pricing Range =========-->
            <li class="col-sm-6">
              <div class="row">
                <div class="col-xs-9">
                  <div class="cost-price-content">
                    <label>Pricing Range: <span id="price-min" class="price-min"></span> <i>-</i> <span id="price-max" class="price-max"></span></label>
                    <div id="price-range" class="price-range"></div>
                  </div>
                </div>

                <!--======= BUTTON =========-->
                <div class="col-xs-3 search">
                  <button type="submit" class="btn">Buscar</button>
                  <button type="submit" class="btn">Publicar</button>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>



  <!--======= PROPERTY =========-->
  <section class="property-slide">

    <!--======= PROPERTY SLIDER =========-->
    <div class="prot-slide">

      <!--======= PROPERTY SLIDE =========-->
      <div class="plots">
        <div class="row">
          <div class="col-xs-4"> <a href="#."> <img class="img-responsive" src="<?php echo base_url('images/propt-img-1.jpg')?>" alt="" > </a> </div>
          <div class="col-xs-8">
            <div class="pri-info"> <span class="sale">For Sale</span> <a class="f-mont" href="#.">$ 13,512,002 3 Bed Room At Newyork</a>
              <p><i class="fa fa-map-marker"></i> Down Street</p>
              <div class="auther"> <img src="<?php echo base_url('images/auther-1.jpg')?>" alt="">
                <h6>Anderia jus</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--======= PROPERTY SLIDE =========-->
      <div class="plots">
        <div class="row">
          <div class="col-xs-4"> <a href="#."> <img class="img-responsive" src="<?php echo base_url('images/propt-img-1.jpg')?>" alt="" > </a> </div>
          <div class="col-xs-8">
            <div class="pri-info"> <span class="sale">For Sale</span> <a class="f-mont" href="#.">$ 13,512,002 3 Bed Room At Newyork</a>
              <p><i class="fa fa-map-marker"></i> Down Street</p>
              <div class="auther"> <img src="<?php echo base_url('images/auther-1.jpg')?>" alt="">
                <h6>Anderia jus</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--======= PROPERTY SLIDE =========-->
      <div class="plots">
        <div class="row">
          <div class="col-xs-4"> <a href="#."> <img class="img-responsive" src="<?php echo base_url('images/propt-img-2.jpg')?>" alt="" > </a> </div>
          <div class="col-xs-8">
            <div class="pri-info"> <span class="sale">For Sale</span> <a class="f-mont" href="#.">$ 13,512,002 3 Bed Room At Newyork</a>
              <p><i class="fa fa-map-marker"></i> Down Street</p>
              <div class="auther"> <img src="<?php echo base_url('images/auther-1.jpg')?>" alt="">
                <h6>Anderia jus</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--======= PROPERTY SLIDE =========-->
      <div class="plots">
        <div class="row">
          <div class="col-xs-4"> <a href="#."> <img class="img-responsive" src="<?php echo base_url('images/propt-img-3.jpg')?>" alt="" > </a> </div>
          <div class="col-xs-8">
            <div class="pri-info"> <span class="sale">For Sale</span> <a class="f-mont" href="#.">$ 13,512,002 3 Bed Room At Newyork</a>
              <p><i class="fa fa-map-marker"></i> Down Street</p>
              <div class="auther"> <img src="<?php echo base_url('images/auther-1.jpg')?>" alt="">
                <h6>Anderia jus</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--======= SERVICES =========-->
  <section class="services">
    <div class="container">

      <!--======= TITTLE =========-->s
      <div class="tittle"> <img src="<?php echo base_url('images/head-top.png')?>" alt="">
        <h3>Servicios que proveemos!</h3>
        <p>Te damos las herramientas y la disponibilidad de hacerle publicidad a tu propiedad</p>
      </div>
      <ul class="row">

        <!--======= SERVICE SECTION =========-->
        <li class="col-sm-3">
          <section>
            <!--======= SERVICE IMG =========-->
            <img class="img-responsive" src="<?php echo base_url('images/service-img-1.jpg')?>" alt="" >
            <div class="icon"> <img src="<?php echo base_url('images/icon-services-1.png')?>" alt=""> </div>

            <!--======= SERVICE HOVER =========-->
            <div class="ser-hover">
              <p>Con rapida eficiencia y rapidez!<a href="#." class="read-more">Leer mas <i class="fa fa-angle-double-right"></i></a> </p>
            </div>
            <a href="#." class="heading">Residential</a> </section>
        </li>

        <!--======= SERVICE SECTION =========-->
        <li class="col-sm-3">
          <section>
            <!--======= SERVICE IMG =========-->
            <img class="img-responsive" src="<?php echo base_url('images/service-img-2.jpg')?>" alt="" >
            <div class="icon"> <img src="<?php echo base_url('images/icon-services-2.png')?>" alt=""> </div>

            <!--======= SERVICE HOVER =========-->
            <div class="ser-hover">
              <p>No busques mas!<a href="#." class="read-more">Leer mas <i class="fa fa-angle-double-right"></i></a> </p>
            </div>
            <a href="#." class="heading">industrial</a> </section>
        </li>

        <!--======= SERVICE SECTION =========-->
        <li class="col-sm-3">
          <section>
            <!--======= SERVICE IMG =========-->
            <img class="img-responsive" src="<?php echo base_url('images/service-img-3.jpg')?>" alt="" >
            <div class="icon"> <img src="<?php echo base_url('images/icon-services-3.png')?>" alt=""> </div>

            <!--======= SERVICE HOVER =========-->
            <div class="ser-hover">
              <p>Busqueda facil que estabas esperando.<a href="#." class="read-more">Leer mas! <i class="fa fa-angle-double-right"></i></a> </p>
            </div>
            <a href="#." class="heading">Asset management</a> </section>
        </li>

      </ul>
    </div>
  </section>



  </section>

  <!--======= CALL US =========-->

  <section class="call-us">
    <div class="overlay">
      <div class="container">
        <ul class="row">
          <li class="col-sm-6">
            <h4>Quieres vender tu propiedad? </h4>
            <h6>LLamanos y publicala aqui!</h6>
          </li>
          <li class="col-sm-4">
            <h1>829-944-9590</h1>
          </li>
          <li class="col-sm-2 no-padding"> <a href="#." class="btn">just contact us</a> </li>
        </ul>
      </div>
    </div>
  </section>


  <!--======= FOOTER =========-->
  <footer>
    <div class="container">


          <!--======= SOCIAL ICONS =========-->

          <ul class="social_icons">
            <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
            <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
            <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a></li>
            <li class="tumblr"> <a href="#."><i class="fa fa-tumblr"></i> </a></li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </footer>

  <!--======= RIGHTS =========-->
  <div class="rights">
    <div class="container">
      <p class="font-montserrat">© 2016 Oscar Santana. All rights reserved</p>
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
<script src="<?php echo base_url('js/jquery.sticksy.js')?>"></script>
<script src="<?php echo base_url('js/own-menu.js')?>"></script>
<script src="<?php echo base_url('js/jquery.nouislider.min.js')?>"></script>
<script src="<?php echo base_url('js/main.js')?>"></script>
<script src="<?php echo base_url('js/jquery.sticky.js')?>"></script>
<script type="text/javascript">
  /*-----------------------------------------------------------------------------------*/
/*    PRICE RANGE
/*-----------------------------------------------------------------------------------*/
$("#price-range").noUiSlider({
  range: {
      'min': [ 0 ],
      'max': [ 10000000]},
  start: [0, 10000000],
       connect:true,
       serialization:{
           lower: [
         $.Link({
          target: $("#price-min")
        })],
   upper: [
          $.Link({
          target: $("#price-max")
        })],
   format: {
      // Set formatting
          decimals: 0,
          prefix: '$'
  }}
});
</script>
</body>
</html>
