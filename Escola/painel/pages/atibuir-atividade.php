<?php 
$turma = Painel::selectAll('tb_turma');
$materia = Painel::selectAll('tb_materia');
$aluno = Painel::selectAll('tb_aluno');
$atividade= Painel::selectAll('tb_atividade');

?>
<div class="box-container w100">
    <h2 class="title"><i class="far fa-plus-square"></i> Adicionar Materia</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data" id="editar-usuario">
 
	<?php
        if(isset($_POST['acao'])){
                        
               foreach($aluno as $key => $value){ 
                $id_aluno = $value['id'];
                $id_materia = $_POST['id_materia'];
                $id_turma = $_POST['id_turma'];
                $nome_tabela = $_POST['nome_tabela'];
                $order_id = $_POST['order_id'];
                $id_atividade = $_POST['id_atividade'];
                $arr = ['id_turma'=>$id_turma,'id_materia'=>$id_materia,'id_aluno'=>$id_aluno,'id_atividade'=>$id_atividade,'realisado'=>'nao','order_id'=>$order_id,'nome_tabela'=>$nome_tabela];
            if(Painel::insert($arr)){
                Painel::alert('sucesso', 'Seviço Cadastrado com Sucesso');
            }else{
                Painel::alert('erro', 'Campos Vazios não São Permitidos');
            } 
        }     
	    }
		?>
        
        <select name="id_turma" id="">
        <?php
        foreach($turma as $key => $value){ ?>
         
            <option value="<?php echo $value['id'];?>"><?php echo $value['nome'];?></option>
        <?php } ?>
        </select>
        <select name="id_materia" id="">
        <?php
        foreach($materia as $key => $value){ ?>
         
            <option value="<?php echo $value['id'];?>"><?php echo $value['nome'];?></option>
        <?php } ?>
        </select>
        <select name="id_atividade" id="">
        <?php
        foreach($atividade as $key => $value){ ?>
         
            <option value="<?php echo $value['id'];?>"><?php echo $value['titulo'];?></option>
        <?php } ?>
        </select>
        <div class="box-form"> 
            <input type="hidden" name="order_id" value="0">        
            <input type="hidden" name="nome_tabela" value="tb_atividade_turma">        
            <input type="submit" name="acao" value="Cadastrar">
        </div>
    </form>
</div>

