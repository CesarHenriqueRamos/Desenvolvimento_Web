<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Saite com Bootstrap</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Saite com Bootstrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#equipe">Equipe</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <section class="banner">
     <div class="container">
        <div class="mensagem text-center">
            <h3>Site com Bootstrap</h3>
            <p>Para Sulocionar os problemas de todas as Empresas</p>
            <a href=""><button type="button" class="btn btn-success">Saiba Mais</button></a>
        </div>
     </div>
    </section>
    <section class="lista">
      <div class="container">
        <div class="col-md-4">
             <h2><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Entre na nossa lista!</h2>
        </div>
        <div class="col-md-8">
        <form>
          
            <div class="col-sm-10">
              <label class="sr-only" for="inlineFormInputName">Email</label>
              <input type="text" id="inlineFormInputName" placeholder="exemplo@exemplo.com"><input type="submit" value="Enviar">
              
            </div>
            
            <div class="col-md-2">
              
            </div>
          
        </form>
        </div>
      </div>
    </section><!--lista-->
     <section id="sobre" class="sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2>Depoimento</h2>
                    <p>Lorem ipsum dolor sit amet,
                       consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Posuere ac ut consequat semper. Interdum velit laoreet id donec ultrices tincidunt arcu. Odio 
                        ut enim blandit volutpat maecenas volutpat blandit aliquam. Sed nisi lacus sed viverra tellus
                         in hac habitasse platea. Iaculis eu non diam phasellus vestibulum lorem sed risus. Augue lacus
                          viverra vitae congue. Massa eget egestas purus viverra accumsan in nisl nisi scelerisque.
                           Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Ultricies leo integer malesuada nunc.
                            Mi proin sed libero enim sed faucibus. Ac tincidunt vitae semper quis lectus nulla. Vel orci porta
                             non pulvinar neque laoreet suspendisse. Sit amet tellus cras adipiscing. Arcu risus quis varius
                              quam quisque id.</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section><!--depoimento-->
    <section class="equipe" id="equipe">
        <div class="container">
            <h1>Equipe</h1>
            <div class="col-md-5">
              <div class="img">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </div>
                <h4><strong>Nome:</strong>Cesar Henrique Ramos  </h4>  
                <p><strong>Cargo:</strong>Programador</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="img">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </div>
                <h4><strong>Nome:</strong>Maria</h4>  
                <p><strong>Cargo:</strong>Programador</p>
            </div>
        </div>
    </section><!--equipe-->
   
    <section class="form" id="contato">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
            <h1>Contato</h1>
        <form method="post">
        <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>            
            <div class="form-group">
                <label for="exampleTextarea">Mensagem</label>
                <textarea name="mensagem" class="form-control" id="exampleTextarea" rows="7"></textarea>
            </div>            
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            </div>
            <div class="col-md-6">
            <h1>Valores dos Serviços</h1>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
            
        </div>
    </section><!--sessão-->
    <footer class="footer">
      <div class="container">
        <p class="text-center">Todos os direitos Reservados</p>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>