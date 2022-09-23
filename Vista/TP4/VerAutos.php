<?php
    include_once "../Estructura/Cabecera.php";
    $datos=data_submitted();
    $obj = new AbmAuto();
    $listaAutos=$obj->buscar(null);
  
    if(count($listaAutos)>0){
?>
       <div class="table-responsive">
       <table class="table table-striped table-hover table-primary">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Patente</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Dueño</th>

                </tr>
            </thead>

            <tbody>

    
   <?php
        foreach($listaAutos as $unAuto){
            echo "<tr>";
            echo "<td>".$unAuto->getPatente()."</td>";
            echo "<td>".$unAuto->getMarca()."</td>";
            echo "<td>".$unAuto->getModelo()."</td>";
            echo "<td>".$unAuto->getDuenio()->getApellido()." ".$unAuto->getDuenio()->getNombre()."</td>";
            echo "</tr>";
        }
    }
   ?>

</tbody>

</table>

</div>


<?php
    include_once "../Estructura/Footer.php";
?>