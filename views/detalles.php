    <nav class="navbar navbar-expand-lg" style="background-color: #ffffff">
      <div class="container-fluid">
          <a class="navbar-brand p-0" href="<?php echo BASE_URL?>login">
              <img src="images/logotipo.png" alt="Bootstrap" width="70" height="55">
            </a>
        <a  href="#"class="navbar-brand "  ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav  me-auto d-flex justify-content-center ;">
            
              
       
            <li class="nav-item "  style="margin-left: 620px;">
              <a class="nav-link  "  aria-current="page" href="<?php echo BASE_URL?>varones" style="font-weight: bold; ">VARONES</a>
              
            </li>
            <li class="nav-item" style="margin-left: 50px;">
              <a class="nav-link " aria-current="page" href="<?php echo BASE_URL?>menu" style="font-weight: bold;  ">MENÚ PRINCIPAL</a>
              
            </li>
            <li class="nav-item "  style="margin-left: 50px;">
              <a class="nav-link  "  aria-current="page" href="<?php echo BASE_URL?>mujeres" style="font-weight: bold;">MUJERES</a>
              
            </li>
         
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Busca un producto" aria-label="Search">
            <button class="btn btn-outline-danger" type="submit">Buscar</button>
            <div class="iconosdemenu">
            <a href="<?php echo BASE_URL?>carrito" class="text_menu"> <img src="images/guardarnegro.png" alt="" width="30" height="30">
            </a>
            <a href="<?php echo BASE_URL?>carrito" class="text_menu"> <img src="images/carritonegro.png" alt="" width="30" height="30">
               </a>
              </div>
          </form>
        </div>
      </div>
    </nav>
 </div>
     <div id="contenido"> 
      <div class="imagenesproducto1"></div>
      <div class="imagenesproducto2"></div>
      <div id="informacion">
          <div id="conte" >
            <div class=" titulo">PANTALONES CORTOS VITAL SEAMLESS</div>
            <div class=" preciotitulo" style="font-family: 'Courier New', Courier, monospace;">$66.00 DOLARES</div>
            <div class=" cagu">
                  <div class="calificaciontitulo">
                    <a href="<?php echo BASE_URL?>carrito" class="btn btn-outline-danger"  style="width: 222px;"   >Puntuar <img  class="inconoguardado" src="images/solaestrella.png" alt=""></a>
                  </div>
                  <div class="guardado">
                     <a href="<?php echo BASE_URL?>carrito"> </a>
                     <a href="<?php echo BASE_URL?>carrito" class="btn btn-outline-danger"  style="width: 222px;"   >Guardar <img  class="inconoguardado" src="images/iconoguardado.png" alt=""></a>
                     
                  </div>
            </div>
            <div class=" detalles">
                  <div class=" titulodetalle">  Detalles del producto</div>
                  <div class="infos">
                  <div class=" infodetalle">
                    PRECIO   
                    <BR>
                    Composicion del material  
                    <BR>
                      <BR>
                        Estilo de cintura      
                        <BR> 
                          <BR> 
                         Tipo de Ajuste     
                  </div>
                  <div class=" infodetalle1" style="font-family: 'Courier New', Courier, monospace;">
                    $66.00 DOLARES
                    <BR>
                      100% NYLON
                      <BR>
                      <BR>
                             CINTURA ALTA
                        <BR> 
                          <BR> 
                             AJUSTADO
                  </div>
                </div>
                  <div class=" titulotalla">
                    Tallas Disponibles
                  </div>
                  <div class=" tallas">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                      <label class="btn btn-outline-dark" for="btncheck1">XS</label>
                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                      <label class="btn btn-outline-dark" for="btncheck2">S</label>
                    
                      <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                      <label class="btn btn-outline-dark" for="btncheck3">M</label>
                    
                      <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                      <label class="btn btn-outline-dark" for="btncheck4">L</label>
                      <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                      <label class="btn btn-outline-dark" for="btncheck5">XL</label>
                      <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                      <label class="btn btn-outline-dark" for="btncheck6">XXL</label>

                    </div>
                  </div>
            </div>
            <div class=" agregarcarrito" style="display: flex; justify-content: space-around;">
             <a href="<?php echo BASE_URL?>menu"> <button class=" cre btn btn-danger  " style="width: 200px; height: 50px; margin-top: 30px;" type="submit">Seguir Comprando</button></a>
              <br>
              <a href="<?php echo BASE_URL?>carrito"> <button class=" cre btn btn-dark  " style="width: 200px; height: 50px; margin-top: 30px;" type="submit">Agregar al Carrito</button></a>
              
            </div>
            
             </div>
      </div>
    </div>
    <div id="detalle_producto" class="col-12 row m-0 container-fluid p-0">
     
      <div id="imagenes_productos" class="col-6 row m-0 d-flex justify-content-center">
        <h4 class="text-center">MAS COLORES</h4>
          <div class="peques col-2" style="background: white; height: 150px;">
              <img src="images/pequeña1.png"
                  alt="" class="w-100 h-100">
          </div>
          <div class=" peques col-2" style="background: white; height: 150px;  ">
              <img src="images/pequeña2.png"
                  alt="" class="w-100 h-100">
          </div>
          <div class=" peques col-2" style="background: white; height: 150px;">
              <img src="images/pequeña3.png"
                  alt="" class="w-100 h-100">
          </div>
          <div class="peques col-2" style="background: white; height: 150px;">
            <img src="images/pequeña4.png"
                alt="" class="w-100 h-100">
        </div>
        <div class=" peques col-2" style="background: white; height: 150px;">
          <img src="images/pequeña5.png"
              alt="" class="w-100 h-100">
      </div>
      

      </div>
      <div id="detalles" class="col-6 p-2" style="background: white; height: 150px;">
          
          <div id="accordionExample" class="accordion col-12 p-2 mb-2" >
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                         <center> Más detalles del Producto</center>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong> Material interior: 93% nailon, 7% elastano -- Pantalones cortos 2 en 1.-- Cintura elástica acanalada de apoyo <br>
                       Tecnología que absorbe el sudor-- Puntos de malla transpirable* Diseño sin costuras.</strong>
                        
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Ficha Técnica
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Nombre del Producto: Pantalones Cortos de Verano
                      Marca: [Marca del fabricante]
                      Referencia: [Código interno de referencia]
                      Composición del Tejido:
                      Material Exterior: [Porcentaje de materiales, por ejemplo, 100% algodón]
                      Forro: [Si aplica]
                      Otros materiales: [En caso de tenerlos]</strong>
                  </div>
                </div>
              </div>
        </div>
      </div>
      
  </div>
  <div class="textomenu" style="padding-top: 2%;">PRODUCTOS SIMNILARES</div>
  <div class="container-fluid  m-0 p-3 mt-4 row ">
    
    <div class="col-lg-4 -4col-md-4 col-ms-6 p-11 "  >
        <div class="card " style="min-height: auto; width: 490px; margin-left: 150PX;">
        <img src="images/alphacool.png" class="card-img-top" alt="..."style="height: 400px; width: 480px">
        <div class="card-body">
          <h5 class="card-title">POLO POWER | ALPHA NEGRO</h5>
          <p class="card-text m-0">Material - ALPHACOOL
            <br>(90%  Polyester + 10% Spandex) </p>
          <p class="m-0" style="width: 302px; height: 40px; display: flex; 
          align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
            <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
          </p>
          
          
          <br>
          <a href="<?php echo BASE_URL?>detalles" class="cre btn btn-danger"  style="width: 222px;"   >ver detalles</a>
          <a href="<?php echo BASE_URL?>carrito" class="cre btn btn-dark" style="width: 222px;"      >Agregar al carrito
            <img src="../images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
          </a>
          
        </div>
        </div>
      </div>
      <div class="  col-lg-4 col-md-4 col-ms-6 p-11"  >
        <div class="card" style="min-height: auto; width: 490px; margin-left: 80PX; ">
        <img src="images/detallecompra2.png" class="card-img-top" alt="..." style="height: 400px; width: 488px">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text m-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <p class="m-0" style="width: 302px; height: 40px; display: flex; 
          align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
            <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
          </p>
          
          
          <br>
          <a href="<?php echo BASE_URL?>detalles" class="cre btn btn-danger"  style="width: 222px;"   >ver detalles</a>
          <a href="<?php echo BASE_URL?>carrito" class="cre btn btn-dark" style="width: 222px;"      >Agregar al carrito
            <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
          </a>
        </div>
        </div>
    </div>
    <div class=" col-lg-4 col-md-4 col-ms-6 p-11"  >
        <div class="card" style="min-height: auto; width: 490px;  margin-left: 20PX;">
        <img src="images/pequeña1.png" class="card-img-top" alt="..."style=" height: 400px; width: 490px">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text m-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <p class="m-0" style="width: 302px; height: 40px; display: flex; 
          align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; color: red; font-weight: 700;"> S/79.99
            <img src="images/estrellas.png" alt="" width="130px" height="70px" style="margin-left: 200px;">
          </p>
          
          
          <br>
          <a href="<?php echo BASE_URL?>detalles" class="cre btn btn-danger"  style="width: 222px;"   >ver detalles</a>
          <a href="<?php echo BASE_URL?>carrito" class="cre btn btn-dark" style="width: 222px;"      >Agregar al carrito
            <img src="images/carritoblanco.png" alt="" width="25" height="25" style="margin-left: 5px;">
          </a>
        </div>
        </div>
    </div>
   
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
