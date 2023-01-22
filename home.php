<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UBT University-Home</title>
    <link rel="stylesheet" href="./CSS/home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <!-- Pjesa e Header-it -->

    <header>
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="./home.php" id="aLogo">
              <img src="./CSS/Images/logo.png" alt="Logo e Projektit" />
            </a>
          </div>
          <div class="hamburger"><span></span><span></span><span></span></div>
          <form class="example" action="#">
            <input type="text" placeholder="Kerko Sherbimet" id="search" />
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
      <div class="bg-blue">
        <div class="container">
          <div class="header-navigation__list">
            <li>
              <a href="./home.php" style="border-bottom: 5px solid red"
                >Home</a
              >
            </li>
            <li><a href="./news.php">News</a></li>
            <li><a href="./about.php">About Us</a></li>
            <li><a href="./our-staff.php">Our Staff</a></li>
            <li><a href="./loginform.php">Join Us</a></li>
          </div>
        </div>
      </div>
    </header>

    <!-- Pjesa e Main-it -->

    <main>
      <div class="main-content">
        <div class="container">
          <div class="college-section">
            <div class="college-section__title">
              <h3>Kolegji UBT</h3>
            </div>
            <div class="college-section__rating">
              <p>Student's rating</p>
              <p class="medium">10.0</p>
            </div>
          </div>
          <div class="featured-articles">
            <div class="post-item__post-item--big">
              <img
                src="./CSS/Images/UBT.jpg"
                class="fotoUBT"
                id="imazhi"
                alt="UBT Campus"
              />
              <p class="campus">Kampusi i UBT eshte me inovativi ne rajon</p>
            </div>
            <div class="post-item">
              <div class="articles">
                <div class="post-item__content">
                  <img src="./CSS/Images/Erasmus.jpg" alt="" class="erasmus" />
                  <p class="erasmus-text">Programe Erasmus +</p>
                </div>
              </div>
            </div>
            <div id="int-projects" class="post-item">
              <img
                class="int-projects"
                src="./CSS/Images/int-project.jpg"
                alt="InfoCorner"
              />
              <p class="info-corner">Hapesira inovative</p>
            </div>
          </div>
          <div class="cards-menus">
            <ul class="cards-menus__list">
              <li><a href="#" class="cml">UBT</a></li>
              <li><a href="#" class="cml">Hulumtime dhe Inovacione</a></li>
              <li><a href="#" class="cml">Sherbimet</a></li>
              <li><a href="#" class="cml">Media</a></li>
              <li><a href="#" class="cml">Evente</a></li>
              <li><a href="#" class="cml">Reviews</a></li>
              <li><a href="#" class="cml">Pyetje te Shpeshta</a></li>
            </ul>
          </div>
          <div class="oferta-sezonale">
            <h3 class="oferta-sezonale__title">Ofertat Sezonale</h3>
            <div class="oferta-sezonale__details">
              <div class="package-item">
                <div class="package-item__title">
                  <h3>Oferta 1</h3>
                </div>
                <div class="package-item__description">
                  <h3>Kushtet</h3>
                  <p>* Suksesi 5.0</p>
                  <p>* Piket ne testin e matures 85+</p>
                  <p>* Oferta zbritje 20% ne pagesa</p>
                </div>
              </div>
              <div class="package-item">
                <div class="package-item__title">
                  <h3>Oferta 2</h3>
                </div>
                <div class="package-item__description">
                  <h3>Kushtet</h3>
                  <p>* Suksesi prej 4.0</p>
                  <p>* Piket ne testin e matures 75+</p>
                  <p>* Oferta zbritje 10% ne pagesa</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-content">
        <div class="container">
          <div class="drejtimet">
            <h3>Drejtimet</h3>
            <div class="drejtimet-section">
              <div class="drejtimet-section__item">
                <a href="#">
                  <div class="drejtimet-section__image">
                    <img src="./CSS/Images/cs.jpg" alt="Drejtimet Image 1" />
                  </div>
                  <div class="drejtimet-section__description">
                    <h4>Shkenca Kompjuterike dhe Inxhinieri</h4>
                  </div>
                </a>
              </div>
              <div class="drejtimet-section__item">
                <a href="#">
                  <div class="drejtimet-section__image">
                    <img src="./CSS/Images/bmm.jpg" alt="Drejtimet Image 2" />
                  </div>
                  <div class="drejtimet-section__description">
                    <h4>Biznis dhe Menaxhment</h4>
                  </div>
                </a>
              </div>
              <div class="drejtimet-section__item">
                <a href="#">
                  <div class="drejtimet-section__image">
                    <img src="./CSS/Images/media.jpg" alt="Drejtimet Image 3" />
                  </div>
                  <div class="drejtimet-section__description">
                    <h4>Media dhe Gazetari</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Pjesa e Footer-it -->

    <footer>
      <div class="footer-top">
        <div class="ft-title">
          <h5>UBT - Higher Education Institution</h5>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 footer-box">
          <ul class="address">
            <li>
              <a
                href="https://www.google.com/maps/place/Universiteti+p%C3%ABr+Biznes+dhe+Teknologji/@42.6026634,21.108897,13z/data=!4m8!1m2!2m1!1subt!3m4!1s0x13549e8d5d607f25:0xa31dd05b21bd09de!8m2!3d42.647155!4d21.153124"
                ><i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Lagjja Kalabria,10000 Prishtine, Kosovo</span>
              </a>
            </li>
            <li>
              <a href="./about.html"
                ><i class="fa fa-home" aria-hidden="true"></i
                ><span>Për ne</span></a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer-box">
          <ul class="footer-contact">
            <li>
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>+383 38 541 400</span>
            </li>
            <li>
              <i class="fa fa-fax" aria-hidden="true"></i>
              <span>+383 38 542 138</span>
            </li>
            <li>
              <a href="https://www.ubt-uni.net/sq/ubt/kontakti//"
                ><i class="fa fa-address-book" aria-hidden="true"></i
                ><span>Kontakti</span></a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer-box">
          <ul>
            <li>
              <a href="mailto:info@ubt-uni.net" target="_top"
                ><i class="fa fa-envelope" aria-hidden="true"></i
                ><span>info@ubt-uni.net</span></a
              >
            </li>
            <li>
              <a
                href="https://www.google.com/maps/place/Innovation+Campus+-+UBT/@42.5582459,21.1317994,16.25z/data=!4m5!3m4!1s0x13549d2cc6e13dd5:0xf9155209d4ad0657!8m2!3d42.5581825!4d21.1347087"
                ><i class="fa fa-map-marker" aria-hidden="true"></i
                ><span>Campus map</span></a
              >
            </li>
            <li>
              <a href="https://www.ubt-uni.net/sq/harta-e-faqes/"
                ><i class="fa fa-sitemap" aria-hidden="true"></i
                ><span>Harta e Faqes</span></a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <li>
            <ul class="social-media">
              <li>
                <a
                  class="social-media__links"
                  target="_blank"
                  href="https://www.facebook.com/ubthighereducationinstitution"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
              </li>
              <li>
                <a
                  class="social-media__links"
                  target="_blank"
                  href="https://www.instagram.com/ubt_official/"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
              </li>
              <li>
                <a
                  class="social-media__links"
                  target="_blank"
                  href="https://twitter.com/ubteducation"
                  ><i class="fa fa-twitter" aria-hidden="true"></i
                ></a>
              </li>
              <li>
                <a
                  class="social-media__links"
                  target="_blank"
                  href="https://www.youtube.com/channel/UCS76ozJN2tcsmQ8XG4KIruQ"
                  ><i class="fa fa-youtube" aria-hidden="true"></i
                ></a>
              </li>
              <li>
                <a
                  class="social-media__links"
                  target="_blank"
                  href="https://www.linkedin.com/school/ubt---university-for-business-and-technology/"
                  ><i class="fa fa-linkedin" aria-hidden="true"></i
                ></a>
              </li>
            </ul>
          </li>
        </div>
      </div>
    </footer>
    <script src="./JavaScript/loginform.js"></script>
    <script src="./JavaScript/slider.js"></script>
    <script src="./JavaScript/hamburger.js"></script>
  </body>
</html>
