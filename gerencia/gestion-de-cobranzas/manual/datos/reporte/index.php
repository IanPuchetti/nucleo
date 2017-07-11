<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../administracion/");
}else{
if($_SESSION['puesto']=='ger'){
header("Location: ../gerencia/");
}else{
if($_SESSION['puesto']=='sup'){
header("Location: ../supervision/");
}else{
if($_SESSION['puesto']=='gen'){
}else{
}
}
}
}
}
else{
header("Location: /");
}

echo "<script>var id_usuario = ".$_SESSION["id"]."</script>"
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
  <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
  <script src="/.js/angular-es.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

.drag{
  -webkit-app-region:drag;
  position:absolute;
  top:0px;
  right:20px;
  width:100%;
  height:20px;
}

.close{
  position:absolute;
  top:0px;
  right:0px;
  width:20px;
}

</style>
  </head>

  <body oncontextmenu="return false;" ng-app="gestion" ng-controller="manual">
<div class="noselect">
<span class="drag"></span><span class="close" onclick="quit=true;window.close()" ng-show="quit==true" ng-init="quit=true">×</span>
</div>
<div>
  <iframe frameborder="0" style="width:100%;height:100%;"></iframe>
</div>
<script>
var $_GET={};var url=document.URL.split("/")[2];document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g,function(){function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
$('iframe').attr('src',$_GET['u']); 
 document.addEventListener('dragover',function(event){
    event.preventDefault();
    return false;
  },false);

  document.addEventListener('drop',function(event){
    event.preventDefault();
    return false;
  },false);

</script>
</body>
</html>
