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
        <link href="{{ asset('/css/login.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <div class="full-center">
            <form class="shadow-lg card upload-book p-5" action="{{ route('store_book') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="md-form">
                    <input id="form-lg" class="form-control form-control-lg" type="text" name="titre">
                    <label for="form-lg">Username</label>
                </div>
                <div class="md-form">
                    <input id="form-lg" class="form-control form-control-lg" type="password" name="prix">
                    <label for="form-lg">Password</label>
                </div>
                <button class="btn aqua-gradiento btn-block p-2">Submit</button>
            </form>
        </div>
        <script>
          const drop_zone = document.getElementById("drop_zone"), input_file_1 = document.getElementById("input-file-now-custom-1");
          drop_zone.addEventListener("click", function (e) {
            if (input_file_1) {
              input_file_1.click();
            }
          }, false);
          input_file_1.addEventListener("change", handleFiles, false);
          function handleFiles() {
            if (!this.files.length) {

            } else {
              preview = document.getElementById("list");
              const img = document.createElement("img");
              img.src = URL.createObjectURL(this.files[0]);
              img.height = 50;
              img.width = 50;
              img.onload = function() {
                  URL.revokeObjectURL(this.src);
                }
              preview.appendChild(img);
            }
          }
        </script>

        <script>
            function dropHandler(ev) {
              console.log('File(s) dropped');
              ev.preventDefault();

              if (ev.dataTransfer.items) {
                for (var i = 0; i < ev.dataTransfer.items.length; i++) {
                  if (ev.dataTransfer.items[i].kind === 'file') {
                    var file = ev.dataTransfer.items[i].getAsFile();

                    inputFileNowCustom1 = document.getElementById("input-file-now-custom-1");
                    inputFileNowCustom1.files[0] = ev.dataTransfer.files[i];

                    console.log('... file[' + i + '].name = ' + file.name);
                    var ipdf = document.getElementById('list');
                    var img = new Image(50, 50);
                    img.src = URL.createObjectURL(ev.dataTransfer.files[i]);
                    ipdf.appendChild(img);
                  }
                }
              } else {
                for (var i = 0; i < ev.dataTransfer.files.length; i++) {
                  console.log('... file[' + i + '].name = ' + ev.dataTransfer.files[i].name);
                }
              }
            }
            function dragOverHandler(ev) {
              console.log('File(s) in drop zone');
              ev.preventDefault();
            }
        </script>
        <script>
          const drop_zone_ipdf = document.getElementById("drop_zone_ipdf"), input_file_2 = document.getElementById("input-file-now-custom-2");
          drop_zone_ipdf.addEventListener("click", function (e) {
            if (input_file_2) {
              input_file_2.click();
            }
          }, false);
          input_file_2.addEventListener("change", handleFiles, false);

          function handleFiles() {
            if (!this.files.length) {

            } else {
            //   preview = document.getElementById("list");
            //   const iframe = document.createElement("iframe");
            //   iframe.src = URL.createObjectURL(this.files[0]);
            //   iframe.height = 60;
            //   iframe.onload = function() {
            //       URL.revokeObjectURL(this.src);
            //     }
            //   preview.appendChild(iframe);
                h3 = document.getElementById("ipdf_name");
                var node = document.createTextNode(this.files[0].name);
                h3.appendChild(node);
            }
          }
        </script>
        <script>
            function dropHandlerIpdf(ev) {
              console.log('File(s) dropped');
              ev.preventDefault();
              if (ev.dataTransfer.items) {
                for (var i = 0; i < ev.dataTransfer.items.length; i++) {
                  if (ev.dataTransfer.items[i].kind === 'file') {
                    var file = ev.dataTransfer.items[i].getAsFile();
                    preview = document.getElementById("list");
                    h3 = document.getElementById("ipdf_name");
                    var node = document.createTextNode(ev.dataTransfer.files[i].name);
                    h3.appendChild(node);
                    inputFileNowCustom2 = document.getElementById("input-file-now-custom-2");
                    inputFileNowCustom2.files[0] = ev.dataTransfer.files[i];
                  }
                }
              } else {
                for (var i = 0; i < ev.dataTransfer.files.length; i++) {
                  console.log('... file[' + i + '].name = ' + ev.dataTransfer.files[i].name);
                }
              }
            }
            function dragOverHandlerIpdf(ev) {
              console.log('File(s) in drop zone');
              ev.preventDefault();
            }
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
