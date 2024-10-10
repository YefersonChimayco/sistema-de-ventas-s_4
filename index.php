<?php
require_once "./controller/vistas_control.php";
$vista= new vistasControlador();
$vista ->obtenerPlantillaControlador();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fogata</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<link rel="stylesheet" href="Styles.css">
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
     <div class="container-fluid p-0" >
        <div class="cabecera">
               <a href="" class="text_menu"> <div class="cabvacio"></div></a>
               <a href="./index.html#piedepagina" class="text_menu"> <div class="nosotros">Contactanos</div></a>
               <a href="views/nosotros.html" class="text_menu"> <div class="nosotros">Nosotros</div></a>
               <a href="views/perfil.html" class="text_menu"> <div class="Perfil"> </a>
               <a href="views/login.html" class="text_menu"> <img src="images/perfolincon.png" alt="" width="30" height="30">
                login </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg" style="background-color: #ffffff">
          <div class="container-fluid">
              <a class="navbar-brand" href="views/login.html">
                  <img src="images/logotipo.png" alt="Bootstrap" width="70" height="55>
                </a>
            <a  href="#" class="navbar-brand "  ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
              <ul class="navbar-nav me-auto  ">
                
                  
                <li class="nav-item "  style="margin-left: 620px;">
                  <a class=" cre nav-link active "  aria-current="page" style="font-weight: 800;" href="views/varones.html" style="font-weight: bold; ">VARONES</a>
                  
                </li>
                <li class="nav-item" style="margin-left: 50px;">
                  <a class="cre nav-link active" aria-current="page" href="index.html"  style="font-weight: 800; color: red; text-decoration: underline;">MENÚ PRINCIPAL</a>
                  
                </li>
                <li class="nav-item "  style="margin-left: 50px;">
                  <a class="cre nav-link active "  aria-current="page" href="views/mujeres.html" style="font-weight: bold;">MUJERES</a>
                  
                </li>
                
             
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Busca un producto" aria-label="Search">
                <button class="btn btn-outline-danger" type="submit">Buscar</button>
                <div class="iconosdemenu">
                <a href="views/carrito.html" class="text_menu"> <img src="images/guardarnegro.png" alt="" width="30" height="30">
                </a>
                <a href="views/carrito.html" class="text_menu"> <img src="images/carritonegro.png" alt="" width="30" height="30">
                   </a>
                  </div>
              </form>
            </div>
          </div>
        </nav>
     </div>
  <div class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
          <div class="carousel-item active" data-bs-interval="2200">
            <img src="images/Sin título.png" class="d-block w-100" alt="..." width="100%" height="550px">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2200">
            <img src="images/caruvaron22.png" class="d-block w-100" alt="..."  width="100%" height="550px">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item"data-bs-interval="2200">
            <img src="images/carumjer00.png" class="d-block w-100" alt="..."  width="100%" height="500px">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
  <div class="textomenu">PRODUCTOS GENERALES</div>
  <div class="container-fluid  m-0 p-3 mt-4 row">
    
    <div class="  col-lg-3 col-md-4 col-ms-6 p-11"  >
      <div class="card">
      <img src="images/hombres044.png" class="card-img-top" alt="..." style="height: 400px; width: 440px">
      <div class="card-body">
        <h5 class="card-title">CARGO SHORT | GRIS | CON LICRAS</h5>
        <p class="card-text m-0">Bolsillo  cargo con cierre 
          <br> (porta tollas)</p>
        <p class="m-0" style="width: 302px; height: 40px; display: flex; 
        align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
          <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
        </p>
        
        
        <br>
        <a href="views/detalles.php" class="cre btn btn-danger"  style="width:  180px;"   >ver detalles</a>
        <a href="views/carrito.php" class="cre btn btn-dark" style="width: 200px;"      >Agregar al carrito
          <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
        </a>
      </div>
      </div>
  </div>
  <div class=" col-lg-3 col-md-4 col-ms-6 p-11"  >
      <div class="card">
      <img src="images/hombres022.png" class="card-img-top" alt="..."style=" height: 400px; width: 440px">
      <div class="card-body">
        <h5 class="card-title">VIVIDI DEPORTIVO |  MELANGE DE HOMBRE</h5>
        <p class="card-text m-0">MATERIAL
        <br> 100% algodon (Cortes super caido)</p>
        <p class="m-0" style="width: 302px; height: 40px; display: flex; 
        align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
          <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
        </p>
        
        
        <br>
        <a href="views/detalles.html" class="cre btn btn-danger"  style="width:  180px;"   >ver detalles</a>
        <a href="views/carrito.html" class="cre btn btn-dark" style="width: 200px;"      >Agregar al carrito
          <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
        </a>
      </div>
      </div>
  </div>
    <div class=" col-lg-3 col-md-4 col-ms-6 p-11"  >
        <div class="card">
          <img src="images/mujeres033.png" class="card-img-top" alt="..."style="height: 400px;">
          <div class="card-body">
            <h5 class="card-title">LEGGINS |  MALLA NEGRO</h5>
            <p class="card-text m-0">Push Up para resaltar la figura
              <br>Tejido premium de Nylon + Spandex
            </p>
          <p class="m-0" style="width: 302px; height: 40px; display: flex; 
          align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
            <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
          </p>
          
          
          <br>
          <a href="views/detalles.html" class="cre btn btn-danger"  style="width:  180px;"   >ver detalles</a>
          <a href="views/carrito.html" class="cre btn btn-dark" style="width: 200px;"      >Agregar al carrito
            <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
          </a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-4 col-ms-6 p-11"  >
        <div class="card">
          <img src="images/mujeres044.png" class="card-img-top" alt="..."style="height: 400px;">
          <div class="card-body">
            <h5 class="card-title">SHORTS | WASH | ROSA</h5>
            <p class="card-text m-0">Push Up para resaltar tu figura
              <br> Tejido premium de Nylon + Spandex
            </p>
          <p class="m-0" style="width: 302px; height: 40px; display: flex; 
          align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
            <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
          </p>
          
          
          <br>
          <a href="views/detalles.html" class="cre btn btn-danger"  style="width:  180px;"   >ver detalles</a>
          <a href="views/carrito.html" class="cre btn btn-dark" style="width: 200px;"      >Agregar al carrito
            <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
          </a>
        </div>
        </div>
    </div>
