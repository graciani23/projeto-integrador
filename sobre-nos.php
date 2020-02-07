<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Integrador - Refugiados</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estiloSobreNos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php
        require('./assets/includes/menu.php');        ?>
    <div class="fundo">        
        <h2 class="h2">Recomeço além das fronteiras</h2>
            <button class="botao"> 
                <a href="#cadastro" class="participe">Participe</a>
            </button>
            <br> <br> <br>
        </div>
        <div class="fundo">      
    </div>
    <section class="sobrenos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="quem">QUEM</h2>
                    <h6 class="somos">SOMOS?</h6>
                     <p class="psobrenos"> A MigraJobs acredita na reinserção social e econômica de imigrantes e refugiados no Brasil. Mais que uma plataforma de empregos, visamos a inclusão social, econômica e cultural de quem imigrou para o Brasil</p>
                </div>
                <div class="col">
                    <h2 class="quem"> O QUE </h2>
                    <h6 class="somos">FAZEMOS?</h6>  
                    <p class="psobrenos">Nosso papel é servir como ponte entre imigrantes e refugiados que buscam trabalho digno e empresas que querem contratar. Nossa missão é promover o encontro de pessoas talentosas com empresas que precisam de gente em diversas áreas de atuação</p>
                </div>
                <div class="col">
                    <h2 class="quem"> QUEM </h2>
                    <h6 class="somos">NOS APOIA?</h6>  
                    <p class="psobrenos">Contamos com o suporte de ONGS como o CAMI (Centro de Apoio ao Imigrante) para realizar a triagem e cadastro de perfis e ao mesmo tempo buscamos parcerias de empresas que acredite nos nossos valores e nossa missão</p>
            </div>
        </div>
   </section>
   <main>
        <h3 id="cadastro" class="h3">FAÇA PARTE DO NOSSO PROJETO</h3>
        <div class="row">
            <div class="col-sm-6">
                <h4>Quero mudar minha vida</h4>
                <div class="form">    
                    <h5 class="card-title">SOU IMIGRANTE</h5>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome de usuário">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    <br>
                    </div>
                    <div class="form-group form-check">
                            <a href="" class="senha"> Esqueci minha senha</a>
                            <a href="cad-log-usuario.php" class="senha">Quero me cadastrar</a>
                    <div>
                        <button type="submit" class="btn btn-light">Entrar</button>
                        </div>
                    </div>
                </div>      
            </div>
        
            <div class="col-sm-6">
                <h4>Quero mudar outras vidas</h4>  
                <div class="form">  
                    <h5 class="card-title">SOU EMPRESA</h5>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome de usuário">                
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"></label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <br>
                    <div class="form-group form-check">
                        <a href="http://" class="senha">Esqueci minha senha</a>
                        <a href="cad-log-empresa.php" class="senha">Quero me cadastrar</a>
                    <div>
                        <button type="submit" class="btn btn-light">Entrar</button>
                    </div>
                </div>
            </div>  

        </div>
    </main>
    <section>
    <div class="col-sm-12">
                <h4>Dúvidas?</h4>  
                <div class="form-contato">  
                    <h5 class="card-title"><a name="FALE CONOSCO">FALE CONOSCO</h5>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome de usuário">                
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input for="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail"> 
                        </div>
                        <div class="form-group-mensagem">
                            <label for="mensagem"></label>
                            <input type="text" class="form-control" name="mensagem" id="mensagem" placeholder="Escreva sua mensagem">
                        </div>
                        <br>
                    <div class="form-group form-check">
                        <button type="submit" class="btn btn-light">Enviar</button>
                 </div>
            </div>  
        <br>
    </section>

    <?php
        require('./assets/includes/footerQS.php');   ?>
        <link rel="stylesheet" href="./assets/css/estilofooterqs.css">
     
    

</body>
</html>
