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
    </head>
    <body>
        <div class="full-center d-none" id="loader">
            <div class="loadingio-spinner-ripple-zen5coac5ln">
                <div class="ldio-r8nn1h4hfi">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="app" id="app">
            <nav class="navbar navbar-expand-lg py-2 sticky-top bg-dark">
                <a class="navbar-brand" href=""><img src="{{ asset('/wb-logo-light.svg') }}" alt="" height="50" width="200"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">A propos</a>
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
                            <a class="nav-link" href="">Mannéquinat</a>
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
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide sw-1 d-flex flex-column justify-content-center align-items-start text-center">
                        <h1 class="sw-1-h1 p-3 m-5">articles & documentations<span class="sw-1-h1 p-3 y-h">microbiologie</span></h1>
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
            <div class="container first-xxl">
                <div class="wrapper">
                    <p class="introline">Livres</p>
                    {{-- <h1 class="bigline">Consultés</1> --}}
                </div>
                <div class="d-flex flex-row justify-content-center">
                    <div class="view mr-4">
                        <img src="{{ asset('/images/livres/1260258998.jpeg') }}" class="img-fluid box" alt="">
                        <div class="mask flex-center">
                        </div>
                    </div>
                    <div class="view mr-4">
                        <img src="{{ asset('/images/livres/RPX526.jpg') }}" class="img-fluid box" alt="">
                        <div class="mask flex-center">
                        </div>
                    </div>
                    <div class="view mr-4">
                        <img src="{{ asset('/images/livres/-bigcovers-0134688643.jpeg') }}" class="img-fluid box" alt="">
                        <div class="mask flex-center">
                        </div>
                    </div>
                    <div class="view mr-4">
                        <img src="{{ asset('/images/livres/MICROBIOLOGY.jpg') }}" class="img-fluid box" alt="">
                        <div class="mask flex-center">
                        </div>
                    </div>
                    <div class="view mr-4">
                        <img src="{{ asset('/images/livres/0321712420.jpg') }}" class="img-fluid box" alt="">
                        <div class="mask flex-center">
                        </div>
                    </div>
                    <div class="view">
                        <img src="{{ asset('/images/livres/Jawetz-Melnick-Adelbergs-Medical-Microbiology-28-E.jpg') }}" class="img-fluid box" alt="">
                        <div class="mask flex-center">
                        </div>
                    </div>
                </div>
                <div class="justify-content-center align-items-center text-center m-5">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-lg"><b>Cliquer pour tout découvrir <i class="fas fa-long-arrow-alt-right ml-1"></i></b></button>
                </div>
                <div class="row poster">
                    <div class="view col-md-4 col-sm-4" id="idview">
                        <img src="{{ asset('/images/IMG-20210502-WA0051-removebg-preview.png') }}" class="img-fluid" id="abk" alt="">
                        <div class="mask flex-center xp-mask d-flex flex-column justify-content-end">
                            <div class="middle-name">
                                <h3 class="poster-ab mr-2">Armande M. <span class="poster-ab-bold mr-2">Boko</span></h3>
                                <h2 class="titre">Docteur en Microbiologie</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="view">
                            <video width="" class="img-fluid" autoplay loop muted autopictureinpicture id="video">
                                <source src="{{  asset('/images/Computer Science at NYU Shanghai.mp4')   }}" type="video/mp4">
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <div class="mask flex-center d-flex flex-column red-dg">
                                <!-- <h2 class="hastag">Follow Us</h2> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column mt-5">
                    <div class="d-flex flex-row justify-content-between align-items-center text-center">
                        <h2 class="hastag">Les derniers articles publiés</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="d-flex flex-row">
                                <div class="article-cover-img">
                                    <img class="img-fluid v-1" src="{{ asset('/images/61bEw2jySNL.jpg') }}" alt="">
                                    <img class="img-fluid v-2" src="{{ asset('/images/1552885141-5048.jpg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="article-author m-1">Auteur</h2>
                                    <h1 class="article-title m-1">Microbiology - Latest research and news | Nature</h1>
                                    <div class="d-flex flex-row">
                                        <h5 class="article-pub m-1">1 hour ago</h5>
                                        <i class="far fa-eye m-1"></i>
                                        <h5 class="article-stats m-1">300K</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="d-flex flex-row">
                                <div class="article-cover-img">
                                    <img class="img-fluid" src="{{ asset('/images/61bEw2jySNL.jpg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="article-author m-1">Auteur</h2>
                                    <h1 class="article-title m-1">Microbiology - Latest research and news | Nature</h1>
                                    <div class="d-flex flex-row">
                                        <h5 class="article-pub m-1">1 hour ago</h5>
                                        <i class="far fa-eye m-1"></i>
                                        <h5 class="article-stats m-1">300K</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="d-flex flex-row">
                                <div class="article-cover-img">
                                    <img class="img-fluid" src="{{ asset('/images/61bEw2jySNL.jpg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="article-author m-1">Auteur</h2>
                                    <h1 class="article-title m-1">Microbiology - Latest research and news | Nature</h1>
                                    <div class="d-flex flex-row">
                                        <h5 class="article-pub m-1">1 hour ago</h5>
                                        <i class="far fa-eye m-1"></i>
                                        <h5 class="article-stats m-1">300K</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="d-flex flex-row">
                                <div class="article-cover-img">
                                    <img class="img-fluid" src="{{ asset('/images/61bEw2jySNL.jpg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="article-author m-1">Auteur</h2>
                                    <h1 class="article-title m-1">Microbiology - Latest research and news | Nature</h1>
                                    <div class="d-flex flex-row">
                                        <h5 class="article-pub m-1">1 hour ago</h5>
                                        <i class="far fa-eye m-1"></i>
                                        <h5 class="article-stats m-1">300K</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="d-flex flex-row">
                                <div class="article-cover-img">
                                    <img class="img-fluid" src="{{ asset('/images/61bEw2jySNL.jpg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="article-author m-1">Auteur</h2>
                                    <h1 class="article-title m-1">Microbiology - Latest research and news | Nature</h1>
                                    <div class="d-flex flex-row">
                                        <h5 class="article-pub m-1">1 hour ago</h5>
                                        <i class="far fa-eye m-1"></i>
                                        <h5 class="article-stats m-1">300K</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="d-flex flex-row">
                                <div class="article-cover-img">
                                    <img class="img-fluid" src="{{ asset('/images/61bEw2jySNL.jpg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="article-author m-1">Auteur</h2>
                                    <h1 class="article-title m-1">Microbiology - Latest research and news | Nature</h1>
                                    <div class="d-flex flex-row">
                                        <h5 class="article-pub m-1">1 hour ago</h5>
                                        <i class="far fa-eye m-1"></i>
                                        <h5 class="article-stats m-1">300K</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <a href="https://twitter.com/armandaboko"><img class="fabulous shadow-lg waves-3 md-avatar rounded-circle" src="{{ asset('/twitter.png') }}"/></a>
                    <a href="https://instagram.me/"><img class="fabulous shadow-lg waves-4 md-avatar rounded-circle" src="{{ asset('/3D-Instagram-logo-PNG.png') }}"/></a>
                    <a href="https://instagram.me/"><img class="fabulous shadow-lg waves-4 md-avatar rounded-circle" src="{{ asset('/images/telegram_logo.png') }}"/></a>
                </div>
            </div>
        </div>
        <div class="curved-div">
            <div class="row payement-apps">
                <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center text-center">
                    <h4 class="m-1 justify-content-center align-items-center text-center">Payement très sécurisé pour l'achat des documents</h4>
                    <div class="d-flex flex-row justify-content-center align-items-center text-center">
                        <img src="{{   asset('/images/mastercard.png')  }}" alt="" srcset="" class="img-fluid m-2" width="70">
                        <img src="{{   asset('/images/visa-credit-card-logo-512-1613502609560.png')  }}" alt="" srcset="" class="img-fluid m-2" width="70">
                        <img src="{{   asset('/images/btc.png')  }}" alt="" srcset="" class="img-fluid m-2" width="70">
                        <img src="{{   asset('/images/etherum.png')  }}" alt="" srcset="" class="img-fluid m-2" width="100">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                   <img src="{{   asset('/images/avengers.png')  }}" alt="" srcset="" class="img-fluid">
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg">
                <path fill="#fff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
        <div class="sharped-div">
            <div class="row services-bk">
                <div class="col-md-6 col-sm-12 d-none">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row">
                            <i class="fas fa-check md-avatar rounded-circle"></i>
                            <h5 class="text-center mt-2">Trouver la documentation qu'il faut en microbiologie</h5>
                        </div>
                        <div class="d-flex flex-row">
                            <i class="fas fa-check md-avatar rounded-circle"></i>
                            <h5 class="text-center mt-2">S'abonner à la newsletter pour suivre nos articles</h5>
                        </div>
                        <div class="d-flex flex-row">
                            <i class="fas fa-check md-avatar rounded-circle"></i>
                            <h5 class="text-center mt-2">Contenus scientifiques à des prix forfaitaires</h5>
                        </div>
                        <div class="d-flex flex-row">
                            <i class="fas fa-check md-avatar rounded-circle"></i>
                            <h5 class="text-center mt-2">Contacter la Docteure par ses médias</h5>
                        </div>
                        <div class="d-flex flex-row">
                            <i class="fas fa-check md-avatar rounded-circle"></i>
                            <h5 class="text-center mt-2">D'autres services disponibles...Coming soon !</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <figure>
                        <blockquote>
                            <p><img src="{{  asset('/images/flat_seo2-39-512.png')  }}" alt="" srcset="" width="25" hight="25">Nous mettons à votre disposition des revues scientifiques sur la Microbiologie Des documents de très grandes qualités pour vous étudiants, professeurs, universitaires & tous les armateurs des sciences microbiologiques.<img src="{{ asset('/images/quote_left_bubble-512.png')  }}" alt="" srcset="" width="25" hight="25"></p>
                        </blockquote>
                        <figcaption>—Dr Armanda Boko, <cite>Microbiologiste</cite></figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="footer d-flex flex-row justify-content-around py-4 pt-5">
        <div class="footer-item m-3 d-flex flex-column align-items-center text-center">
            <h3 class="footer-h3 mt-3">Newsletter</h3>
        </div>
        <div class="footer-item m-3 d-flex flex-column justify-content align-items-center text-center">
            <h3 class="footer-h3 mt-3">Nous contacter</h3>
        </div>
        <div class="footer-item m-3 d-flex flex-column justify-content align-items-center text-center">
            <h3 class="footer-h3 mt-3">Plus de services</h3>
        </div>
        <div class="footer-item m-3 d-flex flex-column justify-content align-items-center text-center">
            <h3 class="footer-h3 mt-3">Sitemap</h3>
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
        <script>
            // var app = document.getElementById("app");
            // var loader = document.getElementById("loader");
            // app.style.display = "none";
            // let loading = setTimeout(() => {
            //     app.style.display = "block";
            //     loader.style.display = "none";
            // }, 4000);
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
