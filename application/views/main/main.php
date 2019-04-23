
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logistik</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">
    <link href="<?php echo base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet">

    <link href="cover.css" rel="stylesheet">
    <style>
        /*
        * Globals
        */

        /* Links */
        a,
        a:focus,
        a:hover {
        color: #fff;
        }

        /* Custom default button */
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
        color: #333;
        text-shadow: none; /* Prevent inheritance from `body` */
        background-color: #fff;
        border: .05rem solid #fff;
        }


        /*
        * Base structure
        */

        html,
        body {
        height: 100%;
        background-color: #333;
        }

        body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-pack: center;
        -webkit-box-pack: center;
        justify-content: center;
        color: #fff;
        text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
        max-width: 42em;
        }


        /*
        * Header
        */
        .masthead {
        margin-bottom: 2rem;
        }

        .masthead-brand {
        margin-bottom: 0;
        }

        .nav-masthead .nav-link {
        padding: .25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, .5);
        background-color: transparent;
        border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link + .nav-link {
        margin-left: 1rem;
        }

        .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
        }

        @media (min-width: 48em) {
        .masthead-brand {
            float: left;
        }
        .nav-masthead {
            float: right;
        }
        }


        /*
        * Cover
        */
        .cover {
        padding: 0 1.5rem;
        }
        .cover .btn-lg {
        padding: .75rem 1.25rem;
        font-weight: 700;
        }


        /*
        * Footer
        */
        .mastfoot {
        color: rgba(255, 255, 255, .5);
        }
    </style>
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Logistik</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="<?php echo base_url('Main/route');?>">Cek Tarif</a>
            <a class="nav-link" href="<?php echo base_url('Main/cariResi');?>">Cek Track</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Logistik Ku.</h1>
        <p class="lead">Kirim barang barang mu ke seluruh indonesia dengan murah</p>
        <p class="lead">
          <a href="<?php echo base_url('Main/route');?>" class="btn btn-lg btn-secondary">Cek Tarif</a>
        </p>
      </main>

    </div>

    <script src="<?php echo base_url('assets/js/jquery-3.3.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" ></script>
  </body>
</html>
