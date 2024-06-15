<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Animal</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especie" class="form-label">Informe a espécie</label>
                <input type="text" class="form-control" name="especie">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="idade" class="form-label">Informe a idade</label>
                <input type="text" class="form-control" name="idade">
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
        $especie = $_POST['especie'];
        $idade = $_POST['idade'];
        $cliente = $_POST['cliente'];
        if($nome != "" && $especie != "" && $idade != "" && $cliente != ""){
            if(inserirAnimal($nome,$especie,$idade,$cliente))
                echo "Registro inserido com sucesso!";
            else
                echo "Erro ao inserir o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.html");