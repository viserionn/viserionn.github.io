<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>OLA-VELOCIDADE</title>
  </head>
  <body>
  	<div id="deuruim" style="width: 1235px; height: 477px; background-color: red;">
  		<div>
  			<marquee scrolldelay="3" truespeed="">Olá VELOCIDADE!</marquee>
	  	</div>
	  	<div>
	  		<input type="color" name="XABLAU">
	  	</div>
	  	<div>
	  		<select>
	  			<option value="1">
	  				1
	  			</option>
	  			<option value="2">
	  				2
	  			</option>
	  			<input type="text" readonly value="valorja definido neh" name="">
	  		</select>
	  		<textarea>é</textarea>
	  		<br>
	  		<b>PERGUNTA</b>
	  		<br>
	  		<input type="radio" disabled name="questão">opção1
	  		<input type="radio" name="questão">opção11
	  		<input type="radio" name="questão">opção111
	  		<input type="radio" name="questão">opção1111
	  		<br>
	  		<b>PERGUNTA2</b>
	  		<br>
	  		<input type="checkbox" name="questão2">opção1
	  		<input type="checkbox" name="questão2">opção11
	  		<input type="checkbox" name="questão2">opção111
	  		<input type="checkbox" name="questão2">opção1111
	  		<br>
	  		<button>butão sem verbo</button>
	  		<a href="#" target="_blank">link</a>
	  	</div>
	  	<br>
	  	<button onclick="truco()">pink</button>
	  	<button onclick="truco2()">red</button>
	  	<br>
	  	<br>
	  	<b>
	  		DIITE O SEU NOME NO QUADRADINHO AI
	  	</b>
	  	<br>
	  	<input onkeyup="imprimir()" type="text" id="nomedele" placeholder="É ESSE É O QUADRADRADINHO" style="width: 300px; height: 300px; border-color: red;" name="">
	  	<br>
	  	<div id="omprensa">
	  		
	  	</div>
	  	<button type="button" onclick="imprimir()">ADBlock Detected</button>
	  	<script type="text/javascript">
	  		function imprimir(){
	  			var nomedelevalor = document.getElementById('nomedele');
	  			var oto = document.getElementById('omprensa');
	  			omprensa.innerHTML = nomedelevalor.value;
	  			document.getElementById('nomedele').style.borderColor='green';
	  			document.getElementById('omprensa').interHTML = nomedelevalor.value;
	  		};
	  		function truco(){
	  			document.getElementById('deuruim').style.background='green';
	  		};
	  		function truco2(){
	  			document.getElementById('deuruim').style.background='pink';
	  		};
	  	</script>
  	</div>
   </head>
  <body> <marquee scrolldelay='1' truespeed=''>Olá VELOCIDADE!</marquee>
  </body>
</html>
