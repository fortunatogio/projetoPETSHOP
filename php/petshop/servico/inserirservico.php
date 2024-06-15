<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Serviço</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dia" class="form-label">Informe o dia</label>
                <input type="text" class="form-control" name="dia">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="animal" class="form-label"> Selecione o animal</label>
                <select class="form-select" name="animal">
                    <?php
                       $linhas = retornarCodAnimal();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='{$l['codigo']}'>{$l['nome']}</option>";
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="atendente" class="form-label"> Selecione o atendente</label>
                <select class="form-select" name="cliente">
                    <?php
                       $linhas = retornarCodAtendente();
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
        $dia = $_POST['dia'];
        $animal = $_POST['animal'];
        $atendente = $_POST['atendente'];
        if($nome != "" && $dia != "" && $animal != "" && $atendente != ""){
            if(inserirServico($nome,$dia,$animal,$atendente))
                echo "Registro inserido com sucesso!";
            else
                echo "Erro ao inserir o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.html");