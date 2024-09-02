
<!DOCTYPE html>
<html lang="pt-BR">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTANTE WEB</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <div class="logo-busca">
            <h1>Estante Web</h1>
         
                <form id="form_busca" method="get" action="index.php">
                    <input type="text" name="PESQUISA" id="busca" placeholder="Digite o nome do livro">
                    <button type="submit" id="btn_lupa">
                        <img src="imgs/procurar.png"  width="20px" height="20px" alt="buscar" id="icon">
                    </button>
        </form>
    
        </div>
     
    </header>
     <nav>
<a href="index.php">inicio</a>
<a href="./views/quem_somos.php">Quem Somos</a>
<a href="./views/contatos.php">Contato</a>
<a href="./views/favoritos.php" ><img   class="alinhar" src="./imgs/star.png.png" height="25px" width="25px"   alt="">favoritos</a>
<a href="./views/login.php" class="alinhar"> <img src="./imgs/usuario-de-perfil.png" alt="">Olá, usuário</a>
        </nav>
    <MAIN id="index">

    </MAIN>
    <footer>
<div id="copy">
    &copy;Estante web
</div>
<div>
    todos os direitos reservados
</div>

<div class="rede_social">
    <img src="./img/instagram.svg" alt="" width="30px"
    height="30">
    <img src="./img/facebook.svg" alt="" width="30px" height="30">
</div>
    </footer>
    
</body>
</html>