<?php
    include_once "../Estructura/Cabecera.php";
?>

<div class="card p-3">
    <form action="../Accion_Tp4/buscarPersona.php" method="post" id="tp4_buscarPersona">
        <div class="mb-3">
            <label for="nrodni" class="form-label">Numero de DNI</label>
            <input type="text" name="NroDni" id="NroDni" class="form-control" required>
        </div>
        <div class="mb-3"><input type="submit" value="Buscar" class="btn btn-success"></div>
    </form>
</div>


<?php
    include_once "../Estructura/Footer.php";
?>