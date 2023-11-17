<?php
$host = 'localhost'; //Endereço do servidor do banco de dados
$username = 'root';
$password = '';
$database = 'maconaria';


//estabelece a conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $database);

//verificar se houve conexao
if($conn->connect_error)
{
    die('Erro na conexão com o banco de dados' . $conn->connect_error);
}
?>