<div class="textomenu">PRODUCTOS GENERALES</div>
    <div class="container-fluid p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
          <div class="carousel-item active" data-bs-interval="2200">
            <img src="images/Sin título.png" class="d-block w-100" alt="..." width="100%" height="550px">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2200">
            <img src="images/caruvaron22.png" class="d-block w-100" alt="..."  width="100%" height="550px">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item"data-bs-interval="2200">
            <img src="images/carumjer.png" class="d-block w-100" alt="..."  width="100%" height="500px">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  
    <div class="container-fluid  m-0 p-3 mt-4 row">
    <div class="  col-lg-3 col-md-4 col-ms-6 p-11"  >
      <div class="card">
      <img src="images/hombres044.png" class="card-img-top" alt="..." style="height: 400px; width: 440px">
      <div class="card-body">
        <h5 class="card-title">CARGO SHORT | GRIS | CON LICRAS</h5>
        <p class="card-text m-0">Bolsillo  cargo con cierre 
          <br> (porta tollas)</p>
        <p class="m-0" style="width: 302px; height: 40px; display: flex; 
        align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
          <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
        </p>
        
        
        <br>
        <a href="views/detalles.html" class="cre btn btn-danger"  style="width:  180px;"   >ver detalles</a>
        <a href="views/carrito.html" class="cre btn btn-dark" style="width: 200px;"      >Agregar al carrito
          <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
        </a>
      </div>
      </div>
  </div>
  <div class=" col-lg-3 col-md-4 col-ms-6 p-11"  >
      <div class="card">
      <img src="images/hombres022.png" class="card-img-top" alt="..."style=" height: 400px; width: 440px">
      <div class="card-body">
        <h5 class="card-title">VIVIDI DEPORTIVO |  MELANGE DE HOMBRE</h5>
        <p class="card-text m-0">MATERIAL
        <br> 100% algodon (Cortes super caido)</p>
        <p class="m-0" style="width: 302px; height: 40px; display: flex; 
        align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
          <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
        </p>
        
        
        <br>
        <a href="views/detalles.html" class="cre btn btn-danger"  style="width:  180px;"   >ver detalles</a>
        <a href="views/carrito.html" class="cre btn btn-dark" style="width: 200px;"      >Agregar al carrito
          <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
        </a>
      </div>
      </div>
  </div>
    <div class=" col-lg-3 col-md-4 col-ms-6 p-11"  >
        <div class="card">
          <img src="images/mujeres033.png" class="card-img-top" alt="..."style="height: 400px;">
          <div class="card-body">
            <h5 class="card-title">LEGGINS |  MALLA NEGRO</h5>
            <p class="card-text m-0">Push Up para resaltar la figura
              <br>Tejido premium de Nylon + Spandex
            </p>
          <p class="m-0" style="width: 302px; height: 40px; display: flex; 
          align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
            <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
          </p>
          
          
          <br>
          <a href="views/detalles.html" class="cre btn btn-danger"  style="width:  180px;"   >ver detalles</a>
          <a href="views/carrito.html" class="cre btn btn-dark" style="width: 200px;"      >Agregar al carrito
            <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
          </a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-4 col-ms-6 p-11"  >
        <div class="card">
          <img src="images/mujeres044.png" class="card-img-top" alt="..."style="height: 400px;">
          <div class="card-body">
            <h5 class="card-title">SHORTS | WASH | ROSA</h5>
            <p class="card-text m-0">Push Up para resaltar tu figura
              <br> Tejido premium de Nylon + Spandex
            </p>
          <p class="m-0" style="width: 302px; height: 40px; display: flex; 
          align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
            <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
          </p>
          
          
          <br>
          <a href="views/detalles.html" class="cre btn btn-danger"  style="width:  180px;"   >ver detalles</a>
          <a href="views/carrito.html" class="cre btn btn-dark" style="width: 200px;"      >Agregar al carrito
            <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
          </a>
        </div>
        </div>
    </div>
