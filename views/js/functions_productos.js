async function registrar_producto(){
    let codigo = document.getElementById('codigo').value; // solo id
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value; // solo id
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value; // solo id
    let categoria = document.querySelector('#idcategoria').value;
    let imagen = document.querySelector('#imagen').value; // solo id
    let proveedor = document.querySelector('#idproveedor').value;
    
    if (codigo=="" || nombre=="" || detalle=="" || precio==""|| stock==""|| categoria=="" || imagen=="" || proveedor=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formProducto); //obtiene llos datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
        method:'POST',
        mode : 'cors',
        cache: 'no-cache',
        body :datos
    });
    json = await respuesta.json();
    if (json.status) {
        swal("Registro", json.mensaje,"success");
    }else{
        swal("Registro", json.mensaje,"error");
    }

} catch (e) {
    console.log("Oops, ocurrio un error" + e);
}
}

async function listar_categorias(){
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;

            datos.forEach(element => {
                $('#idcategoria').append($('<option/>',{
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));
            }); 
            
        }
        console.log(respuesta);
    } catch (e) {
        console.log("error al cargar categorias"+ e);
    }
}
async function listar_proveedores(){
    try {
        let respuesta = await fetch(base_url+'controller/Proveedor.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#idproveedor').append($('<option/>',{
                    text: `${element.razon_social}`,
                    value: `${element.id}`
                }));
            }); 
            
        }
        console.log(respuesta);
    } catch (e) {
        console.log("error al cargar proveedores"+ e);
    }
}

async function registrar_categoria(){

    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    
    if ( nombre=="" || detalle=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formCategoria); //obtiene llos datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=registrar',{
        method:'POST',
        mode : 'cors',
        cache: 'no-cache',
        body :datos
    });
    json = await respuesta.json();
    if (json.status) {
        swal("Registro", json.mensaje,"success");
    }else{
        swal("Registro", json.mensaje,"error");
    }

} catch (e) {
    console.log("Oops, ocurrio un error" + e);
}
}
async function registrar_compra(){
    let id_producto = document.querySelector('#id_producto').value; // solo id
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let id_trabajador = document.querySelector('#id_trabajador').value; // solo id
  
    
    if (id_producto=="" || cantidad=="" || precio=="" || id_trabajador=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formCompra); //obtiene llos datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url+'controller/Compra.php?tipo=registrar',{
        method:'POST',
        mode : 'cors',
        cache: 'no-cache',
        body :datos
    });
    json = await respuesta.json();
    if (json.status) {
        swal("Registro", json.mensaje,"success");
    }else{
        swal("Registro", json.mensaje,"error");
    }

} catch (e) {
    console.log("Oops, ocurrio un error" + e);
}
}
async function registrar_persona(){
    let nro_identidad = document.getElementById('#nro_identidad').value; 
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.getElementById('#departamento').value; 
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#cod_postal').value; 
    let direccion = document.getElementById('#direccion').value; 
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#password').value;
    let estado = document.querySelector('#estado').value;
    let fecha_reg = document.querySelector('#fecha_reg').value;
  
    
    if (nro_identidad=="" || razon_social=="" || telefono=="" || correo=="" || departamento=="" || provincia=="" || distrito=="" || cod_postal=="" ||direccion=="" || rol=="" || password=="" || estado==""|| fecha_reg=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formCompra); //obtiene llos datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url+'controller/Persona.php?tipo=registrar',{
        method:'POST',
        mode : 'cors',
        cache: 'no-cache',
        body :datos
    });
    json = await respuesta.json();
    if (json.status) {
        swal("Registro", json.mensaje,"success");
    }else{
        swal("Registro", json.mensaje,"error");
    }

} catch (e) {
    console.log("Oops, ocurrio un error" + e);
}
}
