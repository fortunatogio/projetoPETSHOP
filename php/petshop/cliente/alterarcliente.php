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
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        if($nome != "" && $telefone != "" && $endereco){
            if(alterarCliente($nome,$telefone,$endereco,$_SESSION['codigo']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarClienteId($codigo);
?>

    <h3>Alterar Cliente</h3>
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
                <label for="telefone" class="form-label">Informe o telefone</label>
                <input type="text" class="form-control"     name="telefone" value="<?= $dados['telefone'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="endereco" class="form-label">Informe o endereço</label>
                <input type="text" class="form-control" name="endereco" 
                    value="<?= $dados['endereco'] ?>">
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