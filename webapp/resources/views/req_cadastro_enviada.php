
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
			  rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/style/estilomsg.css"/>
		<title>Amicão - Cadastro</title>
		@include("./user_routesNavigation")
		<script>
			function download(){
				window.location.href="/download/app";
			}
		</script>
	</head>
	<body id = "grid">
		<header id = cab>
			<nav id="nav" class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="/home">
						<img src="/style/img/amicao_logo.png" style="width:40px;" class="square-pill"> 	
				  	</a>
				  	<a href="/contato" class="btn btn-outline-warning" id="contato">Contato</a>
					<a href="/empresa" class="btn btn-outline-warning" id="empresa">Empresa</a>
					<a href="/login" class="btn btn-outline-secondary" id="adm">Administração</a>
					<button onclick="download()" class="btn btn-warning" id="downloadnav"><i class="fa fa-download"></i>    Baixar</button>
				</div>
			</nav>
		</header>
        <div id="div1" class="ex1">
            <div id="divctt">
                <span class="lnome">Os dados de sua instituição foram enviados para análise. 
					Realiza e confirmação do seu e-mail através do link enviado em sua caixa de entrada, 
					e em breve enviaremos um e-mail com maiores informações sobre a aprovação do seu cadastro</span>
                <br><br>
                <form action="/home"><input class="btn btn-warning" id="btnenviar" type="submit" value="Ok"></form>
            </div>
        </div>
	</body>
</html>
