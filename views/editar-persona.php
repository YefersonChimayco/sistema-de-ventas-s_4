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

<div class="container form-nproduct " style="border: 1px solid black;">
<form action="" id="formPersona">
    <div>
        <label for=""> numero de indentidad: </label>
            <input type="number"  class="form-control" required id="nro_identidad" name="nro_identidad" >
    </div>
    <div>
        <label for=""> razon_social: </label>
            <input type="text" class="form-control" required id="razon_social" name="razon_social" >
    </div>
    <div>
        <label for=""> telefono: </label>
            <input type="number" class="form-control" required id="telefono" name="telefono" >
    </div>
    <div>
        <label for=""> correo:</label>
            <input type="email" class="form-control"  required id="correo" name="correo">
    </div>
    <div>
        <label for=""> departamento:</label>
            <input type="text" class="form-control" required id="departamento" name="departamento" >
    </div>
    <div>
        <label for="">provincia: </label>
        <input type="text" class="form-control" required id="provincia" name="provincia" >
    </div>
    <div>
        <label for=""> distrito: </label>
            <input type="text" class="form-control"  required id="distrito" name="distrito">
            
    <div>
        <label for="">cod_postal:</label>
            <input type="number"  class="form-control" required id="cod_postal" name="cod_postal">     
    </div>
    <div>
        <label for=""> direccion:</label>
            <input type="text" class="form-control" required id="direccion" name="direccion" >
    </div>
    <div>
        <label for=""> rol:</label>
            <input type="text" class="form-control" required id="rol" name="rol" >
    </div>
   
    <div>
        <label for=""> fecha_reg:</label>
            <input type="date" class="form-control" required id="fecha_reg" name="fecha_reg" >
    </div>

    <br>
    <button type="button"   class="btn btn-success"  onclick="actualizar_persona();">Actualizar</button>
    </div>
    </div>
    <div class="text-center">
   <a href="<?php echo BASE_URL?>administracion" class="cre btn btn-danger m-20" style="width: 300px;">Volver a Panel de Administración</a>
</div>
</form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>
<script >
//http://localhost/sistema-de-ventas-s_4/editar_producto/4
const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];  ?>;
verPersona(id_p);
</script>
