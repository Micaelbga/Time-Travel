<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remnants of Time Travel</title>
    <link rel="icon" type="imagem/png" href="assets/favicon.png" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Ubuntu:wght@400;700&display=swap">
    
    <link rel="stylesheet" type="text/css" href="assets/styles/global.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/start.css">
</head>
<body>
   <?php
   echo "<link rel=”stylesheet” type=”text/css” href=”assets/styles/start.css” />";
   ?>
    <div class="container">
        <div class="apresentation">
            <img src="assets/logo.png" alt="Logo RTT">
        </div>
        <form class="search" method="get" action="pesquisar.php">
            <input type="" placeholder="Insira palavras relacionadas" name="keyword">
            <select name="platform" id="platform">
                <option value="" hidden>Selecione a plataforma</option>
                <option value="Netflix">NETFLIX</option>
                <option value="Amazon Prime">Amazon Prime Video</option>
                <option value="Crunchyroll">Crunchyroll</option>
                <option value="Google Play Filmes">Google Play Filmes</option>
                <option value="Youtube">Youtube</option>
                <option value="HBO Go">HBO Go</option>
            </select>

            <select name="type" id="type">
                <option value="" hidden>Tipo de viagem no tempo</option>
                <option value="fisica">Volta física</option>
                <option value="consciencia">Volta pela consciência</option>
                <option value="alternativa">Volta por linha alternativa</option>
                <option value="loop">Loops infinitos</option>
                <option value="aceleracao">Aceleração do tempo a frente</option>
            </select>
            <button name="enviar" type="submit">
                <span>
                    <img src="assets/icons/search.svg" alt="">
                </span>
                FAZER PESQUISA
            </button>
        </form>
        <img class="bg" src="assets/background-start.png" alt="">
    </div>
</body>
</html>