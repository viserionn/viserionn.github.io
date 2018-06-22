<?php 
	include("conectar.php");
	
	ini_set( 'display_errors' , 'On' );
	error_reporting( E_ALL | E_STRICT ); 
	
	// Recupera os dados dos campos
	
	$id    = (isset($_POST['id']) ? $_POST['id'] : "");
	$id_descricao    = (isset($_POST['id_descricao']) ? $_POST['id_descricao'] : 1);
	$tipo = $_POST['tipo'];
	$modelo = $_POST['modelo'];
	$foto = $_FILES['foto'];
	$preco = $_POST['preco'];
	$error = false;
	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		// Verifica se o arquivo é uma imagem
		if( !preg_match( '/^image\/(jpeg|jpeg|png|gif|bmp)$/' , $foto[ 'type' ] ) ){
			//Isso não é uma imagem.
			$error = true;
		} 
		// Se não houver nenhum erro
		if (!$error) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
			// Gera um nome único para a imagem
			$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
			// Caminho de onde ficará a imagem
			$caminho_imagem = "../../assets/imagens/produto/" . $nome_imagem;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
			if($id == ""){
				$query = "insert into produto(id_descricao,tipo,modelo,foto,preco) values('$id_descricao','$tipo','$modelo','$nome_imagem','$preco')";
				echo $query;
				}else{
				$query = "update produto set id_descricao='$id_descricao',tipo='$tipo',modelo='$modelo',foto='$nome_imagem',preco='$preco' where id=$id";
				echo $query;
			}
		}
		}else{
		if($id == ""){
			$query = "insert into produto(id_descricao,tipo,modelo,preco) values('$id_descricao','$tipo','$modelo','$preco')";
			echo $query;
			}else{
			$query = "update produto set id_descricao='$id_descricao',tipo='$tipo',modelo='$modelo',preco='$preco' where id=$id";
			echo $query;
		}
	}
	mysql_query($query);
	// Se os dados forem inseridos com sucesso
header("location:crud_demo_produto.php");
?>