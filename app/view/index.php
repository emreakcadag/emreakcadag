<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131302113-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-131302113-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Emre Akçadağ kişisel web sitesi. Emre Akçadağ personal website.">
    <meta name="author" content="Emre Akçadağ">

    <meta name="yandex-verification" content="ed54f3f3b54ce1cc"/>

    <title>Emre Akçadağ | Mobile Application Developer</title>


    <!-- Bootstrap core CSS -->
    <link href="<?= public_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?= public_url() ?>img/logo.ico"/>

    <!-- Custom styles for this template -->
    <link href="<?= public_url() ?>css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Emre Akçadağ</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= public_url() ?>img/profile.jpg"
               alt="">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#education">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
            <h1 class="mb-0">Emre Akçadağ
                <span class="text-primary"></span>
            </h1>
            <br>
            <div style="text-transform: none" class="subheading mb-5">
                <a href="mailto:mail@emreakcadag.com">mail@emreakcadag.com</a>
            </div>
            <p class="lead mb-5">As an Android Application developer, I am experienced in Android, Kotlin, Flutter,
                Dart, Html, Php, Nodejs,
                Mysql, Mongodb, Firebase, Json, Restful Api and WebSocket technologies. </p>
            <div class="social-icons">
                <a target="_blank" title="linkedin" href="<?= site_url('linkedin') ?>">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a target="_blank" title="github" href="<?= site_url('github') ?>">
                    <i class="fab fa-github"></i>
                </a>
                <a target="_blank" title="instagram" href="<?= site_url('instagram') ?>">
                    <i class="fab fa-instagram"></i>
                </a>
                <a target="_blank" title="googleplay" href="<?= site_url('googleplay') ?>">
                    <i class="fab fa-google-play"></i>
                </a>
                <a href="<?= site_url('twitter') ?>">
                    <i class="fab fa-twitter"></i>
                </a>
                <!--<a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>-->
            </div>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
            <h2 class="mb-5">Experience</h2>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Mid Android Developer</h3>
                    <div class="subheading mb-3"><label style="text-transform: none">Akbank - adesso</label></div>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">March 2019 - Present</span>
                </div>
            </div>

            <hr>
            <br>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Android Developer</h3>
                    <div class="subheading mb-3">Freelance</div>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">June 2017 - March 2019</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Blog</h3>
                    <div style="text-transform:none" class="subheading mb-3"><a target="_blank"
                                                                                href="https://www.yazilimblogu.com">https://www.yazilimblogu.com</a>
                    </div>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">January 2019 - Present</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Android -iOS | Hadisaha</h3>
                    <div style="text-transform:none" class="subheading mb-3">
                        <a target="_blank"
                           href="https://play.google.com/store/apps/details?id=com.emreakcadag.hadisaha">Google Play</a>
                        |
                        <a target="_blank">App Store</a>
                    </div>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">April 2020</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Android | Realtime Chat App</h3>
                    <div style="text-transform:none" class="subheading mb-3"><a target="_blank"
                                                                                href="https://play.google.com/store/apps/details?id=com.emreakcadag.firebasemesajlasma">SLF
                            Messenger | Google Play Strore</a></div>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">May 2018</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Android | Remote Meter Reading Application</h3>
                    <div style="text-transform:none" class="subheading mb-3"><a target="_blank">Testing</a></div>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">July 2018</span>
                </div>
            </div>

        </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
            <h2 class="mb-5">Education</h2>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Erciyes University</h3>
                    <div class="subheading mb-3">Bachelor of Science</div>
                    <div>Electrical and Electronics Engineering</div>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">2012 - 2017</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Universidad del País Vasco</h3>
                    <div class="subheading mb-3">Erasmus+</div>
                    <div>Electrical and Electronics Engineering</div>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">2015 - 2016</span>
                </div>
            </div>

        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
            <h2 class="mb-5">Skills</h2>

            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item">
                    <i class="fab fa-android"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-html5"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-node-js"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-php"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-java"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-npm"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-git"></i>
                </li>
            </ul>


    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
            <h2 class="mb-5">Interests</h2>
            <p>Apart from being a web - mobile app developer, I enjoy most of my time being outdoors. In the winter, I
                am an avid skier pool player. I enjoy hiking, bicycling and travelling.</p>
            <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television
                shows, I spend a large amount of my free time exploring the latest technology advancements in the mobile
                - web development world.</p>
        </div>
    </section>

</div>

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
<link href="<?= public_url() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">


<!-- Bootstrap core JavaScript -->
<script src="<?= public_url() ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= public_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?= public_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?= public_url() ?>js/resume.min.js"></script>

</body>

</html>
