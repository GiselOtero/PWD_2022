<?php
    include_once "../Estructura/Cabecera.php";


    $datos=data_submitted();
    $objPersona= new AbmPersona();
    $dni['NroDni'] = $datos['NroDni'];

    $respuesta = array(
        'exito' => false,
        'mensaje' => "no se pudo realizar la accion nueva persona",
    ); 
    
    $listaPersona = $objPersona->buscar($dni);

    if(count($listaPersona)>0){
        $respuesta['exito'] = false;
        $respuesta['mensaje'] = " El numero de Dni ya se encuentra registrado ";
    }else{
        
        if( $objPersona->alta($datos)){
            $respuesta['exito'] = true; 
            $respuesta['mensaje'] = "El dato fue ingresado correctamente";
        }
        
    }


?>
<?php if($respuesta['exito']){ ?>
    <div class="card border-success mb-3" style="background-color: #ccffdd">
        <div class="card-body text-success">
            
<?php }else {?>
    <div class="card border-danger mb-3" style="background-color:#ffb3b3">
       <div class="card-body text-danger">

<?php } ?>

<h5 class="card-title fw-bold"> <?php echo $respuesta['mensaje']; ?> </h5>
    </div>
</div>

<?php
    include_once "../Estructura/Footer.php";
?>