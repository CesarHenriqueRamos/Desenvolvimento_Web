<?php
    $id = $_GET['id'];
    $pagineAtual = isset($_GET['pagina'])?(int)$_GET['pagina']: 1;
    $porPagina = 100;
    //$dados_atividade = Painel::selectAll("tb_atividade_turma",($pagineAtual -1)*$porPagina,$porPagina);
    $dados_atividade = Painel::selectAll2("tb_atividade_turma",'id_atividade=?',$id,($pagineAtual -1)*$porPagina,$porPagina);
    //$id_atividade = $dados_turma['id_atividade'];
  
    
?>
<div class="box-container w100">
    <h2 class="title"><i class="far fa-list-alt"></i> Listar Atividade</h2>
    <hr>
    <div class="scroll">
        <div class="tabela-responciva depoimento">
        
                <div class="row">
                    <div class="col">
                        <span>Nome:</span>
                    </div><!--col-->
                    <div class="col">
                        <span>Turma:</span>
                    </div><!--col-->
                    <div class="col1">
                         <span>#</span>
                    </div><!--col-->
                    <div class="col1">
                        <span>#</span>
                    </div><!--col-->
                    <div class="col1">
                         <span>#</span>
                    </div><!--col-->
                    <div class="col1">
                        <span>#</span>
                    </div><!--col-->
                    <div class="clear"></div>
                </div><!--row-->
                <?php foreach($dados_atividade as $key =>$value){
                    
                    $aluno = Painel::select("tb_aluno",'id=?',$value['id_aluno']);
                    $turma = Painel::select("tb_turma",'id=?',$value['id_turma']);
                    
                    ?>
                
                <div class="row">
                    <div class="col">
                        <span><?php echo $aluno['nome_aluno'];?></span>
                    </div><!--col-->
                    <div class="col">
                        <span><?php echo $turma['nome'];?></span>
                    </div><!--col-->
                    <!--botão de editar-->
                        <a href="<?php echo INCLUDE_PATH_PAINEL?>atividade-turma?id=<?php echo $value['id']; ?>"><div class="col1 editar"><i class="fas fa-pencil-alt"></i></div><!--col--></a> 
                    
                    
                    <div class="clear"></div>
                </div><!--row-->
                <?php } ?>
                <div class="paginacao">
                <?php
                   // $totalPaginas = ceil(count(Painel::selectAll("tb_site.depoimentos"))/$porPagina);
                    /*for($i =1; $i <= $totalPaginas; $i++){
                        if($i == $pagineAtual)
                            echo  '<a class="pag-select" href="'.INCLUDE_PATH_PAINEL.'listar-depoimento?pagina='.$i.'">'.$i.'</a>';
                        else
                            echo  '<a  href="'.INCLUDE_PATH_PAINEL.'listar-depoimento?pagina='.$i.'">'.$i.'</a>';

                    }*/
                ?>
                
                </div>
            </div><!--tabela-responciva-->
       </div>
</div>