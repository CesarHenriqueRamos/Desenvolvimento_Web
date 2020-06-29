<div class="box-container w100">
    <h2 class="title"><i class="far fa-plus-square"></i> Adicionar Aluno</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data" id="editar-usuario">
 
	<?php
    $turma = Painel::selectAll('tb_turma');
        if(isset($_POST['acao'])){
            //enviado o formulario
            $nome = $_POST['nome'];
            $id_turma = $_POST['id_turma'];
            
            //Incerção dinamica
           //print_r($_POST);
            if(Painel::insert($_POST)){
                Painel::alert('sucesso', 'Depoimento Cadastrado com Sucesso');
            }else{
                Painel::alert('erro', 'Campos Vazios não São Permitidos');
            }        
	    }
		?>
        <div class="box-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <select name="id_turma" id="">
        <?php
        foreach($turma as $key => $value){?>
            <option value="<?php echo $value['id'];?>"><?php echo $value['nome'];?></option>
        <?php } ?>
        </select>
        
        <div class="box-form"> 
            <input type="hidden" name="order_id" value="0">     
            <input type="hidden" name="nome_tabela" value="tb_aluno">        
            <input type="submit" name="acao" value="Cadastrar">
        </div>
    </form>
</div>

