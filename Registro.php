<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <?php
    require_once 'css/css.php';
    ?>
</head>
<body class="">
<?php
    require_once 'menu_CerrarSesion.php';
    ?>
    
    <br><br><br><br><br><br>


    <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
        aria-controls="v-pills-home" aria-selected="true">Registro del Equipo</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
        aria-controls="v-pills-profile" aria-selected="false">Equipos</a>
        <a class="nav-link" id="v-pills-detalle-tab" data-toggle="pill" href="#v-pills-detalle" role="tab"
        aria-controls="v-pills-detalle" aria-selected="false">Detalle General de los Equipos</a>
     
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      <div  style="width:95%; height:500px; overflow: scroll;">
<p>Apartado para registrar a los participantes.</p>
          <?php
require_once 'RegistroDelEquipo.php';
//
        ?>
      </div>
  
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" id="Layer1">
      <p>Apartado para visualizar y modificar a los participantes.</p>
       <?php
       // require_once 'DetalleEquipo.php';
       include_once 'TablaRegistroParticipantes.php';
       ?>

      </div>
     
      <div class="tab-pane fade" id="v-pills-detalle" role="tabpanel" aria-labelledby="v-pills-detalle-tab" id="Layer1">
      <p></p>
      <div  style="width:95%; height:500px; overflow: scroll;">
      <?php
       // require_once 'DetalleEquipo.php';
       include_once 'DetalleEquipo.php';
       ?>
      </div>
      

      </div>
     
    </div>
  </div>
</div>


   <script type="text/javascript" src="registro.js"></script>
<?php
    require_once 'footer.php';
    require_once 'js/js.php';
    ?>
</body>
</html>