<?php
    include_once "../Estructura/Cabecera.php";
    $datos=data_submitted();
    $obj = new AbmAuto();
    $listaAutos=$obj->buscar(null);
  
    if(count($listaAutos)>0){
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
        foreach($listaAutos as $unAuto){
            echo "<tr>";
            echo "<td>".$unAuto->getPatente()."</td>";
            echo "<td>".$unAuto->getMarca()."</td>";
            echo "<td>".$unAuto->getModelo()."</td>";
            echo "<td>".$unAuto->getDuenio()->getNroDni()."</td>";
            echo "</tr>";
        }
    }
   ?>

</tbody>

</table>




<?php
    include_once "../Estructura/Footer.php";
?>