<?php
include_once "../Estructura/Cabecera.php";

$datos = data_submitted();

$objPersona = new AbmPersona();
$objAuto = new AbmAuto();

$listaPersonas = $objPersona->buscar($datos);
$datos['DniDuenio'] = $datos['NroDni'];

$listaAutosPersona = $objAuto->buscar($datos);



if(count($listaPersonas)>0){
    $unaPersona = $listaPersonas[0];
    

?>
<h5>Persona</h5>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Nro Dni</th>
            <th scope="col">Apellido</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha Nac</th>
            <th scope="col">Telefono</th>
            <th scope="col">Domicilio</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $unaPersona=$listaPersonas[0];
            echo "<tr>";
            echo "<td>".$unaPersona->getNroDni()."</td>";
            echo "<td>".$unaPersona->getApellido()."</td>";
            echo "<td>".$unaPersona->getNombre()."</td>";
            echo "<td>".$unaPersona->getFechaNac()."</td>";
            echo "<td>".$unaPersona->getTelefono()."</td>";
            echo "<td>".$unaPersona->getDomicilio()."</td>";
            echo "</tr>";
        ?>
    </tbody>
</table>
<h5>Autos Asociados</h5>
<?php

    if(count($listaAutosPersona)>0){
    
?>
    <table class="table table-striped table-hover">
        <thead>
                <tr>
                    <th scope="col">Patente</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Duenio</th>

                </tr>
        </thead>

        <tbody>
            <?php
                foreach($listaAutosPersona as $unAuto){
                    echo "<tr>";
                    echo "<td>".$unAuto->getPatente()."</td>";
                    echo "<td>".$unAuto->getMarca()."</td>";
                    echo "<td>".$unAuto->getModelo()."</td>";
                    echo "<td>".$unAuto->getDuenio()->getNroDni()."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

<?php }else{
    echo "no tiene autos asociados";
    }
} ?>


<?php
include_once "../Estructura/Footer.php";
?>