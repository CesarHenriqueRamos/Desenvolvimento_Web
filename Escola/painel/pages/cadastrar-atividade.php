<div class="box-container w100" 

<?php
    //verificaPermissaoMenu(2);
    $dia = date("Y-m-d"); 
?>>
    <h2 class="title"><i class="fas fa-user-plus"></i> Cadastrar Slide</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data" >
 
	<?php
        if(isset($_POST['acao'])){
            if(Painel::insert($_POST)){
                Painel::alert('sucesso', 'Depoimento Cadastrado com Sucesso');
            }else{
                Painel::alert('erro', 'Campos Vazios não São Permitidos');
            }        
        }
		?>
        <div class="box-form">
            <label for="nome">Titulo da Atividade:</label>
            <input type="text" name="titulo" id="nome">
        </div>
        <div class="box-form"> 
        <input type="hidden" name="data" value="<?php echo $dia?>">    
        <input type="hidden" name="order_id" value="0">
        <input type="hidden" name="nome_tabela" value="tb_atividade">                   
            <input type="submit" name="acao" value="Cadastrar">
        </div>
    </form>
</div>

