<?php
    require_once("../cabecalho.php");
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        session_start();
        $_SESSION['codigo'] = $codigo;
    } else
        $codigo = $_SESSION['codigo'];
    if ($_POST){
        $nome = $_POST['nome'];
        $dia = $_POST['dia'];
        $animal = $_POST['animal'];
        $atendente = $_POST['atendente'];
        if($nome != "" && $dia != "" && $animal && $atendente != ""){
            if(alterarServico($nome,$dia,$animal,$atendente,$_SESSION['codigo']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarServicoId($codigo);
?>

    <h3>Alterar Servico</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" 
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dia" class="form-label">Informe o dia</label>
                <input type="text" class="form-control"     name="dia" value="<?= $dados['dia'] ?>">
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="animal" class="form-label"> Selecione o animal</label>
                <select class="form-select" name="animal">
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
                <select class="form-select" name="atendente">
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
                <button type="submit" class="btn btn-success">
                    Salvar
                </button>
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");