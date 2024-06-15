<?php
    require_once "cabecario.php";
?>

<form action="exerc2resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor" id="valor">
            <label for="valor1" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor1" id="valor1">
            <label for="valor2" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor2" id="valor2">
            <label for="valor3" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor3" id="valor3">
            <label for="valor4" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor4" id="valor4">
            <label for="valor5" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor5" id="valor5">
            <label for="valor6" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor6" id="valor6">
            <label for="valor7" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor7" id="valor7">
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