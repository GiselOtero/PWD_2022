<?php
    include_once "../Estructura/Cabecera.php";

    $datos = data_submitted();
    $objPersonas = new AbmPersona();

    $respuesta = array(
        'exito' => false,
        'mensaje' => "No se pudo modificar correctamente",
    );


    if ($objPersonas->modificacion($datos)){
        $respuesta['exito'] = true;
        $respuesta['mensaje'] = "Los datos se modificaron correctamente";
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