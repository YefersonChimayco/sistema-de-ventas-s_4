<div class="container form-nproduct " >
<<<<<<< HEAD
<form action="" id="Producto">
    <div class="form-group">
=======
<form action="" id="frmProducto">
    <input type="hidden" name="id_producto" id ="id_producto">
    <div>
>>>>>>> a71632e89ff57d4761ea25b7a0f0169c29d082dd
        <label for=""> codigo: </label>
            <input type="text"  class="form-control"  id="codigo" name="codigo" readonly  >
    </div>
    <div class="form-group">
        <label for=""> nombre: </label>
            <input type="text" class="form-control" required id="nombre" name="nombre" >
    </div>
    <div class="form-group">
        <label for=""> detalle: </label>
            <input type="text" class="form-control" required id="detalle" name="detalle" >
    </div>
    <div >
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
    <button type="button"   class="btn btn-success"  onclick="actualizar_producto();">Actualizar</button>
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
<script >
<<<<<<< HEAD
//http://localhost/sistema-de-ventas-s_4/editar_producto/4
const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];  ?>;
verProducto(id_p);
</script>
=======
//http://localhost/sistema-de-ventas-s_4/editar_producto/3
const id_p = <?php $pagina=explode("/",string: $_GET['views']); echo $pagina['1'];   ?>;
verProducto(id_p);
</script>
>>>>>>> a71632e89ff57d4761ea25b7a0f0169c29d082dd
