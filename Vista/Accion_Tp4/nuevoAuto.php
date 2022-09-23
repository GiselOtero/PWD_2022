<?php
include_once "../Estructura/Cabecera.php";

$datos = data_submitted();
$objAuto = new AbmAuto();
$objPersona = new AbmPersona();

$datos['NroDni'] = $datos['DniDuenio'];
$listaAuto = $objAuto->buscar($datos);
$listaPersonas = $objPersona->buscar($datos);

$respuesta=array(
    'exito' => false,
    'mensaje' => " Hubo un error al ingresar los datos nuevos",
    'link' => "<a class='btn btn-primary' href='../TP4/NuevoAuto.php' role='button'>Ingresar datos Auto</a>"
);



if(count($listaPersonas) == 0){
    $respuesta['exito'] = false;
    $respuesta['mensaje'] = "El dato del dueño no se encuetra almacenado";
    /* $respuesta['link'] = "../TP4/NuevaPersona.php?NroDni=".$datos['NroDni']; */
    $respuesta['link'] = "<a class='btn btn-primary' href='../TP4/NuevaPersona.php?NroDni=".$datos['NroDni']."' role='button'>Ingresar datos Persona</a>";
}else{
    if(count($listaAuto) > 0){
        $respuesta['exito'] = false;
        $respuesta['mensaje'] = "La patente ingresada ya se encuentra almacenada";
        /* $respuesta['link'] = "../TP4/NuevoAuto.php"; */
        $respuesta['link'] = "<a class='btn btn-primary' href='../TP4/NuevoAuto.php' role='button'>Ingresar datos Auto</a>";

    }else{
        if($objAuto->alta($datos)){
            $respuesta['exito'] = true;
            $respuesta['mensaje'] = " Los Datos se guardaron correctamente ";
            /*$respuesta['link'] = "../TP4/VerAutos.php"; */
            $respuesta['link'] = "<a class='btn btn-primary' href='../TP4/VerAutos.php' role='button'>Lista Autos</a>";

        }
    }
}
?>




<?php if($respuesta['exito'] == true){ ?>
    <div class="card border-success mb-3" style="">
        <div class="card-body text-success">
            
<?php }else {?>
    <div class="card border-danger mb-3" style="">
       <div class="card-body text-danger">

<?php } ?>
        <h5 class="card-title"> <?php echo $respuesta['mensaje']; ?> </h5>
        <?php echo $respuesta['link'] ?>
    </div>
</div>



<?php
include_once "../Estructura/Footer.php";
?>