<!DOCTYPE html>
<html>
<head>
  <title></title>

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

<?php include('header.php') ?>

<div class="container">          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Tipo</th>
        <th>Accion</th>
        <th>Latitud</th>
        <th>Longitud</th>
      </tr>
    </thead>

    <tbody>
    <?php
  
      foreach ($records as $registro) {
      	echo "<tr>"; 
               echo "<td>"."<img style=width:13%; height:13%; src=".$registro->foto.">"."</td>"; 
               echo "<td>".$registro->Titulo."</td>"; 
               echo "<td>".$registro->Direccion."</td>"; 
               echo "<td>".$registro->Precio."</td>";
               echo "<td>".$registro->Descripcion."</td>";
               echo "<td>".$registro->Tipo."</td>";
               echo "<td>".$registro->Accion."</td>";
               echo "<td>".$registro->Latitud."</td>";
               echo "<td>".$registro->Longitud."</td>";
         echo "</tr>";

      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>



