<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>solaris | home</title>

<style>
  body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #47BEF3;
  overflow-x: hidden;
  }

  header {
  background-color: #47BEF3;
  color: white;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  }

  .logo {
  font-size: 24px;
  font-weight: bold;
  }

  .menu {
  display: flex;
  gap: 10px;
  margin-right: 10px;
  }

  .menu a {
  color: white;
  text-decoration: none;
  margin-right:10px;
  margin-top: 10px;
  font-size: 23px;
  cursor: pointer;
  transition: text-decoration 0.3s ease, transform 0.2s ease;
  }

  .menu a:hover {
  text-decoration: underline; 
  transform: scale(1.1);
  }

  .menu button {
  background-color: #ffffff;
  border: none;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  color: white;
  font-size: 16px;
  cursor: pointer;
  transition: opacity 0.3s ease;
  }

  .menu button:hover {
  opacity: 0.7; 
  }

  .column {
  float: left;
  width: 33.33%;
  }

  .row:after {
  content: "";
  display: table;
  clear: both;
  }

  .content {
    width: 500px;
    height: 630px;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 40px;
    padding: 50px;
    background-color: #fff;
    border-radius: 5px;
    }

    input {
    width: 478px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    }

    input[type="submit"] {
    width: 100%;
    padding: 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 20px;
    }

</style>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<header>
<div class="logo">
  <img src="index/logo_s.png" style="width: 200px;" alt="Nome do site: Solaris">
</div>

<nav>
<div class="menu">
  <a href="index.html">Início</a>
  <a href="nossojogo.html">Nosso jogo</a>
  <a href="sobrenos.html">Sobre nós</a>
  <a href="materiaisdeapoio.html">Materiais de apoio</a>
  <button><a href="login.php"><img src="index/user.png" style="height: 30px; padding: 1px;" alt="Botão para acessar login"></button></a>
  <button><img src="index/search.png" style="height: 30px;" alt="Botão para abrir barra de pesquisa"></button>
</div>
</nav>
</header>

<main>
    <div class="content">
        <center><h1>Crie uma conta e receba avisos!</h1></center>
        <form action="processa_cadastro.php" method="post">
            <p>Nome completo</p>
            <input type="text" name="nome" placeholder="Nome completo" required>
            <p>Data de nascimento</p>
            <input type="date" name="data_nascimento" placeholder="Data de Nascimento" required>
            <p>E-mail</p>
            <input type="email" name="email" placeholder="E-mail" required>
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Cadastrar">
            <center><div class="g-recaptcha" data-sitekey="SEU_SITE_KEY"></div></center>
        </form>
        <center><p>Já criou uma conta? <a href="login.php">Entre por aqui</a></p></center>
    </div>
</main>

<div vw class="enabled">
  <div vw-access-button class="active"></div>
  <div vw-plugin-wrapper>
    <div class="vw-plugin-top-wrapper"></div>
  </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
  new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
</body>
</html>
