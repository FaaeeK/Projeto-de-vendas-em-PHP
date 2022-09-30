<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K'ursi</title>
    <link rel="stylesheet" href="back.css">
    
  
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body style="background-image:url(fundo4.jpg);">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  

    <!-- INICIO DO MENU INICIAL -->
    <nav class="navbar navbar-expand-lg " style="background-color: #CD5C5C">
        <div class="container-fluid">
            <nav class="navbar">
                <div class="container">
                  <a class="navbar-brand" href="front.html">
                    <img src="educacao.png" alt="" width="45" height="40">
                  </a>
                </div>
              </nav>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="front.html" style="color: white">CONTATO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form1.html" style="color: white">ENSINE NA K'ursi</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                  CURSOS EM PROMOÇÃO
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Java</a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
                
            </ul>
            <nav class="navbar">
                <form class="container-fluid" >
                  <div class="input-group" style="width: 800px;">
                    <span class="input-group-text" id="basic-addon1" style="width: 150px;color: white">Pesquisar</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </form>
              </nav>
          </div>
        </div>
        <nav class="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="logindouser.php">
                <img src="user.png" alt="" width="45" height="45" class="d-inline-block align-text-top">
                LOGIN
              </a>
            </div>
          </nav>
      </nav>
      <!--menu-->
      <br>
      <br>
      <br>

      <div class="container" style="background-color:whitesmoke;">
          <p style="color: tomato">SEJA BEM-VINDO!</p>
        <div class="row">
          
          <div class="col">
            <form method="post" action="incluirlogin.php">
                <div class="mb-3">
                  <label id"email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1"  name="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Nunca compartilharemos suas Informações</div>
                </div>
                <div class="mb-3">
                  <label id"senha" class="form-label">Senha</label>
                  <input type="password" name="senha" class="form-control" id="exampleInputPassword1" required>
                </div>
                
                <button type="submit" class="btn btn-primary">enviar</button>
              </form>
          </div>
          
        </div>
      </div>
      <div class="content">
        </div>
        <footer id="myFooter">
            <div class="container">
                <ul>
                    <li><a href="">Informações da Empresa</a></li>
                    <li><a href="">Contato</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Cursos</a></li>
                </ul>
                <p class="footer-copyright">© 2022 Copyright - Programadores Leozada e Lulinda</p>
            </div>
           
        </footer>
                

</body>

</html>