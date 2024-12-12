<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fogata</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">  
   
    <script>
        const base_url  =  '<?php echo BASE_URL; ?>';
    </script>
 <link rel="stylesheet" href="<?php echo BASE_URL?>views/plantilla/Styles.css">
 <link rel="stylesheet" href="<?php echo BASE_URL?>views/plantilla/bootstrap.min.css">
</head>

<body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>   
    <script src="<?php echo BASE_URL; ?>views/js/bootstrap.min.js" ></script>
    <script src="<?php echo BASE_URL; ?>views/js/bootstrap.bundle.min.js" ></script>
 
    <div class="container-fluid p-0" >
        
        <div class="cabecera">
         
               <a href="<?php echo BASE_URL?>nosotros" class="text_menu"> <div class="nosotros">Contactanos</div></a>
               <a href="<?php echo BASE_URL?>nosotros" class="text_menu"> <div class="nosotros">Nosotros</div></a>
               <a href="<?php echo BASE_URL?>login" class="text_menu"> <div class="Perfil"> login </a>
               <a href="<?php echo BASE_URL?>perfil" class="text_menu">  <img src="images/perfolincon.png" alt="" width="30" height="30">

               
                
            </div><div>
           <a href="<?php echo BASE_URL?>administracion" class="cre btn btn-success m-20"  style="width: 100px;"   >Administrar</a>
               <button type="button"   class="btn btn-danger"  onclick="cerrar_sesion();">cerra sesion</button>
 
         </div>
        </div>
        
  