<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | SimRS </title>
    <link href="<?php echo base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo base_url('Admin/Login/aksi_login') ?>" method="POST">
              <h1>Login SimRS</h1>
              <div>
                <input type="text" class="form-control" name="adm_username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="adm_pass" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Login</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <b><p>©2018 All Rights Reserved. Sistem Informasi Medik Rumah Sakit</p></b>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
