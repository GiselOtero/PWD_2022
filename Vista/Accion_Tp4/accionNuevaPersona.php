<?php
    include_once "../Estructura/Cabecera.php";


    $datos=data_submitted();
    $objPersona= new AbmPersona();
   
    $respuesta = array(
        'exito' => false,
        'mensaje' => "no se pudo realizar la accion nueva persona",
    ); 
    

    if( $objPersona->alta($datos)){
        $respuesta['exito'] = true; 
        $respuesta['mensaje'] = "El dato fue ingresado correctamente";
    }

?>
<?php if($respuesta['exito']){ ?>
    <div class="card border-success mb-3" style="">
        <div class="card-body text-success">
            
<?php }else {?>
    <div class="card border-danger mb-3" style="">
       <div class="card-body text-danger">

<?php } ?>

<h5 class="card-title"> <?php echo $respuesta['mensaje']; ?> </h5>
    </div>
</div>

<?php
    include_once "../Estructura/Footer.php";
?>