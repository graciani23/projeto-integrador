<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/estiloMenuNav.css">
    <link rel="stylesheet" href="assets/css/estiloFooter.css">
    <link rel="stylesheet" href="assets/css/estiloCadUsuarioEmpresa.css">
    <title>Login Usuário</title>  
</head>
<body>
    <?php
        require './assets/includes/menuNav.php';
    ?>
    <div class="corpo-form">
        <form method="POST">
            <h2><strong>Cadastre seu currículo e tenha acesso aos nossos serviços</strong></h2>
            <input type="text" id="inputName" placeholder="Digite seu nome completo">
            <div class="genero">
                <input type="radio" name="genero" id="masculino" value="option1" checked>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="feminino" value="option1">
                <label for="feminino">Feminino</label>
            </div>
            <div class="nasc">
                <label class="labelForm" for="data">Data de nascimento</label>
                <input type="date" value="2011-08-19" id="data" placeholder="Data de nascimentos">
            </div>
            <input type="email" id="inputEmail" placeholder="Email">
            <input type="password" id="inputPassword" placeholder="Senha">
            <input type="password" id="inputConfirmPassword" placeholder="Confirme sua senha">
            <?php
                require './assets/includes/comboBoxPaises.html'
            ?>
            <button type="submit" class="btn btn-light">Cadastrar</button>
        </form>
    </div>
    
    <?php
        require './assets/includes/footer.php';
    ?>
    
    
</body>
</html>
