<?php 
$styles = array(
  0 => 'global.css',
  1 => 'home.css',
  2 => 'header.css',
  3 => 'rodape.css',
);
include './head.php';
include './includes/conexao.php';
$sql = "select * from produtos order by nome limit 4";
$seleciona = mysqli_query($conexao,$sql); 
?>
  <body>
    <?php include './includes/header.php';?>
    <section>
      
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/bannerpcgamer.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/bannerpcgamer.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section id='product_section'>
      <div class='card-div'>
          <div class='orange-card'>
          </div>
        </div>
        <div class="produtos mt-5" id="jogos">
          <div class="row">
          <?php while ($exibe = mysqli_fetch_array($seleciona)){ ?>
              <div class="col-12 col-md-6 col-lg-3 mt-3">
                <div class="card">
                    <img src="img/<?=$exibe['foto']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?= $exibe['nome'];?></h5>
                      <p>R$ <?= $exibe['preco'];?>,00</p>
                      <a href="./checkout.php?id=<?= $exibe['id_produto']?>" class="btn botaocard">Comprar</a>
                    </div>
                </div>
              </div>
            <?php
                }
              ?>
          </div>
      </div>
      <div class="banner"> <img src="img/banner.png" alt=""></div>
      <div class="produtos" id="consoles">
          <div class="row mt-4">
              <div class="col">
                  <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img/HARDWARE.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">HARDWARE</h5>
                            <a href="#" class="btn botaocard">Acessar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img/HARDWARE.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">PERIFÉRICOS</h5>
                            <a href="#" class="btn botaocard">Acessar</a>
                          </div>
                        </div>
                      </div>
                    </div>


              </div>

              <div class="col">
                  <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img/HARDWARE.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">GAMES</h5>
                            <a href="#" class="btn botaocard">Acessar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img/HARDWARE.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">COMPUTADORES</h5>
                            <a href="#" class="btn botaocard">Acessar</a>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>

              <div class="col">
                  <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img/HARDWARE.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">TV</h5>
                            <a href="#" class="btn botaocard">Acessar</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img/HARDWARE.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">CELULAR & SMARTPHONE</h5>
                            <a href="#" class="btn botaocard">Acessar</a>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>


              <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="img/HARDWARE.png" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">SERVIÇOS DIGITAIS E SOFTWARES</h5>
                          <a href="#" class="btn botaocard">Acessar</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="img/HARDWARE.png" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">ESPAÇO GAMER</h5>
                          <a href="#" class="btn botaocard">Acessar</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
              

          </div>

      </div>
  </section>

  <?php include './includes/rodape.php'; ?>