<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Animais</h3>

    <a href="inseriranimal.php" class="btn btn-primary mt-3">Adicionar Animal</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Idade</th>
                <th>Cliente</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //Chamo a função retornarProdutos() contida no arquivo funcao.php 
                //para retornar todos os registros da tabela produto
                $linhas = retornarAnimal();
                //Utilizo esse laço para que a variável $l receba a cada passo uma linha da tabela produto
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['especie'] ?></td>
                <td><?= $l['idade'] ?></td>
                <td><?= $l['cliente'] ?></td>
                <td>
                    <a href="alteraranimal.php?id=<?= $l['codigo'] ?>" class="btn btn-warning"> Alterar </a>
                    <a href="excluiranimal.php?id=<?= $l['codigo'] ?>" class="btn btn-danger"> Excluir </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    

<?php
    require_once("../rodape.html");
