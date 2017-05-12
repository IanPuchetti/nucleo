
<?php
session_start();
if(isset($_SESSION['user'])){

}
else{
header("Location: ../../");
}

?>

<html lang="es">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/icon.png">
	<title>Nucleo</title>
	<link rel="stylesheet" href="/.css/bootstrap.min.css"/>
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>

<style>
.navbar-static-top{
margin-top:-40px;
}

a{
cursor:pointer;
color:#b00;
}

a:hover{
color:#700;
}

</style>


  </head>

  <body>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/inicio">Inicio</a></li>     
        
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/carga/comparacion">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/supervision/carga/masiva">Masiva</a></li>
                  <li><a tabindex="-1" href="/supervision/carga/manual">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación Masiva</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/supervision/modificacion/productos">Productos</a></li>
                  <li><a tabindex="-1" href="/supervision/modificacion/deudores">Deudores</a></li>
                </ul>
              </li>
              <li><a class="ventana" href="/gerencia/baja/">Cambio de Estado</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/supervision/carga/enriquecer">Telefonos / Emails</a></li>
                  <li><a href="/supervision/carga/reportes">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Gestión de Cobranzas<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/gestion-de-cobranzas/manual">Manual</a></li>
              <li><a href="/supervision/gestion-de-cobranzas/campania">Campaña</a></li>
              <li><a href="#">Automática</a></li>  
              <li><a href="/supervision/gestion-de-cobranzas/consultas">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Cargar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/supervision/carga/gestiones-automaticas">Gestiones Automáticas</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Exporte<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/exportar/casos">Casos</a></li>
              <li><a href="/supervision/exportar/telefonos">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/supervision/exportar/sms">SMS</a></li>
                  <li><a tabindex="-1" href="/supervision/exportar/mails">Mails</a></li>
                  <li><a tabindex="-1" href="/supervision/exportar/mails">IVR</a></li>
                </ul>
              </li>
            </ul>
        </li>
      <ul class="nav navbar-nav navbar-right">
        <li id="logout"><a href="/.php/logout.php"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
<form enctype="multipart/form-data" method="post" action="." >
<label onclick=$("#subir").css("display","block")>Elegí el archivo .zip que contenga los reportes.<label class="btn btn-warning">Elegir <input type="file" name="zip_file" id="zip_file" class="button" style="display:none;"></label></label>
<br>
<label class="alert alert-danger"><h4>ATENCIÓN</h4>Debe asegurarse que todos los archivos tengan el formato *numero de cuil*.html</label>
<input type="submit" class="btn btn-danger" id="subir" style="display:none;" value="Subir"></button>
</form>
<script>
var date= new Date();
var hoy= date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();

</script>
<?php 
$hoy= '<script> document.write(hoy);</script>';

if($_FILES["zip_file"]["tmp_name"]) {
	$zipfilename = $_FILES["zip_file"]["name"];
	$source = $_FILES["zip_file"]["tmp_name"];
	$type = $_FILES["zip_file"]["type"];
	
	$name = explode(".", $zipfilename);
	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
	foreach($accepted_types as $mime_type) {
		if($mime_type == $type) {
			$okay = true;
			break;
		} 
	}
	
	$continue = strtolower($name[1]) == 'zip' ? true : false;
	if(!$continue) {
		$message = "The file you are trying to upload is not a .zip file. Please try again.";
	}

	$target_path = "/srv/nucleo/general/carga/reportes/temporal/".$zipfilename;  // change this to the correct site path
	if(move_uploaded_file($source, $target_path)) {
		$zip = new ZipArchive();
		$x = $zip->open($target_path);
		if ($x === true) {
			for($i = 0; $i < $zip->numFiles; $i++) {
        		$filename = $zip->getNameIndex($i);
        		$explodedname= explode('-',$filename)[1];
        		$fileinfo = pathinfo($filename);
        		if (!file_exists("/srv/nucleo/archivos/reportes/".$explodedname)) {
        			$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
					$result = $mysqli->query("INSERT INTO reportes VALUES(NULL, '$explodedname', '/archivos/reportes/$explodedname/', '$hoy')");
					$mysqli->close();
   					mkdir("/srv/nucleo/archivos/reportes/".$explodedname, 0777, true);
														}
        		copy("zip://".$target_path."#".$filename, "/srv/nucleo/archivos/reportes/".$explodedname."/index.html");
				}
			$zip->close();
	
			unlink($target_path);
		}
		$message = "Los reportes se cargaron correctamente";
		echo $message;
	} else {	
		$message = "Hubo un problema cargando los reportes.";
		echo $message;
	}
}
?>
  </body>
</html>
