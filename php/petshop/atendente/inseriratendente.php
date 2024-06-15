<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Atendente</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone</label>
                <input type="text" class="form-control" name="telefone">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="funcao" class="form-label">Informe a função</label>
                <input type="text" class="form-control" name="funcao">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente" class="form-label"> Selecione o cliente</label>
                <select class="form-select" name="cliente">
                    <?php
                       $linhas = retornarCodCliente();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
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
    if ($_POST){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $funcao = $_POST['funcao'];
        $cliente = $_POST['cliente'];
        if($nome != "" && $telefone != "" && $funcao != "" && $cliente != ""){
            if(inserirAtendente($nome,$telefone,$funcao,$cliente))
                echo "Registro inserido com sucesso!";
            else
                echo "Erro ao inserir o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.html");