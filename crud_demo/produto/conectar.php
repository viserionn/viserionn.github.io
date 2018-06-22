<?php
	$host = "localhost";
	$user = "u813625198_jefe";
	$passwd = "acessivelparaal";
	$base = "u813625198_guns";
	$conexao = @mysql_connect($host,$user, $passwd);

if (!$conexao) {
	$mensagem = "Nao foi possivel estabelecer a conexao";
	echo $mensagem . "<hr>";
	die(mysql_error());
	}
	
$db = mysql_select_db($base,$conexao);



if (!$db) {
 	$mensagem = "Nao foi possivel encontrar o banco de dados";
	echo $mensagem . "<hr>";
	die(mysql_error());
	}
?> 