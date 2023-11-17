<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maçons RP-Gerenciando Objetos</title>
    <link rel="stylesheet" href="css/indexstyle.css">
</head>

<body style="display: flex; justify-content: center; background-color: #353dda9a; padding: 40px 0;">

    <style>
        form {
            background: #fff;
            display: flex;
            flex-direction: column;
            padding: 2vw 4vw;
            width: 90%;
            max-width: 600px;
            border-radius: 10px;
        }

        form h3 {
            color: #555;
            font-weight: 800;
            margin-bottom: 20px;
        }

        form input,
        form textarea {
            border: 0;
            margin: 10px 0;
            padding: 20px;
            outline: none;
            background-color: #f5f5f5;
            font-size: 16px;
        }

        form button {
            padding: 15px;
            background: #ff5361;
            color: #fff;
            font-size: 18px;
            border: 0px;
            outline: none;
            cursor: pointer;
            width: 150px;
            margin: 20px auto 0;
            border-radius: 30px;
        }
    </style>
    <div style="width: 80%;height: 80% ;background-color: white;">
    <div class="nav">
            <nav>
                <div class="nav-logo">
                    <img class="logotipo" src="Imagens/logo.jfif" style="margin-top: 10px;" alt="Logo">
                </div>
                <div style="display: flex; align-items: center; width: 80%; justify-content: end;">
                    <p style="margin: 0 10px;">E-mail:arlsriodaspedras@gmail.com</p>
                    <a href="index.php" style="margin-left: 10px;">Home</a>
                    <ul style="list-style:none;">
                        <li class="dropdown">
                            <a>Informações</a>
                            <div class="dropdown-menu">
                                <a href="oqemaconaria.php">O que é Maçonaria?</a>
                                <a href="historia.php">História da Maçonaria</a>
                                <a href="principios.php">Princípios</a>
                                <a href="ritos.php">Ritos</a>
                                <a href="confederacoes.php">Confederações</a>
                            </div>
                        </li>
                    </ul>
                    <a href="GerenciaObjeto.php" style="margin-left: 10px;text-decoration:none;">Gerenciar Objetos</a>
                    <a href="index1.php" onclick="session_destroy()" style="margin-left: 10px;">Sair</a>
                </div>
            </nav>
        </div>



        <div style="display:flex; flex-direction:column; align-items:center">
            <h1 style="margin:10px">Adicionando Objetos</h1>
            <form method='post' action="adicionar_objeto.php" enctype="multipart/form-data">
                <label for="titulo">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="image">Imagem:</label>
                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .webp" required>

                <label for="artista">Descrição:</label>
                <input type="text" id="descricao" name="descricao" required>

                <label for="album">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>

                <button type="reset">Limpar</button>
                <button type="submit">Enviar</button>
            </form>

            <h1 style="margin:10px">Editando Objetos</h1>
            <form method='post' action="editar_objeto.php" enctype="multipart/form-data">
                <label for="titulo">Nome original:</label>
                <input type="text" id="nome1" name="nome1" required>

                <label for="titulo">Novo nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="image">Imagem:</label>
                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .webp" required>

                <label for="artista">Descrição:</label>
                <input type="text" id="descricao" name="descricao" required>

                <label for="album">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>

                <button type="reset">Limpar</button>
                <button type="submit">Enviar</button>
            </form>

            <h1 style="margin:10px">Removendo Objetos</h1>
            <form method="post" action="remover_objeto.php">
                <label for="nome">Nome do objeto:</label>
                <input type="text" id="nome" name="nome" required>

                <button type="reset">Limpar</button>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>

</html>