<div class="container">
   <form>
   <div class="form-row">
   <div class="form-group">
    <label for="inputAddress">Nombre del Equipo</label>
    <input type="text" class="form-control" id="NombreEquipo" placeholder="Nombre del Equipo" required >
  </div>
  <div class="form-group col-md-6">
      <label for="inputCity">Nombre Completo Lider</label>
      <input type="text" class="form-control" id="Nombrelider"  placeholder="Nombre Completo Lider " required >
    </div>
 
 <?php
 include_once 'paletaDeColores.php';
 ?> 
  </div>
  <div class="form-row">
 
  <div class="form-group col-md-6">
      <label for="inputCity">Jugador 1 </label>
      <input type="text" class="form-control" id="Nombre1"  placeholder="Nombre Completo" required >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Semestre</label>
      <select id="Semestre" class="form-control" required >
        <option selected>Semestre actual</option>
        <option>6°</option>
        <option>8°</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Instituto de Origen</label>
      <select id="inputState" class="form-control" required >
        <option  selected>ITSOEH</option>
      </select>
    </div>
  </div>

  
  <div class="form-row">
 
  <div class="form-group col-md-6">
      <label for="inputCity">Jugador 2 </label>
      <input type="text" class="form-control" id="Nombre2"  placeholder="Nombre Completo" required >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Semestre</label>
      <select id="Semestre" class="form-control" required >
        <option selected>Semestre actual</option>
        <option>6°</option>
        <option>8°</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Instituto de Origen</label>
      <select id="inputState" class="form-control">
        <option selected>ITSOEH</option>
      </select>
    </div>
  </div>

  <div class="form-row">
 
  <div class="form-group col-md-6">
      <label for="inputCity">Jugador 3 </label>
      <input type="text" class="form-control" id="Nombre3"required   placeholder="Nombre Completo">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Semestre</label>
      <select id="Semestre" class="form-control">
        <option selected>Semestre actual</option>
        <option>6°</option>
        <option>8°</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Instituto de Origen</label>
      <select id="inputState" class="form-control">
        <option selected>ITSOEH</option>
      </select>
    </div>
  </div>

  <div class="form-row">
 
 <div class="form-group col-md-6">
     <label for="inputCity">Jugador 4 </label>
     <input type="text" class="form-control" id="Nombre4"  placeholder="Nombre Completo" required >
   </div>
   <div class="form-group col-md-3">
     <label required  for="inputState">Semestre</label>
     <select id="Semestre" class="form-control" required >
       <option required  selected>Semestre actual</option>
       <option>1°</option>
       <option>2°</option>
       <option>3°</option>
       <option>4°</option>
       <option>5°</option>
       <option>6°</option>
     </select>
   </div>
   <div class="form-group col-md-3">
     <label required  for="inputState">Instituto de Origen</label>
     <select id="inputState" class="form-control" required >
       <option  selected>CBTis 199</option>
       <option >COBAEH Fco I. Madero </option>
       <option >CBTis 83</option>
       <option >CECYTEH Tetepango</option>
       <option >COBAEH Plantel Iturbe</option>
       <option >COBAEH Plantel Atengo</option>
       <option >CBTIs 218 Tlaxcoapan</option>
       <option >CETAC 02 Tezontepec</option>
       <option >CETIS 91 Nantzha Tula</option>
       <option >COBAEH plantel Tlahuelilpan</option>
       <option >Cetis 26 Atitalaquia</option>
     </select>
   </div>
 </div>
  
 <div class="form-row">
 
 <div class="form-group col-md-6">
     <label for="inputCity">Jugador 5 </label>
     <input type="text" class="form-control" id="Nombre5"  placeholder="Nombre Completo" required >
   </div>
   <div class="form-group col-md-3">
     <label required  for="inputState">Semestre</label>
     <select required  id="Semestre" class="form-control">
       <option selected>Semestre actual</option>
       <option>1°</option>
       <option>2°</option>
       <option>3°</option>
       <option>4°</option>
       <option>5°</option>
       <option>6°</option>

     </select>
   </div>
   <div class="form-group col-md-3">
     <label required  for="inputState">Instituto de Origen</label>
     <select  required id="inputState" class="form-control">
       <option selected>CBTis 199</option>
       <option >COBAEH Fco I. Madero </option>
       <option >CBTis 83</option>
       <option >CECYTEH Tetepango</option>
       <option >COBAEH Plantel Iturbe</option>
       <option >COBAEH Plantel Atengo</option>
       <option >CBTIs 218 Tlaxcoapan</option>
       <option >CETAC 02 Tezontepec</option>
       <option >CETIS 91 Nantzha Tula</option>
       <option >COBAEH plantel Tlahuelilpan</option>
       <option >Cetis 26 Atitalaquia</option>
     </select>
   </div>
 </div>

 <?php
 include_once 'paletaDeColores.php';
 ?>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>

   </div>