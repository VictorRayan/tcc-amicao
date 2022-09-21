<!DOCTYPE html>
<html>
    <head>
        <title>Análise de Cadastros</title>
    </head>
    <body>  


            <?php
                if(isset($info)){
                    switch($info){
                        case 'deleted_register':
                            echo '<p>Cadastro movido para processo de deleção com sucesso.
                            A exclusão do cadastro será efetuada por completo automaticamente após 1 mês</p>';
                            //session(['info_register_analisys'=>'deleted_register']);
                            break;

                        case 'approved_register':
                            echo '<p>O cadastro foi aprovado com sucesso</p>';
                            break;
                        
                    }
                }
            ?>

            <?php if(!isset($data) || $data==null): ?>
                <p>A plataforma ainda não tem Pré-cadastros de instituições para análise.</p>
            
            <?php else:?>

                            <table>

                                <?php foreach($data as $inst): ?>
                                    <?php if(session('user_id')!=$inst->id && $user_type[$inst->id][0]->user_type!='staff'): ?>
                                        <tr>
                                            <td>Nome Fantasia: <?= $inst->nome_fantasia ?></td>
                                            <td>CNPJ: <?= $inst->cnpj ?></td>
                                            <td>Status: 
                                                <?php
                                                    switch($status[$inst->id][0]->status){
                                                        case 'approved':
                                                            echo 'Aprovado';
                                                            break;
                                                        case 'deleted':
                                                            echo 'Em processo de deleção';
                                                            break;
                                                        case 'waiting':
                                                            echo 'Aguardando análise';
                                                            break;
                                                        case 'reproved':
                                                            echo 'Reprovado';
                                                            break;
                                                    }
                                                
                                                ?>
                                            </td>
                                            
                                            
                                            <!--
                                            <td>Endereço: <?= $inst->endereco ?></td>
                                            <td>Complemento: <?= $inst->complemento ?></td>
                                            <td>Código Postal: <?= $inst->cep ?></td>
                                            <td>País: <?= $inst->country ?></td>
                                            <td>Telefone: <?= $inst->phone ?></td>
                                            -->
                                            <td><a href="/staff/inst-analise/more/<?= $inst->id?>">ver mais</a></td>
                                        </tr>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </table>
                        

                
   
            <?php endif ?>
        
    </body>
</html>