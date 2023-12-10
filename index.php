<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagring Studio</title>
    <!--Google fonts(montserrat)-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--Iconscout cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--SWIPERJS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--custom css-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav>

    <div class="container nav__container">
        <a href="index.html" class="nav__logo"><img src="assets/images/logo.png" alt="Nav Logo"></a>
        <ul class="nav__links">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="Login.php">Sign up</a></li>
        </ul>
        <button class="nav__toggle-btn" id="nav__toggle-open"><i class="uil uil-bars"></i></button>
        <button class="nav__toggle-btn" id="nav__toggle-close"><i class="uil uil-multiply"></i></button>
    </div>


    </nav>
    <!--============================End of nav bar=========================================-->

    <header>
        <div class="container header__container">
            <div class="header__left">
                <div class="header__image-bg"></div>
                <div class="header__image-lg">
                    <img src="assets/images/samplepic.JPG" alt="Header Image">
                </div>
                <div class="header__image-sm">
                    <img src="assets/images/samplepic.JPG" alt="Header Image">
                </div>
            </div>
            <div class="header__right">
                <div class="header__head">
                    <div class="empty header__empty"></div>
                    <a class="header__tag">#Best Photography</a>
                </div>
                <h1>Capture every moment with us</h1>
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;At Lagring studio, we believe in the power of creativity, technology, and imagination. We are thrilled to introduce our cutting-edge digital studio, where we transform ideas into captivating digital experiences.  Allow us to join you in your every adventure and milestones in life and together, lets treasure every momment.
                </p>
                <a href="mailto:lagringstudio@gmail.com" class="header__btn-md">Let's Talk</a>
            </div>
        </div>
    </header>
    <div class="header__frames">
        <div class="header__frame">
            <img src="assets/images/frame1.jpg" alt="Header Frame One">
        </div>
        <div class="header__frame">
            <img src="assets/images/frame2.jpg" alt="Header Frame Two">
        </div>
    </div>
    <a href="mailto:Lagringstudio@gmail.com" class="contact__btn header__btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" id="arrow"><g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M1 13 13 1M4 1h9v9"></path></g></svg>
        <p>CONTACT - SEND ME US EMAIL</p>
    </a>

    <!--======================END OF HEADER=================-->



    <section id="about">
        <div class="container about__container">
            <h2 class="about__title">About <br/> Lagring Studio</h2>
            <a href="mailto:Lagringstudio@gmail.com" class="contact__btn about__btn">
                <p>CONTACT - SEND ME AN EMAIL</p>
            </a>
            <div class="about__left">
                <div class="about__image">
                    <div class="about__image-bg"></div>
                    <div class="about__image-lg">
                        <img src="assets/images/aboutus.jpg" alt="About Lagring Studio">
                    </div>
                    <div class="about__image-sm">
                        <img src="assets/images/aboutus.jpg" alt="About Lagring Studio">
                    </div>
                </div>
            </div>
            <div class="about__right">
                <div class="empty about__empty"></div>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;The backround of Lagring Studio way back in 2010, There was a woman named Alegria Garcia who established a photo studio in Salitran and named the studio "Lagring Studio". Alegria “Lagring” Garcia is  a mother of 4 child. The humble start of Lagring Studio shows that persistence is important if you want to be successful.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;The business started with a small studio offering ID pictures, photo and video packages to events.The studio also sold frames in different size and photo enlargement. Through years of business, they establish their name in picture industry specially in Imus. They now cover almost 70% of public schools in Imus such as the big school in Imus National High School (INHS), Gen. Emilio Aguinald National High School (GEANHS), Malagasang 1,2,3 Elementary School, etc.. Until now, the business continues to grow.</p>
            </div>
            <h3>Our Location:</h3>
            <div class="map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2654.7303200169486!2d120.92621845472506!3d14.406017358398358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d31beb517457%3A0x3cdd7410c1154b0e!2sLagring%20Photo%20%26%20Video%20Shop!5e0!3m2!1sen!2sph!4v1702211540660!5m2!1sen!2sph" width="1450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
    </section>

<!--========================END OF ABOUT SECTION====================-->

<section id="gallery">
    <div class="container gallery__container swiper mySwiper">
        <div class="gallery__head">
            <h2 class="gallery__title"> My gallery</h2>
            <div class="empty gallery__empty"></div>
        </div>
        <p> Here are the sample images from our collection. All picture have consent of the model.</p>

        <div class="swiper-wrapper">
            <article class="swiper-slide">
                <img src="assets/images/pic1.jpg">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic2.jpg">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic3.jpg">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic4.JPG">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic5.JPG">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic16.JPG">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic7.JPG">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic8.jpg">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic9.jpg">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic10.jpg">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic11.JPG">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic12.JPG">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic13.JPG">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic14.JPG">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic15.JPG">
            </article>
            <article class="swiper-slide">
                <img src="assets/images/pic16.JPG">
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!--=========================END OF GALLERY========================-->

<section id="services">
    <div class="container services__container">
        <h2 class="services__title">Services</h2>
        <div class="empty services__empty"></div>
        <div class="services__head">
            <p>The following are our budget friendly but quality services. Contact us for more details. Book now!</p>
            <a href="mailto:Lagringstudio@gmail.com" class="contact__btn about__btn">
                <p>CONTACT - SEND US AN EMAIL</p>
            </a>
        </div>
        <div class="services__gallery">
            <article> <img src="assets/images/services1.jpg"></article>
            <article> <img src="assets/images/services2.jpg"></article>
            <article> <img src="assets/images/services3.jpg"></article>
            <article> <img src="assets/images/services4.JPG"></article>
            <article> <img src="assets/images/services5.JPG"></article>
            <article> <img src="assets/images/services6.JPG"></article>
            <article> <img src="assets/images/services7.JPG"></article>
            <article> <img src="assets/images/services8.JPG"></article>
            <article> <img src="assets/images/services9.JPG"></article>
        </div>
    </div>
</section>

<!--=============================END OF EXHIBITION==========================-->



<footer>
    <div class="container footer__container">
        <div class="footer__head">
            <h2 class="footer__title">Support Lagringstudio@gmail.com</h2>
            <a href="mailto:lagringstudio@gmail.com" class="footer__btn"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" id="arrow"><g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M1 13 13 1M4 1h9v9"></path></g></svg></a>
        </div>
        <ul class="footer__links">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="Login.php">Sign up</a></li>
        </ul>
    </div>
</footer>
    <!--swiper js cnd-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>