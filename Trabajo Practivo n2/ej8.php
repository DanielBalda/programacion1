<?php

/* Verificacion Checkboxs */

for ($a = 1 ;$a < 4 ;$a++){
    if (isset($_GET['check'.$a])){
        $_GET['check'.$a]='checked';
    }else{
        $_GET['check'.$a]='1';
    }
}

if (empty($_GET['radio1'])) {
    echo "No selecciono ningun elemento<br>";
}else{
    echo $_GET['radio1']."<br>";
}
    echo "<div><label for='texto1'>Texto 1:</label>
            <input type='text' id='texto1' name='texto1' value='" . $_GET['texto1'] . "'>
          </div><br>
          <div><label for='texto2'>Texto 2:</label>
           <input type='text' id='texto2' name='texto2' value='" . $_GET['texto2'] . "'>
          </div><br> 
            <input type='hidden' name='oculto' value='" . $_GET['oculto'] . "'>
          <div><label for='password'>Contrasena:</label>  
            <input type='password' id='password' name='clave' value='" . $_GET['clave'] . "'>
          </div><br>
          <div><label for='checks'>Selecione:</label>
            <input type='checkbox' id='checks' name='check1' " . $_GET['check1'] . ">
            <input type='checkbox' name='check2' " . $_GET['check2'] . ">
            <input type='checkbox' name='check3' " . $_GET['check3'] . ">
          </div>
          <div><label for='grupo1'>Grupo 1:</label><br>
              <fieldset id='grupo1' name='grupo1'>
                  <input type='radio' name='radio1' value='1'><br>
                  <input type='radio' name='radio1' value='2'><br>
                  <input type='radio' name='radio1' value='3'>
              </fieldset>
          </div><br>
          <div><label for='grupo2'>Grupo 2:</label><br>
              <fieldset id='grupo2' name='grupo2'>
                  <input type='radio' name='radio2' value='1'><br>
                  <input type='radio' name='radio2' value='2'><br>
                  <input type='radio' name='radio2' value='3'>
              </fieldset>
          </div><br>
          <div><label for='lista'>Lista: </label>
              <select name='lista' id='lista' >
                  <option name='opcion1' >Opcion 1</option>
                  <option name='opcion2' >Opcion 2</option>
                  <option name='opcion3' >Opcion 3</option>
                  <option name='opcion4' >Opcion 4</option>
              </select>
          </div><br>
        ";
?>

<form action="ej8.html">
    <input type="submit" name="volver" value="Volver">
</form>
