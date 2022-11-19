<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
			  rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/style/estillopets.css"/>
		<title>Amicão - Pets</title>
        @include("./user_routesNavigation")
        <script>
			function download(){
				window.location.href="/download/app";
			}
		</script>
	</head>
	<body id="grid">
        <a href="/institucional/pets/cadastrar" class="btn btn-warning" id="addpet">Adicionar novo pet</a><br><br>
        <div class="container" id="div_pets">
            
            <?php if(isset($info)): ?>
                <div class="alert alert-sucess">
                <?php if($info=="deleted_pet"):?>
                    <p>Pet excluido com sucesso!</p>
                <?php elseif($info=="error_delete_pet"): ?>
                    <p>Erro ao tentar deletear pet, tente novamente mais tarde :(</ap>
                <?php elseif($info=="inserted_pet"): ?>
                    <p>Pet cadastrado com sucesso</ap>
                <?php elseif($info=="error_inserting_pet"): ?>
                    <p>Erro ao tentar cadastrar pet, tente novamente mais tarde :(</ap>
                <?php endif ?>
                </div>
            <?php endif ?>


            <?php if(!isset($pets) || $pets==null): ?>
                <p>A instituição ainda não tem nenhum pet cadastrado</p>
            
            <?php else:?>
                
                <?php foreach($pets as $pet): ?>
                
                    <div id="divtab">
                            <table>
                            <tr>
                                <td><img id="imgbicho" src="<?= $pet->img_path ?>" width="200px" height="200px"></td>
                                <td>Nome: <?= $pet->nome ?></td>
                                <td>Idade: <?= $pet->idade ?></td>
                                <td>Raca: <?= $pet->raca ?></td>
                                <td>Porte: <?= $pet->porte ?></td>
                                <td>Status: <?= $pet->status ?></td>
                                <td>ID: <?= $pet->id ?></td>
                            </tr>
                                <td><a id="btnalt" href="/institucional/pets/alterar/<?= $pet->id?>" class="btn btn-warning">Alterar</a></td>
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                                    <input type="hidden" name="txtId" value="<?= $pet->id?>">
                                    <td><a id="btnexc" href="/institucional/pets/excluir/<?= $csrf_tk ?>/<?= $pet->id?>">Excluir</a></td>
                                
                                <!--<td><a href="/institucional/pets/excluir/<?= $pet->id ?>">Excluir</a></td> -->
                            
                            </table>
                    </div>

                <?php endforeach ?>
   
            <?php endif ?>
        
        </div>
        <header id = cab>
			<nav id="nav" class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="/home">
						<img src="/style/img/amicao_logo.png" style="width:40px;" class="square-pill"> 	
				  	</a>
				  	<a href="/contato" class="btn btn-outline-warning" id="contato">Contato</a>
					<a href="/empresa" class="btn btn-outline-warning" id="empresa">Empresa</a>
					<a href="/institucional" class="btn btn-outline-secondary" id="adm">Administração</a>
					<button class="btn btn-warning" id="downloadnav" onclick="download()" ><i class="fa fa-download"></i>    Baixar</button>
				</div>
			</nav>
		</header>
    </body>
<html>