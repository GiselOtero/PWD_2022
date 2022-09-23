<?php
    include_once "../Estructura/Cabecera.php";
?>

<form action="../Accion_Tp4/accionBuscarAuto.php" method="post">
    <div class="mb-3">
        <label for="">Ingrese la patente que desea buscar</label class="form-label">
        <input type="text" name="patente" id="patente" class="form-control">
    </div>
    <div class="">
        <input type="submit" value="Buscar" class="btn btn-light">
    </div>
</form>


<?php
    include_once "../Estructura/Cabecera.php";
?>