
<nav class="navbar navbar-expand-lg" style="background-color: #ffffff">
          <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo BASE_URL?>login">
                  <img src="images/logotipo.png" alt="Bootstrap" width="70" height=">
                </a>
            <a  href="#" class="navbar-brand "  ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
              <ul class="navbar-nav me-auto  ">
                
                  
                <li class="nav-item "  style="margin-left: 620px;">
                  <a class=" cre nav-link  "  aria-current="page" href="<?php echo BASE_URL?>varones" style="font-weight: 800;">VARONES</a>
                  
                </li>
                <li class="nav-item" style="margin-left: 50px;">
                  <a class="cre nav-link " aria-current="page" style="font-weight: bold;" href="<?php echo BASE_URL?>menu" >MENÚ PRINCIPAL</a>
                  
                </li>
                <li class="nav-item "  style="margin-left: 50px;">
                  <a class="cre nav-link  active "  aria-current="page" href="<?php echo BASE_URL?>mujeres" style="font-weight: bold;  color: red; text-decoration: underline;">MUJERES</a>
                  
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
<div class="container form-nproduct " >
<form action="" id="formCompra">
    <div>
        <label for=""> id del producto: </label>
            <input type="number"  class="form-control" required id="id_producto" name="id_producto"  placeholder="">
    </div>
    <div>
        <label for=""> cantidad: </label>
            <input type="number" class="form-control" required id="cantidad" name="cantidad" >
    </div>
    <div>
        <label for=""> precio: </label>
            <input type="number" class="form-control" required id="precio" name="precio" >
    </div>
    <div>
        <label for=""> trabajador:</label>
            <input type="number" class="form-control"  required id="id_trabajador" name="id_trabajador">
            <option value=""> seleccione</option>
        </div>
    <br>
    <button type="button"   class="btn btn-success"  onclick="registrar_compra();">registrar</button>
    </div>
    </div>
    <div class="text-center">
   <a href="<?php echo BASE_URL?>administracion" class="cre btn btn-danger m-20" style="width: 300px;">Volver a Panel de Administración</a>
</div>
</form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functions_compra.js"></script>
<script >listar_trabajadores();</script>