<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleresult.css">
    <title>Cadastro de Alunos</title>
</head>
<body>
    
    <div class="container">

        <?php
        
            // Declaração de variáveis
            $nome= $_POST['nome'];
            $end= $_POST['end'];
            $fone= $_POST['fone'];
            $sexo= $_POST['sexo'];
            $dn= $_POST['dn'];
            $serie= $_POST['serie'];

            // Variável sql para criar as colunas da tabela alunos
            $sql= "insert into alunos(nome,end,fone,sexo,dn,serie)
                values('$nome','$end','$fone','$sexo','$dn','$serie')";

            // Variável para conectar o códgio ao SQL
            $con= mysqli_connect("127.0.0.1","root","","escola");

            // Estrutura condicional para verificar se o mysql foi conectado
            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL: ". mysqli_connect_error();
            }

            // Fechamento das variáveis sql e con
            mysqli_query($con,$sql);

            echo "<h2>Aluno cadastrado com sucesso!</h2>";
            mysqli_close($con);
        
        ?>

        <a href="cad_prof.html">Voltar</a>
    </div>

</body>
</html>