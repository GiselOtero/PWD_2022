<?php
    include_once "../Estructura/Cabecera.php";
?>
<div class="card p-3">
    
    <form action="../Accion_Tp4/accionBuscarAuto.php" method="post" id="tp4_buscarAuto" name="tp4_buscarAuto">
        <div class="mb-3">
            <label for="patente" class="form-label">Ingrese la patente que desea buscar</label >
            <input type="text" name="Patente" id="Patente" class="form-control" pattern="[A-Z]{3][]{1}\d{3}" placeholder="AAA 123" required>
        </div>
        <div class="mb-3">
            <input type="submit" value="Buscar" class="btn btn-success">
        </div>
    </form>
</div>


<?php
    include_once "../Estructura/Footer.php";
?>