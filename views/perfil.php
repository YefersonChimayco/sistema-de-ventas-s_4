
<script>
      function habilitarEdicion(row) {
          var cells = row.cells;
          for (var i = 1; i < cells.length - 1; i++) {
              var cell = cells[i];
              var oldValue = cell.textContent.trim();
              var inputType = i === 1 ? 'text' : 'number'; // Columna 1 (Nombre) es texto, Columna 2 (Edad) es número
              
              // Crear un input editable con el valor actual
              var input = document.createElement('input');
              input.type = inputType;
              input.value = oldValue;
              input.classList.add('form-control'); // Agregar la clase de Bootstrap para los formularios
              
              // Reemplazar el texto con el input
              cell.textContent = '';
              cell.appendChild(input);
          }
          
          // Cambiar el botón de "Editar" a "Guardar"
          var btnEditar = cells[cells.length - 1].querySelector('button');
          btnEditar.textContent = 'Guardar';
          btnEditar.setAttribute('onclick', 'guardarCambios(this)');
          btnEditar.classList.remove('btn-info');
          btnEditar.classList.add('btn-success'); // Cambiar el color del botón a verde
      }
      
      function guardarCambios(btnGuardar) {
          var row = btnGuardar.parentNode.parentNode;
          var cells = row.cells;
          
          for (var i = 1; i < cells.length - 1; i++) {
              var input = cells[i].querySelector('.form-control');
              var newValue = input.value;
              
              // Reemplazar el input con el nuevo valor
              cells[i].textContent = newValue;
          }
          
          // Cambiar el botón de "Guardar" a "Editar"
          btnGuardar.textContent = 'Editar';
          btnGuardar.setAttribute('onclick', 'habilitarEdicion(this.parentNode.parentNode)');
          btnGuardar.classList.remove('btn-success');
          btnGuardar.classList.add('btn-info'); // Cambiar el color del botón de nuevo a azul
      }
  </script>



    <nav class="navbar navbar-expand-lg" style="background-color: #ffffff;  border-bottom: 4px solid gray;">
      <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo BASE_URL?>login">
              <img src="images/logotipo.png" alt="Bootstrap" width="70" height="55">
            </a>
        <a  href="#" class="navbar-brand "  ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
          <ul class="navbar-nav me-auto  ">
            
              
            <li class="nav-item "  style="margin-left: 620px;">
              <a class="nav-link active "  aria-current="page" href="<?php echo BASE_URL?>varones" style="font-weight: bold; ">VARONES</a>
              
            </li>
            <li class="nav-item" style="margin-left: 50px;">
              <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL?>menu" style="font-weight: bold;  ">MENÚ PRINCIPAL</a>
              
            </li>
            <li class="nav-item "  style="margin-left: 50px;">
              <a class="nav-link active "  aria-current="page" href="<?php echo BASE_URL?>mujeres" style="font-weight: bold;">MUJERES</a>
              
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
 
 
 <div class="contenidocuenta">
  <div class="titulocorreo">
   <div class="logocorreo"> yc</div> 
   <div class="textcorreo">
     <div class="titucorreo">
       YEFERSON CHIMAYCO CARBAJAL
    </div>
    <div class="correo">
        chimaycohnj@gmail.com
    </div>
   </div>  
   </div>
  <div class="tucuenta"> Tu  Cuenta   Fitness</div>
  <div class="infocuenta"> 
    <div class="letrascorreo">
       <div class="informacioncuenta"> INFORMACION DE TU CUENTA</div>
       <div class="textos">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <strong> DATOS PERSONALES</strong>
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><code>Se estan mostrando en este momento</code> </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <strong> DIRECCIONES</strong>
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Jiron María Parado de Bellido 190,
                <br> Huanta 05121</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                <strong> CATEGORIAS PREFERIDAS</strong>
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> Las categorias que mas visitas son la cateogria : <code>varones</code> </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                <strong> TALLAS PREFERIDOS</strong>
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> Las tallas que  compraste o selecionaste recientemente son <strong> M, L, XL</strong></div>
            </div>
          </div>
        </div>
       </div>
       <div class="cerrar"> 
        <a class="btn btn-danger "  href="login.html" role="button">CERRAR SESION</a>

       </div>

    </div>
    <div class="letrasimgcorreo">
        <div class="letras1"> 
          <table class="table table w-100">
            <thead class="thead-dark">
                <tr>
                    <th style="border: none;">MIS DATOS </th>
                  
                </tr>
            </thead>
            <tbody>
                <tr>
                  
                    <td style="border: none; font-weight: bolder;">Nombres- A</td>
                    <td style="border: none;">Chimayco Carbajal Yeferson</td>
                    
                    <td style="border: none;">
                        <button onclick="habilitarEdicion(this.parentNode.parentNode)" class="btn btn-info btn-success" >Editar</button>
                    </td>
                    
                </tr>
                <tr>
                  
                  <td style="border: none; font-weight: bolder;">GENERO</td>
                  <td style="border: none;">MASCULINO</td>
                  
                  <td style="border: none;">
                      <button onclick="habilitarEdicion(this.parentNode.parentNode)" class="btn btn-info btn-success" >Editar</button>
                  </td>
                  
              </tr>
              <tr>
                  
                <td style="border: none; font-weight: bolder;">F-N</td>
                <td style="border: none;">2001/16/06</td>
                <td style="border: none;">
                  <button onclick="habilitarEdicion(this.parentNode.parentNode)" class="btn btn-info btn-success" >Editar</button>
              </td>
                
                
            </tr>
                
            </tbody>
        </table>
        <table class="table table">
          <thead class="thead-dark">
              <tr>
                  <th style="border: none;">ACCESO</th>
                
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td style="border: none; font-weight: bolder;">Correo Electronico</td>
                  <td style="border: none;">chimaycohnj@gmail.com</td>
                  
                  <td style="border: none;">
                      <button onclick="habilitarEdicion(this.parentNode.parentNode)" class="btn btn-info btn-success" >Editar</button>
                  </td>
              </tr>
              <tr>
                  <td style="border: none; font-weight: bolder;">Contraseña</td>
                  <td style="border: none;">***************</td>
                 
                  <td style="border: none;"   >
                      <button onclick="habilitarEdicion(this.parentNode.parentNode)" class="btn btn-info btn-success">Editar</button>
                  </td>
              </tr>
              <!-- Puedes añadir más filas según sea necesario -->
          </tbody>
      </table>
      <table class="table table">
        <thead class="thead-dark">
            <tr>
                <th style="border: none;">Gestionar cuenta</th>
              
            </tr>
        </thead>
        
    </table>
          
         <a href="login.html"> <div class="casi4">
          <a class="btn btn-outline-danger " style="margin-left: -100px;"  href="login.html" role="button">Eliminar cuenta</a>
        
      </div></a>
         
        </div>
        <div class="imgcuenta"> 
         <img  class="fondocuenta"  src="images/cuentafondo.png" alt="">
        </div>
    </dxiv>
  </div>
 </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
