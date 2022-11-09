<!doctype html>
<html lang="pt-br">
  <head>
    <title>Página Inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="midia/faculdade.png">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">

    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
  </head>
  <body>
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-dark">
        <section class="container-fluid">
                    <h1 class="navbar-brand" href="index.html"> Furlanetto
                    </h1>
                    <button class="navbar-toggler float-end mb-3" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="col-4 col-sm-6 collapse flex-row navbar-collapse" id="navbarCollapse">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fotos.html">Galeria</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="hobby.html">Hobbies</a>
                        </li>               
                        <li class="nav-item">
                            <a class="nav-link" href="livros.html">Sonhos</a>
                        </li>                  
                        <li class="nav-item">
                            <a class="nav-link" href="recados-form.html">Recados</a>
                        </li>                  
                        <li class="nav-item ver-recados">
                            <a class="nav-link" href="recados.php"> Ver Recados</a>
                        </li>  
                    </ul> 
                </div>
            </div>            
        </section>
    </nav>     
    
    <br>
    <br>
    <br>
    <br>
        <section id="lista-recados">
            <div class="container text-left">                
            <h1>Meus recados</h1>
            <div class = botao>
            <p><a href="recados-form.html">Clique aqui</a> para deixar o seu recado</p><br></div>
            
            <?php
                $sql = "SELECT * FROM comentario WHERE ativo LIKE 'Y'";
                $conexao = new PDO('mysql:host=127.0.0.1;dbname=sitepessoal2.0','root','');
                $resultado = $conexao->query($sql);
                $lista = $resultado->fetchAll();
            ?>

            <?php foreach ($lista as $linha): ?>
                <div class="balao">
                  <h4 class="nome"><?php echo $linha['nome'] ?></h4>
                  <p class="recado"><?php echo $linha['recado'] ?></p>			
                </div>
            <?php endforeach ?>

            </div>
        </section>        
    </main>

    
  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
  crossorigin="anonymous"></script>
  </body>
  </body>
</html>