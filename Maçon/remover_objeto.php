<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];

    if (!empty($nome)) {
        // Verify if the object is registered
        require_once "conecta.php";
        $sql = "SELECT * FROM objetos WHERE nome ='$nome'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Object found, proceed with deletion
            $row = $result->fetch_assoc();
            $imageToDelete = $row['image']; // Assuming the image name is stored in the 'image' column

            // Delete the object from the database
            $deleteSQL = "DELETE FROM objetos WHERE nome ='$nome'";
            if ($conn->query($deleteSQL) === TRUE) {
                // Delete the image file
                $imagePath = 'Imagens/' . $imageToDelete;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                
                echo '<h2>Objeto removido</h2>' . '</br>';
                header('Refresh:2; URL=index.php');
                echo '<p>Você será redirecionado para o menu.';
                exit();
            } else {
                echo 'Erro ao deletar objeto: ' . $conn->error;
            }
        } else {
            // Object not found
            echo '<h2> Objeto não encontrado</h2>' . '</br>';
            header('Refresh:2; URL=GerenciaObjeto.php');
            echo '<p> Você será redirecionado para o menu.';
        }

        // Close the database connection
        $conn->close();
    } else {
        // If the form was not submitted
        header("Location: index.php");
        exit();
    }
}
?>