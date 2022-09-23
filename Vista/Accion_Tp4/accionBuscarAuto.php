<?php
    include_once "../Estructura/Cabecera.php";
   

    $obj = new AbmAuto();
    $datos=data_submitted();
    $listaAutos=$obj->buscar($datos);
?>

<?php 
if(count($listaAutos)>0){
    $unAuto=$listaAutos[0]; 
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
   
    echo "<td>".$unAuto->getPatente()."</td>";
    echo "<td>".$unAuto->getMarca()."</td>";
    echo "<td>".$unAuto->getModelo()."</td>";
    echo "<td>".$unAuto->getDuenio()->getNroDni()."</td>";
    ?>
  
   </tbody>
</table>
<?php }else { ?>
    <div class="card border-danger mb-3" style="">
        <div class="card-body text-danger">
            <h5 class="card-title"> No se Encontro datos almacenados </h5>
        </div>
    </div>

<?php }
?>


<?php
    include_once "../Estructura/Footer.php";
?>