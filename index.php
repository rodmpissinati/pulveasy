<!-- <?php
//include ('protect.php');
?> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<header>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
  integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script></header>
<body>

  <nav>
    <div id="logo">
      <a href="index.html"> <img id="logo" src="imagens/nav4.png"></a>
    </div>
      <ul class="menu">
          <li><a href="home.html">Home</a></li>
          <li><a href="pulverizacao.html">Pulverização</a></li>
          <li><a href="monitoramento.html">Monitoramento</a></li>
          <li><a href="sobre.html">Sobre</a></li>
          <li><a href="login.php">Entar</a></li>
          <!-- <li id="imgLog"><a href="login.html"><img id="imgLog" src="imagens/icons8-pessoa-24.png"></a></li>                -->
      </ul>
        
  </nav>
  <section>
    <div id="carouselExample" class="carousel slide" data-bs-ride= "carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/carrossel1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/carrossel2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/carrossel3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"   data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section>
    <div class="about">
      <p id="sobre">Sobre o Pulveasy</p>
      <h2 id="h2Sobre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, officiis exercitationem ducimus illo laborum officia pariatur ipsum laudantium tempore ex, rerum repellat praesentium perspiciatis? Ut esse nesciunt nisi labore magnam.</h2>
    </div>
    <div class="cards">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btnCard">Acessar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btnCard">Acessar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btnCard">Acessar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btnCard">Acessar</a>
        </div>
      </div>
    </div>
    </div>
  
  </section>

   
</body>
</html>