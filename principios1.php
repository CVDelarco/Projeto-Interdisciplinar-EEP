<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maçons RP-Principios</title>
    <link rel="stylesheet" href="css/principios.css">
</head>

<body  style="display: flex; justify-content: center; background-color: #353dda9a; padding: 40px 0;">
    <div style="width: 80%;height: 80% ;background-color: white;">
        <div class="quadrado">
        <div class="nav">
            <nav>
                <div class="nav-logo">
                    <img class="logotipo" src="Imagens/logo.jfif" style="margin-top: 10px;" alt="Logo">
                </div>
                <div style="display: flex; align-items: center; width: 80%; justify-content: end;">
                    <p style="margin: 0 10px;">E-mail:arlsriodaspedras@gmail.com</p>
                    <a href="index1.php" style="margin-left: 10px;">Home</a>
                    <ul style="list-style:none; padding-inline-start: 10px;">
                        <li class="dropdown">
                            <a>Informações</a>
                            <div class="dropdown-menu">
                                <a href="oqemaconaria1.php">O que é Maçonaria?</a>
                                <a href="historia1.php">História da Maçonaria</a>
                                <a href="principios1.php">Princípios</a>
                                <a href="ritos1.php">Ritos</a>
                                <a href="confederacoes1.php">Confederações</a>
                            </div>
                        </li>
                    </ul>
                    <a href="login.php" style="margin-left: 10px; margin-right:30px">Login</a>
                </div>
            </nav>
        </div>
            <h1 style="text-align: center; padding: 15px;">Os Princípios da Maçonaria</h1>
            <ol class="a">
                <li class="b">A Maçonaria é uma Instituição universalista, filosófica, espiritualista, filantrópica e humanitária, fundamentada
                nos postulados da LIBERDADE, IGUALDADE, FRATERNIDADE, PAZ, JUSTIÇA e DEMOCRACIA.</li>
        
                <li class="b">Proclama a existência de um princípio criador, o qual denomina de GRANDE ARQUITETO DO UNIVERSO.</li>
        
                <li class="b">Não é religião, seita ou agremiação política e não permite, em suas reuniões, qualquer discussão sectária.</li>
        
                <li class="b">É uma escola de aperfeiçoamento moral e intelectual, congregando homens livres e de bons costumes, iniciados e
                unidos pelo sentimento de fraternidade. Volta-se para a livre investigação da verdade sem preocupação de
                fronteiras e de raças.</li>
        
                <li class="b">Proclama o trabalho como direito e dever principal do homem, indispensável à evolução da humanidade; combate os
                privilégios e a exploração do homem pelo homem.</li>
        
                <li class="b">Respeita as leis do País, defende a livre manifestação do pensamento e a dignidade da pessoa humana.</li>
            </ol>
            <div style="display:flex">
            <div style="width:50%">
                <form onsubmit="sendEmail(); reset(); return false">
                    <h3>Entre em contato</h3>
                    <input type="tel" id="telefone" placeholder="telefone" required>
                    <input type="email" id="email" placeholder="email" required>
                    <input type="text" id="nome" placeholder="nome" required>
                    <textarea id="message" rows="4" placeholder="Mensagem"></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>

            <div style="display:flex;align-items:center; flex-direction:column; width:50%">
                <p style="text-align: center; margin: 0 0 10px 0;">Endereço: Rua Pedro Angelo Pioto, n˚ 81, Rio das
                    Pedras-SP,
                    Bairro Vitória Perin Cesarino</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.8843829374937!2d-47.59924662374517!3d-22.84376663562362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c6235084174fe5%3A0xb73d28e3727d0fe0!2sRua%20Pedro%20Pioto%2C%2081%20-%20Conj.%20Hab.%20Vitoria%20Perim%20Cezarino%2C%20Rio%20das%20Pedras%20-%20SP%2C%2013390-000!5e0!3m2!1spt-BR!2sbr!4v1699719630058!5m2!1spt-BR!2sbr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
                SecureToken:"7e7fa3b0-2933-4b66-ad00-145ba7df1ed6",
                To : 'caiovd2@outlook.com',
                From : "caiovd2@outlook.com",
                Subject : "Novo formulário de contato",
                Body : "Nome: "+ document.getElementById("nome").value 
                        + "<br> Email: " + document.getElementById("email").value
                        + "<br> Telefone: " + document.getElementById("telefone").value
                        + "<br> Mensagem: " + document.getElementById("message").value
                    }).then(
                    message => alert(message)
                    );
        }
    </script>
    <style>        
    form {
            background: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px 10px;
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
        </div>
        </div>
    </div>
    
</body>

</html>