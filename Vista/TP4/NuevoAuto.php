<?php
    include_once "../Estructura/Cabecera.php";
?>

<div class="card p-3">
    <form action="../Accion_Tp4/nuevoAuto.php" method="post" id="tp4_nuevoAuto">
        <div class="mb-3">
            <label for="Patente" class="form-label">Patente:</label>
            <input type="text" class="form-control" name="Patente" id="Patente" pattern="[A-Z]{3][]{1}\d{3}" placeholder="AAA 123" required>
        </div>
        <div class="mb-3">
            <label for="Marca" class="form-label">Marca: </label>
            <input type="text" class="form-control" name="Marca" id="Marca" required>
        </div>
        <div class="mb-3">
            <label for="Modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="Modelo" id="Modelo" required>
        </div>
        <div class="mb-3">
            <label for="DniDuenio" class="form-label">Dni Due&ntilde;o</label>
            <input type="text" class="form-control" name="DniDuenio" id="DniDuenio" required>
        </div>
        <div class="mb-3">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </form>
</div>


<?php
    include_once "../Estructura/Footer.php";
?>