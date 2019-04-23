
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Logisitk</title>
    <link href="<?php echo base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet">

    <style>
html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}    
    </style>
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="<?php echo base_url('Main/detailTrack'); ?>">
      <h1 class="h3 mb-3 font-weight-normal">Masukan Nomor Resi</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" name="track" id="inputEmail" class="form-control" placeholder="Nomor Resi" required autofocus>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Cari</button>
      <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y')?></p>
    <a class="mt-5 mb-3" href="<?php echo base_url('Main');?>"><-Kembali</a>
    </form>
  </body>
</html>
