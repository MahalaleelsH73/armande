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
        <link href="{{ asset('/css/about.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <div class="app" id="app">
                <div class="sw-1 d-flex flex-column justify-content-center align-items-center text-center">

                </div>
            </div>
            <div class="rhema py-4 p-5">
                <img class="armanda-avatar shadow-lg waves-1 md-avatar rounded-circle" src="{{ asset('/images/IMG-20210502-WA0051-removebg-preview.png') }}"/>
                <div class="d-flex flex-row justify-content-between">
                    <p class="introline">À propos</p>
                    <p class="biographie">
                        Je suis Mêdessou Armande BOKO, née le 6 décembre 1985 à Cotonou (Bénin), diplômée de l’Université de Liège en Sciences Biomédicales (option Assurance Qualité) et Docteur de l’Université d’Abomey-Calavi en Microbiologie.<br><br>
                        Durant tout mon parcours universitaire, j’ai développé un grand intérêt pour les sciences microbiologiques. Mes expériences capitalisées (formations et stages) dans ce domaine m’ont permis de décrocher des cours dans de grandes universités du Bénin. Ainsi, je veux d’une part, communiquer cette passion aux jeunes scientifiques, toute catégorie confondue, d’autre part, exposer les fruits de mes recherches sur différents sujets aussi bien en Microbiologie qu’en Management de la qualité.<br><br>
                        Je suis également une grande passionnée de photo depuis plusieurs années. La photo est un canal dont je me sers pour promouvoir ma personne et donner du plaisir aux gens à travers des messages de motivation et d’encouragement. Détentrice de la page Facebook Armande Suprême, mon objectif est d’impacter les jeunes de mon pays, de la sous-région et du monde grâce à la photo. Je pense que c’est un moyen très efficace de faire passer des messages. Merci de me soutenir.<br><br>
                        Croyante et très attachée aux valeurs chrétiennes, je suis pour l’instant célibataire et sans en enfants.
                    </p>
                    <div class="d-flex flex-row">
                        <a href="https://wa.me/67236500"><img class="fabulous shadow-lg waves-1 md-avatar rounded-circle" src="{{ asset('/social-whatsapp-circle-512.png') }}"/></a>
                        <a href="https://fb.me/"><img class="fabulous shadow-lg waves-2 md-avatar rounded-circle" src="{{ asset('/Facebook_Logo.png') }}"/></a>
                        <a href="https://fb.me/"><img class="linked-in shadow-lg waves-2" src="{{ asset('/images/LinkedIn-Logos/LI-Logo.png') }}"/></a>
                    </div>
                </div>
            </div>
        </div>
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
            <h3 class="footer-h3 mt-3">Copyright</h3>
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
