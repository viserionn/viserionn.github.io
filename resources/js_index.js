$( document ).ready(function() {
    $("#formID").submit(function(event){
		senha1 = document.f1.senha.value;
		senha2 = document.f1.senha1.value;
		if (senha1 != senha2){
			document.getElementById('inputerro').style.borderColor='red';
			document.getElementById('inputerro2').style.borderColor='red';
			event.preventDefault();
		}else{
			document.getElementById('inputerro').style.borderColor='initial';
			document.getElementById('inputerro2').style.borderColor='initial';
		}
	});
});