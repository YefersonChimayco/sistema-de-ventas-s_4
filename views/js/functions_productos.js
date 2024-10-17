async function registrar_producto(){
    let codigo = document.getElementById('codigo').value; // solo id
    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('detalle').value; // solo id
    let precio = document.getElementById('precio').value;
    let stock = document.getElementById('stock').value; // solo id
    let categoria = document.getElementById('categoria').value;
    let imagen1 = document.getElementById('iamgen1').value; // solo id
    let proveedor = document.getElementById('proveedor').value;
    
    if (codigo=="" || nombre=="" || detalle=="" || precio==""|| stock==""|| categoria=="" || imagen1=="" || proveedor=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formProducto); //obtiene llos datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url+'controller/Producto.php?tipo=regitrar',{
        method:'POST',
        mode : 'cors',
        cache: 'no-cache',
        body :datos
    });
    console.log(respuesta);
} catch (e) {
    console.log("Oops, ocurrio un error" + e);
}
}

