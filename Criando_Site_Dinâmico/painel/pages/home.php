<div class="container">
            
            <div class="box-container w100">
            <h2 class="title"><i class="fas fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>
                <div class="w33 user marge-right">
                    <h3>Usuarios Online</h3>
                    <p>3</p>
                </div>
                <div class="w33 visita marge-right">
                    <h3>Total de Visitas</h3>
                    <p>100</p>
                </div>
                <div class="w33 visita-hoje">
                    <h3>Visitas Hoje</h3>
                    <p>5</p>
                </div>
            </div>
            
            <div class="box-container w100">
            <h2 class="title"><i class="fas fa-rocket"></i></i> Usuarios Online</h2>
            
            <div class="tabela-responciva">
                <div class="row">
                    <div class="col">
                        <span>IP:</span>
                    </div><!--col-->
                    <div class="col">
                        <span>Última Ação:</span>
                    </div><!--col-->
                    <div class="clear"></div>
                </div><!--row-->
                <?php for($i = 0; $i < 10; $i++){?>
                <div class="row">
                    <div class="col">
                        <span>192.168.0.20</span>
                    </div><!--col-->
                    <div class="col">
                        <span>21/05/2020 19:00:00</span>
                    </div><!--col-->
                    <div class="clear"></div>
                </div><!--row-->
                <?php } ?>
            </div><!--tabela-responciva-->
            </div>
            <div class="box-container w50 marge-right"></div>
            <div class="box-container w50"></div>
            
            <div class="box-container w100"></div>
            
</div>