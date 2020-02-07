<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/curriculo.css">
    <link rel="stylesheet" href="assets/css/estiloFooterCurriculo.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="principal">
            <div class="logo"><a href="sobre-nos.php">MigraJobs</a></div>

            <nav>
                <ul>
                    <li><a href="#">Minha área</a></li>
                    <li><a href="#">Candidaturas</a></li>
                    <li><a href="#">Buscar vagas</a></li>
                    <li><a href="#">Currículo</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>    
            </nav>

            <div class="user">
                Olá, Jeferson
            </div>

            <img src="assets/icones/user.svg" alt="">
        </div>
    </header>
    
    <!-- INÍCIO DA 1° GRID md 6 -->
    <!-- DADOS PESSOAIS -->
    <div class="container pt-3">
        <div class="row">
            <section class="dados-pessoais col-md-6 border pt-3">
                <div class="foto">
                    <img src="./assets/img/refugiado.jpg" alt="Foto Perfil">
                <form>
                    <div class="foto">
                        <label for="foto"></label>
                        <input type="file" class="form-control-file" id="foto">
                    </div>
                </form>
                </div>
         
                <form class="button d-flex justify-content-end pr-3">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick=""> 
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick=""> 
                </form>

                <div class="dados-pessoais pt-4">
                    <h4> Dados Pessoais</h4>
                </div>

                <form class="nome pt-3"> 
                    <div class="form-group d-flex fledx-row justify-content-end pt-3">
                        <label class="pr-2 pt-2" for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
                    </div>
                </form>  
            
                <form class="dataNascimento  pt-3" >
                    <div class="form-group d-flex fledx-row pt-3">
                        <label class="pr-2 pt-2" for="nome">Data Nascimento</label>
                        <input type="date" class="form-control" id="dtnsc" name="dtnsc" placeholder="DD/MM/AAAA" maxlength="10" required><br>
                    </div>
                </form>

                <div class="sexo  pt-3">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sexoFeminino" name="sexoFeminino" class="custom-control-input">
                        <label class="custom-control-label" for="sexoFeminino">Feminino</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sexoMasculino" name="sexoFeminino" class="custom-control-input">
                        <label class="custom-control-label" for="sexoMasculino">Masculino</label>
                    </div>
                </div>

                <form class="idadeDocumento pt-2">
                    <div class="form-group d-flex flex-row pt-3">
                        <label class="pr-2 pt-2" for="idade">Idade</label>
                        <input type="text" class="form-control" id="idade" placeholder="Digite sua idade">
                    </div>
                    <div class="form-group d-flex flex-row">
                        <label class="pr-2 pt-2" for="documento">Documento</label>
                        <input type="text" class="form-control" id="documento" placeholder="Digite seu documento">
                    </div>
                </form>

                <div class="estadoCivil  pb-2">
                    <label class="pr-2"for="estadoCivil">Estado Civil</label>
                    <select class="estadoCivil" name="estadoCivil" required="required">
                        <option value="estadoCivil">Estado Civil</option>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="sasado">Casado(a)</option>
                        <option value="separado">Separado(a)</option>
                        <option value="sivorciado">Divorciado(a)</option>
                        <option value="viuvo"<Viuvo(a)></option>
                    </select><br>
                </div>
    
                <form class="button d-flex justify-content-end pb-5">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick=""> 
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick=""> 
                </form>

<!-- ENDEREÇO -->
                <?php
                require './assets/includes/comboBoxPaises.html'
                ?><br>

                <form class="endereco pt-4">
                    <div class="form-group">
                        <label for="inputZip">CEP</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Ex. Avenida Brasil, 200">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Complemento</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Ex. Apartamento 23 Bloco A">
                    </div>

                    <div class="form-row">
                        <div class="cidade form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>

                    <div class="estado form-group col-md-6">
                        <label for="inputState">Estado</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                </form>

 

<!-- CONTATO E REDES SOCIAIS -->
                <form class="contato pt-2">
                    <div class="form-group d-flex flex-row pt-3">
                        <label class="pr-2 pt-2" for="email">E-mail</label>
                        <input type="mail" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group d-flex flex-row">
                        <label class="pr-2 pt-2" for="telefone">Telefone</label>
                        <input type="number" class="form-control" id="telefone" placeholder="(00) 0000-0000">
                    </div>
                    <div class="form-group d-flex flex-row">
                        <label class="pr-2 pt-2" for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" placeholder="(00) 00000-0000">
                    </div>
                </form>


                <div class="redes-sociais pt-4">
                    <h4>Redes Sociais</h4>
                    <div class="redes-sociais pt-2 pb-2">
                        <img src="./assets/icones/quadrado-linkedin.png" alt="linkedin">
                            <a href="https://www.linkedin.com">Linkedin: linkedin.com/kaysar254895</a><br>
                        <img src="./assets/icones/quadrado-Instagram.png" alt="instagram">
                            <a href="https://www.instagram.com/">Instagram: @kaysar </a><br>
                        <img src="./assets/icones/quadrado-facebook.png" alt="facebook">
                            <a href="https://www.facebook.com/">Facebook: Kaysar Dadour</a>
                    </div>
                </div>

                <form class="button d-flex justify-content-end pb-5 pr-3">
                    <input class="cancelar btn btn-light bg-transparent text-danger p-1" type="button" value="Cancelar" onClick=""> 
                    <input class="salvar btn btn-primary p-1" type="submit" value="Salvar" onCLick=""> 
                </form>
            </section>
        </div>
 <!-- TÉRMINO DA 1° GRID -->


 <!-- INÍCIO DA 2° GRID md 6 -->
        <div class="row">
            <section class="objetivo-profissional col-md-6 border">

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
                        <div class="data">
                            <label for="dataInicio">Data Início</label>
                            <?php
                            require './assets/includes/comboBoxMesAno.html'
                            ?><br>
                
                            <label for="dataTemino">Data Término</label>
                            <?php
                            require './assets/includes/comboBoxMesAno.html'
                            ?>
                        </div><br>
                
                            <label for="descricao">Descrição</label>
                            <textarea name="experiencia" id="" cols="30" rows=""></textarea>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

<!-- INÍCIO DA 3° GRID - md 12 -->
    <div class="container">
        <div class="row">
            <section class="formacao-academica col-md-12 border">

                <div class="formacaoAcademica">
                    <h3>Formação Acadêmica</h3>
                    <form name="instituicao" action="" method="GET">
                        <label for="instituicao">Instituição</label>
                        <input type="text" placeholder="" required="required"><br>
                        <label for="formacao">Formação</label>
                        <input type="text" placeholder="" required="required"><br>
                        <label for="areaDeEstudo">Área de Estudo</label>
                        <input type="text" placeholder="" required="required"><br>
                        <label for="dataDeInicio">Data Início:</label>
                    <?php
                    require './assets/includes/comboBoxMesAno.html'
                    ?><br>
            
                        <label for="dataTermino">Data Término</label>
                    <?php
                    require './assets/includes/comboBoxMesAno.html'
                    ?>
                        <label for="descricao">Descrição</label>
                        <textarea name="experiencia" id="" cols="30" rows=""></textarea>
                    </form>
            </section>
        </div>
    </div>


<br>
<?php
require './assets/includes/footerCurriculo.php';
?>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>