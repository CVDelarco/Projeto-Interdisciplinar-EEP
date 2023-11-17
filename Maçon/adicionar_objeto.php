<?php
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $telefone = $_POST["telefone"];

    if(!empty($nome) && (!empty($descricao) && (!empty($telefone))))
    {
        //verifica se tá cadastrado
        require_once "conecta.php";
        $sql = "SELECT * FROM objetos WHERE nome ='$nome'";
        $result = $conn->query($sql);

        $nome = $_POST["nome"];
        if($_FILES["image"]["error"] === 4){
            echo
            "<script>alert('Image does not exist');</script>"
            ;
        }
        else{
            $fileName = $_FILES["image"]["name"];
            $fileSize= $_FILES["image"]["size"];
            $tmpName= $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg','jpeg','png','webp'];
            $imageExtension = explode('.',$fileName);
            $imageExtension = strtolower(end($imageExtension));
            if(!in_array($imageExtension, $validImageExtension)){
                echo
                "<script> alert('invalid image extension);</script>";
            } else if($fileSize > 10000000){
                echo
                "<script> alert('Image Size is too large');</script>";
            }
            else{
                $newImageName = uniqid();
                $newImageName = uniqid() .'.' . $imageExtension;

                move_uploaded_file($tmpName , 'Imagens/' . $newImageName);
            }
        }

        if($result->num_rows > 0)//usuário já cadastrado
        {
            echo '<h2>Objeto já registrado</h2>' . '</br>';
            header('Refresh: 2; URL=GerenciaObjeto.php');
            echo '<p> Você será redirecionado para o cadastro.';
            exit();
        }
        //Se email não cadastrado, precisa cadastrar
        $sql = "insert into objetos(nome, descricao, telefone, image) values('$nome','$descricao','$telefone','$newImageName')";
        if($conn->query($sql) === TRUE)
        {
            //registro cadastrado
            echo '<h2>Registro realizado com sucesso.</h2>' . '</br>';
            header('Refresh: 2; URL=GerenciaObjeto.php');
            echo '<p> Você será redirecionado para o menu.</p>';
            exit();
        }
        else
        {
            //ocorreu um erro
            echo 'Erro ao cadastrar' . $conn->error;
        }
        //fechar a conexao com o banco de dados
        $conn->close();
    }
    else
    {
        //Se o formulario não foi enviado
        header("Location: URL=GerenciaObjeto.php");
        exit();
    }
}
?>