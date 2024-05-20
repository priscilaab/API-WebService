<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Todas as Frases - Filmes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-3">
		<h1 class="mb-3">Todas as Frases - Filmes</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Frase</th>
					<th>Filme</th>
					<th>Ano</th>
				</tr>
			</thead>
			<tbody id="corpo_tabela">
					<tr>
					<td>Frase 1</td>
					<td>Filme</td>
					<td>1995</td>
					</tr>
			</tbody>
		</table>
		<div class="row">
            <div class="col-sm-6 text-center">
                <a href="index.php" class="btn btn-primary">Início</a>
            </div>
            <div class="col-sm-6 text-center">
                <a href="buscar.php" class="btn btn-primary" id="novafrase">Buscar</a>
            </div>
        </div>
	</div>
	<script>
		function obterFrase(){
			const url = "endpoints/listar.php";
			fetch(url).then((resposta) =>{
				return resposta.json();
			}).then((resposta)=>{
				
					console.log(resposta);
				// Apagar tudo de dentro da tabela:
				corpo_tabela.innerHTML = "";
				// Percorrer o array:
				for(const cont in resposta){
					corpo_tabela.innerHTML += `
					<tr>
						<td>${resposta[cont].frase}</td>
						<td>${resposta[cont].filme}</td>
						<td>${resposta[cont].ano}</td>
					</tr>
					`;
				}
			})
		} 
		document.addEventListener('DOMContentLoaded', obterFrase);     
    </script>
</body>
</html>