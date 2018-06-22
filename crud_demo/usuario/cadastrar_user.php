<?php 
	include("conectar.php");
	
	ini_set( 'display_errors' , 'On' );
	error_reporting( E_ALL | E_STRICT ); 
	
	// Recupera os dados dos campos
	
	$id    = (isset($_POST['id']) ? $_POST['id'] : "");
	$login = $_POST['login'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$foto = $_FILES['foto'];
	$tipo = (isset($_POST['tipo']) ? $_POST['tipo'] : "NORMAL");
	
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
			$caminho_imagem = "../../assets/imagens/usuario/" . $nome_imagem;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
			if($id == ""){
				$query = "insert into usuario(login,nome,senha,email,foto,tipo) values('$login','$nome','$senha','$email','$nome_imagem','$tipo')";
				}else{
				$query = "update usuario set login='$login',nome='$nome',senha='$senha',email='$email',foto='$nome_imagem', tipo='$tipo' where id=$id";
			}
		}
		}else{
		if($id == ""){
			$query = "insert into usuario(login,nome,senha,email,tipo) values('$login','$nome','$senha','$email','$tipo')";
			}else{
			$query = "update usuario set login='$login',nome='$nome',senha='$senha',email='$email', tipo='$tipo' where id=$id";
		}
	}
	mysql_query($query);
	// Se os dados forem inseridos com sucesso

	
	header("location:crud_demo_user.php");
	
?>