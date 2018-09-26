<?php include('template.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="form.css">
  <title>Log in</title>
  <body class="hm-gradient" >
      <body class="hm-gradient" >
      <main>
          <div class="container mt-4" >

              <!-- Grid row -->
              <div class="row">
                  <!-- Grid column -->
                  <div class="col-md-6 mb-4">
                      <div class="card">
                          <div class="card-body">
                            <div class="login_div">
                            <form action="login.php" form class="form-style-9" method="POST">
                              <h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Login:</h3>
                              <!--Body-->
                              <div class="md-form">
                                  <i class="fa fa-envelope prefix grey-text"></i>
                                  <input type="text" id="defaultForm-email" name="username" class="form-control">
                                  <label  for="defaultForm-email">Your username</label>
                              </div>
                              <div class="md-form">
                                  <i class="fa fa-lock prefix grey-text"></i>
                                  <input type="password" name="password" id="defaultForm-pass" class="form-control">
                                  <label for="defaultForm-pass">Your password</label>
                              </div>

                              <div class="text-center">
                                  <button name="login_user" class="btn btn-default waves-effect waves-light">next</button>
                              </div>
                                  </form>
                          </div>
                      </div>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->

      </main>

          <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

  </body>
</html>
