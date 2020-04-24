<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlim Digital</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .icon-bar-menu{
            padding-top: 10px;
        }

        .icon-bar-menu .icon-bar {
            display: block;
            width: 30px;
            height: 2px;
            background: white;
            transition: 0.3s;
            cursor: pointer;
        }

        .icon-bar-menu.icon-bar:nth-child(2) {
            height: 1.8px;
        }

        .icon-bar-menu .icon-bar+.icon-bar {
            margin-top: 7px;
        }
    </style>

</head>

<body>
    <?php include 'menu.php'; ?>

    <div class="social">
        <div>
            <img height="22" src="img/email.svg" alt="Email">
        </div>
        <div>
            <img height="22" src="img/instagram.svg" alt="Instagram">
        </div>
        <div>
            <img height="22" src="img/facebook.svg" alt="Facebook">
        </div>
        <div>
            <img height="22" src="img/whatsapp.svg" alt="Whatsapp">
        </div>
    </div>

    <div class="conteudo">
        <p>DON'T BE <span>a wall.</span></p>
    </div>

    <div class="certificate-google">
        <img src="img/certificado-google.png" alt="Certificado do Google">
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/menu.js"></script>

</body>

</html>