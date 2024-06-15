<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        $_SESSION['codigo'] = $codigo;
    } 
    if ($_POST){
        $codigo = $_SESSION['codigo'];
        if(excluirServico($_SESSION['codigo']))
            header('Location: index.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarServicoId($codigo);
?>

    <h3>Excluir Serviço</h3>
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
                <label for="dia" class="form-label">Informe o dia</label>
                <input type="text" class="form-control"     name="dia" value="<?= $dados['dia'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="animal" class="form-label"> Selecione o animal</label>
                <select class="form-select" name="animal" disabled>
                    <?php
                       $linhas = retornarCodAnimal();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['codigo'] == $dados["cod_animal"])
                            echo "<option selected value='{$l['codigo']}'>{$l['nome']}</option>"; 
                        else 
                            echo "<option value='{$l['codigo']}'>{$l['nome']}</option>"; 
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="atendente" class="form-label"> Selecione o atendente</label>
                <select class="form-select" name="atendente" disabled>
                    <?php
                       $linhas = retornarCodAtendente();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['codigo'] == $dados["cod_atendente"])
                            echo "<option selected value='{$l['codigo']}'>{$l['nome']}</option>"; 
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