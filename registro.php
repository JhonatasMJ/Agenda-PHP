<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Agenda | Registro</title>
  </head>
  <body>
    <main>
      <section class="login-container">
        <div class="login">
          <h2 data-aos="fade-right"  data-aos-duration="1500">Registre-se </h2>
          <p>Faça login para começar a construir seus projetos ainda hoje.</p>
          <form action="crud/salvarPaciente.php" method="post">
            <div>
                <label for="nome">Nome:</label>
  
                <input type="text" name="txtnome" placeholder="Digite seu Nome" required  id="nome"/>
              </div>
            <div>
              <label for="login">Login:</label>

              <input type="text" name="txtlogin" placeholder="Digite seu login" required  id="login"/>
            </div>
            <div>
              <label for="password">Senha:</label>
              <input type="password" name="txtsenha" placeholder="Digite sua senha" required  id="senha"/>
            </div>

           <button class="bnt" type="submit">Enviar</button>
          </form>
          <div class="register">
            <p>Já tem uma conta? <a href="login.html">Faça login</a></p>
          </div>
        </div>
        <div class="imagem">
          <img src="./registro.jpg" alt="" />
        </div>
      </section>
    </main>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
    <script>
        AOS.init();
      </script>
  </body>
</html>
