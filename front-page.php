<?php
/**
 * Template Name: Front Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package creatrends
 */
get_header(); ?>
<!-- welcome message -->
 <!-- Header -->
<!--<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in">Welcome To Our Studio!</div>
      <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
    </div>
  </div>
</header>-->
    <!-- Services -->
<!--<section id="services">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">E-Commerce</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Responsive Design</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Web Security</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
    </div>
  </div>
</section>-->
<?php if ( !is_front_page() ) : ?>
<?php endif;?>
<section class="welcome-section p-0" id="welcome">
  <div class="container-fluid p-0 ">
    
    <div class="row no-gutters">
      <div class="col-lg-6">
        <a class="portfolio-item" href="./radiadores-para-mineria/">
          <span class="caption" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/1420637714.jpg');">
            <span class="caption-content caption-welcome is-yellow">
              <h2 class="caption-title mb-0">Mineria</h2>
            </span>
          </span>
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="./transporte/">
          <span class="caption" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/362974.jpg');">
            <span class="caption-content caption-welcome is-darkblue text-right">
              <h2 class="caption-title mb-0">Transporte</h2>
            </span>
          </span>
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="#">
          <span class="caption" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/dominik-vanyi-629409-unsplash.jpg');">
            <span class="caption-content caption-welcome is-orange">
              <h2 class="caption-title mb-0">Servicios</h2>
            </span>
          </span>
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="#">
          <span class="caption" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/shutterstock_540603541.jpg');">
            <span class="caption-content caption-welcome is-blue text-right">
              <h2 class="caption-title mb-0">Intercambiadores de Calor</h2>
            </span>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="about px-0">
  <div class="container-fluid justify-content-center p-60">
    <div class="row">
      <div class="col-lg-6">
        <p class="text-muted">Radiadores inppa presente en el mercado desde 1959 desarrollando tecnología e innovación para la industria y transporte. Contamos con una amplia gama de productos
          estándar y productos especiales. Nuestros procedimientos y materias primas están
        certificados y nuestros procedimientos mantienen el cuidado del medio ambiente.</p>
      </div>
      <div class="col-lg-3">
        <h2>Contacto</h2>
        <ul class="list-unstyled">
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
                <i class="fas fa-map-marker-alt fa-lg self-align-center"></i> 
              </span>
              <span class="ml-2">Camino Melipilla 13460, Maipú</span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-phone fa-lg"></i>
            </span>
              <span class="ml-2">+56 2 3244 8000</span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-envelope fa-lg"></i>
            </span>
              <span class="ml-2">contacto@inppa.cl</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h2>Contamos con una a</h2>
        <ul class="list-unstyled">
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
                <i class="fas fa-map-marker-alt fa-lg self-align-center"></i> 
              </span>
              <span class="ml-2">Camino Melipilla 13460, Maipú</span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-phone fa-lg"></i>
            </span>
              <span class="ml-2">+56 2 3244 8000</span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-envelope fa-lg"></i>
            </span>
              <span class="ml-2">contacto@inppa.cl</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php

get_footer();