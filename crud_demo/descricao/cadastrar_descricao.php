<?php 
	include("conectar.php");
	
	ini_set( 'display_errors' , 'On' );
	error_reporting( E_ALL | E_STRICT ); 
	
	// Recupera os dados dos campos
	
	$id    = (isset($_POST['id']) ? $_POST['id'] : "");
	$texto = $_POST['texto'];
	
	$error = false;
	
	if($id == ""){
		$query = "insert into descricao(texto) values('$texto')";
		}else{
		$query = "update descricao set texto='$texto' where id=$id";
	}
	mysql_query($query);
// Se os dados forem inseridos com sucesso

	
header("location:crud_demo_descricao.php");
?>