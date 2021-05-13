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
        <link href="{{ asset('/css/loader.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/livres.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <div class="app" id="app">
            <nav class="navbar navbar-expand-lg py-2 sticky-top bg-dark">
                <a class="navbar-brand" href=""><img src="{{ asset('/images/logo1.png') }}" alt="" height="70" width="80"></a>
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
                            <a class="nav-link" href="/fashion">Mannéquinat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contacts</a>
                        </li>
                        <li class="nav-item dropdown d-none">
                            <a class="nav-link dropdown-toggle" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide sw-1 d-flex flex-column justify-content-center align-items-start text-center">
                        <h1 class="sw-1-h1 p-3 m-5">articles & documentations<span class="sw-1-h1 p-3 y-h"></span></h1>
                        <div class="d-flex flex-row m-5">
                            <button type="button" class="btn btn-light-blue m-3">Newsletter</button>
                            <button type="button" class="btn btn-light m-3">Contact Us</button>
                        </div>
                        <div class="d-flex flex-row">
                        </div>
                    </div>
                    <div class="swiper-slide sw-2 d-none"></div>
                    <div class="swiper-slide sw-3 d-none"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next d-none"></div>
                <div class="swiper-button-prev d-none"></div>
            </div>
            <div class="container first-xxl py-4 p-5">
                <div class="wrapper">
                    <p class="introline">Livres</p>
                </div>
                <div class="container grid-container full-bottom">
                    @foreach ($livres as $livre)
                        <div class="grid-item">
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row">
                                    <div class="article-cover-img">
                                        <img class="img-fluid" src="{{  asset('storage/'.$livre->cover)  }}" alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h2 class="article-author m-1">Armanda Boko</h2>
                                        <h1 class="article-title m-1">{{  $livre->titre  }} | Nature</h1>
                                        <p class="description">{{ $livre->description  }}</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="d-flex flex-row">
                                        <h5 class="article-pub m-1 f-8">750 Pages</h5>
                                        <h5 class="article-stats m-1 f-8">2021</h5>
                                        <h5 class="article-stats m-1 f-8">15,56 MB</h5>
                                        <h5 class="article-stats m-1 f-8">20,000 Downloads</h5>
                                    </div>
                                    <a class="download-link ml-3" href="{{  asset('storage/'.$livre->pdf_url)  }}">Télécharger<i class="fas fa-download ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="input-with-post-icon media-nl">
                <div class="d-flex flex-row">
                    <input type="text" id="exampleForm2" class="newsletter-form" placeholder="@Email pour s'abonner au Newsletter">
                    <i class="fas fa-envelope input-prefix md-avatar rounded-circle"></i>
                </div>
            </div>
            <div class="d-flex flex-column media">
                <div class="d-flex flex-row mt-3">
                    <a href="https://wa.me/67236500"><img class="fabulous shadow-lg waves-1 md-avatar rounded-circle" src="{{ asset('/social-whatsapp-circle-512.png') }}"/></a>
                    <a href="https://fb.me/"><img class="fabulous shadow-lg waves-2 md-avatar rounded-circle" src="{{ asset('/Facebook_Logo.png') }}"/></a>
                    <a href="https://fb.me/"><img class="linked-in shadow-lg waves-2" src="{{ asset('/images/LinkedIn-Logos/LI-Logo.png') }}"/></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer d-flex flex-row justify-content-around py-4 pt-5">
        <div class="footer-item m-3 d-flex flex-column align-items-start">
            <h3 class="footer-h3 mt-3">Newsletter</h3>
            <h5 class="text-center mt-2">S'abonner à la newsletter pour suivre nos articles</h5>
            <h5 class="text-center mt-2">Support Clients</h5>
        </div>
        <div class="footer-item m-3 d-flex flex-column align-items-start">
            <h3 class="footer-h3 mt-3">Nous contacter</h3>
            <h5 class="text-center mt-2">armanda.boko@smart.app</h5>
            <h2 class="hastag">Follow Us</h2>
        </div>
        <div class="footer-item m-3 d-flex flex-column align-items-start">
            <h3 class="footer-h3 mt-3">Plus de services</h3>
            <h5 class="text-center mt-2">Mannequinat et Mode</h5>
            <h5 class="text-center mt-2">Assistance</h5>
            <h5 class="text-center mt-2">Motivation & Mentoring</h5>
        </div>
        <div class="footer-item m-3 d-flex flex-column align-items-start">
            <h3 class="footer-h3 mt-3">Copyright</h3>
            <h5 class="text-center mt-2">© 2021 Rhema Signum & BitishIOW</h5>
        </div>
    </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'progressbar',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
        <script>
            gsap.from(".sw-1-h1", {duration: 3, x: 300, opacity: 0, scale: 0.5});
            gsap.from(".box", {
                duration: 2,
                scale: 0.5,
                opacity: 0,
                delay: 0.5,
                stagger: 0.2,
                ease: "elastic",
                force3D: true
            });
            TweenLite.set('.introline, .bigline',{x:'-101%'});
            var lines = new TimelineMax({repeat:-1, yoyo:true, repeatDelay:2})
            .to('.bigline',1,{x:'0%'})
            .to('.introline',1,{x:'0%'}, "+=0.3");
        </script>
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
