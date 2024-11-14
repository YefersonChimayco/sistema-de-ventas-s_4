<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/Styles.css">
<script >const base_url ="<?php echo BASE_URL; ?>"</script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
  <div class="container-fluid p-0">
    <div class="cabecera">
      <a href="" class="text_menu">
        <div class="cabvacio"></div>
      </a>
      <a href="<?php echo BASE_URL ?>nosotros" class="text_menu">
        <div class="nosotros">Contactanos</div>
      </a>
      <a href="<?php echo BASE_URL ?>nosotros" class="text_menu">
        <div class="nosotros">Nosotros</div>
      </a>
      <a href="<?php echo BASE_URL ?>perfil" class="text_menu">
        <div class="Perfil">
      </a>
      <a href="<?php echo BASE_URL ?>login" class="text_menu" style="color:red; display: flex; align-items: center;">
        <div class="spinner-border text-danger" role="status" style="margin-right: 1px;">
          <span class="visually-hidden"></span>
        </div>
        login
      </a>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg" style="background-color: #ffffff">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logotipo.png" alt="Bootstrap" width="70" height="55">
      </a>
      <a href="#" class="navbar-brand "></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav me-auto  ">


          <li class="nav-item " style="margin-left: 620px;">
            <a class="nav-link  " aria-current="page" href="<?php echo BASE_URL ?>varones" style="font-weight: bold; ">VARONES</a>

          </li>
          <li class="nav-item" style="margin-left: 50px;">
            <a class="nav-link " aria-current="page" href="<?php echo BASE_URL ?>menu" style="font-weight: bold;  ">MENÚ PRINCIPAL</a>

          </li>
          <li class="nav-item " style="margin-left: 50px;">
            <a class="nav-link  " aria-current="page" href="<?php echo BASE_URL ?>mujeres" style="font-weight: bold;">MUJERES</a>

          </li>


        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Busca un producto" aria-label="Search">
          <button class="btn btn-outline-danger" type="submit">Buscar</button>
          <div class="iconosdemenu">
            <a href="<?php echo BASE_URL ?>carrito" class="text_menu"> <img src="images/guardarnegro.png" alt="" width="30" height="30">
            </a>
            <a href="<?php echo BASE_URL ?>carrito" class="text_menu"> <img src="images/carritonegro.png" alt="" width="30" height="30">
            </a>
          </div>
        </form>
      </div>
    </div>
  </nav>

  </div>
  <div id="singin">
    <div class="login1">
      <div class="img1">
        <p class="text1">
          COMPRA A TU MANERA
        </p>
        <p class="text2">
          HAS SEGUIMIENTO DE TUS PEDIDOS
        </p>
      </div>

    </div>
    <div class="login2">
      <div class="img2">
        <div class="cajadelogo">
          <div class="img1logo">
            <img class="logologin" src="images/logotipo.png" alt="" width="300px" height="300px">
          </div>

          <form id="frm_iniciar_sesion" >
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Ingresa tu usuario">
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required placeholder="Ingresa tu contraseña">
            </div>
            <button type="submit" class="btn btn-primary btn-block" >Ingresar</button>
          </form>

          <script src="<?php echo BASE_URL; ?>views/js/functions_login.js"></script>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>
  </div>
  </div>
  
  <script src="<?php echo BASE_URL; ?>views/js/functions_login.js"></script>
</body>
