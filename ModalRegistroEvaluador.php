  <!--Seccion - Modal Registro-->
  <div class="modal fade" id="modalLoginEvaluador" tabindex="-1" role="dialog" aria-labelledby="myModalRegistro"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Registro</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
     <!--Grid row-->
     <div class="row d-flex justify-content-center">

<!--Grid column-->
<div class="form-row mb-4">

  <!-- Default form Registro -->
  <form class="text-center" action="#!">
<br>
    <div class="form-row mb-4">
              <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombre">
              </div>
              <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellidos">
              </div>
    </div>
<div class="form-group">
    <select class="custom-select browser-default" required>
      <option value="">NOMBRE DE LA INSTITUCIÓN DE PROCEDENCIA</option>
      <option value="1">ITSOEH</option>
      <option value="2">ITESA</option>
      <option value="3">ITA</option>
      <option value="4">UTVM</option>
      <option value="5">ITSHU</option>
      <option value="6">ITSSJR </option>
    </select>
    <div class="invalid-feedback">Invalido, selecciona una INSTITUCIÓN DE PROCEDENCIA</div>
  </div>
    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Contraseña">


    <!-- Sign in button -->
    <button class="btn btn-rounded btn-default btn-block my-4" type="submit">iniciar Sesión</button>

    <!-- Register -->
    
    
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
  <!--Seccion - Fin Modal Registro-->
  