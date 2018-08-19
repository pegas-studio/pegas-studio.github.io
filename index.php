<?php
#error_reporting(E_ALL);
#ini_set("display_errors", 1);

require 'phpmailer/PHPMailerAutoload.php';

if (!empty($_POST['name'])) {
    $login = 'biv2994@mail.ru';
    $password = 'm777onopoly';
    
    $fromName = 'Студия «Пегас»';
    $subject = "Заявка от клиента";

    $clientName = $_POST['name'];
    $clientEmail = $_POST['email'];

    $mail = new PHPMailer;
    $mail->isSMTP();

    #$mail->SMTPDebug = 1;
    $mail->Host = 'smtp.mail.ru';
    $mail->SMTPAuth = true;
    $mail->Username = $login;
    $mail->Password = $password;
    $mail->SMTPSecure = 'SSL';
    $mail->Port = '587';

    $mail->CharSet = 'UTF-8';
    $mail->From = $login;
    $mail->FromName = $fromName;
    $mail->addAddress($login, $fromName);

    $mail->isHTML(true);

    $mail->Subject = "Заявка от клиента";
    $mail->Body = "Клиент $clientName оставил(a) заявку.<br> E-mail: $clientEmail";
    $mail->AltBody = "Клиент $clientName оставил(a) заявку.\r\n E-mail: $clientEmail";

    if ($mail->send()) {
        $answer = '1';
    } else {
        $answer = '0';
        #echo 'Ошибка отправки письма. ';
        #echo 'Ошибка: ' . $mail->ErrorInfo;
    }
    die($answer);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Студия «Пегас»</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/lightgallery/css/lightgallery.css" rel="stylesheet">
  <link href="lib/slider/css/slider.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <header id="header" style="padding-top: 0">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#pegas-main"><img src="img/logo_min.png" alt="" title="" height="100" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#pegas-main">Regna</a></h1>-->
      </div>

      <nav id="nav-container" style="margin-top: 37px">
        <ul class="nav-menu">
          <li><a href="#pegas-main">ГЛАВНАЯ</a></li>
          <li><a href="#about">О СТУДИИ</a></li>
          <li><a href="#permanent">ПЕРМАНЕНТНЫЙ МАКИЯЖ</a></li>
          <li><a href="#portfolio">ПОРТФОЛИО</a></li>
          <li><a href="#review">ОТЗЫВЫ</a></li>
          <li><a href="#contact">КОНТАКТЫ</a></li>          
        </ul>
      </nav><!-- #nav-container -->
    </div>
  </header><!-- #header -->

  
  <section id="pegas-main">
    <div class="pegas-main-container">
      <h1 style="color: black; opacity: 1; font-family: 'Bad Script', cursive;" class="pegas-font">Студия идеальных бровей</h1>
      <h2 style="color: black; opacity: 1; font-family: 'Lobster', cursive;">СТУДИЯ «ПЕГАС»</h2>
      <!-- <a href="#about" class="btn-get-started">Get Started</a> -->
    </div>
  </section><!-- #pegas-main -->

  <main id="main">

    
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title" style="font-family: 'Lobster', cursive;">О студии</h3>
          <!-- <p class="section-description" style="color: #02061C; font-weight: 500">Мастера</p> -->
        </div>
        
        <div>
          <!-- <div class="wow fadeInUp" style="display: flex; flex-wrap: wrap; justify-content: center;">
            <div style="padding-right: 100px; padding-bottom: 40px">
              <img src="img/about/trener1.jpg" height="500">
            </div>
            <div style="width: 50%">
              <h2 style="font-family: 'Bad Script', serif; color: black; font-weight: 700; font-size: 35px">
                Юлиана Лукашевич
              </h2>
              <div style="font-family: 'Tinos', serif; font-size: 22px">
                <p>Одна из первых мастеров-бровистов, успешно практикующая и развивающая направление по восстановлению и моделированию формы бровей, работу на полуперманентных красителях, отталкиваясь физиогномики лица.</p>
                <p>Профессиональный практический опыт преподавателя составляет <b>10 лет.</b></p>
              </div>
            </div>
          </div> -->
          <br/>
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div style="font-family: 'Bad Script', serif; font-size: 25px">
              <p style="text-indent: 1.5em;">
                В нашей студии работает дружная команда специалистов. Подготовка каждого из них находится на высоком уровне.
              </p>
            </div>
          </div>
          <div class="wow fadeInUp" data-wow-delay="0.4s">
            <div style="font-family: 'Bad Script', serif; font-size: 25px">
              <p style="text-indent: 1.5em;">
                Все они постоянно совершенствуются, и имеют свои индивидуальные подходы к выполнению творческих задач. 
              </p>
            </div>
          </div>
          <div class="wow fadeInUp" data-wow-delay="0.6s">
            <div style="font-family: 'Bad Script', serif; font-size: 25px">
              <p style="text-indent: 1.5em;">
                Поэтому, любой, даже самый требовательный клиент, встретит в нашей студии перманентного макияжа, своего мастера! 
              </p>
            </div>
          </div>
          <div class="wow fadeInUp" data-wow-delay="0.8s">
            <div style="font-family: 'Bad Script', serif; font-size: 25px">
              <p style="text-indent: 1.5em;">
                Всех наших профессионалов в команде отличает одно - качество, любовь к работе и уважение к клиентам! Нашим профессионалам не нужно будет объяснять, что необходимо сделать - они сами определят наиболее эффектный вариант для Вас, сделав процедуру на высоком профессионально качественном уровне!
              </p>
            </div>
          </div>
          
        </div>

      </div>
    </section>

    
    
    <section id="permanent" style="background-color: #151515;">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title" style="color: white; font-family: 'Bad Script', cursive;">Перманентный макияж</h3><br/>
          <p class="section-description" style="font-weight: 500; color: white">Перманентный макияж - современная микродермальная техника, позволяющая подчеркнуть контуры глаз, сделать более чувственными губы и совершенными брови.
Для достижения безболезненного воздействия, великолепного эстетического результата и для обеспечения биологической безопасности клиентов в Studia Pegas:</p>
        </div>
        
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2" style="background-color: transparent; color: white;">
            
            <div class="icon-box wow fadeInUp">
              <div class="icon"><img src="img/tick-in-circle.png" /></div>
              <!-- <h4 class="title"><a href="" class="permanent-item-title">Eiusmod Tempor</a></h4> -->
              <p class="description">Используются гипоаллергенные пигменты, лицензированные средства местной анестезии, иглы и дюзы микроскопического диаметра</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><img src="img/tick-in-circle.png" /></div>
              <!-- <h4 class="title"><a href="" class="permanent-item-title">Magni Dolores</a></h4> -->
              <p class="description">Безукоризненно соблюдаются санитарно-гигиенические нормы и требования СанПиН</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><img src="img/tick-in-circle.png" /></div>
              <!-- <h4 class="title"><a href="" class="permanent-item-title">Dolor Sitema</a></h4> -->
              <p class="description">Выполняется перманентный макияж посредством нескольких техник</p>
            </div>

          </div>



        </div>

        <br/>
        <br/>

        <div class="about-container" align="center">
          <h3 style="color: white; font-family: 'Bad Script', cursive;">У нас вы найдёте:</h3>
          <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            <div class="you-will-find wow fadeInUp" data-wow-delay="0.2s">
              <div class="item-image"></div>
              <div class="item-text">Полную конфиденциальность и безупречное исполнение</div>
            </div>
            <div class="you-will-find wow fadeInUp" data-wow-delay="0.4s">
              <div class="item-image"></div>
              <div class="item-text">Понимание проблемы и профессионализм мастера</div>
            </div>
            <div class="you-will-find wow fadeInUp" data-wow-delay="0.6s">
              <div class="item-image"></div>
              <div class="item-text">Компетентные консультации</div>
            </div>
            <div class="you-will-find wow fadeInUp" data-wow-delay="0.8s">
              <div class="item-image"></div>
              <div class="item-text">Доступные цены для Минска и региона</div>
            </div>  
          </div>
          
        </div>


        <br/>
        <br/>

        <div class="about-container" align="center">
          <h3 style="color: white; font-family: 'Bad Script', cursive;">Предоставляемый спектр услуг:</h3>
          <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            <div class="service wow fadeInUp" data-wow-delay="0.2s">
              <div class="service-title">ПМ бровей</div>
              <div class="item-image"><img src="img/permanent/eyebrow.png" width="120"></div>
              <div class="item-text">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="background-color: transparent;
  border-bottom: 1px solid white;">волосковый метод (6D)</li>
                  <li class="list-group-item" style="background-color: transparent;
  border-bottom: 1px solid white;">пудровый метод</li>
                  <li class="list-group-item" style="background-color: transparent;
  border-bottom: 1px solid white;">комбинированный метод (заполнение недостающих участков волосками и углубление пудровым методом уголка, хвостика и нижних окантовок - для создания макияжной формы бровей)</li>
                  <li class="list-group-item" style="background-color: transparent;">метод шотирования (создание легкого теневого эффекта форме бровей)</li>
                </ul>
              </div>
            </div>
            <div class="service wow fadeInUp" data-wow-delay="0.4s">
              <div class="service-title">ПМ губ</div>
              <div class="item-image"><img src="img/permanent/lips.png" width="120"></div>
              <div class="item-text"></div>
            </div>
            <div class="service wow fadeInUp" data-wow-delay="0.6s">
              <div class="service-title">ПМ век</div>
              <div class="item-image"><img src="img/permanent/eyelids.png" width="120"></div>
              <div class="item-text">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="background-color: transparent;
  border-bottom: 1px solid white;">межресничка</li>
                  <li class="list-group-item" style="background-color: transparent;
  border-bottom: 1px solid white;">стрелка классическая</li>
                  <li class="list-group-item" style="background-color: transparent;">стрелка в растушевке</li>
                </ul>
              </div>
            </div>  
          </div>
          
        </div>

        <br/>
        <br/>

        <div class="about-container extra-paragraph" align="center">
          <p>Дополнительно, Вы всегда можете с легкостью связаться со специалистом и проконсультироваться по наиболее подходящему методу как дистанционно, так и подъехав в студию.</p>
          <p>Для дистанционной консультации, Вам достаточно прислать фото своих бровей без макияжа (в ВК, Инстаграм, Вайбер).</p>
          <p>Мы гарантируем прекрасный и длительный эстетический эффект, предельную безболезненность процедуры и минимальный восстановительный период, но оставляем за собой право отказать в проведении процедуры при наличии противопоказаний.</p>
        </div>

        <br/>
        <hr>
        <br/>


        <div class="about-container" align="center">
          <p style="color: white; font-family: 'Lobster', cursive; font-size: 30px">Преимущества перманентного макияжа:</p>
          <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            <div class="advantage wow fadeInUp" data-wow-delay="0.2s">
              <div class="advantage-title"><span style="font-size: 27px; border: 2px solid white; border-radius: 50%; padding: 0 12px 0 12px">1</span><br>Подарит свободное время</div>
              <hr>
              <div class="item-text">
                <p>Отпадает необходимость в ежедневном макияже.</p>
                <p>Не нужно каждое утро тратить время на косметику и подправлять макияж в течение дня.</p>
              </div>
            </div>
            <div class="advantage wow fadeInUp" data-wow-delay="0.4s">
              <div class="advantage-title"><span style="font-size: 27px; border: 2px solid white; border-radius: 50%; padding: 0 10px 0 10px">2</span><br>Позволит выглядеть безупречно в любой ситуации</div>
              <hr>
              <div class="item-text">
                <p>Не смывается водой (бассейн, сауна, душ).</p>
                <p>Вы забудете об эффекте панды.</p>
                <p>Макияж всегда с вами: на вечеринке, на работе, на отдыхе, с семьей.</p>
              </div>
            </div>
            <div class="advantage wow fadeInUp" data-wow-delay="0.6s">
              <div class="advantage-title"><span style="font-size: 27px; border: 2px solid white; border-radius: 50%; padding: 0 10px 0 10px">3</span><br>Натуральность!</div>
              <hr>
              <div class="item-text">
                <p>Любая техника выглядит натурально и естественно!</p>
              </div>
            </div>  
          </div>
          
        </div>


        <br/>
        <hr>
        <br/>


        <div class="about-container" align="center">
          <p style="color: white; font-family: 'Lobster', cursive; font-size: 30px">Последовательность процедуры:</p>
          <div>
            <div class="procedure-item left wow fadeInLeft" data-wow-delay="0.2s">
              <div class="procedure-item-title"><span style="font-size: 21px; border: 2px solid white; border-radius: 50%; padding: 0 8px 0 8px">1</span><span style="margin-left: 10px; font-size: 21px">Ознакомление с противопоказаниями и рекомендациями</span></div>
              <hr>
              <div class="item-text" style="color: #F5A9F2; padding: 0 10px 10px 10px">
                Запрещено делать процедуру в периоды беременности, лактации, а так же при наличии аллергических реакций, сахарного диабета и т.п.
              </div>
            </div>
            <div class="procedure-item right wow fadeInRight" data-wow-delay="0.6s">
              <div class="procedure-item-title"><span style="font-size: 21px; border: 2px solid white; border-radius: 50%; padding: 0 8px 0 8px">2</span><span style="margin-left: 10px; font-size: 21px">Анастезия</span></div>
              <hr>
              <div class="item-text" style="color: #F5A9F2; padding: 0 10px 10px 10px">
                Мы используем специальный крем для обезболивания, чтобы Вы чувствовали себя комфортно в течении всей процедуры
              </div>
            </div>
            <div class="procedure-item left wow fadeInLeft" data-wow-delay="0.8s">
              <div class="procedure-item-title"><span style="font-size: 21px; border: 2px solid white; border-radius: 50%; padding: 0 8px 0 8px">3</span><span style="margin-left: 10px; font-size: 21px">Создаём эскиз</span></div>
              <hr>
              <div class="item-text" style="color: #F5A9F2; padding: 0 10px 10px 10px">
                Выслушиваем пожелания, даём рекомендации и согласовываем форму и технику Вашего перманентного макияжа
              </div>
            </div>
            <div class="procedure-item right wow fadeInRight" data-wow-delay="1s">
              <div class="procedure-item-title"><span style="font-size: 21px; border: 2px solid white; border-radius: 50%; padding: 0 8px 0 8px">4</span><span style="margin-left: 10px; font-size: 21px">Наносим пигмент</span></div>
              <hr>
              <div class="item-text" style="color: #F5A9F2; padding: 0 10px 10px 10px">
                Время нанесения пигмента зависит от сложности работы, в среднем составляет от 1,5 до 3 часов
              </div>
            </div>
            <div class="procedure-item left wow fadeInLeft" data-wow-delay="1.2s">
              <div class="procedure-item-title"><span style="font-size: 21px; border: 2px solid white; border-radius: 50%; padding: 0 8px 0 8px">5</span><span style="margin-left: 10px; font-size: 21px">Оцениваем результат</span></div>
              <hr>
              <div class="item-text" style="color: #F5A9F2; padding: 0 10px 10px 10px">
                При желании, корректируем работу
              </div>
            </div>
          </div>
          
        </div>


      </div>
    </section>

    

    <section id="portfolio">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3 class="section-title" style="font-family: 'Lobster', cursive;">Портфолио</h3>
          <p class="section-description"></p>
        </div>
        
        <div id="portfolio-gallery" style="display: flex; flex-wrap: wrap; justify-content: center">
          <a href="img/portfolio/pic1.jpg" class="portfolio-pic"> 
            <img src="img/portfolio/pic1.jpg" class="img-portfolio-pic"> 
            <div class="middle-magnifier">
              <img src="img/zoom.png" class="img-magnifier">
            </div>
          </a>
          <a href="img/portfolio/pic2.jpg" class="portfolio-pic"> 
            <img src="img/portfolio/pic2.jpg" class="img-portfolio-pic"> 
            <div class="middle-magnifier">
              <img src="img/zoom.png" class="img-magnifier">
            </div>
          </a>
          <a href="img/portfolio/pic3.jpg" class="portfolio-pic"> 
            <img src="img/portfolio/pic3.jpg" class="img-portfolio-pic"> 
            <div class="middle-magnifier">
              <img src="img/zoom.png" class="img-magnifier">
            </div>
          </a>
          <a href="img/portfolio/pic4.jpg" class="portfolio-pic"> 
            <img src="img/portfolio/pic4.jpg" class="img-portfolio-pic"> 
            <div class="middle-magnifier">
              <img src="img/zoom.png" class="img-magnifier">
            </div>
          </a>
          <a href="img/portfolio/pic5.jpg" class="portfolio-pic"> 
            <img src="img/portfolio/pic5.jpg" class="img-portfolio-pic"> 
            <div class="middle-magnifier">
              <img src="img/zoom.png" class="img-magnifier">
            </div>
          </a>
          <a href="img/portfolio/pic6.jpg" class="portfolio-pic"> 
            <img src="img/portfolio/pic6.jpg" class="img-portfolio-pic"> 
            <div class="middle-magnifier">
              <img src="img/zoom.png" class="img-magnifier">
            </div>
          </a>
          <a href="img/portfolio/pic7.jpg" class="portfolio-pic"> 
            <img src="img/portfolio/pic7.jpg" class="img-portfolio-pic"> 
            <div class="middle-magnifier">
              <img src="img/zoom.png" class="img-magnifier">
            </div>
          </a>
        </div>
        

      </div>
    </section><!-- #portfolio -->

    

    <section id="review">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3 class="section-title" style="color: white; font-family: 'Lobster', cursive;">Отзывы</h3>
          <p class="section-description"></p>
        </div>
        
        <!-- <div id="review-gallery" style="display: flex; flex-wrap: wrap; justify-content: center">
          <div class="review-gallery-row" style="display: flex; display: flex; flex-wrap: wrap; padding: 0 4px">
            
            <div id="review-column1" class="review-gallery-column" style="flex: 33%; max-width: 33%; padding: 0 6px">
              <a href="img/reviews/review1.jpg" class="review-pic"> 
                <img src="img/reviews/review1.jpg" class="img-review-pic"> 
                <div class="middle-magnifier">
                  <img src="img/zoom.png" class="img-magnifier">
                </div>
              </a>
              <a href="img/reviews/review2.jpg" class="review-pic"> 
                <img src="img/reviews/review2.jpg" class="img-review-pic"> 
                <div class="middle-magnifier">
                  <img src="img/zoom.png" class="img-magnifier">
                </div>
              </a>
            </div>
          
            <div id="review-column2" class="review-gallery-column" style="flex: 33%; max-width: 33%; padding: 0 6px">
              <a href="img/reviews/review3.jpg" class="review-pic"> 
                <img src="img/reviews/review3.jpg" class="img-review-pic"> 
                <div class="middle-magnifier">
                  <img src="img/zoom.png" class="img-magnifier">
                </div>
              </a>  
              <a href="img/reviews/review4.jpg" class="review-pic"> 
                <img src="img/reviews/review4.jpg" class="img-review-pic"> 
                <div class="middle-magnifier">
                  <img src="img/zoom.png" class="img-magnifier">
                </div>
              </a>
            </div>
            
            <div id="review-column3" class="review-gallery-column" style="flex: 33%; max-width: 33%; padding: 0 6px">
              <a href="img/reviews/review5.jpg" class="review-pic"> 
                <img src="img/reviews/review5.jpg" class="img-review-pic"> 
                <div class="middle-magnifier">
                  <img src="img/zoom.png" class="img-magnifier">
                </div>
              </a> 
            </div>
          </div> -->
          <div class="slider demo" id="slider">
            <div class="slider_viewport" id="review-gallery">
              <div class="slider_list">
                <div class="slider_item">
                  <div style="width: 100%" align="center">
                    <img src="img/reviews/review1.jpg" />
                  </div>
                </div>
                <div class="slider_item">
                  <div style="width: 100%" align="center">
                    <img src="img/reviews/review2.jpg" />
                  </div>
                </div>
                <div class="slider_item">
                  <div style="width: 100%" align="center">
                    <img src="img/reviews/review3.jpg" />
                  </div>
                </div>
                <div class="slider_item">
                  <div style="width: 100%" align="center">
                    <img src="img/reviews/review4.jpg" />
                  </div>
                </div>
                <div class="slider_item">
                  <div style="width: 100%" align="center">
                    <img src="img/reviews/review5.jpg" />
                  </div>
                </div>
              </div>
            </div>
            <div class="slider_nav">
              <div class="slider_arrow slider_arrow__left">
              </div>
              <div class="slider_arrow slider_arrow__right">
              </div>
            </div>
          </div>


        </div>
      </div>
    </section><!-- #review -->

    

    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title" style="font-family: 'Lobster', cursive;">Контакты</h3>
          <p class="section-description"></p>
        </div>
      </div>

      <!-- <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div> -->

      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p><a class="location_ref" href="https://vk.com/studiapegas?w=address-30431325_4905" target="_blank">Минск, ул. Амураторская 4 - 101</a><br>Рядом ст.м. Молодёжная и ст.м. Фрунзенская</p>
              </div>

              <div>
                <i class="fa fa-instagram"></i>
                <p>Instagram: <a class="instagram_ref" href="https://www.instagram.com/studia_pegas/" target="_blank">@studia_pegas</a></p>
              </div>

              <div>
                <i class="fa fa-vk"></i>
                <p>VK: <a class="vk_ref" href="https://vk.com/studiapegas" target="_blank">vk.com/studiapegas</a></p>
              </div>
              
              <div>
                <i class="fa fa-phone"></i>
                <p>
                  (+375-29) 835-99-39<br>
                  (+375-44) 579-99-39<br>
                  (+375-33) 686-74-96
                </p>
              </div>
            </div>

            <div class="social-links">
              <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
              <!-- <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> -->
              <!-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> -->
              <!-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> -->
              <!-- <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="" method="post" id="request-form">
                <div>  
                  <label for="name" style="text-align: center; font-family: 'Lobster', serif; font-size: 20px">Имя:</label>
                  <input id="client-name" type="text" class="form-control" style="border-radius: 5px" name="name">
		  <div class="empty-field-warn">
                    <div style="font-family: 'Lobster'; color: #FA58AC">Введите, пожалуйста, своё имя</div>
                  </div>
                </div>
                <div>
                  <label for="email" style="font-family: 'Lobster', serif; font-size: 20px">E-mail:</label>
                  <input id="client-email" type="email" class="form-control" style="border-radius: 5px" name="email">
		  <div class="empty-field-warn">
                    <div style="font-family: 'Lobster'; color: #FA58AC">Введите, пожалуйста, свой e-mail</div>
                  </div>
                </div>
		<br>
		<div align="center">
                	<input id="client-submit" type="submit" class="btn btn-success" style="border-radius: 3px; color: white; font-size: 20px;" value="Оставить заявку">
		</div>
              </form>
            </div>
          </div>

	  <!-- Modal -->
	  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" align="center">
	    <div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
		    <div class="modal-content" align="center" style="background-color: #E6E6E6">
<div style="width: 70px; height: 70px; background-color: black; border-radius: 50%; margin-top: 15px;">
<img src="img/logo_min.png" alt="" title="" height="60" style="margin-top: 5px">
</div>		        
<div id="modal-message" class="modal-body" align="center" style="font-family: 'Bad Script', serif; font-size: 30px; font-weight: 500"></div>
<button data-dismiss="modal" class="btn btn btn-outline-success" style="font-family: 'Bad Script'; font-size: 20px; width: 90px; height: 40px; margin-bottom: 15px; text-align:center; ">OK</button>
		    </div>
		</div>
	    </div>
	</div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Original designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <script src="lib/slider/js/slider.js"></script>


  <script src="lib/lightgallery/js/lightgallery.min.js"></script>
  <script src="lib/lg-thumbnail/lg-thumbnail.min.js"></script>

  <script src="js/main.js"></script>

  <script type="text/javascript">
    window.sr = ScrollReveal({ reset: true });
    sr.reveal('.portfolio-pic', { duration: 400 });
    sr.reveal('.review-pic', { duration: 1000 }, 50);


    lightGallery(document.getElementById('portfolio-gallery'));
    
    $('#slider').skySlider({
      carousel: true,
      interval: 4000,
      duration: 1000,
      items: 1,
      carousel: true,
      loop: true,
      autoplay: true,
      callback: function(number) {
        //console.log('Current slideSet - ' + number);
      }
    });



    $('.empty-field-warn').css('visibility', 'hidden');
    $('#request-form').find('input').keyup(function() {
	if( $.trim( $(this).val() ) == '' ) {
	  //$(this).next().css('visibility', 'visible');
        }
        else {
	  $(this).next().css('visibility', 'hidden');	
	}
    });
    $('#request-form').submit(function(){
      var errors = false;

      $(this).find('span').empty();

      $(this).find('input').each(function(){
        if( $.trim( $(this).val() ) == '' ) {
          errors = true;
          console.log($(this).next());
          $(this).next().css('visibility', 'visible');
        }
      });

      if( !errors ){
        var data = $('#request-form').serialize();
        $.ajax({
          url: 'index.php',
          type: 'POST',
          data: data,
          beforeSend: function(){
            $('#client-submit').next().text('Отправляю...');
          },
          success: function(res){
            if( res == 1 ) {
              $('#request-form').find('input:not(#client-submit), textarea').val('');
              $('#client-submit').next().empty();
              $('#modal-message').text('Ваша заявка принята!');
	      $("#myModal").modal('show');
            }else{
              $('#client-submit').next().empty();
       	      $('#modal-message').text('Ошибка при отправлении заявки. Попробуйте ещё раз.');
	      $("#myModal").modal('show');
            }
          },
          error: function(){
            console.log('Ошибка отправки заявки!');
          }
        });
      }

      return false;
    });


  </script>
</body>
</html>
