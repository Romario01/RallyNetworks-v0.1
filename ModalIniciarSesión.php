  <!--Seccion - Modal Iniciar Sesión-->
  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Iniciar Sesión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
     <!--Grid row-->
     <div class="row d-flex justify-content-center">

<!--Grid column-->
<div class="col-md-6">

  <!-- Default form login -->
  <form class="text-center" action="#!">
<br>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Usuario">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Contraseña">


    <!-- Sign in button -->
    <button class="btn btn-rounded btn-default btn-block my-4" type="submit">iniciar Sesión</button>

    <!-- Register -->
    <p>No estas registrado?
      <a href="" data-toggle="modal" data-target="#modalLoginEvaluador">Registrar (evaluador)</a>
    </p>

    <!-- Social login -->
    <p>pruebas:</p>

        <a href="Admin.php" class="mx-1" role="button"><i >Admin</i></a>
        <a href="Evaluadores.php" class="mx-1" role="button"><i>Evaluadores</i></a>
        <a href="Registro.php" class="mx-1" role="button"><i >Registro</i></a>
<br><br><br><br>
  </form>
  <!-- Default form login -->

</div>
<!--Grid column-->

</div>
<!--Grid row-->

     
      
    </div>
  </div>
</div>
  <!--Seccion - Fin Modal Iniciar Sesión-->
  <?php
  include_once 'ModalRegistroEvaluador.php';

  ?>