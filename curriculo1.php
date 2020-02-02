<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/curriculo1.css">
    <!--<link rel="stylesheet" href="assets/css/estiloFooter.css"> -->
    <title>Document</title>
</head>

<body>
<div class="container">
    <nav class="header">
        <!--<div class="logo">
            <img src="./assets/img/England.png" alt="logo">
        </div>-->
        <div class="menu">
        <ul>
            <li><a href="sobre-nos.php"></a>Sobre Nós</li>
            <li><a href=""></a>Vagas</li>
            <li><a href=""></a>Mensagens</li>
            <li><a href=""></a>Notificações</li>
            <li><a href=""></a>Configurações</li>
        </ul>
    <div class="img-cabecalho">
        <p>Selecione o seu idioma</p>
        <img src="./assets/img/Brazil.png" alt="Bandeira do Brasil">
        <img src="./assets/img/England.png" alt="Bandeira da Inglaterra">
        <img src="./assets/img/France.png" alt="Bandeira da França">
        <img src="./assets/img/Spain.png" alt="Bandeira da Espanha">
    </div>
    </div>
</nav>

<section class="dados-pessoais">

    <div class="foto">
        <img src="./assets/img/refugiado.jpg" alt="Foto Perfil">
        <form name="nome" action="" method="GET">
            <input type="text" placeholder="Digite seu nome" required="required">
        </form>
    <form class="button"> 
        <input class="cancelar" type="button" value="Cancelar" onClick=""> 
        <input class="salvar" type="submit" value="Salvar" onCLick=""> 
    </form>
    </div> <br>

    <div class="dadosPessoais">
        <h3> Dados Pessoais</h3>
        <div class="dadosPessoais">
            <form name="dadosPessoais" action="" method="GET">
                <label for="dataNascimento">Data Nascimento</label>
                    <input type="date"><br>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="feminino" name="genero" value="feminino" checked>
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="masculino" value="masculino" checked><br>
                    <label for="idade">Idade</label>
                    <input type="text"><br>
                    <label for="estadoCivil">Estado Civil</label>
                    <select class="estadoCivil" name="estadoCivil" required="required">
                    <option value="estadoCivil">Estado Civil</option>
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="sasado">Casado(a)</option>
                    <option value="separado">Separado(a)</option>
                    <option value="sivorciado">Divorciado(a)</option>
                    <option value="viuvo"<Viuvo(a)></option>
                    </select><br>
                    <?php
                    require './assets/includes/comboBoxPaises.html'
                    ?><br>
                    <label for="documento">Documento</label>
                    <input type="text"><br>
            </form>
            </div>
        </div><br>

     <div class="endereco">   
        <h3>Endereço</h3>
        <div class="endereço">
        <form name="endereco" action="" method="GET">
            <label for="pais">País</label>
            <input type="text" placeholder="" required="required"><br>
            <label for="estado">Estado</label>
            <input type="text" placeholder="" required="required"><br>
            <label for="Cidade">Cidade</label>
            <input type="text" placeholder="" required="required"><br>
            <label for="logradourp">Logradouro</label>
            <input type="text" placeholder="rua/av/trav" required="required"><br>
            <label for="bairro">Bairro</label>
            <input type="text" placeholder="" required="required"><br>
            <label for="cep">CEP</label>
            <input type="number" placeholder="somente números" required="required"><br>
        </form>   
        </div> 
    </div><br>

    <div class="info-contato">
        <h3>Contato</h3>
        <div class="infoContato">
            <form name="contato" action="" method="get">
                <label for="email">E-mail</label>
                <input type="email" placeholder="" required="required"><br>
                <label for="telefone">Telefone</label>
                <input type="number" placeholder="(00) 0000-0000" required="required"><br>
                <label for="celular">Celular</label>
                <input type="number" placeholder="(00) 00000-0000" required="required"><br>
            </form>
        </div>
    </div><br>

    <div class="redes-sociais">
        <h3>Redes Sociais</h3><br>
        <div class="redes-sociais">
            <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                <a href="https://www.linkedin.com">Linkedin: linkedin.com/kaysar254895</a><br>
                <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                <a href="https://www.instagram.com/">Instagram: @kaysar </a><br>
                <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                <a href="https://www.facebook.com/">Facebook: Kaysar Dadour</a>
        </div>
    </div>

    </section>


    <section class="objetivo-profissional">

    <div class="objetivoProfissional">
        <h3>Objetivo Profissional</h3>
        <form name="objetivoProfissional" action="" method="GET">
            <textarea name="objetivoProfissional"placeholder="Digite seus objetivos profissionais"></textarea>
        </form>
    </div><br>
        <div class="areas-interesse">
            <h3>Areas de Interesse</h3>
            <form name="areasInteresses" action="" method="GET">
                <select class="areasInteresse" name="areas" required="required">
                    <option value="">Selecione a área</option>
                    <option value="administrativo">Administrativo</option>
                    <option value="financeiro">Financeiro</option>
                    <option value="recursosHumanos">Recursos Humanos</option>
                    <option value="setorComercial">Setor Comercial</option>
                    <option value="setorOperacional">Setor Operacional</option>
                    <option value="tecnologia">Tecnologia</option>
                </select>
            </form>
        </div><br> 


    <div class="resumo-profissional">
        <h3>Resumo Profissional</h3>
        <form name="resumoProfissional" action="" method="GET">
            <textarea name="resumoProfissional"placeholder="Faça um resumo de suas qualificações, habilidades e realizações profissionais." cols="30"></textarea>
        </form>
    </div><br>


    <div class="experiencia">
        <h3>Experiencia</h3>
        <div class="experiencia1">
            <form name="experiencia" action="" method="GET">
                <label for="empresa">Empresa</label>
                <input type="text" placeholder="" required="required"><br>
                <label for="cargo">Cargo</label>
                <input type="text" placeholder="" required="required"><br>
                <label for="localidade">Localidade</label>
                <input type="text" placeholder="" required="required"><br>
                <label for="dataInicio">Data Início</label>
                    <?php
                    require './assets/includes/comboBoxMesAno.html'
                    ?><br>
                    <label for="dataTemino">Data Término</label>
                    <?php
                    require './assets/includes/comboBoxMesAno.html'
                    ?><br>
                    <label for="descricao">Descrição</label>
                    <textarea name="experiencia" id="" cols="30" rows=""></textarea>
            </form>
        </div>
    </div>

</section>

<section class="formacao-academica">

    <div class="formacaoAcademica">
        <h3>Formação Acadêmica</h3>
        <div class="formacaoAcademica1">
            <form name="instituicao" action="" method="GET">
                <label for="instituicao">Instituição</label>
                <input type="text" placeholder="" required="required"><br>
                <label for="formacao">Formação</label>
                <label for="areaDeEstudo">Área de Estudo</label>
                <input type="text" placeholder="" required="required"><br>
                <label for="dataDeInicio">Data Início:</label>
                    <?php
                    require './assets/includes/comboBoxMesAno.html'
                    ?><br>
                <label for="dataTermino">Data Término</label>
                    <?php
                    require './assets/includes/comboBoxMesAno.html'
                    ?><br>
                <label for="descricao">Descrição</label>
                <textarea name="experiencia" id="" cols="40" rows=""></textarea>
            </form>
        </div>
    </div>

</section>

</div>    
<br>
<?php
    //require './assets/includes/footer.php';//
?>

</body>
</html>