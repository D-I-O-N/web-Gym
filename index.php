<?php



include "db.php";

$res = [];
$error = "";

if ($query = $db->query("SELECT * FROM about_coaches")) {
  $res = $query->fetchAll(PDO::FETCH_ASSOC);

  // foreach ($res as $coach) {
  
  //   $show_img = base64_encode($coach['img']);

  //   echo "<h2>{$coach['fio']}</h2>";
  //   echo "<p>{$coach['short_desc']}</p>";
  
  
  //   echo "<img src='data:image/jpeg;base64, {$show_img}' alt='{$coach['fio']}'>";
  //   echo "<hr>";
  // }
  
} else {
 $error = $db->errorInfo()[2];
}
?>

<!DOCTYPE html>
<html class="wow-animation" lang="en">
  <head>
    <title>Главная</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>

    <!-- IE Panel-->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="page-loader page-loader-variant-1">
      <div><img width='120' height='120' src='images/logo.png' alt=''/>
        <div class="offset-top-41 text-center">
          <div class="spinner"></div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
      <header class="page-head slider-menu-position" data-preset='{"title":"Header with slider","category":"header, slider","reload":true,"id":"header-1"}'>
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Top Panel-->
              <div class="rd-navbar-top-panel context-dark bg-danger">
                <div class="left-side">
                  <address class="contact-info text-left"><a href="tel:#"><span class="icon mdi mdi-cellphone-android novi-icon"></span><span class="text-middle">+7 949 894 25-67</span></a></address>
                </div>
                <div class="center">
                  <address class="contact-info text-left"><a href="#"><span class="icon mdi mdi-map-marker-radius novi-icon"></span><span class="text-middle">г. Макеевка, улица Ленина, 24, офис 12, стр. 2</span></a></address>
                </div>
                <div class="right-side">
                  <ul class="list-inline list-inline-sm">
                    <li class="list-inline-item"><a class="novi-icon fa fa-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="novi-icon fa fa-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="novi-icon fa fa-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="novi-icon fa fa-youtube" href="#"></a></li>
                  </ul>
                </div>
              </div>
              <!-- RD Navbar Panel -->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Top Panel Toggle-->
                <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index.php"><img width='80' height='80' src='images/logo.png' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="index.php"><img width='120' height='120' src='images/logo.png' alt=''/></a></div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="index.php"><span>Главная</span></a></li>
                      <li><a href="about-coach.php"><span>О Коучах</span></a></li>
                      <li><a href="typography.php"><span>Подробнее</span></a></li>
                      <li><a href="contacts.php"><span>Контакты</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!--Swiper-->
        <div class="swiper-container swiper-slider" data-loop="false" data-autoplay="5500" data-dragable="false">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="images/01-750.jpg" data-preview-bg="images/01-750.jpg.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">Только вперед!</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">
                        Чтобы иметь идеальное тело, нужно много тренироваться. Красивое тело и
                        сильный организм взаимосвязаны - и мы можем помочь вам и с тем, и с другим.
                        </h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">Давайте начнем</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/02-750.jpg" data-preview-bg="images/02-750.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">Никогда не сдавайся</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Каждому бодибилдеру требуется много самоотдачи и усилий, чтобы превратить свое тело в нечто, чем можно гордиться. Мы можем предоставить вам все необходимое для этого.</h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">Давайте начнем</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/03-750.jpg" data-preview-bg="images/03-750.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">Преодолей это расстояние</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Клиенты нашего тренажерного зала получают не только необходимое оборудование для своих тренировок, но и дружескую поддержку в достижении своей тренировочной цели номер один.</h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">Давайте начнем</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button swiper-button-prev swiper-parallax mdi mdi-chevron-left"></div>
          <div class="swiper-button swiper-button-next swiper-parallax mdi mdi-chevron-right"></div>
          <div class="swiper-pagination"></div>
        </div>
      </header>
      <!--Welcome-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 1","category":"content","id":"content-block-1"}'>
        <div class="container">
          <h1>Здравствуйте</h1>
          <hr class="divider bg-red">
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-xl-8">
              <p>Добро пожаловать в GyMisha! Мы надеемся, что вы по достоинству оцените наши услуги и возможности, которые мы предлагаем нашим постоянным и потенциальным клиентам. Вот некоторые из них:</p>
            </div>
          </div>
          <div class="row justify-content-center grid-group-lg offset-top-98">
            <div class="col-md-8 col-lg-4">
              <!-- Icon Box Type 5-->
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-sm icon-dark-filled mdi mdi-account-multiple"></span>
                <h4 class="text-danger offset-top-20">Квалифицированные коучи</h4>
                <p>Наши тренеры имеют многолетний опыт работы в различных видах фитнеса и спорта.</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-4">
              <!-- Icon Box Type 5-->
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-xs icon-dark-filled mdi mdi-thumb-up"></span>
                <h4 class="text-danger offset-top-20">Индивидуальный подход</h4>
                <p>У каждого клиента GyMisha есть индивидуальная программа тренировок и питания.</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-4">
              <!-- Icon Box Type 5-->
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-sm icon-dark-filled mdi mdi-dumbbell"></span>
                <h4 class="text-danger offset-top-20">Современное оборудование для фитнеса</h4>
                <p>Мы сотрудничаем с ведущими поставщиками оборудования для фитнеса, чтобы обеспечить вам превосходные результаты.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Offers-->
      <section data-preset='{"title":"Carousel 1","category":"content, carousel","reload":true,"id":"carousel-1"}'>
        <div class="owl-carousel owl-carousel-default d-lg-none-owl-dots veil-owl-nav d-lg-owl-nav" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/body.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Бодибилдинг</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">первый урок бесплатно</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/fitnes.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Фитнес</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">первый урок бесплатно</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/crossfit.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Кроссфит</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">первый урок бесплатно</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/circle.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Студия Circle</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">первый урок бесплатно</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/strength.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Силовые Тренировки</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">первый урок бесплатно</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/yoga.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Йога</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">первый урок бесплатно</a>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
      <!-- Coaches------------------------------------------------------------------------------------------------------------------------------------->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Team","category":"content, team","reload":false,"id":"team"}'>
    <div class="container">
        <h1>Коучи</h1>
        <hr class="divider bg-danger">
        <div class="row justify-content-sm-center offset-top-66">
            <div class="col-md-10 col-xl-12">
                <div class="row">
                    <?php 
                    // проверка ошибок, если не будет вывода
                    if (!$res) {
                        echo "<h1>$error</h1>";
                    } else {
                        foreach($res as $item) {
                            $show_img = base64_encode($item['img']);
                            echo "
                                <div class='col-md-3'>
                                    <div class='box-member'>
                                        <form action='about-coach.php' method='post'>
                                            <input type='hidden' name='coach_id' value='{$item['id']}'>
                                            <input type='hidden' name='fio' value='{$item['fio']}'>
                                            <!-- Добавьте другие скрытые поля, если необходимо -->
                                            <img class='img-fluid' src='data:image/jpeg;base64, {$show_img}' width='270' height='270' alt='{$item['fio']}'/>
                                            <h5 class='font-weight-bold offset-top-20'>
                                                <button type='submit' style='border: none; background-color: inherit; cursor: pointer;' name='coach_submit' value='{$item['id']}'>$item[fio]</button>
                                                <small class='text-danger'>$item[specialization]</small>
                                            </h5>
                                            <!-- Добавьте остальные детали и элементы формы по необходимости -->
                                        </form>
                                        <div class='box-member-caption'>
                                            <div class='box-member-caption-inner'>
                                                <ul class='list-inline list-inline-xs'>
                                                    <li class='list-inline-item'><a class='novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled' href='#'></a></li>
                                                    <li class='list-inline-item'><a class='novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled' href='#'></a></li>
                                                    <li class='list-inline-item'><a class='novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled' href='#'></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class='offset-xl-top-0 text-muted'>$item[short_desc]</p>
                                    </div>
                                </div>
                            ";
                        }
                    }
                    ?>
                </div>
                <a class="offset-top-66 btn btn-danger" href="about-coach.php">Увидеть всех коучей</a>
            </div>
        </div>
    </div>
