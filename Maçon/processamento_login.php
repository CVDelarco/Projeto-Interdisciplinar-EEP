<?php
require_once 'conecta.php'; //Incluindo o arquivo conecta.php

//verificar os dados do formulário
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    //Obter os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(!empty($email) && (!empty($senha)))
    {
        //consultar o banco de dados

        $sql = "SELECT * FROM usuarios WHERE email ='$email'";//Escrevendo a consulta
        $result = $conn->query($sql);//Executando a consulta

        if($result->num_rows === 1)//Numero de linhas identico a 1
        {
            $row = $result->fetch_assoc();//Coloca em um vetor
            $password = $row['senha'];//campo senha do BANCO DE DADOS

            if($senha === $password)
            {
                //Iniciar uma sessão 
                session_start();
                $_SESSION['username'] = $email;
                $_SESSION['logged_in'] = true;

                header('Location: index.php');
                exit();
            }
            else
            {
                $error = 'Senha não encontrada';
            }
        }
        else
        {
            $error = 'E-mail não encontrado';
        }
    } else {
        $error = 'Preencha todos os campos';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>
    <h1>LOGIN INVÁLIDO</h1>
    <?php
    if(isset($error)):
    ?>

    <p>
        <?php
        if($error === 'Senha inválida')
        {
            echo '<h2>' . $error . '</h2>';
        }
        else
        {
            if($error === 'Email não encontrado')
            {
                echo '<h2>' . $error . '</h2>';
            }
            else
            {
                echo $error;
            }
        }
        ?>
    </p>
    <?php endif; ?>
    <?php 
    if(isset($error))
    {
        header('Refresh: 2; URL=login.php');
        echo '<p>Você será redirecionado para a página de login</p>';
        exit();
    }
    ?>
</body>
</html>