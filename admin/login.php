<?php 
ob_start();
session_start();
require_once('session.php'); 
require_once('header_login.php'); 
?>
<body id="hal-login">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" id="top-form">
        <div class="login-panel panel panel-default">
          <div id="body-form">
            <br>
              <img src="assets/img/logo_karantina.png" width="70%">
                <br>
                  <strong>
                    <h4>Login Website Admin Panel</h4>
                  </strong>
                  <hr width="80%">
                  </div>
                  <div class="panel-body radius">
                    <?php 
                    if(isset($_POST['login'])) : 

                    $username=htmlspecialchars($conn->real_escape_string(trim($_POST['username']))); 
                    $password=htmlspecialchars($conn->real_escape_string(trim($_POST['password'])));


                    $tampil  =$connection->username($username); 
                    $tampil2 =$connection->password($username, $password);


                     if($tampil->num_rows==0 ){

                      echo '<div class="alert alert-danger text-center" style="text-align: center">Username belum terdaftar !</div>';
                     }else{

                      if ($tampil2->num_rows==0){

                        echo '<div class="alert alert-danger text-center" style="text-align: center">Password tidak sesuai !</div>';

                      }else{

                        require_once('data_login.php');

                      }
                     }

                     endif; 
                     ?>
                        <form action="" method="post">
                          <fieldset>
                            <div class="form-group">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               </div>
                            </div>
                          <div class="form-group">
                              <div class="input-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            </div>
                          </div>
                            <button class="btn btn-lg btn-warning btn-block" type="submit" name="login" id="login">Login</button>
                          </fieldset>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/js/sb-admin.js"></script>
  </body>
</html>
