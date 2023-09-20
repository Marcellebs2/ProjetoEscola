<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleresult.css">
    <title>Cadastro de Professores</title>
</head>
<body>
    <div class="container">
        <?php
        
            $nome=$_POST['nome'];
            $end=$_POST['end'];
            $fone=$_POST['fone'];
            $sexo=$_POST['sexo'];
            $dn=$_POST['dn'];
            $cpf=$_POST['cpf'];
            $sql= "insert into professores(nome,end,fone,sexo,dn,cpf)
                values('$nome','$end','$fone','$sexo','$dn','$cpf')";
            $con= mysqli_connect("127.0.0.1","root","","escola");

            if(mysqli_connect_errno()){
                echo "Failed to connect to MYSQL:". mysqli_connect_error();
            }
            mysqli_query($con,$sql);

            echo "<h2>Professor cadastrado com sucesso!</h2>";
            mysqli_close($con);

        ?>

        <a href="cad_prof.html">Voltar</a>
    </div>

</body>
</html>