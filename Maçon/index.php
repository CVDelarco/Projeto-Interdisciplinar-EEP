<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maçons RP-Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indexstyle.css">

</head>

<body style="display: flex; justify-content: center; background-color: #353dda9a; padding: 40px 0;">

    <style>
        .carousel-item {
            height: 32rem;
            background-color: #777;
            color: white;
            position: relative;
        }

        .container {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding-bottom: 50px;
        }
        .container1 {
            display: flex;
            flex-direction: row;
            gap: 2rem;
            margin: 2rem;
            justify-content: space-evenly;
            align-items: start;
            text-align: center;
            flex-wrap: wrap; /* Allow items to wrap to the next line */
        }

        .item {
            border: 5px solid black;
            width: 29%; /* Set a fixed width to accommodate three items in a row */
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            margin: 0 20px 10px 20px;
            flex-grow: 0; /* Prevent items from growing to fill the space */
        }

        .item img {
            width: 100%; /* Make all images fill the container */
            height: 100%; /* Ensure the image takes up the full height */
            object-fit: cover; /* Maintain aspect ratio and cover the entire div */
            object-position: center; /* Position the image at the center */
        }

    .overlay-image {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            background-position: center;
            background-size: cover;
            opacity: 0.5;
        }

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

    <div style="width: 80%;height: 80% ;background-color: white;">
        <div class="nav">
            <nav>
                <div class="nav-logo">
                    <img class="logotipo" src="Imagens/logo.jfif" style="margin-top: 10px;" alt="Logo">
                </div>
                <div style="display: flex; align-items: center; width: 80%; justify-content: end;">
                    <p style="margin: 0 10px;">E-mail:arlsriodaspedras@gmail.com</p>
                    <ul style="list-style:none; margin-top:10px;">
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

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="overlay-image" style="background-image:url(./Imagens/xeox.jpg);"></div>
                    <div class="container">
                        <p style="font-size: 30px;">A solidariedade está em suas mãos! Sua doação pode fazer toda a diferença, trazendo conforto e apoio para aqueles que precisam.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-image" style="background-image:url(./Imagens/imagemlegal.jpg);"></div>
                    <div class="container">
                        <p style="font-size: 30px;">Seus itens doados podem transformar o ambiente em um lugar mais acolhedor e reconfortante para todos.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-image" style="background-image:url(./Imagens/mobilidade.1190x400.jpg);"></div>
                    <div class="container">
                        <p style="font-size: 30px;">A solidariedade é o maior sinal de força e compaixão. Doe hoje
                            equipamentos para os mais necessitados.</p>
                    </div>
                </div>
            </div>
            <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="sr-only">Next</span>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

        <h1 style="margin-left: 50px;">Produtos disponíveis:</h1>
<div class="container1">
    <?php
    require 'conecta.php';
    $rows = mysqli_query($conn, "SELECT * FROM objetos ORDER BY id DESC");
    $count = 0;
    foreach ($rows as $row) : ?>
        <div class="item">
            <div style="border-style:hidden hidden dashed hidden; border-width: 5px 5px; width:100%;">
            <img style="height:150px;margin: 20px 0px 20px 0" src="Imagens/<?php echo $row['image']; ?>" alt="Object Image">
            </div>
            <p style="font-size: 20px;">Nome:<?php echo $row['nome']; ?></p>
            <p>Descrição:<?php echo $row['descricao']; ?></p>
            <p>Telefone:<?php echo $row['telefone']; ?></p>
        </div>
        <?php
        $count++;
        if ($count % 3 === 0) {
            echo '</div><div class="container1">';
        }
    endforeach; ?>
</div>
        <div style="border-style: dashed; border-width: 5px 5px; margin: 40px;padding: 20px;">
            <h1 style="align-self: flex-start;">Um pouco da nossa história</h1>
            <div style="display: flex; justify-content: center;">
                <p style="text-align: center; width: 80%; font-size: 30px;">
                    A maçonaria foi um divisor de águas na vida de muitas e muitas gerações, cravou seu nome e legado na
                    historia da humanidade. Foi idealizada e construída por homens trabalhadores de verdade, com muito
                    suor e sangue, e que não titubearam frente aos desafios que enfrentaram.
                    Em 10/07/1989 a loja Rio das pedras foi maçonicamente fundada por obreiros de Lojas de Piracicaba,
                    sua carta constitutiva foi emitida em 24/05/1991 quando foi eleita a primeira administração e em
                    27/11/2000 inaugura-se o novo
                    templo, construído em terreno doado, localizado Rua Pedro Angelo Piotto, 81, Rio das Pedras-SP que
                    foi sagrado em 28/04/2021. Tenhamos orgulho em participar desta ordem, e ainda mais da nossa Loja,
                    pois a verdadeira maçonaria se faz na Loja, com a assiduidade na frequência, com o bom
                    relacionamento com os irmãos, por isso, cada irmão que passou nessa Loja tem o seu valor, cada um
                    colaborando da sua forma e isso só aumenta a responsabilidade de mantermos esse legado e usa-lo de
                    base para continuar construindo com prosperidade a Loja Rio das Pedras.<br> “Não basta entrar na
                    maçonaria, deixe a maçonaria entrar em você!”​
                </p>
            </div>
        </div>
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
        </div>
    </div>
    </div>
</body>

</html>