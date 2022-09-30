<?php
  get_header();
?>
<section id="slideBackground">
  <div id="mainSlide" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://toziniearmelin.adv.br/wp-content/uploads/2020/02/fotoequoterapia.jpg" alt="First slide" class="img-fluid" />
        <div class="carousel-caption d-none d-md-block">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h3>Instituto Sonho Meu</h3>
                <p>Atendimento, pesquisa e formação em Equoterapia.</p>
                <button>Saiba mais</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://media-manager.noticiasaominuto.com.br/1920/naom_5ce3f14a12178.jpg" alt="First slide" class="img-fluid" />
        <div class="carousel-caption d-none d-md-block">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h3>O Trabalho Voluntário</h3>
                <p>Com a sua ajuda podemos fazer um trabalho melhor.</p>
                <button>Seja um voluntário</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainSlide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainSlide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section id="birth">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="feature">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature01.jpeg" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-md-8">
        <h3>Como nasceu o projeto Sonho Meu</h3>
        <p>
          Somos uma comunidade que trabalha junto em prol de servir àqueles que necessitam de nós.
          Trabalhamos em prol de um único propósito: contribuir com a evolução humana por meio dos cavalos. Somos seres de “busca” e desta forma, buscamos nossa melhoria contínua e estamos em nossa jornada de evolução espiritual.
        </p>
        <div class="challenge">
          <div class="row">
            <div class="col-4">
              <h5>O Espaço</h5>
              <span>No início quando a ideia sugiu precisava-mos de um espaço, essa foi a parte mais díficil do início.</span>
            </div>
            <div class="col-4">
              <h5>Primeiro Cavalos</h5>
              <span>Com a ajuda de pessoas iluminadas conseguimos uma arrecadação inicial de 12 mil reais e compramos 3 cavalos.</span>
            </div>
            <div class="col-4">
              <h5>A Crise</h5>
              <span>Em junho de 2015 recebemos a noticia que o propriétario do espaço o queria de volta em 30 dias.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="donate">
  <div class="intro">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h2>Apoie nossa causa</h2>
          <p>Nosso projeto é sem fins lucrativos, vivemos de ajuda de pessoas iluminadas assim como você.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="mercadopago">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="box justify-content-center">
            <h3>Escolha o valor da sua doação</h3>
            <button>R$ 25,00</button>
            <button>R$ 50,00</button>
            <button>R$ 100,00</button>
            <button class="active">Outro valor</button>
            <input type="text" placeholder="Informe o valor a doar" name="value_donate">
            <button class="active go">Doar</button>
            <span>Sua doação é 100% segura</span>
            <img src="https://logodownload.org/wp-content/uploads/2019/06/mercado-pago-logo.png" width="100" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  get_footer();  
?>