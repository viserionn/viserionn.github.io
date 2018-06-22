<?php
include("conectar.php");
if(isset($_GET['id'])){
$query = "select * from usuario where id=".$_GET['id'];

$resultQuery = mysql_query($query);
while($result = mysql_fetch_assoc($resultQuery)){
	$resultBanco[1] = $result['id'];
	$resultBanco[2] = utf8_encode($result['login']);
	$resultBanco[3] = utf8_encode($result['nome']);
	$resultBanco[4] = utf8_encode($result['senha']);
	$resultBanco[5] = utf8_encode($result['email']);
	$resultBanco[6] = utf8_encode($result['tipo']);
	if($resultBanco[6] == "ADMIN"){
		if(utf8_encode($result['foto']) != ""){
			$resultBanco[7] = utf8_encode($result['foto']);
		}else{
			$resultBanco[7] = "ADMIN.jpg";
		}	
	}else{
		if(utf8_encode($result['foto']) != ""){
			$resultBanco[7] = utf8_encode($result['foto']);
		}else{
			$resultBanco[7] = "USER.jpg";
		}
	}
}
$id = $resultBanco[1];
$login = utf8_decode($resultBanco[2]);
$nome = utf8_decode($resultBanco[3]);
$senha = utf8_decode($resultBanco[4]);
$email = utf8_decode($resultBanco[5]);
$tipo = utf8_decode($resultBanco[6]);
$foto = utf8_decode($resultBanco[7]);
$titulo = "ALTERANDO";
$titulo2 = "ALTERAR";
}else{
$id = "";
$login = "";
$nome = "";
$senha = "";
$email = "";
$tipo = "";
$foto = "";
$titulo = "CADASTRANDO";
$titulo2 = "CADASTRAR";
}

?>
<html>
	<head>
		<title>
			GUNSTORE
		</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="../../resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="../../resources/styles/own_index.css">
		<link rel="stylesheet" type="text/css" href="../../resources/styles/own_global.css">
	</head>
	<body>
		<div class=cabecalho>
			<div class=milcentoesetenta>
				<div class=usuario>
					<b>
						<?php

						session_start();
						if(isset($_SESSION['nome']) && $_SESSION['tipo'] == "ADMIN"){
							echo "<div class=saudacao>Olá ADMIN ".$_SESSION['nome'];
							echo "<img width=15 height=15 src='../../assets/imagens/usuario/".$_SESSION['foto']."'></div>";
							echo "<div class=logoff><a href='../../crud_demo.php' style='margin-right:25px;'>CRUD DEMO </a><a href='../../cadastro_form.php?id=".$_SESSION['id']."'>ALTERAR </a><a href='../../deslogar.php'> LOGOFF</a></div>"; 
						}else if(isset($_SESSION['nome'])){
							header("location:../../erro.php");
						}else{
							header("location:../../erro.php");
							exit();
						}
						
						?>
					</b>
				</div>
			</div>
		</div>
		<div class=principal>
			<div class=menuhorizontal>
				<div class="lateral lateral1"></div>
				<div class=botoespri>
					<div id=nomecadrastro>
						<b>
						<?php
							echo $titulo;
						?>
						</b>
						<a href=crud_demo_user.php>
							<button value=VOLTAR  id=enviar2 type=submit>VOLTAR</button>
						</a>
					</div>
				</div>
				<div class="lateral lateral2"></div>
			</div>
			<div id=quadrocadastro>
				<div id=coisa>
					<form action='cadastrar_user.php' method='post'  id="formID" enctype='multipart/form-data' name="f1">
						<div class=bmwlegal>ID:</div>
						<div class=legalbmw>
							<input name=id readonly value='<?php echo $id;?>'>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Login:</div>
						<div class=legalbmw>
							<input required name=login value='<?php echo $login;?>'>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Nome:</div>
						<div class=legalbmw>
							<input required name=nome value='<?php echo $nome;?>'>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Senha:</div>
						<div class=legalbmw id=nada>
							<input id=inputerro value='<?php echo $senha;?>' style="border-color:initial;" required name=senha>
						</div><br style="clear: both;">
						
						
						<div class=bmwlegal>Email:</div>
						<div class=legalbmw>
							<input required type=email name=email value='<?php echo $email;?>'>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Tipo: </div>
						<div class=legalbmw>
							<SELECT NAME="tipo" SIZE=1>
								<OPTION><?php echo $tipo;?>
								<OPTION>NORMAL
								<OPTION>ADMIN
							</SELECT>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Foto:</div>
						<div class=legalbmw>
						<?php
							echo "<img style='border-radius:100px;' width=50 height=50 src='../../assets/imagens/usuario/".$resultBanco[7]."'>";
							echo " &nbsp &nbsp";
							echo "<img width=50 height=50 src='../../assets/imagens/usuario/".$resultBanco[7]."'>";
						?>							<input id=inputerro type=file name=foto>
						</div><br style="clear: both;">
												
						<input type=submit value=<?php echo $titulo2;?> id=enviar2 onClick="validarSenha()">
						<a href=crud_demo_user.php>
							<button value=VOLTAR  id=enviar2 type=submit>CANCELAR</button>
						</a>						
					</form>
				</div>
			</div>
		</div>
		<div class=rodape>
			<h3>GUNSTORE</h3>
			<div class=contiudorodape>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="../../airsoft.php">
									Airsoft
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										Espingarda
									</li>
									<li>
										Metralhadora
									</li>
									<li>
										Pistola
									</li>
									<li>
										Rifle
									</li>
									<li>
										Lança Granada
									</li>
									<li>
										Revolver
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="../../arma_de_fogo.php">
									Arma de Fogo
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										Espingarda
									</li>
									<li>
										Metralhadora
									</li>
									<li>
										Pistola
									</li>
									<li>
										Rifle
									</li>
									<li>
										Lança Granada
									</li>
									<li>
										Revolver
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="../../arma_de_pressao.php">
									Arma de Pressão
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										Carabinas
									</li>
									<li>
										Gas Ram
									</li>
									<li>
										Mola
									</li>
									<li>
										Multipmp
									</li>
									<li>
										PCP
									</li>
									<li>
										Pistola
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="../../material_tatico.php">
									Material Tatico
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										Balacravas
									</li>
									<li>
										Bolsas Mochilas
									</li>
									<li>
										Chaveiros
									</li>
									<li>
										Cinto
									</li>
									<li>
										Coletes Capas
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="../../sobre.php">
									Sobre
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										GUNSTORE
									</li>
									<li>
										Endereço
									</li>
									<li>
										Contato
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<br style="clear: both;">
			</div>
		</div>
	</body>
</html>					