</body>
<footer>
  <div id="piedepagina"> 
    <DIv class="titulodepie">  ROPA DE ENTRENAMIENTO Y ROPA DE GIMNASIO</DIv>
    <div class="misionyvision">
      <p class="mision">MISION <br>
      </p>
      <p class="vision"> VISION</p>  
    </div>
    <div class="misionyvision1">
      <p class="mision1">“Nuestra misión es proporcionar a nuestros clientes 
          ropa de alta calidad y funcional para potenciar su rendimiento en el
           gimnasio. Nos esforzamos por ofrecer prendas que no solo sean cómodas
           y duraderas, sino también que inspiren c
          onfianza y motivación para alcanzar sus objetivos de fitness” <br>
      </p>
      <p class="vision1" > "Nuestra visión es establecernos como la marca de referencia 
          en el mercado de la ropa para gimnasio, reconocida por nuestra dedicación a la
           calidad, el diseño innovador y el compromiso con el bienestar de nuestros 
           clientes. Nos esforzamos por ser más que una simple tienda; aspiramos a 
           convertirnos en un símbolo de inspiración y 
          apoyo para aquellos que buscan mejorar su salud y su forma física”</p>  
    </div>
     <div class="masinfor">
      <p class="masinfor1">MAS INFORMACION</p> 
  </div>
     <div class="ayuda">
      <p class="ayuda1">AYUDA</p>
      <p class="redes"> REDES SOCIALES</p>
      <p class="cuenta"> MI CUENTA</p>
      <p class=" ubicacion"> UBICACION</p>
     </div>
     <div class="preguntas">
          
            <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-left: 10px; width: 500px;">
              <div class="accordion-item">
                <h2 class="accordion-header" style=" background-color:rgb(173, 171, 171);">
                  <button  style=" background-color:rgb(173, 171, 171);" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    PREGUNTAS MAS FRECUENTES
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"> TODABIA NO SE HICIERON PREGUNTAS 
                    <input class="form-control me-2" type="search" placeholder=" HAS UNA PREGUNTA!" aria-label="Search">
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" style=" background-color:rgb(173, 171, 171);"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    PEDIDOS
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"> REALIZA PEDIDOS 
                    <a href="index.html" class="btn btn-dark"> COMPRAR</a> </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" style=" background-color:rgb(173, 171, 171);" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    SOPORTE TECNICO
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">El soporte tecnico esta encargado por <code>CHIMAYCO</code>  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" style=" background-color:rgb(173, 171, 171);" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    CARRITO DE COMPRAS
                    <img src="images/carritonegro.png" alt="" width="25" height="25" style="margin-left: 5px;">
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"> r evisa tus productos seleccionados<code>carrito de compras</code></div>
                </div>
              </div>
            </div>
          
          <div class="iconos">
              <br>
              <a class="anclapie" href="https://web.whatsapp.com/"> <img class="icon1111" src="images/wasap.png" alt=""> +51 993 562 710 </a>
              <a class="anclapie" href="https://www.facebook.com/jogata.fitnesslclub.1/"> <img class="icon1111" src="images/facebok.png" alt=""> Fogata Fintes Club</a>
              <a class="anclapie" href="https://www.instagram.com/"><img class="icon1111" src="images/Instagram.png" alt="">Fogata_Fintes_Club</a>
              <a class="anclapie" href="https://web.whatsapp.com/"><img class="icon1111" src="images/telefono.png" alt="">993 562 710</a>
              <a class="anclapie" href="https://www.google.com/intl/es-419/gmail/about/"><img class="icon1111" src="images/gmail.png" alt="">fogatagym@gmail.com</a>
              
              <br></div>

          <p class="cuenta22 ">
            <a href="views/detalles.html" class="cre btn btn-outline-danger"  style="width: 200px; height: 30PX; margin-top: 20PX; margin-right:100px ; "   >ACCEDER</a>

            
            <a href="views/detalles.html" class="cre btn btn-outline-danger"  style="width: 200px; height: 30PX; margin-top: 20PX; "   >REGISTRATE</a> 
             
                       
          </p>
          <div class="ubi">
              <a href="https://www.google.com/maps/place/JOGATA+Fitness+Club/@-12.9381998,-74.2515512,17z/data=!3m1!4b1!4m6!3m5!1s0x910d83cc3f2f32f1:0x6378313ee5820dc1!8m2!3d-12.938205!4d-74.2489763!16s%2Fg%2F11fkyq65w8?entry=ttu"><img class="ubica" src="images/ubicacion.png" alt=""></a> 
          </div>
          <p class=" ubicacion22"><BR>
              Jiron María Parado de Bellido 190,
              <br> Huanta 05121
             
            </p>
     </div>
     <div class="fin">
       <div class="fin1">
                             terminos y condiciones      |  politica de privacidad     | nosotros <br>
           © fogata gmy Peru SAC , RUC 202452458667  . Av. Mariscal Caceres  1ra Cuadra  N° 256 3er Piso
       </div>
     </div>
  </div>
</footer>
</html>