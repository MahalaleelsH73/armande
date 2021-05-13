<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <link rel="apple-touch-icon" href="/img/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="img/favicons/manifest.json">
        <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="7952b3">
        <link rel="icon" href="img/favicons/favicon.ico">
        <script src="https://kit.fontawesome.com/bf100fb9f8.js" crossorigin="anonymous"></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/cover.css') }}" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    </head>
    <body>
        <div class="cover-container d-flex flex-column justify-content-center align-items-center text-center">
            <nav class="navbar shadow-lg navbar-expand-lg py-2 bg-dark mb-5" id="myHeader">
                <a class="navbar-brand" href=""><img src="{{ asset('/images/logo1.png') }}" alt="" height="80" width="80"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Mes médias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Boutique en ligne</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fashion">Mannéquinat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contacts</a>
                        </li>
                        <li class="nav-item dropdown d-none">
                            <a class="nav-link dropdown-toggle" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown08">
                                <a class="dropdown-item" href="">Action</a>
                                <a class="dropdown-item" href="">Another action</a>
                                <a class="dropdown-item" href="">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <span><em class="fashion-shows"><h4 class="runaway">#runaway</h4></em></span>
            <h1 class="s-h1">Armanda Boko partage avec vous sa passion pour la photographie, Vision 7ème art</h1>
            <svg version="1.1" id="line_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="10px" xml:space="preserve">
                <path class="path2" fill="#01a09e" stroke-width="3" stroke="rgb(255, 255, 0)" d="M0 0 l1120 0"/>
            </svg>
            <img src="{{ asset('/images/IMG-20210502-WA0051-removebg-preview.png') }}" alt="" srcset="" class="mt-3 md-avatar rounded-circle" width="50px" height="50px">
        </div>
        <div class="container grid-container full-bottom">
            <div class="grid-item"><img src="{{ asset('/images/fashion/b298e1ee37e5bd4ad74623965c191742.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/2.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/screen-0.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/13.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/5.png') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/6.png') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/fashion-runway-male-model-swag-style-woman.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/kim.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/15.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/16.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/11.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/14.png') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/8.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/gettyimages-1178072900-2048x2048.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/kendall.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/Kimi.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/image.jpeg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/hbz-kim-kardashian-0207-getty-1518104453.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/gettyimages-597693844-2048x2048.jpg') }}" alt="" srcset="" class="img-fluid"></div>
            <div class="grid-item"><img src="{{ asset('/images/fashion/image.jpeg') }}" alt="" srcset="" class="img-fluid"></div>
        </div>
        <div class="footer d-flex flex-row justify-content-around py-4 pt-5">
            <div class="footer-item m-3 d-flex flex-column align-items-start">
                <h3 class="footer-h3 mt-3">Newsletter</h3>
            </div>
            <div class="footer-item m-3 d-flex flex-column align-items-start">
                <h3 class="footer-h3 mt-3">Nous contacter</h3>
            </div>
            <div class="footer-item m-3 d-flex flex-column align-items-start">
                <h3 class="footer-h3 mt-3">Plus de services</h3>
            </div>
            <div class="footer-item m-3 d-flex flex-column align-items-start">
                <h3 class="footer-h3 mt-3" id="vue">Copyright</h3>
            </div>
        </div>
        <script>
            window.onscroll = function() {myFunction()};
                var header = document.getElementById("myHeader");
                var sticky = header.offsetTop;
                function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