</section>





      <!-- Testimonials-->
      <section data-preset='{"title":"Testimonials","category":"content, testimonials, parallax","reload":true,"id":"testimonials"}'>
        <div class="parallax-container" data-parallax-img="images/850.jpg">
          <div class="parallax-content">
            <div class="bg-overlay-gray-darkest context-dark">
              <div class="container section-98 section-md-110">
                <h1>Рекомендации</h1>
                <hr class="divider bg-white">
                <div class="row justify-content-sm-center">
                  <div class="col-md-8">
                    <!-- Testimonials Slider v.3-->
                    <div class="owl-carousel owl-carousel-testimonials-2" data-items="1" data-nav="true" data-dots="false" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
                      <div>
                        <blockquote class="quote quote-slider-3">
                          <p class="quote-body">Я пришел сюда, чтобы обрести ту форму тела, которая был у меня полгода назад. Я был весьма удивлен спектром услуг, которые мне предложили в GyMisha. Кроме того, вы можете воспользоваться их групповыми тренировками</p><img class="quote-img rounded-circle" width="80" height="80" src="images/Max.jpg" alt="Максим Туров"/>
                          <p class="font-weight-bold quote-author">
                            <cite class="text-normal">Максим Туров</cite>
                          </p>
                          <p class="quote-desc text-gray">Постоянные клиенты</p>
                        </blockquote>
                      </div>
                      <div>
                        <blockquote class="quote quote-slider-3">
                          <p class="quote-body">В течение последнего года я имел феноменальное удовольствие тренироваться с интенсивными тренерами в тренажерном зале в качестве клиента и друга. Их притягательные личности гарантируют, что дружба неизбежно будет развиваться на протяжении всего курса обучения.</p><img class="quote-img rounded-circle" width="80" height="80" src="images/Ruslan.jpg" alt="Русланчик"/>
                          <p class="font-weight-bold quote-author">
                            <cite class="text-normal">Руслан Лаврушкин</cite>
                          </p>
                          <p class="quote-desc text-gray">Постоянные клиенты</p>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark novi-background" data-preset='{"title":"Footer","category":"footer","reload":true,"id":"footer"}'>
        <div class="container">
          <div class="row justify-content-md-center text-xl-left">
            <div class="col-md-12">
              <div class="row justify-content-sm-center">
                <div class="col-sm-10 col-md-3 text-left order-md-4 col-md-10 col-xl-3 offset-md-top-50 offset-xl-top-0 order-xl-2">
                  <!-- Twitter Feed-->
                  <p class="text-uppercase text-spacing-60 font-weight-bold text-center text-xl-left">Twitter</p>
                  <div class="offset-top-20">
                          <div class="twitter" data-twitter-username="templatemonster" data-twitter-date-hours=" hours ago" data-twitter-date-minutes=" minutes ago">
                            <div class="twitter-sm" data-twitter-type="tweet">
                              <div class="twitter-date text-dark small"><span class="icon icon-xxs mdi mdi-twitter text-middle"></span> <span class="text-middle" data-date="text"></span>
                              </div>
                              <div class="twitter-text" data-tweet="text"></div>
                              <div class="twitter-name font-weight-bold big" data-screen_name="text"></div>
                            </div>
                            <div class="twitter-sm" data-twitter-type="tweet">
                              <div class="twitter-date text-dark small"><span class="icon icon-xxs mdi mdi-twitter text-middle"></span> <span class="text-middle" data-date="text"></span>
                              </div>
                              <div class="twitter-text" data-tweet="text"></div>
                              <div class="twitter-name font-weight-bold big" data-screen_name="text"></div>
                            </div>
                          </div>
                  </div>
                </div>
                <div class="col-sm-10 col-md-3 offset-top-66 order-md-3 col-md-10 col-xl-2 offset-xl-top-0 order-xl-3">
                  <!-- Flickr Feed-->
                  <p class="text-uppercase text-spacing-60 font-weight-bold">Галерея</p>
                  <div class="offset-top-24">
                          <div class="group-xs flickr widget-flickrfeed" data-lightgallery="group" data-flickr-tags="tm58888_landscapes"><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a>
                          </div>
                  </div>
                </div>
                <div class="col-sm-10 col-md-3 offset-top-66 order-md-2 offset-md-top-0 col-md-6 col-xl-4 order-xl-4">
                  <div class="inset-xl-left-20">
                    <p class="text-uppercase text-spacing-60 font-weight-bold">Новостная рассылка</p>
                    <p class="offset-top-20 text-left">
                    Следите за нашими постоянными новостями и обновлениями. Введите свой адрес электронной почты и
                    подпишитесь на нашу рассылку.
                    </p>
                    <div class="offset-top-30">
                            <form class="rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                              <div class="form-group">
                                <div class="input-group input-group-sm"><span class="input-group-prepend"><span class="input-group-text input-group-icon"><span class="mdi mdi-email novi-icon"></span></span></span>
                                  <input class="form-control" placeholder="Введите ваш Email" type="email" name="email" data-constraints="@Required @Email"><span class="input-group-append">
                                    <button class="btn btn-sm btn-danger" type="submit">Подписаться</button></span>
                                </div>
                              </div>
                              <div class="form-output" id="form-subscribe-footer"></div>
                            </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-10 col-md-3 offset-top-66 order-md-1 offset-md-top-0 col-md-6 col-xl-3 order-xl-1">
                  <!-- Footer brand-->
                  <div class="footer-brand"><a href="index.php"><img width='120' height='120' src='images/logo.png' alt=''/></a></div>
                  <div class="offset-top-50 text-sm-center text-xl-left">
                          <ul class="list-inline">
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                          </ul>
                  </div>
                  <p class="text-darker offset-top-20">GyMisha &copy; <span id="copyright-year"></span> .
                    Дизайн&nbsp;by&nbsp;<a href="https://vk.com/slesarbogdan">Misha</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>