
<nav class="navbar navbar-expand-lg" style="background-color: #ffffff;  border-bottom: 4px solid gray;">
      <div class="container-fluid">
          <a class="navbar-brand" href="views/login.html">
              <img src="images/logaso.png" alt="Bootstrap" width="70" height="55">
            </a>
        <a  href="#" class="navbar-brand "  ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
          <ul class="navbar-nav me-auto  ">
            
              
             
            <li class="nav-item "  style="margin-left: 620px;">
              <a class="nav-link active "  aria-current="page" href="<?php echo BASE_URL?>varones" style="font-weight: bold; ">VARONES</a>
              
            </li>
            <li class="nav-item" style="margin-left: 50px;">
              <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL?>menu" style="font-weight: bold;  ">MENÚ PRINCIPAL</a>
              
            </li>
            <li class="nav-item "  style="margin-left: 50px;">
              <a class="nav-link active "  aria-current="page" href="<?php echo BASE_URL?>mujeres" style="font-weight: bold;">MUJERES</a>
              
            </li>
            
         
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Busca un producto" aria-label="Search">
            <button class="btn btn-outline-danger" type="submit">Buscar</button>
            <div class="iconosdemenu">
            <a href="<?php echo BASE_URL?>carrito" class="text_menu"> <img src="images/guardarnegro.png" alt="" width="30" height="30"style="background-color: red; border-radius:10px;">
            </a>
            <a href="<?php echo BASE_URL?>carrito" id="cart"><img src="images/carritonegro.png" alt="" width="30" height="30"><span id="cuenta-carrito">0</span ></a>

               </a>
              </div>
          </form>
        </div>
      </div>
    </nav>
 </div>
 <div class="w-100  row m-8 mt-5" style=" width: 100%; height: 100px;"> 
  <div class="w-50">
     <div class="w-100 h-50 " style="background-color: WHITE; display: flex; border-bottom: 3px solid black;" >
      <img src="images/carritonegro.png" alt="" width="60" height="50" style="margin-left: 50px;">
      <h4 style="font-family: Georgia, 'Times New Roman', Times, serif; align-self: end;  padding: 0px;margin-left: 10px; margin-bottom: 0%;  font-size: 30px; font-weight: bold;">
        TU CARRITO</h4>
     </div>
     <div class="w-100 h-50"  style="background-color: white; margin-left: 50px;">
      TOTAL (5 PRODUCTOS)  
             ♦ Los artículos en tu carrito no están reservados.Termina el proceso de compra ahora ¡

     </div>
  </div>
   <div class="w-50" style="display: flex ; justify-content:center ; justify-content: space-around; align-items: end;" >
    <a  href="<?php echo BASE_URL?>login" class="btn btn-dark" style="width: 300px; height: 40px; border-bottom: 5px solid gray;border-right: 5px solid gray; display: flex; align-items: end; padding: 0%;
    justify-content: center;  font-family: Georgia, 'Times New Roman', Times, serif;">Pagar Todo
      <img src="images/flechablanca.png" alt="" width="130" height="35" style="margin-left: 40px;">
    </a>
   </div>
 </div>
  <div class="w-100 row m-0">
   
	<main class="carrr">
		<p id="carrito-vacio">Ups! El carrito está vacío, <a href="<?php echo BASE_URL?>menu">elige algunos productos</a></p>
		<section id="cart-container">
		</section>
  <section id="totales">
    <p>Total unidades: <span id="cantidad">0</span></p>
    <p>Total precio: $<span id="precio">0</span></p>
    <button disabled>Comprar</button>
    <button id="reiniciar">Reiniciar</button>
  </section>
</main>
<div id="monto" class="  " style=" width: 500PX; height: 500px; margin-left: 400px; margin-top: 3%; border: 2px solid black; padding: 15px; background-color: rgb(245, 227, 230); border-radius: 4PX;">
      <h4 class="text-center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-weight: bold;">INFORMACIÓN DE PAGO</h4>
      <H5 id="precio_p1"> <strong style="font-family: Georgia, 'Times New Roman', Times, serif;">Subtotal :</strong> S/. 90.00</H5>
      <div class="row col-12">
          <H5 class="col-6"><strong style="font-family: Georgia, 'Times New Roman', Times, serif;">Cód. de Descuento :</strong> </H5> <input class="col-6" type="text">
      </div>
      <h5><strong style="font-family: Georgia, 'Times New Roman', Times, serif;">Descuento: </strong>S/. 10.00</h5>
      <h5><strong style="font-family: Georgia, 'Times New Roman', Times, serif;">Costo de Envío: </strong> S/. 15.00</h5>
      <H4><strong style="font-family: Georgia, 'Times New Roman', Times, serif;">Total :  </strong>S/. 85.00</H4>
      <h4 class="text-center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-weight: bold; font-size: 20px;">MEDIOS DE PAGO</h4>
      <div id="medios_pago" class="col-12" style="background-color: rgb(202, 156, 164); margin-bottom: 20PX;" >

          <a href="https://www.yape.com.pe/" target="_blank"><img class="col-2 m-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Yape_text_app_icon.png/250px-Yape_text_app_icon.png" alt=""></a>
          <a href="https://www.viabcp.com/" target="_blank"><img class="col-2 m-2" src="https://www.visa.com.pe/dam/VCOM/regional/lac/SPA/Default/Partner%20With%20Us/Info%20for%20Partners/Info%20for%20Small%20Business/visa-pos-800x400.jpg" alt=""></a>
          <a href="https://www.pagoefectivo.la/pe/" target="_blank"><img class="col-3 m-2" src="https://paginasweb.pe/wp-content/uploads/2016/05/pagoefectivo.png" alt=""></a>
          <a href="https://www.pagoefectivo.la/pe/" target="_blank"><img class="col-3 m-2" src="../images/discover.png" alt=""></a>
      </div>
      <div class="text-center d-grid gap-2 col-6 mx-auto">
          <a href="<?php echo BASE_URL?>login" class="btn btn-warning">Pagar</a>
          <a href="<?php echo BASE_URL?>menu" class="btn btn-dark">Seguir Comprando</a>
      </div>
  </div>
</div>
        

</div>
    
  
 



</body>
<script>
    function sumarcantidad(){
        var precio =document.getElementById('precio_p1').value;
        var cantidad= document.getElementById('cantidad_p1').value;
        var nuevacantidad= parseInt(cantidad)+1;
        document.getElementById('cantidad_p1').value = nuevacantidad;
        calcular_subtotal(precio,nuevacantidad);
    }
    function restarcantidad(){
        var precio =document.getElementById('precio_p1').value;
        var cantidad= document.getElementById('cantidad_p1').value;
        if(cantidad>1){
        var nuevacantidad= parseInt(cantidad)-1;
        document.getElementById('cantidad_p1').value = nuevacantidad;
        calcular_subtotal(precio,nuevacantidad);
        }
       
    }
    function calcular_subtotal(precio,cantidad){
        var subtotal = precio*cantidad;
        document.getElementById('subtotal').innerHTML= 'S/. '+subtotal;
        calcular_subtotal(precio,nuevacantidad);
        
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
<script src="<?php echo BASE_URL; ?>views/js/cart.js" defer></script>
