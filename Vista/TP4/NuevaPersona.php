<?php
include_once "../Estructura/Cabecera.php";

    $datos = data_submitted();
    
    if(isset($datos['NroDni'])){

    }
    
?>

<div class="card p-3">
    <form action="../Accion_Tp4/accionNuevaPersona.php" method="post" id="tp4_nuevaPersona">
        <div class="mb-3">

            <label for="" class="form-label">Ingrese Dni</label>
            <?php 
            if(isset($datos['NroDni'])){
                $dni = $datos['NroDni'];
                echo "<input type='text' class='form-control' name='NroDni' id='NroDni' value='".$dni."' >";
            }else{
                echo "<input type='text' class='form-control' name='NroDni' id='NroDni' required>";
            } ?>
            
            <!-- <input type="text" class="form-control" name="NroDni" id="NroDni"> -->

        </div>
        <div class="mb-3">
            <label for="Apellido">Apellido: </label>
            <input type="text" class="form-control" name="Apellido" id="Apellido" required>
        </div>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="Nombre" id="Nombre">
        </div>
        <div class="mb-3">
            <label for="fechaNac">Fecha Nacimiento: </label>
            <input type="date" class="form-control" name="fechaNac" id="fechaNac" min="1920-01-01" max="2004-01-01" required>
            <!-- <input type="text" class="form-control" name="fechaNac" id="fechaNac" placeholder="aaaa-mm-dd" required> -->
        </div>
        <div class="mb-3">
            <label for="Telefono">Telefono</label>
            <input type="text" class="form-control" name="Telefono" id="Telefono" type="tel" placeholder="000-0000000" pattern="[0-9]{3}-[0-9]{7}" required>
        </div>
        <div class="mb-3">
            <label for="Domicilio">Domicilio: </label>
            <input type="text" class="form-control" name="Domicilio" id="Domicilio" required>
        </div>
        <div>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </form>
</div>



<?php
    include_once "../Estructura/Footer.php";
?>