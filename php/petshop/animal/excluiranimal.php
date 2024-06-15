<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        $_SESSION['codigo'] = $codigo;
    } 
    if ($_POST){
        $codigo = $_SESSION['codigo'];
        if(excluirAnimal($_SESSION['codigo']))
            header('Location: index.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarAnimalId($codigo);
?>

    <h3>Excluir Animal</h3>
    <form action="excluir_produto.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" disabled
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especie" class="form-label">Informe a espécie</label>
                <input type="text" class="form-control"     name="especie" value="<?= $dados['especie'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="idade" class="form-label">Informe a idade</label>
                <input type="text" class="form-control" name="idade" 
                    value="<?= $dados['idade'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente" class="form-label"> Selecione o cliente</label>
                <select class="form-select" name="cliente" disabled>
                    <?php
                       $linhas = retornarCodCliente();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['codigo'] == $dados["cod_cliente"])
                            echo "<option selected value='{$l['codigo']}'>{$l['especie']}</option>"; 
                        else 
                            echo "<option value='{$l['codigo']}'>{$l['nome']}</option>"; 
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir">
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");