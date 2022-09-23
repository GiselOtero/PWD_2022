<?php
include_once "../Estructura/Cabecera.php";
?>

<div class="card p-3">
    <form action="../Accion_Tp4/accionCambioDuenio.php" method="post" id="tp4_cambioDuenio">
        <div class="mb-3">
            <label for="Patente" class="form-label">Patente: </label>
            <input type="text" name="Patente" id="Patente" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="NroDni" class="form-label">Numero de Dni del nuevo duenio: </label>
            <input type="text" name="NroDni" id="NroDni" class="form-control" required>
        </div>
        <div>
            <input type="submit" value="Modificar" class="btn btn-primary">
        </div>

    </form>

</div>

<?php
include_once "../Estructura/Footer.php";
?>