<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/curriculo.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#"></a>Sobre Nós</li>
                <li><a href=""></a>Vagas</li>
                <li><a href=""></a>Mensagens</li>
                <li><a href=""></a>Notificações</li>
                <li><a href=""></a>Configurações</li>
            </ul>
        </div>
    </nav>

    <main class="container">
        <div class="row">
        <div class="col-md-6 bg-light">
        <div class="row border p-5">
        <div class="foto col-md-4">   
            <img src="./assets/img/refugiado.jpg" alt="Foto Perfil">
            <form name="nome" action="" method="GET">
                <input type="text" placeholder="Digite seu nome" required="required">
            </form>
        </div>
        <div class="dados-pessoais">
            <a class="botao" href="">Editar</a>
        <form name="dadosPessoais" action="" method="GET">
            <fieldset>
                <legend>Dados Pessoais</legend>
                Data Nascimento: <input type="number"><br>
                Gênero: <input type="radio" id="feminino" name="genero" value="feminino" checked>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="masculino" value="masculino" checked>
                <label for="masculino">Masculino</label><br>
                Idade: <input type="number"><br>
                Estado Civil: <select name="estadoCivil" required="required">
                    <option value="estadoCivil">Estado Civil</option>
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="sasado">Casado(a)</option>
                    <option value="separado">Separado(a)</option>
                    <option value="sivorciado">Divorciado(a)</option>
                    <option value="viuvo"<Viuvo(a)></option>
                </select><br>
                Nacionalidade: <select name="nacionalidade" required="required">
                        <option value="brasil" selected="selected">Brasil</option>
                        <option value="afeganistao">Afeganistão</option>
                        <option value="africadoSul">África do Sul</option>
                        <option value="albania">Albânia</option>
                        <option value="alemanha">Alemanha</option>
                        <option value="andorra">Andorra</option>
                        <option value="angola">Angola</option>
                        <option value="anguilla">Anguilla</option>
                    </select><br>
                Documento: <input type="number"><br>
            </fieldset>
        </form>
        </div>
        <div class="endereço">
            <a class="botao" href="">Editar</a>
        <form name="endereco" action="" method="GET">
            <fieldset>
                <legend>Endereço</legend>
                    País: <input type="text" placeholder="" required="required"><br>
                    Estado: <input type="text" placeholder="" required="required"><br>
                    Cidade: <input type="text" placeholder="" required="required"><br>
                    Logradouro: <input type="text" placeholder="informe rua/av/trav" required="required"><br>
                    Bairro: <input type="text" placeholder="" required="required"><br>
                    CEP: <input type="number" placeholder="somente números" required="required"><br>
            </fieldset>
        </form>    
        </div>
        <div class="info-contato">
            <a class="botao" href="">Editar</a>
            <form name="endereco" action="" method="GET">
                <fieldset>
                    <legend>Contato</legend>
                        E-mail: <input type="email" placeholder="" required="required"><br>
                        Telefone: <input type="number" placeholder="" required="required"><br>
                        Celular: <input type="number" placeholder="" required="required"><br>
                </fieldset>   
            </form>     
        </div>
        <div class="redes-sociais">
            <a class="botao" href="">Editar</a>
            <h4>Redes Sociais</h4>
                <div class="redes-sociais">
                    <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                    <a href="https://www.linkedin.com">Linkedin: linkedin.com/kaysar254895</a>
                    <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                    <a href="https://www.instagram.com/">Instagram: @kaysar </a>
                    <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                    <a href="https://www.facebook.com/">Facebook: Kaysar Dadour</a>
                </div>
            </div>
        </div>
        
        <div class="row border p-5 my-3">
        <div class="objetivo-profissional col-md-4">
            <a class="botao" href="">Editar</a>
            <h4>Objetivo Profissional</h4>
            <form name="objetivoProfissional" action="" method="GET">
                <textarea name="objetivoProfissional"placeholder="Digite seus objetivos profissionais"></textarea>
            </form>
        </div>
        <div class="areas-interesse">
            <a class="botao" href="">Editar</a>
            <h4>Areas de Interesse</h4>
            <form name="areasDeInteresses" action="" method="GET">
                <select name="areas" required="required">
                    <option value="">Selecione a Área</option>
                    <option value="administrativo">Administrativo</option>
                    <option value="financeiro">Financeiro</option>
                    <option value="recursosHumanos">Recursos Humanos</option>
                    <option value="setorComercial">Setor Comercial</option>
                    <option value="setorOperacional">Setor Operacional</option>
                    <option value="tecnologia">Tecnologia</option>
                </select>
            </form>
        </div>
        
            <div class="resumo-profissional">
                <a class="botao" href="">Editar</a>
                <h4>Resumo Profissional</h4>
                <form name="resumoProfissional" action="" method="GET">
                    <textarea name="resumoProfissional"placeholder="Faça um resumo de suas qualificações, habilidades e realizações profissionais." cols="30"></textarea>
                </form>
            </div>
            <div class="experiencia">
            <a class="botao" href="">Editar</a>
                <div class="experiencia">
                        <form name="experiencia" action="" method="GET">
                                <fieldset>
                                    <legend>Experiencia</legend>
                                        Empresa: <input type="text" placeholder="" required="required"><br>
                                        Cargo: <input type="text" placeholder="" required="required"><br>
                                        Localidade: <input type="text" placeholder="" required="required"><br>
                                        Data Início: <select name="data-mes" required="required">
                                            <option value="mes">Mes</option> 
                                            <option value="Junho">Junho</option>
                                            <option value="Julho">Julho</option>
                                        </select>
                                        <select name="data-ano" required="required">
                                            <option value="ano">Ano</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                        </select><br>
                                        Descrição: <textarea name="experiencia" id="" cols="30" rows=""></textarea>
                                </fieldset>
                            </form>
                </div>
            </div>
        <div class="row ">
        <div class="formacao-academica col-md-4">
            <a class="botao" href="">Editar</a>
                <div class="formacao-academica">
                    <form name="experiencia" action="" method="GET">
                        <fieldset>
                            <legend>Formação Acadêmica</legend>
                                Instutuição: <input type="text" placeholder="" required="required"><br>
                                Formação: <input type="text" placeholder="" required="required"><br>
                                Área de Estudo: <input type="text" placeholder="" required="required"><br>
                                Data Início: <select name="data-mes" required="required">

                                                <option value="mes">Mes</option> 
                                                <option value="Junho">Junho</option>
                                                <option value="Julho">Julho</option>
                                            </select>
                                            <select name="data-ano" required="required">
                                                <option value="ano">Ano</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                            </select><br>
                                    Data Término: <select name="data-mes" required="required">
                                                <option value="mes">Mes</option> 
                                                <option value="Junho">Junho</option>
                                                <option value="Julho">Julho</option>
                                            </select>
                                            <select name="data-ano" required="required">
                                                <option value="ano">Ano</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                            </select><br>
                                    Descrição: <textarea name="experiencia" id="" cols="30" rows=""></textarea>
                </div>
            </div>
        </div>
    </div>
        </div>
    <div class="row">
    <div class="col-md-6">
        <h2>TESTE</h2>
    </div>
</div>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>