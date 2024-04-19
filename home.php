<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description: Teste para um dashboard>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
    <link rel="stylesheet" href="style-index.css">

    <title>SIDEBAR</title>
</head>
<body>
  
  <div class="Msg1">
    <h1>Bem Vindo(a)</h1>
  
  </div>
  <div class="SideBar">
    <aside id="SIDEBAR">

      <a href="">
        <button>
          <i class="material-icons-outlined">
            person
          </i>
              <span id="SpanTotal">Perfil</span>
      </button>


      <a href="">
      <button>
        <i class="material-icons-outlined">
          home
        </i>
            <span id="SpanTotal">home</span>
    </button>
    </a>
      <a href="">
        <button>
          <i class="material-icons-outlined">
              book
          </i>
              <span>Disciplinas</span>
      </button>
      </a>
      <a href="">
        <button>
          <i class="material-icons-outlined">
            text_increase
          </i>
              <span>Notas</span>
      </button>
      </a>

      <a href="mensagem.html">
        <button>
          <i class="material-icons-outlined">
            chat
          </i>
              <span>Secretaria </span>
      </button>
      </a> 
      <a href="">
        <button>
          <i class="material-icons-outlined">
            task
          </i>
              <span>Pendencia</span>
      </button>
      </a>

      <a href="">
        <button>
          <i class="material-icons-outlined">
            notifications
          </i>
              <span>notificações</span>
      </button>
      </a>

      
        <button onclick="trocaCor()">
          <i class="material-icons-outlined">
            info
          </i>
              <span>Informações</span>
      </button>
      

      <div class="AddInfRodaPe">
        <footer>
          <h5 class="Cor">Informações adicionais</h5>
          <ul class="Cor">
            <li class="Cor"><a class="Cor" href="#"><h5>Termos de uso</h5></a></li>
            <li class="Cor"><a class="Cor" href="#">Política de privacidade</a></li>
            <li class="Cor"><a class="Cor" href="#">Contato</a></li>
          </ul>
          <h5 class="Cor">&copy; 2023 UniVap</h5>
        </footer>
      </div>




<script src="code.js">
</script>

</body>

</html>