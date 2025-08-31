<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="all" /><!-- verifcação de serviço Google -->
  <meta charset="UTF-8" /><!-- Codificação de Formatação -->
  <meta name="author" content="" /><!-- Autor do Site -->
  <meta name="reply-to" content="" /><!-- e-mail do Autor -->
  <meta name="generator" content="Visual Studio Code" /><!-- Programa em que o site foi programado -->
  <meta name="description" content="Loja de informatica" /><!-- Descrição do site -->
  <meta name="keywords" content="Explorar, Periféricos, Computador, pc, gamer, mouse, teclados, teclado, mouses" />
  <!-- Palavras-chave do site -->
  <meta name="robots" content="all" /><!-- Gerenciar paginas para buscadores -->
  <meta name="google" content="translate" /><!-- Tradução da página -->
  <link rel="stylesheet" href="home.css">
  <title>TechPrice</title>
</head>

<body>
  <!-- Menu/Navegação do site -->
  <div class="menu">
    <div class="logoMenu">
      <img src="Imagens/Logo.png">
    </div>

    <!--<div class="cad-banner" id="cad">
      <h2 onclick="cadDesaparecer()">Cadastrar</h2>
      <div class="txt">
        <a>Nome: </a><input type="text" id="nome" size="20"><Br>
        <a>Email: </a><input type="email" id="email"><br>
        <a>Senha:</a><input type="password" id="senha">
      </div>
      <input type="button" value="Cadastrar" id="btnCad">
    </div>-->

    <div class="navMenu">
      <a href="memoria.html">Peças</a>
      <a href="#">Sobre nós</a>
      <a id="login" href="DADOS/login.php">Cadastrar</a>
    </div>
  </div>
  <!-- Banner central -->
  <div class="banner1">
    <img src="Imagens/banner1.gif">
  </div>
  <!-- Peças em baixo -->
  <div class="pecas">
    <img id="peca1" onmouseenter="AparecerPeca1()" onmouseleave="SumirPeca1()" src="Imagens/pecas1.png">
    <img src="Imagens/pecas2.png">
    <img src="Imagens/pecas3.png">
    <img src="Imagens/pecas4.png">
  </div>
  <script src="home.js" defer></script>

  <footer class="footer">

  </footer>
</body>

</html>