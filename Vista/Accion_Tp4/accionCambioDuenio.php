<?php
include_once "../Estructura/Cabecera.php";

$datos = data_submitted();
$objAuto = new AbmAuto();
$objPersona = new AbmPersona();
$listaAuto = $objAuto->buscar($datos);
$listaPersonas = $objPersona->buscar($datos);

$respuesta=array(
    'exito'=>false,
    'resultado'=>"El dato no se pudo modificar correctamente"
);



if(count($listaAuto)>0){
    $unAuto=$listaAuto[0];
    if(count($listaPersonas)>0){
        
        $arreglo=array(
            'Patente'=>$unAuto->getPatente(),
            'Marca'=>$unAuto->getMarca(),
            'Modelo'=>$unAuto->getModelo(),
            'DniDuenio'=>$datos['NroDni']
        );
        $respuesta['exito']= true;
        //$resp = $objAuto->modificacion($arreglo);
        
    }else{
        $respuesta['resultado'] = "El nro dni no se encuentra almacenado";
    }
}else{
    $respuesta['resultado'] = "El nro de patente no se encuentra almacenado";

}

if($respuesta['exito'] && $objAuto->modificacion($arreglo) ){
    $respuesta['resultado'] = "los datos se modificaron correctamente"; 
}

/* if($resp){
    echo "los datos se modificaron correctamente";
}else{
    echo "El dato no se pudo modificar correctamente";
 }*/

if($respuesta['exito']){
    echo '<div class="card border-success mb-3" style="background-color: #ccffdd">';
        echo '<div class="card-body text-success">';
}else{
    echo '<div class="card border-danger mb-3" style="background-color:#ffb3b3">';
        echo '<div class="card-body text-danger ">';
}

    echo '<h5 class="card-title fw-bold">'.$respuesta['resultado'].'</h5>';
    
 echo '</div>';
  
echo '</div>';
?>
<?php
include_once "../Estructura/Footer.php";
?>