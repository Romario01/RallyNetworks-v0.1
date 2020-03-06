<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evaluadores</title>
  <?php
  require_once 'css/css.php';
  ?>
 </head>
 
<body>
  <?php
  require_once 'menu_CerrarSesion.php';
  ?>
  <br><br><br><br><br>
<div class="container" >




<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Nombre de Equipo</th>
      <th scope="col">Lider de equipo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
    <select class="center browser-default custom-select">
      <option selected>Selecciona el Nombre de Equipo</option>
      <option value="1">peerito</option>
      <option value="2">lobos</option>
      <option value="3">etc</option>
    </select>
      </td>
      
      <td>
<input type="text" id="inputDisabledEx2" class="form-control" placeholder="Lider de Equipo" disabled>
      </td>

    </tr>
   
  </tbody>
</table>




<input type="text" id="inputDisabledEx2" class="form-control" placeholder="Nombre de evaluador" disabled>

<br><br>

<table class="container table table-bordered " >
  <thead>
    <tr style="color:white">
      <th class="purple darken-3" scope="col">Valor del reactivo</th>
      <th class="red darken-3" scope="col">Característica a cumplir (Reactivo) Simulador de red SR</th>
      <th class="pink darken-3" scope="col">Característica a cumplir (Reactivo) Ejercicio Subnetting Sub</th>
      <th class="cyan darken-4"  scope="col">SR <br>Base 1</th>
      <th class="cyan darken-4"  scope="col">SR <br>Base 2</th>
      <th class="light-blue darken-4" scope="col">Sub <br>Base 3</th>
      <th class="light-blue darken-4" scope="col">Sub <br>Base 4</th>
      <th class="cyan darken-4"  scope="col">SR <br>Base 5</th>
      <th class="cyan darken-4"  scope="col">SR <br>Base 6</th>
      <th class="light-blue darken-4" scope="col">Sub <br>Base 7</th>
      <th class="cyan darken-4"  scope="col">SR <br>Base 8</th>
      <th class="cyan darken-4"  scope="col">SR <br>Base 9</th>
      <th class="light-blue darken-4" scope="col">Medio <br>Base 10</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">100%</th>
      <td>El simulador de red funciona correctamente y se incluyen las configuraciones solicitadas en el reto. 
Incluye tabla de subneteo y configuración básica</td>
      <td>Completa la tabla de direccionamiento y de subneteo del ejercicio correctamente. Responde los cuestionamientos.</td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B1-100" >
          <label class="custom-control-label" for="B1-100"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B2-100" >
          <label class="custom-control-label" for="B2-100"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B3-100" >
          <label class="custom-control-label" for="B3-100"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B4-100" >
          <label class="custom-control-label" for="B4-100"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B5-100" >
          <label class="custom-control-label" for="B5-100"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B6-100" >
          <label class="custom-control-label" for="B6-100"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B7-100" >
          <label class="custom-control-label" for="B7-100"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B8-100" >
          <label class="custom-control-label" for="B8-100"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B9-100" >
          <label class="custom-control-label" for="B9-100"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B10-100" >
          <label class="custom-control-label" for="B10-100"></label>
        </div>
      </td>
    </tr>
    <tr>
      <th scope="row">70%</th>
      <td>El simulador de red funciona correctamente y se incluyen las configuraciones solicitadas en el reto. 
No incluye tabla de subneteo y configuración básica
La topología es correcta</td>
      <td>Completa la tabla de direccionamiento y de subneteo del ejercicio correctamente. No responde a todos los cuestionamientos.</td>
      <td>
      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B1-70" >
          <label class="custom-control-label" for="B1-70"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B2-70" >
          <label class="custom-control-label" for="B2-70"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B3-70" >
          <label class="custom-control-label" for="B3-70"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B4-70" >
          <label class="custom-control-label" for="B4-70"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B5-70" >
          <label class="custom-control-label" for="B5-70"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B6-70" >
          <label class="custom-control-label" for="B6-70"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B7-70" >
          <label class="custom-control-label" for="B7-70"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B8-70" >
          <label class="custom-control-label" for="B8-70"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B9-70" >
          <label class="custom-control-label" for="B9-70"></label>
        </div>
      </td>
      <td class="red">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B10-70" disabled >
          <label class="red custom-control-label" for="B10-70"></label>
        </div>
      </td>
    </tr>
    <tr>
      <th scope="row">40%</th>
      <td >El simulador de red no funciona correctamente 
Incluye tabla de subneteo y configuración básica
La topología es correcta</td>
      <td>Completa la tabla de subneteo del ejercicio correctamente
La tabla de direccionamiento está incompleta. Responder medianamente a los cuestionamientos</td>
<td>
<div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B1-40" >
          <label class="custom-control-label" for="B1-40"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B2-40" >
          <label class="custom-control-label" for="B2-40"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B3-40" >
          <label class="custom-control-label" for="B3-40"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B4-40" >
          <label class="custom-control-label" for="B4-40"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B5-40" >
          <label class="custom-control-label" for="B5-40"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B6-40" >
          <label class="custom-control-label" for="B6-40"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B7-40" >
          <label class="custom-control-label" for="B7-40"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B8-40" >
          <label class="custom-control-label" for="B8-40"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B9-40" >
          <label class="custom-control-label" for="B9-40"></label>
        </div>
      </td>
      <td class="red ">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B10-40" disabled>
          <label class="custom-control-label" for="B10-40" ></label>
        </div>
      </td>
    </tr>
    <tr>
      <th scope="row">0%</th>
      <td ">No cumple con los requisitos solicitados en el retod</td>
      <td>@No presenta la tabla de subneteo. La tabla de direccionamiento está incompleta. No responde a todos los cuestionamientos.</td>
      <td>
      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B1-0" >
          <label class="custom-control-label" for="B1-0"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B2-0" >
          <label class="custom-control-label" for="B2-0"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B3-0" >
          <label class="custom-control-label" for="B3-0"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B4-0" >
          <label class="custom-control-label" for="B4-0"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B5-0" >
          <label class="custom-control-label" for="B5-0"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B6-0" >
          <label class="custom-control-label" for="B6-0"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B7-0" >
          <label class="custom-control-label" for="B7-0"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B8-0" >
          <label class="custom-control-label" for="B8-0"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B9-0" >
          <label class="custom-control-label" for="B9-0"></label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="B10-0" >
          <label class="custom-control-label" for="B10-0"></label>
        </div>
      </td>
    </tr>
    <tr>
      
      <td colspan="3">PROMEDIO POR BASE</td>
     
      <td>
     <label for="">0%</label>
      </td>
      <td>
      <label for="">0%</label>
      </td>
      <td>
      <label for="">0%</label>
      </td>
      <td>
      <label for="">0%</label>
      </td>
      <td>
      <label for="">0%</label>
      </td>
      <td>
      <label for="">0%</label>
      </td>
      <td>
      <label for="">0%</label>
      </td>
      <td>
      <label for="">0%</label>
      </td>
      <td>
      <label for="">0%</label>
      </td>
      <td>
      <label for="">0%</label>
      </td>
    </tr>
  </tbody>
</table>
<button type="button" class="btn btn-success">Capturar Datos</button>
<br><br>
</div>


  <?php
 // require_once 'tablaCrud.php';colspan="2"
 // require_once 'cronometro.php';
  require_once 'ModalIniciarSesión.php';
  require_once 'footer.php';
  require_once 'js/js.php';
?> 
</body>
</html>