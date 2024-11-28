async function listar_productos(params) {
    try {

        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;


            datos.forEach(item => {
                let  nueva_fila = document.createElement("tr"); 
                nueva_fila.id = "fila" +item.id; // el item.id es  de la base de datos
                 cont++; // o +=1
                nueva_fila.innerHTML =`
                <th>${cont}</th>
                <td>${item.codigo}</td>
                <td>${item.nombre}</td>
                <td>${item.stock}</td>
                <td>${item.categoria.nombre}</td>
                <td>${item.id_proveedor}</td>
                <td>${item.options}</td>
                `;
                document.querySelector('#tbl_producto').appendChild(nueva_fila);
            }); 
        } 
        console.log(respuesta);
    } catch (e) {
        console.log("error "+ e);
    }
}
if (document.querySelector('#tbl_producto')){
    listar_productos();
}


async function registrar_producto(){
    let codigo = document.getElementById('codigo').value; // solo id
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value; // solo id
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value; // solo id
    let categoria = document.querySelector('#idcategoria').value;
    let imagen = document.querySelector('#imagen').value; // solo id
    let proveedor = document.querySelector('#proveedor').value;
    
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
async function listar_proveedores() {
    try {
        // Envía la solicitud al controlador de proveedores
        let respuesta = await fetch(base_url + 'controller/persona.php?tipo=listarproveedor');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione Proveedor</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
                // O usando jQuery
                /*$('#proveedor').append($('<option />', {
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));*/
            });
            document.getElementById('proveedor').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.error("Error al cargar proveedores: " + e);
    }
}
async function ver_producto(id) {
     const formData = new FormData();
     formData.append('id_producto',id);
    try {
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=ver', {
            method: 'POST',
            mode : 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
              
        } else {
            window.location=base_url+"productos";
        }
        console.log(json);  
    } catch (error) {
        console.log("ups estas fallando mano"+error);
    }
}