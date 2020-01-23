<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Cadastro e Login - Empresa</title>
</head>
<body>
    <?php
        require('./assets/includes/menu.php');
    ?>
    <div class="corpo-form">
        <form method="POST">
            <p>Cadastre sua empresa</p>
            <input type="text" id="inputName" placeholder="Nome da empresa">
            <input type="number" id="inputCNPJ" placeholder="Informe seu CNPJ">        
            <input type="email" id="inputEmail" placeholder="Email de acesso">
            <input type="password" id="inputPassword" placeholder="Senha">
            <input type="password" id="inputConfirmPassword" placeholder="Confirme sua senha">
    
            <button type="submit" class="btn btn-light">Entrar</button>
        </form>
    </div>
    <?php
        require('./assets/includes/footer.php');
    ?>
    <link rel="stylesheet" href="assets/css/estiloCadUsuarioEmpresa.css">
    <link rel="stylesheet" href="assets/css/estiloFooter.css">
</body>
</html>