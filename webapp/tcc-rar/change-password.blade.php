<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/estiloPass" />
        <title>Amicão - Recuperar Senha</title>
    </head>
    <body id="grid">
        <header id = cab>
            <nav id="nav" class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/home">
                        <img src="/style/img/amicao_logo.png" style="width:40px;" class="square-pill">  
                    </a>
                    <a href="/contato" class="btn btn-outline-warning" id="contato">Contato</a>
                    <a href="/empresa" class="btn btn-outline-warning" id="empresa">Empresa</a>
                    <a href="/institucional" class="btn btn-outline-secondary" id="adm">Administração</a>
                    <button class="btn btn-warning" id="downloadnav"><i class="fa fa-download"></i>    Baixar</button>
                </div>
            </nav>
        </header>

        <div id="div1">
            <h2 id="tit">Insira uma nova senha:</h2>
            <form method="post" action="/institucional/change-password/set-new">
                <br>
                <input type="hidden" name="_token" value="{{{csrf_token()}}}">
                <input type="hidden" name="_email" value="<?= $email ?>"><br><br>
                <span class="lSenha">Senha:</span><br><input class="senha" type=password name=txtsenha placeholder="Senha"><br><br>
                <span class="lConfSenha">Confirmar senha:</span><br><input class="confsenha" type=password name=txtconfsenha placeholder="Confirmar senha"><br><br>
                <a href="" class="btn btn-outline-warning" id="btnAlterar">Alterar</a>
            </form>
        </div>
    </body>
</html>