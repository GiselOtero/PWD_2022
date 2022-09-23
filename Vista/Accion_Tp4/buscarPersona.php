<?php
    include_once "../Estructura/Cabecera.php";

    $datos = data_submitted();
    $objPersona = new AbmPersona();
    $listaPersonas = $objPersona->buscar($datos);

    if(count($listaPersonas)>0){

?>


<table class="table table-striped table-hover table-primary">
    <thead>
        <tr class="table-dark">
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

<div>
    <form action="actualizarDatosPersona.php" method="post">
        <div class="form-group mb-3">
                <label class="form-label" for="NroDni">NroDni</label>
                <input class="form-control" id="NroDni"  name="NroDni" width="80" type="text"
                    value="<?php echo $unaPersona->getNroDni()?>"  readonly>
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="Apellido">Apellido</label>
                <input class="form-control" id="Apellido" name="Apellido" value="<?php echo $unaPersona->getApellido()?>">
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="Nombre">Nombre</label>
                <input class="form-control" id="Nombre" name="Nombre" type="text" value="<?php echo $unaPersona->getNombre()?>">
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="fechaNac">Fecha Nacimiento</label>
                <input class="form-control" id="fechaNac" name="fechaNac" type="date" value="<?php echo $unaPersona->getFechaNac()?>">
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="Telefono">Telefono</label>
                <input class="form-control" id="Telefono" name="Telefono" type="tel" placeholder="000-0000000" pattern="[0-9]{3}-[0-9]{7}" value="<?php echo $unaPersona->getTelefono()?>">
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="Domicilio">Domicilio</label>
                <input class="form-control" id="Domicilio" name="Domicilio" type="text" value="<?php echo $unaPersona->getDomicilio()?>">
            </div>
            <div class="form-group mb-3">
                <!-- <input class="form-control" id="accion" name="accion" value="Editar" type="hidden"> -->
                <input type="submit" class="btn btn-primary" value="Editar">
            </div>
    </form>
</div>
<?php }else { ?>
    <div class="card border-danger mb-3" style="background-color:#ffb3b3">
        <div class="card-body text-danger">
            <h5 class="card-title fw-bold"> No se Encontro datos almacenados </h5>
        </div>
    </div>

<?php }
?>
<?php
    include_once "../Estructura/Footer.php";
?>