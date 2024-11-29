const contenedorTarjetas = document.getElementById("productos-container");

/** Crea las tarjetas de productos teniendo en cuenta la lista en bicicletas.js */
function crearTarjetasProductosInicio(productos){
  productos.forEach(producto => {
    const nuevoShort = document.createElement("div");
    nuevoShort.classList = "tarjeta-producto"
    nuevoShort.innerHTML = `
    <img src="images/${producto.id}.png" alt="shorts 1">
    <h3>${producto.nombre}</h3>
    <p class="precio">  s/${producto.precio}</p>
    <button>Agregar al carrito</button>`
    contenedorTarjetas.appendChild(nuevoShort);
    nuevoShort.getElementsByTagName("button")[0].addEventListener("click",() => agregarAlCarrito(producto))
  });
}
crearTarjetasProductosInicio(short);