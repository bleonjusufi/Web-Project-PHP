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
          <div class="dropdown">
            <button class="dropbtn">Sherbime tjera ↓</button>
            <div class="dropdown-content">
              <a
                href="https://accounts.google.com/v3/signin/identifier?dsh=S-1894920174%3A1674647736848699&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&hd=ubt-uni.net&ltmpl=default&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AWnogHeBVRDRqO-cQ6am6eONgYF65SmsJoPYKV4ZAwpFJ77wWzoNKPh-hSEQa3VbU_CxZgrQFljOkg"
                >Mail</a
              >
              <a href="https://smis.ubt-uni.net/my/loginform.aspx">SMIS</a>
              <a href="https://moodle.ubt-uni.net/login/index.php">Moodle</a>
              <a href="https://branch.ubt-uni.net/TV/ScheduleIndex.aspx"
                >Orari Ditore</a
              >
              <a
                href="http://student.ubt-uni.net/LoginWithGoogle.aspx?undefined"
                >Studenti</a
              >
              <a href="./logout.php">Dilni</a>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-blue">
        <div class="container">
          <div class="header-navigation__list">
            <li>
              <a href="./home.php" style="border-bottom: 5px solid red">Home</a>
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
          <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="CSS\Images\Objekti-I.JPG" alt="" class="fotoSlider" />
              <div class="text">UBT ofron hapesirat me inovative ne rajon</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="CSS\Images\Erasmus.jpg" alt="" class="fotoSlider" />
              <div class="text">Programet Erasmus+</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img
                src="./CSS/Images/int-project.jpg"
                alt=""
                class="fotoSlider"
              />
              <div class="text">Njohje Internacionale</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br />
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
        <div class="firstColumn">
          <ul class="address">
            <li>
              <a
                href="https://www.google.com/maps/place/Universiteti+p%C3%ABr+Biznes+dhe+Teknologji/@42.6026634,21.108897,13z/data=!4m8!1m2!2m1!1subt!3m4!1s0x13549e8d5d607f25:0xa31dd05b21bd09de!8m2!3d42.647155!4d21.153124"
                ><i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Lagjja Kalabria,10000 Prishtine, Kosovo</span>
              </a>
            </li>
            <li>
              <a href="./about.php"
                ><i class="fa fa-home" aria-hidden="true"></i
                ><span>Për ne</span></a
              >
            </li>
          </ul>
        </div>
        <div class="secondColumn">
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
              <a href="./contact.php"
                ><i class="fa fa-address-book" aria-hidden="true"></i
                ><span>Apliko per Studime</span></a
              >
            </li>
          </ul>
        </div>
        <div class="thirdColumn">
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
    <!-- <script src="./JavaScript/main.js"></script> -->
    <script src="./JavaScript/loginform.js"></script>
    <script src="./JavaScript/slider.js"></script>
    <script src="./JavaScript/hamburger.js"></script>
  </body>
</html>
