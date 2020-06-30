<?php
 $id = $_GET['id'];
//mudar a cor do botao
if(isset($_GET['realisado'])){
    $idAtividade = intval($_GET['realisado']);
    $id_turma = intval($_GET['turma']);
    $id_materia = intval($_GET['materia']);
    $id_aluno = intval($_GET['aluno']);
    $id_atividade = intval($_GET['atividade']);
    $order_id = intval($_GET['order']);
    $arr= ['nome_tabela'=>'tb_atividade_turma','id'=>$idAtividade,'id_turma'=>$id_turma,'id_materia'=>$id_materia,'id_aluno'=>$id_aluno,'id_atividade'=>$id_atividade,'realisado'=>'sim','order_id'=>$order_id];
    Painel:: update($arr);
    Painel::redirect(INCLUDE_PATH_PAINEL.'atividade-turma?id=2');
    //$dados_atividade = Painel::selectAll2("tb_atividade_turma",'id_atividade=?',$id,($pagineAtual -1)*$porPagina,$porPagina);
}
   
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
                        <a href="<?php echo INCLUDE_PATH_PAINEL?>atividade-turma?id=<?php echo $id ?>&realisado=<?php echo $value['id']; ?>&turma=<?php echo $value['id_turma'];?>&materia=<?php echo $value['id_materia'];?>&aluno=<?php echo $value['id_aluno'];?>&atividade=<?php echo $value['id_atividade'];?>&order=<?php echo $value['order_id'];?>"><div class="col1 <?php if($value['realisado'] == 'sim'){echo 'editar';}else{echo 'delete';}?> "><i class="fas fa-pencil-alt"></i></div><!--col--></a> 
                    
                    
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