<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Serviços</h3>

    <a href="inserirservico.php" class="btn btn-primary mt-3">Adicionar Serviço</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Dia</th>
                <th>Animal</th>
                <th>Atendente</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //Chamo a função retornarProdutos() contida no arquivo funcao.php 
                //para retornar todos os registros da tabela produto
                $linhas = retornarServico();
                //Utilizo esse laço para que a variável $l receba a cada passo uma linha da tabela produto
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['dia'] ?></td>
                <td><?= $l['animal'] ?></td>
                <td><?= $l['atendente'] ?></td>
                <td>
                    <a href="alterarservico.php?id=<?= $l['codigo'] ?>" class="btn btn-warning"> Alterar </a>
                    <a href="excluirservico.php?id=<?= $l['codigo'] ?>" class="btn btn-danger"> Excluir </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    

<?php
    require_once("../rodape.html");
