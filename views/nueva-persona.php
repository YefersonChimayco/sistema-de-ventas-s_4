<div class="container form-nproduct " >
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
            <input type="text" class="form-control"  required id="correo" name="correo">
    </div>
    <div>
        <label for=""> departamento:</label>
            <input type="text" class="form-control" required id="departamento" name="departamento" >
    </div>
    <div>
        <label for="">provincia: </label>
        <input type="text" class="form-control" required id="departamento" name="departamento" >
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
        <label for=""> password:</label>
            <input type="text" class="form-control" required id="password" name="password" >
    </div>
    <div>
        <label for=""> estado:</label>
            <input type="text" class="form-control" required id="estado" name="estado" >
    </div>
    <div>
        <label for=""> fecha_reg:</label>
            <input type="date" class="form-control" required id="fecha_reg" name="fecha_reg" >
    </div>

    <br>
    <button type="button"   class="btn btn-success"  onclick="registrar_persona();">registrar</button>
    </div>
    </div>
</form>
</div>


<script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>

