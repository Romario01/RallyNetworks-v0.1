<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <?php
  require_once 'css/css.php';
  ?>
 </head>
 
<body>
  <?php
  require_once 'menu_CerrarSesion.php';
  ?>
  <br><br><br><br><br>

<div class="">




<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
        aria-controls="v-pills-home" aria-selected="true">Equipos</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
        aria-controls="v-pills-profile" aria-selected="false">Registrados</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
        aria-controls="v-pills-messages" aria-selected="false">Distracciones Concluidas</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
        aria-controls="v-pills-settings" aria-selected="false">Ganadores</a>
        <a class="nav-link " id="v-pills-cronometro-tab" data-toggle="pill" href="#v-pills-cronometro" role="tab"
        aria-controls="v-pills-cronometro" aria-selected="true">Cronometro</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      <div  style="width:95%; height:500px; overflow: scroll;">
          <?php
     require_once 'DetalleEquipo.php';
        ?>
      </div>
  
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" id="Layer1">
     
       <?php
       include_once 'TablaRegistroParticipantes.php';
       ?>

      </div>
      <div class="tab-pane fade" id="v-pills-cronometro" role="tabpanel" aria-labelledby="v-pills-cronometro-tab">
      
      <?php
      require_once 'cronometro.php';
      ?>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
      <div  style="width:95%; height:500px; overflow: scroll;">
        <?php
        include_once 'TablaDistracciones.php';
        ?>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      <div  style="width:95%; height:500px; overflow: scroll;">
        <?php
        include_once 'TablaGanadores.php';
        ?>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
  <?php
 // require_once 'cronometro.php';
  require_once 'footer.php';
  require_once 'js/js.php';
?> 
</body>
</html>