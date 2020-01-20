<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/estiloFormsCadastro.css">
    <title>Login Usuário</title>
</head>
<body>
    <?php
require './assets/includes/menu.php';
?>
    <main class="container">

        <section class="cadastro">
            <form class="cad">
                <div class="form-group">
                    <label for="inputName">Nome Completo</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Digite seu nome completo">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="masculino" value="option1" checked>
                    <label class="form-check-label" for="masculino">Masculino</label>
                    <input class="form-check-input" type="radio" name="genero" id="feminino" value="option1">
                    <label class="form-check-label" for="feminino">Feminino</label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmailConfirmation" placeholder="Confirme seu Email">
                    </div>
                    <div class="form-group">
                        <label for="inputUser">Usuário</label>
                        <input type="text" class="form-control" id="inputUser" placeholder="Digite seu usuário">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Senha</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                    </div>
                </div>
                <button type="submit" class="btn btn-light">Entrar</button>
            </form>
        </section>
    </main>
    <?php
require './assets/includes/footer.php';
?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
