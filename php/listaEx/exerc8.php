<?php
    require_once "cabecario.php";
?>

<form action="exerc8resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor" id="valor">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

<?php
    require_once"rodape.php";