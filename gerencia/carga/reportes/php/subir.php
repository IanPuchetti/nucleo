<?php

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

	$target_path = "/srv/http/github/nucleo/carga/reportes/temporal/".$zipfilename;  // change this to the correct site path
	if(move_uploaded_file($source, $target_path)) {
		$zip = new ZipArchive();
		$x = $zip->open($target_path);
		if ($x === true) {
			for($i = 0; $i < $zip->numFiles; $i++) {
        		$filename = $zip->getNameIndex($i);
        		$explodedname= explode('-',$filename)[1];
        		$fileinfo = pathinfo($filename);
        		if (!file_exists("/srv/http/github/nucleo/archivos/reportes/".$explodedname)) {
        		$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
				$result = $mysqli->query("INSERT INTO reportes VALUES(NULL, '$explodedname', '/archivos/reportes/$explodedname/')");
				$mysqli->close();
   														mkdir("/srv/http/github/nucleo/archivos/reportes/".$explodedname, 0777, true);
														}
        		copy("zip://".$target_path."#".$filename, "/srv/http/github/nucleo/archivos/reportes/".$explodedname."/index.html");
				}                   
			$zip->close();
	
			unlink($target_path);
		}
		$message = "Los reportes se cargaron correctamente";
		echo '<script>alert('.$message.')</script>';
	} else {	
		$message = "Hubo un problema cargando los reportes.";
		echo '<script>alert('.$message.')</script>';
	}
}
echo $message;
?>
