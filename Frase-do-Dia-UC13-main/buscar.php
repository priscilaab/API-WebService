<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Buscar Frases</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>
    <div class="container">
        <h1>Buscar Frases</h1>
        <hr>
        <form id="formbusca">
            <div class="form-group">
                <label for="filme">Filme:</label>
                <input type="text" class="form-control" id="filme" name="filme">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
        <hr>
        <h3>Resultado da Busca:</h3>
        <table class="table table-striped">
            <tr>
                <th>Frase</th>
                <th>Filme</th>
                <th>Ano</th>
            </tr>
            <tbody id="corpo_tabela">
                <tr>
                    <td>Frase 1</td>
                    <td>Filme</td>
                    <td>1995</td>
                </tr>
            </tbody>
        </table>
        <hr>

        <div class="row">
            <div class="col-sm-6 text-center">
                <a href="index.php" class="btn btn-primary">Início</a>
            </div>
            <div class="col-sm-6 text-center">
                <a href="todas_frases.php" class="btn btn-primary">Todas as Frases</a>
            </div>
        </div>

    </div>
    <script>
      function buscarFrase(){
            // evitar que o form seja "enviado":
            event.preventDefault();
            //obter o nome do filme digitado no imput
            const nomefilme = filme.value;
            const url = "endpoints/buscar.php?q=" + nomefilme;
            fetch(url).then((resposta) => {
                return resposta.json();
            }).then((resposta) => {
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

        // Adicionar o onsubmit no form:
        formbusca.addEventListener('submit', buscarFrase);
        </script>
</body>

</html>