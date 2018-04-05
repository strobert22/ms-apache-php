<?php
	//includes de models o classes
include 'models/Connection.class.php';
include 'models/Clase.class.php';
include 'models/funciones.php';

/*inicializando result object*/
$result['success']=false;
$result['message']='Invalid Request';
$result['data']=null;


	$request=$_POST;
	/*if(isset($request['data'])){
		foreach ($request['data'] as $key => $value) {
			$request['data'][$key]=strip_all($value); // Elimina chars especiales y tags htmls
		}			
	}*/

	if(isset($request['data'])){
		$clase = new Clase();
		$result=$clase->GetDatos($request['data']);


	}else{
		$result['message']='Invalid Request: no input';

	}

		

	echo json_encode($result); // devuelve el reusltado en json

?>