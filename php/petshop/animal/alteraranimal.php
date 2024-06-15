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
        $especie = $_POST['especie'];
        $idade = $_POST['idade'];
        $cliente = $_POST['cliente'];
        if($nome != "" && $especie != "" && $idade && $cliente != ""){
            if(alterarAnimal($nome,$especie,$idade,$cliente,$_SESSION['codigo']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarAnimalId($codigo);
?>

    <h3>Alterar Animal</h3>
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
                <label for="especie" class="form-label">Informe a espécie</label>
                <input type="text" class="form-control"     name="especie" value="<?= $dados['especie'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="idade" class="form-label">Informe a idade</label>
                <input type="text" class="form-control" name="idade" 
                    value="<?= $dados['idade'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente" class="form-label"> Selecione o cliente</label>
                <select class="form-select" name="cliente">
                    <?php
                       $linhas = retornarCodCliente();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['codigo'] == $dados["cod_cliente"])
                            echo "<option selected value='{$l['codigo']}'>{$l['nome']}</option>"; 
                        else 
                            echo "<option value='{$l['codigo']}'>{$l['especie']}</option>"; 
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