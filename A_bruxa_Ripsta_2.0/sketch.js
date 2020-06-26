function setup() {
  createCanvas(windowWidth, windowHeight);
  jogo = new Jogo();
  telaInicial = new TelaInicial();
  botaoGerenciador = new BotaoGerenciador('Iniciar',width/2,height/2);
  jogo.setup();
  frameRate(40)
  cenas = {
    jogo,
    telaInicial
  };
  //para teste
  //cenaAtual = 'jogo';
  if (cenaAtual === 'jogo') {
    somDoJogo.loop();
  }

}

function keyPressed() {
  jogo.keyPress(key);
}

function draw() {
  cenas[cenaAtual].draw();
}