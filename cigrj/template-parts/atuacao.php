
<div class="atuacao">
<div class="container container-2">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<style><?php include 'calculadora-imc-style.css'; ?></style>

<script>
	$(document).ready(function() {
		$("#calcular").click(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				success: function() {
					var classificacao = "";
					var peso          = $('#peso').val();
					var altura        = $('#altura').val();

					altura = altura.replace(",", ".");
					
  					if (peso == '' || peso <= 0 || /[a-zA-Z]/.test(peso)) {
  						alert('Peso inválido. Verifique!');
  					} else if (altura == '' || altura <= 0 || /[a-zA-Z]/.test(altura) || !altura.includes(".")) {
  						alert('Altura inválida. Verifique!');
					} else {
						var imc = peso / ((altura) * (altura));
						if (imc < 16) {
							classificacao = "Baixo peso muito grave";
							cor = "#000000";
						} else if (imc >= 16 && imc <= 16.99) {
							cor = "#003300";
							classificacao = "Baixo peso grave";
						} else if (imc >= 17 && imc <= 18.49) {
							classificacao = "Baixo peso";
							cor = "#006600";
						} else if (imc >= 18.5 && imc <= 24.99) {
							classificacao = "Peso normal";
							cor = "#00CC00"
						} else if (imc >= 25 && imc <= 29.99) {
							classificacao = "Sobrepeso";
							cor = "#FFCC00";
						} else if (imc >= 30 && imc <= 34.99) {
							classificacao = "Obesidade grau I";
							cor = "#FF9900";
						} else if (imc >= 35 && imc <= 39.99) {
							classificacao = "Obesidade grau II";
							cor = "#FF3300";
						} else if (imc >= 40) {
							classificacao = "Obesidade grau III (obesidade mórbida)";
							cor = "#FF0000";
						}
						document.querySelector("[name='imc_label']").innerHTML     = "IMC:   ";
						document.querySelector("[name='imc']").innerHTML           = Math.round(imc) + " - ";
						document.querySelector("[name='imc']").style.color         = cor;
						document.querySelector("[id='classificacao']").innerHTML   = classificacao;
						document.querySelector("[id='classificacao']").style.color = cor;
					}
				}
			})
		})
	});
</script>


<div class="corpo">
	<form class="form_imc" action="" method="post" id="form_imc">

		<div class="titulo col-xs-12 col-sm-2">
			Calcule seu IMC
		</div>
		<div class="peso col-xs-12 col-sm-3">
			Peso: <input type="text" name="peso" id="peso" placeholder="Ex: 88">
		</div>
		<div class="altura col-xs-12 col-sm-3">
			Altura: <input type="text" name="altura" id="altura" placeholder="Ex: 1,83">
		</div>
		<div class="sexo col-xs-12 col-sm-3">
		<div class="f col-xs-12 col-sm-6"><input type="radio" name="citizenship" /> Feminino</div>
		<div class="m col-xs-12 col-sm-6"><input type="radio" name="citizenship" /> Masculino</div>
		</div>
		<input class="btn_calcular col-xs-12 col-sm-1" type="submit" id="calcular" name="calcular" value="OK">
		
	</form>

	<div class="resultado col-xs-12 col-sm-12">
		<label class="imc_label" type="text" name="imc_label"></label>
		<label class="imc" type="text" name="imc" id="imc" value=""></label>
		<label class="classificacao" id="classificacao" ></label>
	</div>
</div>
</div>
</div>

