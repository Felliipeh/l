<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante Web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/quem_somos.css">

</head>

<body>
  
<header>
        <div class="logo-busca">
            <h1>Estante Web</h1>
         
                <form id="form_busca" method="get" action="index.php">
                    <input type="text" name="PESQUISA" id="busca" placeholder="Digite o nome do livro">
                    <button type="submit" id="btn_lupa">
                        <img src="../imgs/procurar.png"  width="20px" height="20px" alt="buscar" id="icon">
                    </button>
        </form>
    
        </div>
     
    </header>
     <nav>
<a href="../index.php">inicio</a>
<a href="./quem_somos.php">Quem Somos</a>
<a href="./contatos.php">Contato</a>
<a href="./favoritos.php" ><img   class="alinhar" src="./imgs/star.png.png" height="25px" width="25px"   alt="">favoritos</a>
<a href="./login.php" class="alinhar"> <img src="./imgs/usuario-de-perfil.png" alt="">Olá, usuário</a>
        </nav>

    <main>
        <div class="quem-somos">
            <div class="quem">
                <h1>Quem somos</h1>

            </div>
            <div>
                <h2>Olá caros amigos, é um prazer enorme ter vocês conosco. Nesse <br>
                    momento queremos apresentar
                    esse projeto que está sendo <br>
                    desenvolvido pelos alunos da turma 52 do Curso de Programador <br>
                    Web Noturno no
                    Senac do ano de 2024 com a supervisão do Professor <br>
                    Luis Fellipe.</h2>
            </div>

            <div class="desenvolvido">
                <h4 class="user">
                    Desenvolvido por <img src="/estante_web/banco/imgs/icon_des.png" alt="" height="30px" width="30px" class="user">
                    </h4>
            </div>
        </div>

    </main>

</body>

</html>