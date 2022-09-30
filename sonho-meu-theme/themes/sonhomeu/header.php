<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link apextech.com.br
 *
 * @package Apex Tech Themes
 * @subpackage Projeto Sonho meu
 * @since Sonho Meu 1.0
 */

?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Apex Tech & Matheus C. Pereira">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <section id="topHeader">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5><i class="lni lni-envelope"></i> <span>contato@sonhomeu.org</span></h5>
                <h5><i class="lni lni-mobile"></i> <span>(66)9.9611-5591</span></h5>
            </div>
            <div class="col"></div>
            <div class="col-3 text-end">
                <a href=""><i class="lni lni-facebook"></i></a>
                <a href=""><i class="lni lni-instagram"></i></a>
                <a href=""><i class="lni lni-map-marker"></i></a>
            </div>
        </div>
    </div>
  </section>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <?php
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }
          ?>
          <img src="./img/logo.jpg" alt="" class="img-fluid" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Quem somos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Sobre nós</a></li>
                <li><a class="dropdown-item" href="#">História</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Equipe</a></li>
                <li><a class="dropdown-item" href="#">Matedores e Voluntarios</a></li>
                <li><a class="dropdown-item" href="#">Transparência</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Equoterapia</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Unidades de Négocios
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Eventos</a></li>
                <li><a class="dropdown-item" href="#">Equonsciência e Négocios</a></li>
                <li><a class="dropdown-item" href="#">Projetos</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Seja Voluntário</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
          <div class="d-flex">
              <button class="btn btn-outline-success donate" type="button">Apoie-nos</button>
          </div>
        </div>
      </div>
    </nav>
  </header>