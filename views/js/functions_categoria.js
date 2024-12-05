

async function registrar_categoria(){

    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('detalle').value;
    
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
async function listar_categoria(params) {
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
                <td>${item.nombre}</td>
                <td>${item.detalle}</td>
                 <td>${item.options}</td>
                `;
                document.querySelector('#tbl_categoria').appendChild(nueva_fila);
            }); 
        } 
        console.log(respuesta);
    } catch (e) {
        console.log("error "+ e);
    }
}
if (document.querySelector('#tbl_categoria')){
    listar_categoria();
}