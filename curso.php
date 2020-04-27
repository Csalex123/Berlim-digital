<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>

    <link rel="stylesheet" href="css/curso.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'menu.php'  ?>

    <main>
        <div class="header">
            <div class="titulo">
                <h2>CURSOS</h2>
            </div>

            <div class="cidades">
                <button>Recife</button>
                <button>Natal</button>
                <button>João Pessoa</button>
            </div>
        </div>

        <div class="cursos">
            <div style="background: url('img/foto1.png'); background-position: center; background-size: cover;">
                <img src="img/curso-disponivel.svg">
            </div>
            <div style="background: url('img/foto2.png'); background-position: center; background-size: cover;">
                <img src="img/curso-indisponivel.svg">
            </div>
            <div style="background: url('img/foto3.png'); background-position: center; background-size: cover;">
                <img src="img/curso-disponivel.svg">
            </div>
            <div style="background: url('img/foto1.png'); background-position: center; background-size: cover;"></div>
            <div style="background: url('img/foto2.png'); background-position: center; background-size: cover;"></div>

        </div>
    </main>


    <footer>
        <p>Berlim Digital - 2020. Todos os direitos Reservados.</p>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/menu.js"></script>

</body>

</html>