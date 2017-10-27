<?php 
  include_once("class/class.persona.php");
  include_once("interfaces/interface.datos.php");
  include_once("class/class.empleado.php");
  include_once("class/class.cliente.php");
  
//  echo circulo::PI . " otra vez</br>";
  
  function define_persona($post){
    switch($post['tipo']){
      case "cli": $fig = new cliente($post['nom'],$post['ape'],$post['nac'],$post['gen'], $post['etn'],$post['dir'],$post['tel'],$post['mov'], $post['ema'], $post['idc'], $post['fcl']);break;
      case "emp": $fig = new empleado($post['nom'],$post['ape'],$post['nac'],$post['gen'], $post['etn'],$post['dir'],$post['tel'],$post['mov'], $post['ema'], $post['ide'], $post['fin'], $post['car'], $post['dep']);break;
    }
    return $fig;
  }
  
  function muestra($obj){
  	$obj->CalculaTiempo();
    echo $obj->PresentaDatos();
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Personas de una institucion</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script type="text/javascript">
	  function bloquea(tipo){
	    if(tipo.value == "cli"){
	      document.persona.ide.disabled = true;
	      document.persona.fin.disabled = true;
	      document.persona.car.disabled = true;
	      document.persona.dep.disabled = true;
	      document.persona.idc.disabled = false;
	      document.persona.fcl.disabled = false;
	    }else if(tipo.value == "emp"){
	      document.persona.ide.disabled = false;
	      document.persona.fin.disabled = false;
	      document.persona.car.disabled = false;
	      document.persona.dep.disabled = false;
	      document.persona.idc.disabled = true;
	      document.persona.fcl.disabled = true;
	  }
	}
	  
  function valida(form){
      if(/^[0-9]+([.][0-9]+)?$/.test(form.nom.value)){
	        alert("Nombre no puede tener números");
	        return false;
	      }
      if(/^[0-9]+([.][0-9]+)?$/.test(form.ape.value)){
	        alert("Apellido no puede tener números");
	        return false;
	      }
      if(!/^[0-9]+([.][0-9]+)?$/.test(form.tel.value)){
	        alert("Telefono solo debe tener números");
	        return false;
	      }
      if(!/^[0-9]+([.][0-9]+)?$/.test(form.mov.value)){
	        alert("Movil solo debe tener números");
	        return false;
	      }

    if(form.tipo.value == "cli"){
	      if(!/^[0-9]+([.][0-9]+)?$/.test(form.idc.value)){
	        alert("ID cliente solo debe tener números");
	        return false;
	      }
	    }else if(form.tipo.value == "emp"){
	     if(!/^[0-9]+([.][0-9]+)?$/.test(form.ide.value)){
	        alert("ID empleado solo debe tener números");
	        return false;
	      }
	    }
    return true;
  };
	</script>
</head>

<body>
    <?php
      if(isset($_POST['muestra'])){
        $fig = define_persona($_POST);
        muestra($fig);
      }else{
        echo empleado::show_get_form();
      }
	  ?>
</body>

</html>
 