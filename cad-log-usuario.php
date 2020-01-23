<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login Usuário</title>  
</head>
<body>
    <?php
        require './assets/includes/menu.php';
    ?>
    <div class="corpo-form">
        <form method="POST">
            <p>Cadastre seu currículo e tenha acesso aos nossos serviços</p>
                <input type="text" id="inputName" placeholder="Digite seu nome completo">
                <div class="genero">
                    <input type="radio" name="genero" id="masculino" value="option1" checked>
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="feminino" value="option1">
                    <label for="feminino">Feminino</label>
                </div>
                <div>
                    <label for="data">Data de nascimento</label>
                    <input type="date" value="2011-08-19" id="data" placeholder="Data de nascimentos">
                </div>
                <input type="email" id="inputEmail" placeholder="Email">
                <input type="password" id="inputPassword" placeholder="Senha">
                <input type="password" id="inputConfirmPassword" placeholder="Confirme sua senha">
                <?php
                    require './assets/includes/comboBoxPaises.html'
                ?>
            <button type="submit" class="btn btn-light">Entrar</button>
        </form>
    </div>
    <?php
        require './assets/includes/footer.php';
    ?>
    <link rel="stylesheet" href="assets/css/estiloCadUsuarioEmpresa.css">
    <link rel="stylesheet" href="assets/css/estiloFooter.css">
</body>
</html>
