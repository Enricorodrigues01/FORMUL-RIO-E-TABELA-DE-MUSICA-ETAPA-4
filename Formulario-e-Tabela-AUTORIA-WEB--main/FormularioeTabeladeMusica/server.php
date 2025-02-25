<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tabela.css">
    <link rel="stylesheet" href="css/corpodapág.css">
    <script src="dinâmica.js" defer></script>
</head>
<body>
    <header>
        <h1>IMUSIC</h1>
    </header>
    <nav>
        <H2>SFDIAFISAIFNU</H2>
        <a href="file:///C:/Users/Cliente%20Office/Desktop/FormularioeTabeladeMusica/desnvolvedores.html"></a>
    </nav>
    <main >
        <br>
        <?php
        $nomeMusica = $_POST['nomeMusica'];
        $nomeAutor = $_POST['nomeAutor'];
        ?>
        
        <form action="server.php" method="post">
            <button onclick="produto.adicionar()">adicionar<button></button>
            
            <div> 
            <h5>Digite Uma Música da Sua Preferência</h5>
            <label for="msc">Música: </label>
            <input type="text" id="nomeMusicas" name="nomeMusicas">
            </div>
            
            <div>
            <h5>Qual o Autor dessa Música</h5>
            <label for="aut">Autor(a): </label>
            <input type="text" id="nomeAutor" name="nomeAutor">
            </div>

            <div class="Gravar">
            <label for="Gravar"></label>
            <input type="button" value="Sincronizar" id="btnGravar">
            </div>
        </form>
        <table class="table table-primary table-striped table-hover table-bordered table-group-divider">
            <h6>Exemplo de Tabela:</h6>
            <caption>Tabela de Músicas</caption>
            <thead>
                <tr>
                    <th><i class="fa fa-spotify"></i></th>
                    <th>Autores</th>
                    <th>Musicas</th>
                </tr>
            </thead>
            <tbody class="table-group-divider" id="tbody">
                <tr>
                    <th>1</th>
                    <td>Chico Buarque</td>
                    <td>João e Maria</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Jorge Vercílio</td>
                    <td>Final Feliz</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Djavan</td>
                    <td>Oceano</td>
                </tr>
                <tr>
                    <th>4</th>
                    <td>Grupo Menos é Mais</td>
                    <td>Vai me dando corda</td>
                </tr>
                <tr>
                    <th>5</th>
                    <td>Cazuza</td>
                    <td>Exagerado</td>
                </tr>
                <tr>
                    <th>6</th>
                    <td>Lulu Santos</td>
                    <td>Apenas mais uma de amor</td>
                </tr>
                <tr>
                    <th>7</th>
                    <td>Tim Maia</td>
                    <td>Acenda o Farol</td>
                </tr>
                <tr>
                    <th>8</th>
                    <td>Melim</td>
                    <td>Meu Abrigo</td>
                </tr>
                <tr>
                    <th>9</th>
                    <td>Tom Jobim</td>
                    <td>Garota de Ipanema</td>
                </tr>
                <tr>
                    <th>10</th>
                    <td>Alçeu Valença</td>
                    <td>Anunciação</td>
                </tr>
            </tbody>
            <tfoot class="table-group-divider">
                <tr>
                    <td colspan="3">Todos os direitos reservados &copy;</td>
                </tr>
            </tfoot> 
        </table>
    </main>
    <footer>
        <H2>NICUIXCVUYDSVUBYSDU</H2>
    </footer>
</body>
</html>