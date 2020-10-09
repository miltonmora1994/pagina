
<html>
<head>

<title>Ingreso de nuevo visitante</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
body {
	background-color: #666;
}
</style>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<h1>Nuevo usuario</h1>


<body>
<div id="TabbedPanels1" class="TabbedPanels">

  <ul class="TabbedPanelsTabGroup">
  
    <li class="TabbedPanelsTab" tabindex="0">Visitante</li>
    <li class="TabbedPanelsTab" tabindex="0">Estudiante</li>
    <li class="TabbedPanelsTab" tabindex="0">Funcionario</li>
  </ul>
  
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
    
    <label><br>
      Identificación<br>
    </label>
    <input name="Identificación" type="text" size="55">
    <p>
    <label>Nombres y apellidos<br>
    </label><input name="Nombres y apellidos" type="text" size="55">
    <p>
    <label>Celular<br>
    </label><input name="Celular" type="text" size="55">
    <p>
    <label>Direccion<br>
    </label><input name="Direccion" type="text" size="55">
    <p>
     <label>Email<br>
     </label><input name="Email" type="text" size="55">
    <p>    
    <p>
    <input name="guardar" type="button" value="Guardar">
    <input name="encuesta2" type="button" value="Realizar encuesta">
    </div>
    
    
    <div class="TabbedPanelsContent">
    <label><br>
      Identificación<br>
    </label>
    <input name="Identificación" type="text" value="" size="55">
    <p>
    <label>Nombres y apellidos<br>
    </label>
    <input name="Nombres y apellidos" type="text" value="" size="55">
    <p>
    <label>Celular<br>
    </label>
    <input name="Celular" type="text" value="" size="55">
    <p>
    <label>Direccion<br>
    </label>
    <input name="Direccion" type="text" value="" size="55">
    <p>
     <label>Email<br>
     </label>
     <input name="Email" type="text" value="" size="55">
      <p>
    <label>Celular<br>
    </label>
    <input name="Celular" type="text" value="" size="55">
    <p><span id="spryselect2">
    <label for="prog">Programa<br>
    </label>
        <select name="prog" id="prog">
          <option selected="selected"></option>
          <option>Ingenieria de sistemas</option>
          <option>Ingenieria Ambiental</option>
          <option>Administracion de empresas</option>
        </select>
        <span class="selectRequiredMsg">Seleccione un elemento.</span></span>
    
    <p><span id="spryselect2">
      <label for="facultad">Facultad<br>
      </label>
        <select name="facultad" id="facultad">
          <option>Facultad de ingenieria y ciencias basicas</option>
          <option>Facultad diseño</option>
        </select>
        <span class="selectRequiredMsg">Seleccione un elemento.</span></span>
       
    <p><span id="spryselect2">
      <label for="semestre">Semestre<br>
        </label>
      <select name="semestre" id="semestre">
        <option selected="selected">Primero</option>
        <option>Segundo</option>
        <option>Tercero</option>
        <option>Cuarto</option>
        <option>Quinto</option>
        <option>Sexto</option>
        <option>Septimo</option>
        <option>Octavo</option>
        <option>Noveno</option>
        <option>Decimo</option>
        </select>
      <span class="selectRequiredMsg">Seleccione un elemento.</span></span>
     
     <p>
       <input name="guardar" type="button" value="Guardar">
       
       <input name="encuesta" type="button" value="Realizar encuesta">
    </div>
    
    
    <div class="TabbedPanelsContent">
    <label><br>
      Identificación<br>
    </label>
    <input name="Identificación" type="text" size="55">
    <p>
    <label>Nombres y apellidos<br>
    </label>
    <input name="Nombres y apellidos" type="text" size="55">
    <p>
    <label>Celular<br>
    </label>
    <input name="Celular" type="text" size="55">
    <p>
    <label>Direccion<br>
    </label>
    <input name="Direccion" type="text" size="55">
    <p>
     <label>Email<br>
     </label>
     <input name="Email" type="text" size="55">
      <p>
    <label>Celular<br>
    </label>
    <input name="Celular" type="text" size="55">
      <p><span id="spryselect2">
      <label for="cargo">Cargo<br>
      </label>
        <select name="cargo" id="cargo">
          <option>Administrador financiero</option>
          <option>Secretaria</option>
          <option>Auxiliar</option>
          <option>Docente</option>
        </select>
        <span class="selectRequiredMsg">Seleccione un elemento.</span></span>
      
    <p><span id="spryselect2">
      <label for="dependencia">Dependencia o facultad<br>
      </label>
        <select name="dependencia" id="dependencia">
          <option>Area financiera</option>
          <option>Sistemas</option>
          <option>Bienestar universitario</option>
        </select>
        <span class="selectRequiredMsg">Seleccione un elemento.</span></span>
    <p>    
     <p>
       <input name="guardar" type="button" value="Guardar">
       <input name="encuesta3" type="button" value="Realizar encuesta">
    </div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
</script>
</body>
</html>