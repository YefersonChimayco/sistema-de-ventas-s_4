<div class="container form-nproduct " >
<form action="" id="formCategoria">
    <div>
        <label for=""> nombre: </label>
            <input type="text" class="form-control" required id="nombre" name="nombre" >
    </div>
    <div>
        <label for=""> detalle: </label>
            <input type="text" class="form-control" required id="detalle" name="detalle" >
    </div>
   
    <br>
    <button type="button"   class="btn btn-success"  onclick="registrar_categoria();">registrar</button>
    </div>
    </div>
</form>
</div>


<script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>
