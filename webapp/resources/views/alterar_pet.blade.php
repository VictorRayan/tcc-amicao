<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style/estiloadm.css"/>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

		<title>Amicão - Admin</title>
	</head>
	<body>
		<header id = cab>
			<nav id="nav" class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="home.php">
						<img src="style/img/amicao_logo.png" style="width:40px;" class="square-pill"> 	
				  	</a>
				  	<a href="/contato" class="btn btn-outline-warning" id="contato">Contato</a>
					<a href="/empresa" class="btn btn-outline-warning" id="empresa">Empresa</a>
					<a href="/adm-manager" class="btn btn-outline-secondary" id="adm">Administração</a>
					<button href="https://www.youtube.com/watch?v=rxCs1fGxloI" class="btn btn-warning" id="downloadnav"><i class="fa fa-download"></i>    Baixar</button>
				</div>
			</nav>
		</header>


		
        <form id="frmCad" method="post" action="/institucional/pets/alterar/do">
			<div id = "div1">
           		<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
				<input type="hidden" name="txtCod" value="<?= $pet[0]->id ?>">
				<span class="lNome">Nome:</span><br><input class="nome" type=text name=txtNome placeholder="Nome" value="<?= $pet[0]->nome ?>"><br><br>
				<span class="lIdade">Idade:</span><br><input class="idade" type=text name=txtIdade placeholder="Idade" value="<?= $pet[0]->idade ?>"><br><br>
				<span class="lRaça">Raça:</span><br><input class="raca" type=text name=txtRaca placeholder="Raça" value="<?= $pet[0]->raca ?>"><br><br>
				<span>Gênero:</span><br>
				<select class = "genero" name="txtGenero">

					<?php if($pet[0]->genero == "macho"):?>
	  					<option value="macho" selected>Macho</option>
						<option value="femea">Fêmea</option>
					<?php else:?>
						<option value="macho">Macho</option>
						<option value="femea" selected>Fêmea</option>
					<?php endif ?>
				</select>

			</div>
			<div id = "div2">
				<span>Porte:</span><br>
				<select class = "porte" name="txtPorte">
	  				<option value="pequeno" <?php if($pet[0]->porte=="pequeno"){ echo "selected";} ?> >Pequeno</option>
					<option value="medio" <?php if($pet[0]->porte=="medio"){ echo "selected";} ?>>Médio</option>
					<option value="grande" <?php if($pet[0]->porte=="grande"){ echo "selected";} ?>>Grande</option>
				</select><br><br>
				<span class="lRaçaP">Raça do pai:</span><br><input class="racap" type=text name=txtRacaP placeholder="Raça do pai" value="<?= $pet[0]->id ?>"><br><br>
				<span class="lRaçaM">Raça da mãe:</span><br><input class="racam" type=text name=txtRacaM placeholder="Raça da mãe" value="<?= $pet[0]->id ?>"><br><br>
				<span>Vacinas(essenciais):</span><br>
				<select class = "vacinas" name="txtVacinas">
	  				<option value="sim" <?php if($pet[0]->vacinas_essenciais=="sim"){echo "selected";} ?>>Sim</option>
					<option value="nao" <?php if($pet[0]->vacinas_essenciais=="nao"){echo "selected";} ?>>Não</option>
				</select><br><br>
				<span class="lSaude">Problemas de saúde (se houver):</span><br><input id="saude" class="saude" type=text name=txtSaude placeholder="Problemas de saúde (se houver)" value="<?= $pet[0]->saude?>"><br><br>
				<input type="submit" class="btn btn-outline-warning" id="alterar" value="Alterar">

				<span>Status:</span><br>
				<select class = "status" name="txtStatus">
	  				<option value="disponivel" <?php if($pet[0]->status=="disponivel"){ echo "selected";} ?> >Disponível</option>
					<option value="apadrinhado" <?php if($pet[0]->status=="apadrinhado"){ echo "selected";} ?> >Apadrinhado</option>
					<option value="em_adocao" <?php if($pet[0]->status=="em_adocao"){ echo "selected";} ?> >Em adoção</option>
				</select><br><br>
           
        	</div>
		</form>
		
		<?php if(isset($op_info)): ?>
			<?php if($op_info=="update_sucess"):?>
				<div class="alert alert-sucess">
					<p>Dados do pet atualizados </p>
				</div>
			<?php else: ?>
				<div class="alert alert-danger">
					<p>Erro ao tentar atualizar dados. </p>
					<p>Tente novamente mais tarde :(</p>
				</div>
			<?php endif ?>
		<?php endif ?>

        
	</body>
</html>