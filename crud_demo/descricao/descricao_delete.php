<?php 
include("conectar.php");

$id = $_GET['id'];

$query = "DELETE FROM descricao WHERE ID=$id";

mysql_query($query);
header("location:crud_demo_descricao.php");
?>