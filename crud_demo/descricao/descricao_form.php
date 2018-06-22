<?php
include("conectar.php");
if(isset($_GET['id'])){
$query = "select * from descricao where id=".$_GET['id'];

$resultQuery = mysql_query($query);
while($result = mysql_fetch_assoc($resultQuery)){
	$resultBanco[1] = $result['id'];
	$resultBanco[2] = utf8_encode($result['texto']);
}
$id = $resultBanco[1];
$texto = utf8_decode($resultBanco[2]);
$titulo = "ALTERANDO";
$titulo2 = "ALTERAR";
}else{
$id = "";
$texto = "";
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
						<a href=crud_demo_descricao.php>
							<button value=VOLTAR  id=enviar2 type=submit>VOLTAR</button>
						</a>
					</div>
				</div>
				<div class="lateral lateral2"></div>
			</div>
			<div id=quadrocadastro>
				<div id=coisa>
					<form action='cadastrar_descricao.php' method='post'  id="formID" enctype='multipart/form-data' name="f1">
						<div class=bmwlegal>ID:</div>
						<div class=legalbmw>
							<input name=id readonly value='<?php echo $id;?>'>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>texto:</div>
						<div class=legalbmw>
							<input required name=texto value='<?php echo $texto;?>'>
						</div><br style="clear: both;">
												
						<input type=submit value=<?php echo $titulo2;?> id=enviar2 onClick="validarSenha()">
						<a href=crud_demo_descricao.php>
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