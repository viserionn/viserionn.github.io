<?php
include("conectar.php");
$query = "select * from descricao";
$resultQuery = mysql_query($query);
?>
<html>
	<head>
		<title>
			GUNSTORE
		</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="../../resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="../../resources/styles/own_crud_demo.css">
		<link rel="stylesheet" type="text/css" href="../../resources/styles/own_global.css">
	</head>
	<body>
		<div class=cabecalho title=cabeçalho>
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
					<a href="../../home.php">
						<div class=botipo1>
							HOME
						</div>
					</a>
					<a href="../../airsoft.php">
						<div class=botipo1>
							AIRSOFT
						</div>
					</a>
					<a href="../../arma_de_fogo.php">
						<div class=botipo1>
							ARMA DE FOGO
						</div>
					</a>
					<a href="../../arma_de_precao.php">
						<div class=botipo1>
							ARMA DE Pressão
						</div>
					</a>
					<a href="../../material_tatico.php">
						<div class=botipo1>
							MATERIAL TATICO
						</div>
					</a>
					<a href="../../sobre.php">
						<div class=botipo1>
							SOBRE
						</div>
					</a>
				</div>
				<div class="lateral lateral2"></div>
			</div>
			<section id=sectionhtml5>
				<h1>
					<center><font color=white face=impact>CRUD DEMO</font></center>	
				</h1>
				<div class=table>
					<div class=tablename>
						DESCRIÇÃO
					</div>
					<div class=javabuto>
						<a href="../../crud_demo.php">
							<div class=tableclose>
								BACK 
							</div>
						</a>
						<br style="clear: both;">
					</div>
					<br style="clear: both;">
					<div id="usereditonclick">
						<table class=tamtable>
							<tr>
								<th>
									ID(int)
								</th>
								<th>
									texto (varchar(666))
								</th>
								<th></th>
							</tr>
							<tr class=diminuiroinput>	
								<form action=cadastrar_descricao.php method=post enctype='multipart/form-data'>
									<td>
										Auto
									</td>
									<td>
										<input required type=text style="width: 928px;" name=texto>
									</td>
									<td>
										<input type=submit value=ADD class=tableview>
									</td>
								</form>
							</tr>
							<?php 
										while($result = mysql_fetch_assoc($resultQuery)){
											$resultBanco[1] = $result['id'];
											$resultBanco[2] = utf8_encode($result['texto']);
											
									?>
									<tr class=imparoupar>
										<td>
										<?php
											echo $resultBanco[1]; 
										?>
										</td>
										<td>
										<?php
											echo $resultBanco[2]; 
										?>
										</td>
									<?php
													echo "<td>";
												echo "<a href='descricao_form.php?id=$resultBanco[1]'><div class=tableedit >Editar</div></a>";
											echo "<a href='descricao_delete.php?id=$resultBanco[1]'><div class=tableedit >Excluir</div></a>";
										echo "</td>";
									echo "</tr>";
								}
							?>
						</table>
						<br style="clear: both;">
					</div>
				</div>
			</section>
		</div>
		<div id=rodape>
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
					</table>
				</div>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="../../arma_de_precao.php">
									Arma de Pressão
								</a>
							</th>
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
					</table>
				</div>
				<br style="clear: both;">
			</div>
			</section>
		</div>
	</body>
</html>