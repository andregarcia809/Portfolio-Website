    <?php
    /** Validates form */

      Require "php/contact-form.php";
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
  <title>My Portfolio</title>
</head>

<body>
  <!-- Modal -->
  <section class="modal__section">
    <div class="modal__content">
      <div class="modal__header">
        <h1> Get in touch with me...</h1>
        <button class="close">
          <span>&times</span>
        </button>
      </div>
      <div class="modal__body">
        <div>
          <i class="far fa-envelope icons"></i>
          <span>andresgracia809@hotmail</span>
        </div>
        <div>
          <i class="fas fa-phone-volume icons"></i>
          <span>(609) 437-7543</span>
        </div>
      </div>
    </div>
  </section>
  <!-- Header / Navigation-->
  <nav class="nav">
    <ul class="nav__menu">
      <li class="nav__menu__item">
        <a href="#" class="navLink">Home</a>
      </li>
      <li class="nav__menu__item">
        <a href="#portfolio__section" class="navLink">Portfolio</a>
      </li>
      <li class="nav__menu__item">
        <a href="#about__section" class="navLink">About</a>
      </li>
      <li class="nav__menu__item"><a href="#contact__section" class="navLink">Contact</a>
      </li>
    </ul>
  </nav>
  <div class="content__wrap">
    <header id=main__header>
      <div class="wrapper">
        <div class="nav__bar">
          <div class="hamburger__container">
            <div class="nav__bar__hamburger__menu ">
              <span class="span"></span>
            </div>
          </div>
        </div>
        <div class="header__img__wrap">
          <div class="header__img__details">
            <h1>Andres<span> Garcia</span></h1>
            <h2>Web Developer | Programmer | Designer</h2>
          </div>
          <div class="header__btn__wrap">
            <div class="header__btn__center">
              <button type="submit" class="header__btn">
                <span class="btn-dot"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--About-->
    <section id="about__section">
      <h1><span>About</span> me</h1>
      <span class="heading__design">
        <i></i>
        <i></i>
        <i></i>
      </span>
      <div class="about__wrapper">
        <div class="img__container">
          <img class="centered-and-cropped" width="200" height="290" src="img/aboutIMG.png" alt="Me">
        </div>
        <div class="about__bio">
          <h1>Bio</h1>
          <p>
            I'm a creative web developer base out of Florida,
            specializing in User Interface Design and Development. I build clean,appealing, and functional interfaces
            which comply with the latest web standards.
          </p>
          <p>
            I'm very passionate and dedicated to my work. I poses the skills and knowledge necessary to make your
            project
            a success.
          </p>
        </div>
      </div>
    </section>
    <!--Experience-->
    <section id="experience__section">
      <h1><span>My</span> Experience</h1>
      <h2>Specialist in need. Generalist at heart.</h2>
      <div class="experience__wrapper">
        <div class="experience__container__flexbox">
          <div class="experience__info__container">
            <div class="experience__icon">
              <i class="fas fa-desktop"></i>
            </div>
            <div class="experience__skills">
              <h3>Front-end</h3>
              <ul class="technologies">
                <li class="technologies__items">Html5</li>
                <li class="technologies__items">Css3</li>
                <li class="technologies__items">Sass</li>
                <li class="technologies__items">bootstrap</li>
                <li class="technologies__items">Javascript</li>
                <li class="technologies__items">JQuery</li>
                <li class="technologies__items">Wordpress</li>
                <li class="technologies__items">Responsive Design</li>
              </ul>
            </div>
          </div>
          <div class="experience__info__container">
            <div class="experience__icon">
              <i class="fas fa-server"></i>
            </div>
            <div class="experience__skills">
              <h3>Back-end</h3>
              <ul class="technologies">
                <li class="technologies__items">PHP</li>
                <li class="technologies__items">Npm</li>
                <li class="technologies__items">Authentication</li>
              </ul>
            </div>
          </div>
          <div class="experience__info__container">
            <div class="experience__icon">
              <i class="fas fa-toolbox"></i>
            </div>
            <div class="experience__skills">
              <h3>Tools</h2>
                <ul class="technologies">
                  <li class="technologies__items">VScode</li>
                  <li class="technologies__items">GitHub</li>
                  <li class="technologies__items">Git</li>
                  <li class="technologies__items">FTP</li>
                  <li class="technologies__items">Webpack</li>
                  <li class="technologies__items">Gulp</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--portfolio-->
    <section id="portfolio__section">
      <h1><span>My</span> Work</h1>
      <span class="heading__design">
        <i></i>
        <i></i>
        <i></i>
      </span>
      <div class="portfolio__wrapper">
      <div class="portfolio__img__group">
          <div class="portfolio__img__container">
            <img src="img/real-estate.PNG" alt="portfolio">
            <div class="portfolio__img__info">
              <div class="content__box">
                <div class="close__portfolio__img__info">X</div>
                <h3>Real Estate Agency<br> Template</h3>
                <div class="portofolio__img__info__technologies">
                  <h6>technologies use:</h6>
                  <div class="technologies__wrap">
                  <i class="fab fa-wordpress"></i>
                  <i class="fab fa-elementor"></i>
                  </div>
                </div>
                <div class="content__wrap">
                  <a href="http://andresgarcia809.com/wordpress-site/"><i class="fas fa-link"></i></a>
                  <span> |</span>
                  <a href="https://github.com/andregarcia809"><i class="fas fa-search-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolio__img__group group2">
          <div class="portfolio__img__container">
            <img src="img/Djpabel.PNG" alt="portfolio">
            <div class="portfolio__img__info info2">
              <div class="content__box">
                <div class="close__portfolio__img__info close2">X</div>
                <h3>Custom Wordpress Theme<br>DJPABEL.COM</h3>
                <div class="portofolio__img__info__technologies">
                  <h6>technologies use:</h6>
                  <div class="technologies__wrap">
                    <i class="fab fa-gulp"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-sass"></i>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-wordpress"></i>
                    <i class="fab fa-php"></i>
                  </div>
                </div>
                <div class="content__wrap">
                  <a href="http://andresgarcia809.com/DJPABEL/"><i class="fas fa-link"></i></a>
                  <span> |</span>
                  <a href="https://github.com/andregarcia809"><i class="fas fa-search-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolio__img__group group3">
          <div class="portfolio__img__container">
            <img src="img/html-email.PNG" alt="portfolio">
            <div class="portfolio__img__info info3">
              <div class="content__box">
                <div class="close__portfolio__img__info close3">X</div>
                <h3>Html-Email Template</h3>
                <div class="portofolio__img__info__technologies">
                  <h6>technologies use:</h6>
                  <div class="technologies__wrap">
                    <i class="fab fa-gulp"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3"></i>
                  </div>
                </div>
                <div class="content__wrap">
                  <a href="http://andresgarcia809.com/html-email/"><i class="fas fa-link"></i></a>
                  <span>|</span>
                  <a href="https://github.com/andregarcia809"><i class="fas fa-search-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolio__img__group group4">
          <div class="portfolio__img__container">
            <img src="img/Restaurant.PNG" alt="portfolio">
            <div class="portfolio__img__info info4">
              <div class="content__box">
                <div class="close__portfolio__img__info">X</div>
                <h3>Template of a Restaurant<br> Website</h3>
                <div class="portofolio__img__info__technologies">
                  <h6>technologies use:</h6>
                  <div class="technologies__wrap">
                    <i class="fab fa-gulp"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-sass"></i>
                    <img src="img/hyperapp.png" alt="">
                  </div>
                </div>
                <div class="content__wrap">
                  <a href="http://andresgarcia809.com/Restaurant/"><i class="fas fa-link"></i></a>
                  <span> |</span>
                  <a href="https://github.com/andregarcia809/Restaurant-Website"><i class="fas fa-search-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Testimonials-->
    <section id="testimonials__section">
      <h1>Testimonials</h1>
      <span class="heading__design">
        <i></i>
        <i></i>
        <i></i>
      </span>
      <div class="testimonial__wrapper">
        <div class="testimonial__arrow__left">
          <i class="fas fa-less-than"></i>
        </div>
        <div class="testimonial__slide slide1">
          <div class="testimonial__name">
            <h3>Ron Paul</h3>
            <span>CEO</span>
          </div>
          <div class="testimonial__content">
            <p>
              Skateboard chillwave readymade, cred blue bottle shaman ramps before they sold out unicorn hell of pabst.
              Kitsch kinfolk hell of food truck XOXO chicharrones farm-to-table.Vice green juice tbh,hammock hexagon
              waistcoat keffiyeh single-origin coffee.
            </p>
            <div class="testimonial__img">
              <img src="./img/testimonial1.png" alt="testimonial picture">
              <div class="testimonial__square__container">
                <div class="testimonial__square"></div>
              </div>
              <div class="testimonial__signature">
                <span>Ron Paul</span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__slide slide2">
          <div class="testimonial__name">
            <h3>Lisa Smith</h3>
            <span>CEO</span>
          </div>
          <div class="testimonial__content">
            <p>
              Skateboard chillwave readymade, cred blue bottle shaman ramps before they sold out unicorn hell of pabst.
              Kitsch kinfolk hell of food truck XOXO chicharrones farm-to-table.Vice green juice tbh,hammock hexagon
              waistcoat keffiyeh single-origin coffee.
            </p>
            <div class="testimonial__img">
              <img src="./img/testimonial2.png" alt="testimonial picture">
              <div class="testimonial__square__container">
                <div class="testimonial__square"></div>
              </div>
              <div class="testimonial__signature">
                <span>Lisa Smith</span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__slide slide3">
          <div class="testimonial__name">
            <h3>Ron Paul</h3>
            <span>CEO</span>
          </div>
          <div class="testimonial__content">
            <p>
              Skateboard chillwave readymade, cred blue bottle shaman ramps before they sold out unicorn hell of
              pabst.
              Kitsch kinfolk hell of food truck XOXO chicharrones farm-to-table.Vice green juice tbh,hammock hexagon
              waistcoat keffiyeh single-origin coffee.
            </p>
            <div class="testimonial__img">
              <img src="./img/testimonial3.png" alt="testimonial picture">
              <div class="testimonial__square__container">
                <div class="testimonial__square"></div>
              </div>
              <div class="testimonial__signature">
                <span>Chris Mathews</span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__arrow__right">
          <i class="fas fa-greater-than"></i>
        </div>
      </div>
    </section>
    <!--CTA / Hero-->
    <section id="cta__hero__section">
      <div class="cta__hero__wrapper">
        <h2>
          " Many ideas <span>GROW</span> better when transplanted into another mind "
        </h2>
        <div class="contact__info">
          <button class="talk__info__btn" type="menu">
            Let's Talk
          </button>
        </div>
      </div>
    </section>
    <!--Contact-->

    <section id="contact__section">
      <h1><span>Contact</span> Me</h1>
      <span class="heading__design">
        <i></i>
        <i></i>
        <i></i>
      </span>
      <h3>Please fill out the quick form and I will be in touch with you in lightning speed.</h3>
      <div class="form__wrapper">
        <form id="contact__form" method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
          <input name="name"  type="text" placeholder="Name">
          <span id="name__error" class="error"> <?php echo $name_error; ?></span>
          <input name="email"  type="text" placeholder="Email">
          <span id="email__error" class="error"><?php echo $email_error; ?></span>
          <input id="subject" name="subject"  type="text" placeholder="subject">
          <input name="tel"  type="text" placeholder="(xxx)-xxx-xxxx">
          <span id="subject__error"class="error"><?php echo $subject_error; ?></span>
          <textarea id="message" name="message"  cols="0" rows="10" placeholder="Your Projects Idea Here..."></textarea>
          <span id="message__error" class="error"><?php echo $message_error; ?></span>
          <div class="form__btn__wrap">
            <button id=form__Btn name="submit" type="submit">Submit</button>
          </div>
          <div class="success"><?php echo $mailSent; ?></div>
        </form>
      </div>

    </section>
    <!--Footer-->
    <footer id="main__footer">
      <div class="footer__wrapper">
        <ul class="footer__menu">
          <li class="footer__menu__item">
            <a href="#">Home</a>
          </li>
          <li class="footer__menu__item">
            <a href="#portfolio__section">Portfolio</a>
          </li>
          <li class="footer__menu__item">
            <a href="#about__section">About</a>
          </li>
          <li class="footer__menu__item">
            <a href="#contact__section">Contact</a>
          </li>
        </ul>
        <p> Copyright &copy 2018AndresGarcia809 | All Rights Reserve</p>
      </div>
    </footer>
  </div class="wrap">
  <script src="js/app.js"></script>
</body>

</html>