<?php

    //Função para conexão com o banco de dados
    function conectarBanco(){
        //Instancio o meu objeto PDO que fornece as funções para manipulação dos dados
        $conexao = new PDO("mysql:host=localhost; dbname=petshop", "root", "");
        return $conexao;
    }

    // FUNÇÕES PARA ANIMAIS

    /*Para poder alterar ou excluir os produtos, preciso consultar todos os registros do banco de dados
    Utilizo o INNER JOIN para buscar no banco também os dados da categoria, para poder mostrar o nome da categoria 
    para o usuário, não apenas o seu código*/
    function retornarCodCliente(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM cliente";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function retornarCodAnimal(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM animal";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function retornarCodAtendente(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM atendente";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
    function retornarAnimal(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM animal";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
    //Função que realiza a inserção de um produto
    function inserirAnimal($nome, $especie, $idade, $cod_cliente){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO animal (nome, especie, idade, cod_cliente) VALUES (:nome, :especie, :idade, :cod_cliente)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":especie", $especie);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":cod_cliente", $cod_cliente);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Para poder alterar ou excluir um registro, precisamos consultar o registro pela sua chave primária (id)
    function consultarAnimalId($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM animal WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Função que realiza a alteração de um produto
    function alterarAnimal($nome, $especie, $idade,$cliente,$codigo,){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE animal SET nome = :nome, especie = :especie, idade = :idade, WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":especie", $especie);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":cliente", $cliente);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Função que realiza a exclusão de um produto
    function excluirAnimal($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "DELETE FROM animal WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }


    // FUNÇÕES PARA CLIENTE

    function retornarCliente(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM cliente";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function inserirCliente($nome, $telefone, $endereco){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO cliente (nome, telefone, endereco) VALUES (:nome, :telefone, :endereco)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":endereco", $endereco);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function consultarClienteId($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM cliente WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function alterarCliente($nome, $telefone, $endereco, $codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE cliente SET nome = :nome, telefone = :telefone, endereco = :endereco, WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function excluirCliente($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "DELETE FROM cliente WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    // FUNÇÕES PARA ATENDENTE

    function retornarAtendente(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM atendente";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function inserirAtendente($nome, $telefone, $funcao, $cod_cliente){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO atendente (nome, telefone, funcao, cod_cliente) VALUES (:nome, :telefone, :funcao, :cod_cliente)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":funcao", $funcao);
            $stmt->bindValue(":cod_cliente", $cod_cliente);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function consultarAtendenteId($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM atendente WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function alterarAtendente($nome, $telefone, $funcao, $cliente, $codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE atendente SET nome = :nome, telefone = :telefone, funcao = :funcao, WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":funcao", $funcao);
            $stmt->bindValue(":cliente", $cliente);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }


    // FUNÇÕES PARA SERVIÇOS

    function retornarServico(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM servico";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function inserirServico($nome, $dia, $animal, $atendente){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO servico (nome, dia, animal, atendente) VALUES (:nome, :dia, :animal, :atendente)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":dia", $dia);
            $stmt->bindValue(":animal", $animal);
            $stmt->bindValue(":atendente", $atendente);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function consultarServicoId($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM servico WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Função que realiza a alteração de um produto
    function alterarServico($nome, $dia, $animal, $atendente, $codigo,){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE servico SET nome = :nome, dia = :dia, animal = :animal, atendente = :atendente, WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":dia", $dia);
            $stmt->bindValue(":animal", $animal);
            $stmt->bindValue(":atendente", $atendente);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Função que realiza a exclusão de um produto
    function excluirServico($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "DELETE FROM servico WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
