<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remnants of Time Travel</title>
    <link rel="icon" type="imagem/png" href="assets/favicon.png" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="assets/styles/global.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/result.css">
    
</head>
<body>
   <?php require 'processa.php';
   include_once 'GerenteBD.php';
   echo "<link rel=”stylesheet” type=”text/css” href=”assets/styles/result.css” />"
   ?>
        <div class="container">
        <header>
            <img src="assets/logo.png" class="logo" alt="Logo RTT">
            <a href="index.php">
                <img src="assets/icons/arrow-left.svg" alt="">
                VOLTAR
            </a>
        </header>
            
          <div class="cards">
              <?php             
                while($linha = $resultadoKwTpPt->fetchAll()){
                    foreach ($linha as $linha) {
              ?>
            <div class="card">
                <div class="left">
                <img src="<?php echo $linha['imagem']?>" alt=""/>    
                </div>
                
                <div class="right">
                    <h3><?php echo $linha['nome_programa'];?></h3>
                        <div class="texts">
                            <div class="left">
                                <p><?php echo "<b>Ano de lançamento:</b> ".$linha['ano_lançamento'];?></p>    
                               <p><?php echo "<b>Plataforma(s):</b> ";
                                        $plat1 = $linha['nome_plataforma1'];
                                        $plat2 = $linha['nome_plataforma2'];
                                        if ($plat1 == 'Netflix' || $plat2 == 'Netflix'){?>
                                         <a href="https://www.netflix.com/browse">Netflix</a>
                                         <?php
                                        }
                                         if ($plat1 == 'Amazon Prime' || $plat2 == 'Amazon Prime'){?>
                                        <a href="https://www.primevideo.com">Amazon Prime</a>     
                                         <?php
                                        }
                                        if ($plat1 == 'Crunchyroll' || $plat2 == 'Crunchyroll'){?>
                                        <a href="https://www.crunchyroll.com/">Crunchyroll</a>     
                                         <?php
                                        }
                                        if ($plat1 == 'Youtube' || $plat2 == 'Youtube'){?>
                                        <a href="https://www.youtube.com/">Youtube</a>     
                                        <?php
                                        }
                                        if ($plat1 == 'Google Play Filmes' || $plat2 == 'Google Play Filmes'){?>
                                        <a href="https://www.play.google.com/filmes">Google Play Filmes</a>   
                                         <?php }    
                                        if ($plat1 == 'HBO Go' || $plat2 == 'HBO Go'){?>
                                        <a href="https://hbogo.com.br/">HBO Go</a>   
                                         <?php }?></p>   
                                <p><?php echo "<b>Elenco:</b> ".$linha['atores'];?></p>
                                <p><?php echo "<b>Tipo de viagem:</b> ".$linha['tipo_viagem'];?></p>
                            </div>
                            <div class="right">
                                 <p><?php echo "<b>Características:</b> ".$linha['características_especiais'];?></p>
                                 <p><?php echo "<b>Mecanismo:</b> ".$linha['mecanismo'];?></p>
                                 <p><?php echo "<b>Cena:</b> ".$linha['cena_viagem'];?></p>
                                 <p><?php echo "<b>Frase:</b> ".$linha['frase']."";?></p>
                                
                             </div>
                         </div>
                 </div>
             </div>     
                <?php
                    }                       
                    }
                    ?>
                </div>
            </div>
                        
          
        
                         
                         
                         
        </div>
        <img class="bg" src="assets/background-start.png" alt="">
    </div>
    
</body>
</html>  
          
       

