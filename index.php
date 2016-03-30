<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="images/favicon/binn-facebook.png" type="image/x-icon">
  <link rel="icon" href="images/favicon/binn-facebook.png" type="image/x-icon">

  <title>Binn - Soluções Tecnológicas</title>

  <!--Library Styles-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/lib/font-awesome.css" rel="stylesheet">
  <link href="css/lib/nivo-lightbox.css" rel="stylesheet">
  <link href="css/lib/nivo-themes/default/default.css" rel="stylesheet">
  <?php require 'php/contact.php'; ?>
  <!--Template Styles-->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/binn.css" rel="stylesheet">
  <link href="css/scheme/purple.css" rel="stylesheet">

  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll">

  <!-- Preloader -->
  <div id="preloader">
    <div id="status"></div>
  </div>

  <div id="main-wrapper">

    <!-- Site Navigation -->
    <div id="menu">
      <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html#">
            <img class="site-logo" src="images/binn_logo.png" alt="logo"><br>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a class="sscroll" href="index.html#home">Home</a></li>
            <li><a class="sscroll" href="index.html#services">Serviços</a></li>
            <li><a class="sscroll" href="index.html#portfolio">Portfolio</a></li>
            <!-- <li><a class="sscroll" href="index.html#testimonial">Feedbacks</a></li> -->
            <!-- <li><a class="sscroll" href="index.html#about">Equipe</a></li> -->
            <li><a class="sscroll" href="index.html#clients">Clientes</a></li>
            <!-- <li><a class="sscroll" href="index.html#blog-front">Blog</a></li> -->
            <li><a class="sscroll" href="index.html#contact">Contato</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </div>

    <div id="container">
      <!-- BEGIN HOME -->
      <section id="home" class="home">

        <div class="bg-parallax">
          <div class="home-overlay"></div>
          <div class="intro header-content">
            <h3>Seja Bem Vindo(a),</h3>
            <h2>Tornamos simples e cômodo para você</h2>
            <h3>O que parece ser complicado</h3>
          </div>
        </div>

      </section>
      <!-- END HOME -->

      <!-- BEGIN SERVICES -->
      <section id="services" class="services">
        <div class="row">
          <div class="col-md-12">
            <div class="header-content">
              <h2>Serviços</h2>
              <h3>Fornecemos a nossos clientes opções de serviços com um atendimento de qualidade</h3>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service">
                  <div class="icon-holder">
                    <i class="fa fa-paint-brush"></i>
                  </div>
                  <h3 class="heading">Web Design</h3>
                  <p class="description">Desenvolvimento de Portais para seu negócio </p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service">
                  <div class="icon-holder">
                    <i class="fa fa-mobile"></i>
                  </div>
                  <h3 class="heading">Aplicativos Mobile</h3>
                  <p class="description">Aplicativos para os sistemas operacionais Mobile Android e iOS.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service">
                  <div class="icon-holder">
                    <i class="fa fa-pie-chart"></i>
                  </div>
                  <h3 class="heading">Business Intelligence</h3>
                  <p class="description">Recolhimento de informações dos diversos Sistemas de Informação do seu negócio. </p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service">
                  <div class="icon-holder">
                    <i class="fa fa-heartbeat"></i>
                  </div>
                  <h3 class="heading">Suporte</h3>
                  <p class="description">Conserto de computadores, formatação, backups, instalação de sistemas operacionais e software específicos.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service">
                  <div class="icon-holder">
                    <i class="fa fa-code"></i>
                  </div>
                  <h3 class="heading">Desenvolvimento de Aplicações</h3>
                  <p class="description">Sistemas locais e sistemas de rede interna</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service">
                  <div class="icon-holder">
                    <i class="fa fa-search"></i>
                  </div>
                  <h3 class="heading">Search Engine Optimization</h3>
                  <p class="description">O seu negócio com maior visibilidade nos motores de busca mais usados do mundo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SERVICES -->

      <!-- BEGIN PORTFOLIO -->
      <section id="portfolio" class="portfolio gray">
        <div class="row">
          <div class="col-md-12">
            <div class="header-content">
              <h2>Portfolio</h2>
              <h3>Conheça alguns de nossos trabalhos</h3>
            </div>
          </div>

          <div class="col-md-12">
            <ul class="portfolioFilter text-center">
              <li data-filter="websites">WEB SITES</li>
              <li data-filter="business-intelligence">BI</li>
              <li data-filter="apps">APLICATIVOS</li>
              <li data-filter="all">TODOS</li>
            </ul>
          </div>
          <div class="col-md-12 mg-bt-80">
            <div class="row portfolioContainer  text-center">

              <!-- <div class="col-md-4 col-xs-6 portfolio-item websites">
                <a class="popup" href="images/portfolio/portfolio-thumb-1.jpg" title="Site do escritório 'Verde Agua Interiores'" data-lightbox-gallery="team-portfolio">
                  <span class="project-hover">
                                        <span>Site do escritório 'Verde Agua Interiores'
                                        </span>
                  </span>
                  <img src="images/portfolio/portfolio-thumb-1.jpg" alt="portfolio-thumb-1">
                </a>
              </div> -->

              <!-- <div class="col-md-4 col-xs-6 portfolio-item websites">
                <a class="popup" href="images/portfolio/portfolio-thumb-3.jpg" title="Site do Studio de Pilates 'Vivace'" data-lightbox-gallery="team-portfolio">
                  <span class="project-hover">
                                        <span>Site do Studio de Pilates 'Vivace'
                                        </span>
                  </span>
                  <img src="images/portfolio/portfolio-thumb-3.jpg" alt="portfolio-thumb-1">
                </a>
              </div> -->

              <!-- <div class="col-md-4 col-xs-6 portfolio-item apps">
                <a class="popup" href="images/portfolio/portfolio-thumb-5.jpg"  title="Sistema de cadastro de alunos da 'Vivace Pilates'" data-lightbox-gallery="team-portfolio">
                  <span class="project-hover">
                                        <span>Sistema de cadastro de alunos da 'Vivace Pilates'
                                        </span>
                  </span>
                  <img src="images/portfolio/portfolio-thumb-3.jpg" alt="portfolio-thumb-5">
                </a>
              </div> -->

              <div class="col-md-4 col-xs-6 portfolio-item websites">
                <a class="popup" href="images/portfolio/iDrink.png" title="Aplicação Web 'xDrink'" data-lightbox-gallery="team-portfolio">
                  <span class="project-hover">
                                        <span>Aplicação Web 'xDrink'
                                        </span>
                  </span>
                  <img src="images/portfolio/iDrink.png" alt="portfolio-thumb-3">
                </a>
              </div>

              <div class="col-md-4 col-xs-6 portfolio-item apps">
                <a class="popup" href="images/portfolio/adivinha_pict.png" title="Aplicativo do jogo 'Adivinha'" data-lightbox-gallery="team-portfolio">
                  <span class="project-hover">
                                        <span>Aplicativo do jogo 'Adivinha'
                                        </span>
                  </span>
                  <img src="images/portfolio/adivinha_pict.png" alt="portfolio-thumb-4">
                </a>
              </div>

              <div class="col-md-4 col-xs-6 portfolio-item business-intelligence">
                <a class="popup" href="images/portfolio/bi_service.png" data-lightbox-gallery="team-portfolio">
                  <span class="project-hover">
                                        <span>BI de Gestão Eletrônica de Documentos
                                        </span>
                  </span>
                  <img src="images/portfolio/bi_service.png" alt="portfolio-thumb-2">
                </a>
              </div>

              <!-- <div class="col-md-4 col-xs-6 portfolio-item business-intelligence">
                <a class="popup" href="images/portfolio/portfolio-thumb-6.jpg" data-lightbox-gallery="team-portfolio">
                  <span class="project-hover">
                                        <span>B.I Agência Espacial Brasileira
                                        </span>
                  </span>
                  <img src="images/portfolio/portfolio-thumb-6.jpg" alt="portfolio-thumb-6">
                </a>
              </div> -->

            </div>
          </div>
        </div>
      </section>
      <!-- END PORTFOLIO -->

      <!-- BEGIN TESTIMONIAL -->
      <!-- <section id="testimonial" class="testimonial">

        <div class="row">
          <div class="col-md-12 mg-bt-80">
            <div class="header-content">
              <h2>Testimonials</h2>
              <h3>What Clients are saying about us?</h3>
            </div>
          </div>

          <div class="col-md-12">
            <div id="bx-pager" class="client-photos">
              <a class="client-photo" data-slide-index="0" href="">
                <img alt="" src="images/clients/avatar-1.jpg">-->
                <!-- Client photo 1 -->
              <!-- </a>
              <a class="client-photo" data-slide-index="1" href="">
                <img alt="" src="images/clients/avatar-2.jpg"> -->
                <!-- Client photo 2 -->
              <!-- </a>
              <a class="client-photo" data-slide-index="2" href="">
                <img alt="" src="images/clients/avatar-3.jpg"> -->
                <!-- Client photo 3 -->
              <!-- </a>
            </div>
            <ul class="bxslider">
              <li>
                <h3>Work with TEAM was a pleasure. They understood exactly what I wanted and created an awesome site for my company.</h3>
                <span>&mdash;<strong>Jane Pearson</strong>, CEO Pearson Associates</span>
              </li>
              <li>
                <h3>I'm really happy with the results. Get 100% satisfaction is difficult but TEAM got it without problems.</h3>
                <span>&mdash;<strong>Roy Royce</strong>, DevX</span>
              </li>
              <li>
                <h3>If you wish success in life, make perseverance your bosom friend, experience your wise counselor, caution your elder brother and hope your guardian genius.</h3>
                <span>&mdash;<strong>Minion Max</strong>, Bubble Gum</span>
              </li>
            </ul>

          </div>
        </div>

      </section> -->
      <!-- END TESTIMONIAL -->

      <!-- BEGIN TEAM -->
      <!-- <section id="about" class="about gray">
        <div class="row">
          <div class="col-md-12 mg-bt-80">
            <div class="header-content">
              <h2>Equipe</h2>
              <h3>Nossa equipe é formada por um pequeno time de pessoas altamente capacitadas a solucionar os seus problemas,
                 e focamos em fazer isso de forma que nossos clientes não necessitem ter preocupações ao longo da solução.
              </h3>
            </div>
          </div>
          <div class="col-lg-12">
             <div class="row mg-bt-40">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="teams">
                  <div class="pict">
                    <img src="images/team/avatar.png" alt="Team 1">
                  </div>
                  <div class="desc">
                    <h3>Felipe Sampaio</h3>
                    <span>Desenvolvedor</span>
                    <div class="social">
                      <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                      <a href="javascript:;"><i class="fa fa-envelope"></i></a>
                      <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                      <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="teams">
                  <div class="pict">
                    <img src="images/team/avatar.png" alt="Team 1">
                  </div>
                  <div class="desc">
                    <h3>Lucas Rosa</h3>
                    <span>Gerente de Projetos Consultor BI e SEO</span>
                    <div class="social">
                      <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                      <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                      <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                      <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="teams">
                  <div class="pict">
                    <img src="images/team/avatar.png" alt="Team 1">
                  </div>
                  <div class="desc">
                    <h3>Matheus Mello</h3>
                    <span>Desenvolvedor</span>
                    <div class="social">
                      <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                      <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                      <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                      <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="teams">
                  <div class="pict">
                    <img src="images/team/avatar.png" alt="Team 1">
                  </div>
                  <div class="desc">
                    <h3>Camilla Maia</h3>
                    <span>Designer</span>
                    <div class="social">
                      <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                      <a href="javascript:;"><i class="fa fa-instagram"></i></a>
                      <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                      <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- END TEAM -->

      <!-- BEGIN CLIENTS -->
      <section id="clients" class="clients">
        <div class="row">
          <div class="col-md-12 mg-bt-80">
            <div class="header-content">
              <h2>Clientes</h2>
              <h3>Alguns dos nossos clientes</h3>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row mg-bt-60">
              <div class="col-md-12">
                <ul class="client-slider">
                  <li><img src="images/clients/aeb_logo.png" alt="logo-1" /></li>
                  <li><img src="images/clients/lmaestri_logo.png" alt="logo-1" style="width: 90px !important;" /></li>
                  <li><img src="images/clients/verdeagua_logo.png" alt="logo-1" /></li>
                  <li><img src="images/clients/logo1.png" alt="logo-1"></li>
                  <li><img src="images/clients/logo2.png" alt="logo-1"></li>
                  <li><img src="images/clients/logo3.png" alt="logo-1"></li>
                  <!-- <li><img src="images/clients/logo4.png" alt="logo-1"></li>
                  <li><img src="images/clients/logo5.png" alt="logo-1"></li>
                  <li><img src="images/clients/logo6.png" alt="logo-1"></li>
                  <li><img src="images/clients/logo7.png" alt="logo-1"></li>
                  <li><img src="images/clients/logo8.png" alt="logo-1"></li>
                  <li><img src="images/clients/logo9.png" alt="logo-1"></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END CLIENTS -->

      <!-- BEGIN BLOG -->
      <!-- <section id="blog-front" class="blog-front gray">
        <div class="row">
          <div class="col-md-12 mg-bt-80">
            <div class="header-content">
              <h2>Blog</h2>
              <h3>Thoughts on design and development trends</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <article class="col-md-4 col-sm-6">
            <figure class="blog-thumb">
              <img src="images/blog/blog-1.jpg" alt="blog-thumb">
            </figure>
            <div class="post-area">
              <a class="post-cat" href="">
                <h4>Design</h4>
              </a>
              <a class="post-title" href="blog-post.html">
                <h3>At vero eos et accusamus et iusto odio dignissimos</h3>
              </a>
              <p class="post-content">No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around ...</p>
            </div>
          </article>

          <article class="col-md-4 col-sm-6">
            <figure class="blog-thumb">
              <img src="images/blog/blog-2.jpg" alt="blog-thumb">
            </figure>
            <div class="post-area">
              <a class="post-cat" href="">
                <h4>Illustration</h4>
              </a>
              <a class="post-title" href="blog-post.html">
                <h3>At vero eos et accusamus et iusto odio dignissimos</h3>
              </a>
              <p class="post-content">No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around ...</p>
            </div>
          </article>

          <article class="col-md-4 col-sm-6">
            <figure class="blog-thumb">
              <img src="images/blog/blog-3.jpg" alt="blog-thumb">
            </figure>
            <div class="post-area">
              <a class="post-cat" href="">
                <h4>Inspiration</h4>
              </a>
              <a class="post-title" href="blog-post.html">
                <h3>At vero eos et accusamus et iusto odio dignissimos</h3>
              </a>
              <p class="post-content">No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around ...</p>
            </div>
          </article>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <a class="btn blog-btn" href="blog.html">See what else is going on...</a>
          </div>
        </div>
      </section> -->
      <!-- END BLOG -->

      <!-- BEGIN SUBSCRIPTION -->
      <!-- <section class="subscribe text-center">
        <div class="row">
          <div class="col-md-12">
            <h3>Stay Tuned by subscribing to our Newsletter.</h3>
            <p>We will not share your email.</p>

            <form role="form">
              <input type="text" class="form-control placeholder" placeholder="Enter Your Email">
              <button class="btn" type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </section> -->
      <!-- END SUBSCRIPTION -->

      <!-- BEGIN CTA -->
      <!-- <section class="cta text-center">
        <div class="row">
          <div class="col-md-12">
            <h3>Purchase Team Pro and Get Access To</h3>
            <p>6 Pre-built color scheme, less, php enabled contact form, slider and parallax home and Pro SUPPORT</p>
            <a href="http://scripteden.com/download/team-creative-business-portfolio-template/" class="btn">Purchase Now</a>
          </div>
        </div>
      </section> -->
      <!-- END CTA -->

      <!-- BEGIN CONTACT -->
      <section id="contact" class="contact gray">
        <div class="row">
          <div class="col-md-12 mg-bt-80">
            <div class="header-content">
              <h2>Contato</h2>
              <h3>Tire suas dúvidas, envie-nos uma mensagem!</h3>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="address">
              <h2>Agende uma reunião</h2>
              <p>Oferecemos uma diversidade de serviços e estamos de braços abertos para atender as suas expectativas, entre em contato e agende conosco uma reunião.</p>
              <h2>Outras formas de contato</h2>
              <ul class="office">
                <!-- <li><i class="fa fa-map-marker"></i> <strong>Endereço:</strong> 1234 Street Name, City Name, United States</li> -->
                <li><i class="fa fa-phone"></i> <strong>Telefones:</strong> (61) 8149-4249 - (61) 8115-0028 - (61) 8590-8990</li>
                <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:binn.sac@gmail.com">binn.sac@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <form id="contact-form" role="form" method="post" action="">
              <div class="form-group">
                <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Nome">
              </div>

              <div class="form-group">
                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="Email">
              </div>

              <div class="form-group">
                <textarea class="form-control" id="c_message" name="c_message" rows="10" placeholder="Mensagem"></textarea>
              </div>
              <br/>
              <input id="submit" name="enviar" type="submit" value="Enviar Mensagem"  class="btn"></input>
              <!-- <div class="ajax-response"></div> -->
            </form>
            <?php echo $result; ?>
          </div>
        </div>
      </section>
      <!-- END CONTACT -->
      <!-- BEGIN FOOTER -->
      <footer>
        <div class="row">
          <div class="col-md-12">
            <div class="social">
              <a href="https://www.facebook.com/Binn-Solu%C3%A7%C3%B5es-Tecnol%C3%B3gicas-465129167017978/"><i class="fa fa-facebook"></i></a>
              <!-- <a href="javascript:;"><i class="fa fa-twitter"></i></a>
              <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
              <a href="javascript:;"><i class="fa fa-dribbble"></i></a> -->
            </div>
            <p>
              © 2016 <a href="#home">Binn</a> |  Todos os direitos reservados.
            </p>
          </div>
        </div>
      </footer>
      <!-- END FOOTER -->
    </div>
  </div>


  <!-- Back to top -->
  <div id="backtotop">
    <a class="to-top-btn sscroll" href="index.html#home"><i class="fa fa-angle-double-up"></i></a>
  </div>


  <!-- Library Scripts -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/lib/jquery.preloader.js"></script>
  <script src="js/lib/nivo-lightbox.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/lib/jquery.superslides.min.js"></script>
  <script src="js/lib/smoothscroll.js"></script>
  <script src="js/lib/jquery.sudoslider.min.js"></script>
  <script src="js/lib/jquery.bxslider.min.js"></script>
  <script src="js/lib/jquery.mixitup.min.js"></script>
  <script src="js/lib/jquery.backtotop.js"></script>
  <script src="js/lib/jquery.carouFredSel-6.2.1-packed.js"></script>
  <script src="js/lib/retina.min.js"></script>

  <!-- Custom Script -->
  <script src="js/main.js"></script>
</body>

</html>
