<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maçons RP-Login</title>
    <link rel="stylesheet" href="css/loginstyle.css">
    <style>
        
        .body1 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            height: 100vh;
            margin: 0;
            background-color: white;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container h1 {
            font-size: 24px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container input[type="email"],
        .login-container button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .login-container .logout-button {
            background-color: #dc3545;
        }
    </style>
</head>
<body  style="display: flex; justify-content: center; background-color: #353dda9a; padding: 40px 0;">
    <div class="body1">
        <img src="Imagens/logo.jfif" style="position: absolute; top: 60px; left: 250px;">
        <div class="login-container">
            <h1>Login</h1>
            <form action="processamento_login.php" method="post">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <button type="submit">Entrar</button>
                <a href="index1.php" style="text-decoration: none; color: white;"><button type="button" class="logout-button">Sair</button></a>
            </form>
        </div>
    </div>
</body>
</html>