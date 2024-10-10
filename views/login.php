<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>views/plantilla/Styles.css">

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
     <div class="container-fluid p-0" >
        <div class="cabecera">
               <a href="" class="text_menu"> <div class="cabvacio"></div></a>
               <a href="../index.html#piedepagina" class="text_menu"> <div class="nosotros">Contactanos</div></a>
               <a href="nosotros.html" class="text_menu"> <div class="nosotros">Nosotros</div></a>
               <a href="perfil.html" class="text_menu"> <div class="Perfil"> </a>
               <a href="perfil.html" class="text_menu" style="color:red; display: flex; align-items: center;"> <div class="spinner-border text-danger" role="status"  style="margin-right: 1px;">
                <span class="visually-hidden"></span>
              </div>
                login </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg" style="background-color: #ffffff">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/logotipo.png" alt="Bootstrap" width="70" height="55">
                  </a>
              <a  href="#" class="navbar-brand "  ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav me-auto  ">
                  
                    
                  <li class="nav-item "  style="margin-left: 620px;">
                    <a class="nav-link active "  aria-current="page" href="varones.html" style="font-weight: bold; ">VARONES</a>
                    
                  </li>
                  <li class="nav-item" style="margin-left: 50px;">
                    <a class="nav-link active" aria-current="page" href="../index.html" style="font-weight: bold;  ">MENÚ PRINCIPAL</a>
                    
                  </li>
                  <li class="nav-item "  style="margin-left: 50px;">
                    <a class="nav-link active "  aria-current="page" href="mujeres.html" style="font-weight: bold;">MUJERES</a>
                    
                  </li>
                  
               
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Busca un producto" aria-label="Search">
                  <button class="btn btn-outline-danger" type="submit">Buscar</button>
                  <div class="iconosdemenu">
                  <a href="carrito.html" class="text_menu"> <img src="images/guardarnegro.png" alt="" width="30" height="30">
                  </a>
                  <a href="carrito.html" class="text_menu"> <img src="images/carritonegro.png" alt="" width="30" height="30">
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
                  <img  class="logologin" src="images/logotipo.png" alt="" width="300px" height="300px">
              </div>     
              
              <div class="cajadetexto">
               <div class="cajalogin11">
                <a href="perfil.html"> <button class="btn btn-outline-dark" type="submit">REGISTRATE</button></a>
               </div>
               <label for="exampleInputEmail1" class="form-label">USUARIO</label>
               <div class="cajalogin1">
                <input class="form-control me-2" type="search" placeholder=" ingresa tu usuario" aria-label="Search">
               </div>
               <label for="exampleInputEmail1" class="form-label">CONTRASEÑA</label>
               <div class="cajalogin1">
                <input class="form-control me-2" type="password" placeholder="ingresa tu contraseña" aria-label="Search">
               </div>
               <div class="cajalogin7">
               <a href="login.html" class="text_menu"> <label for="exampleInputEmail1" class="form-label" style="color: black;">¿olvidaste tu contraseña?</label></a></div>
               <div class="cajalogin7"> 
                 <a href="../index.html"> <button class="btn btn-danger " type="submit" style="width: 200px;">INICIAR SESION</button></a>
               </div>
               <div class="cajalogin1"></div>

              </div>
              </div>
          </div>
          </div>
      </div>
  </div>

  </div>
    </div>
  </div>
 



</body>




</html>