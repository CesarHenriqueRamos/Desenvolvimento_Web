<?php $turma = Painel::selectAll('tb_turma');?>
<div class="box-container w100">
    <h2 class="title"><i class="far fa-plus-square"></i> Adicionar Materia</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data" id="editar-usuario">
 
	<?php
        if(isset($_POST['acao'])){
                        
            //Incerção dinamica
           //print_r($_POST);
           /**/   if(Painel::insert($_POST)){
                Painel::alert('sucesso', 'Seviço Cadastrado com Sucesso');
            }else{
                Painel::alert('erro', 'Campos Vazios não São Permitidos');
            }      
	    }
		?>
        <div class="box-form">
            <label for="nome">Nome da Materia:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="box-form">
            <label for="nome">Turma:</label>
        <select name="id_turma" id="">
        <?php
        foreach($turma as $key => $value){ ?>
         
            <option value="<?php echo $value['id'];?>"><?php echo $value['nome'];?></option>
        <?php } ?>
        </select>
        </div>
        <div class="box-form"> 
            <input type="hidden" name="order_id" value="0">        
            <input type="hidden" name="nome_tabela" value="tb_materia">        
            <input type="submit" name="acao" value="Cadastrar">
        </div>
    </form>
</div>

