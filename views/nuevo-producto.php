
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
<div class="container form-nproduct "  style="border: 1px solid black;">
<form action="" id="formProducto">
    <div>
        <label for=""> codigo: </label>
            <input type="text"  class="form-control" required id="codigo" name="codigo" >
    </div>
    <div>
        <label for=""> nombre: </label>
            <input type="text" class="form-control" required id="nombre" name="nombre" >
    </div>
    <div>
        <label for=""> detalle: </label>
            <input type="text" class="form-control" required id="detalle" name="detalle" >
    </div>
    <div>
        <label for=""> precio:</label>
            <input type="number" class="form-control"  required id="precio" name="precio">
    </div>
    <div>
        <label for=""> stock:</label>
            <input type="number" class="form-control" required id="stock" name="stock" >
    </div>
    <div>
        <label for="">categoria: </label>
            <select type="number"  class="form-control" required id="idcategoria" name="idcategoria"> 
                <option value=""> seleccione</option>
            </select>
    </div>
    <div>
        <label for=""> imagen: </label>
            <input type="file" class="form-control"  required id="imagen" name="imagen">
    <div>
        <label for="">Proveedor:</label>
            <select type="number"  class="form-control" required id="proveedor" name="proveedor"> 
                <option value=""> seleccione</option>
            </select>
    </div>
    <br>
    <button type="button"   class="btn btn-success"  onclick="registrar_producto();">registrar</button>
    </div>
    </div>
    <div class="text-center">
   <a href="<?php echo BASE_URL?>administracion" class="cre btn btn-danger m-20" style="width: 300px;">Volver a Panel de Administración</a>
</div>
</form>
</div>


<script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>
<script >listar_categorias();</script>
<script >listar_proveedores();</script>