class TelaInicial {
  constructor() {

  }
  draw() {
    this._imagemDeFundo();
    this._texto();
    this._botao();
  }
  //metodos
  _imagemDeFundo() {
    image(imagemTelaInicial, 0, 0, width, height);
    
  }
  _texto() {
    textAlign(CENTER);
    textFont(fonteTelaInicial);
    
    textSize(50);    
    text('As Aventuras De',width/2,height/3);
    textSize(70);
    text('Hipsta',width/2,height/3+ 60);
  }
  _botao(){
    botaoGerenciador.draw();
  }
}