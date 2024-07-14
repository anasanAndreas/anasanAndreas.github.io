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
  background-color: #0D82FF;
  overflow-x: hidden;
  }

  header {
  background-color: #0D82FF;
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
    height: 530px;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 50px;
    background-color: #fff;
    border-radius: 5px;
    }

    input {
    width: 478px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    }

    input[type="submit"] {
    width: 100%;
    padding: 20px;
    margin-top: 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 20px;
    }

    .terceiros a {
    cursor: pointer;
    transition: opacity 0.3s ease;
    }

    .terceiros a:hover {
    opacity: 0.7; 
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
        <center><h1>Faça seu login!</h1></center>
        <form action="index.html" method="post">
            <p>Nome de usuário</p>
            <input type="text" name="username" placeholder="Nome de usuário" required>
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
        <center>
        <p>Ainda não tem uma conta? <a href="signup.php">Crie uma aqui</a></p>
        <a href="esqueceu.html">Esqueceu a senha?</a>
        </center>
        <br>
        <hr>
        <center>
        <div class="terceiros">
            <a href="#"><img src="login/gmail.png" style="height: 70px; margin-bottom: 30px;" alt="Entre com sua conta do G-mail"></a>
            <a href="#"><img src="login/fb.png" style="height: 130px;" alt="Entre com sua conta do Facebook"></a>
        </div>
        </center>
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
