<?php

include "../SiteController.php";


$obj=new SiteController($_POST['eposta'],$_POST['username'],$_POST['parola']);

if($obj->is_loggedin()!=""){
   $obj->redirect('../profile');
}

if(isset($_POST['register-btn'])){

   $result=$obj->register();

}
if(isset($_POST['login-btn'])){
   $result=$obj->login();


}


?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>47Admin - Bootstrap Admin Skin</title>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="../app/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="../vendor/animo/animate+animo.css">
   <!-- App CSS-->
   <link rel="stylesheet" href="../app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src="../vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="../vendor/fastclick/fastclick.js" type="application/javascript"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>

   <!-- START wrapper-->
   <div style="height: 100%; padding: 20px 0; background-color: #eef0f4" class="row row-table">
      <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
         <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" class="panel b0">
            <p class="text-center mb-lg">
               <br>
               <a href="www.portakalyazilim.com.tr">
                  <img src="../app/img/logopo.png" alt="Image" class="block-center img-rounded">
               </a>
            </p>
            <div id="accordion" data-toggle="collapse-autoactive" class="panel-group">
               <!-- START panel-->
               <div class="panel radius-clear b0 shadow-clear">
                  <div class="alert ">
                  <?php echo $result;?>
                  </div>
                  <div class="panel-heading radius-clear panel-heading-active"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="text-muted btn-block text-center">Oturum Aç</a>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                     <div class="panel-body">
                        <form role="form" class="mb-lg" action="" method="post">
                           <div class="form-group has-feedback">
                              <label for="exampleInputEmail1">E-Posta Adresi</label>
                              <input id="exampleInputEmail1" type="email" placeholder="E-posta adresiniz" class="form-control" name="eposta" required>
                              <span class="fa fa-envelope form-control-feedback text-muted"></span>
                           </div>
                           <div class="form-group has-feedback">
                              <label for="exampleInputPassword1">Parola</label>
                              <input id="exampleInputPassword1" type="password" placeholder="Password" class="form-control" name="parola" required>
                              <span class="fa fa-lock form-control-feedback text-muted"></span>
                           </div>
                           <div class="clearfix">
                              <div class="checkbox c-checkbox pull-left mt0">
                                 <label>
                                    <input type="checkbox" value="">
                                    <span class="fa fa-check"></span>Beni hatırla</label>
                              </div>
                           </div>
                           <button id="login-btn" type="submit" name="login-btn" class="btn btn-block btn-success">Giriş</button>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- END panel-->
               <!-- START panel-->
               <div class="panel radius-clear b0 shadow-clear">
                  <div class="panel-heading radius-clear"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="text-muted btn-block alert-danger-center">Üye Değil misiniz?</a>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                     <div class="panel-body">
                        <form id="register" role="form" class="mb-lg" method="post" action="">
                           <div class="form-group has-feedback">
                              <label for="username">Rumuz</label>
                                 <div class="input-group m-b">
                                    <span class="input-group-addon">@</span>
                                    <input id="username" type="text" placeholder="Rumuz" class="form-control" name="username" required>
                                 </div>
                           </div>
                           <div class="form-group has-feedback">
                              <label for="signupInputEmail1">E-Posta Adresi</label>
                              <input id="signupInputEmail1" type="email" placeholder="E-Posta Adresiniz" class="form-control" name="eposta" required>
                              <span class="fa fa-envelope form-control-feedback text-muted"></span>
                           </div>
                           <div class="form-group has-feedback">
                              <label for="signupInputPassword">Parola</label>
                              <input id="signupInputPassword" type="password" placeholder="Parola" class="form-control" name="parola" required>
                              <span class="fa fa-lock form-control-feedback text-muted"></span>
                           </div>
                           <div class="form-group has-feedback">
                              <label for="signupInputRePassword">Parolayı Doğrula</label>
                              <input id="signupInputRePassword" type="password" placeholder="Parolayı Doğrula" class="form-control" name="parolamatch" onChange="checkPasswordMatch();" required>
                              <span class="fa fa-lock form-control-feedback text-muted"></span>
                           </div>
                           <div class="clearfix">
                              <div class="checkbox c-checkbox pull-left mt0">

                              </div>
                           </div>
                           <button id="register-btn" type="submit" class="btn btn-block btn-success" name="register-btn">Kayıt ol</button>

                        </form>
                     </div>
                  </div>
               </div>
               <!-- END panel-->
               <!-- START panel-->
               <div class="panel radius-clear b0 shadow-clear">
                  <div class="panel-heading radius-clear"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="text-muted btn-block text-center">Parolamı unuttum</a>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                     <div class="panel-body">
                        <form role="form">
                           <p class="text-center">Parolanı nasıl sıfırlayacağına dair size mail atacağız</p>
                           <div class="form-group has-feedback">
                              <label for="resetInputEmail1">E-Posta Adresi</label>
                              <input id="resetInputEmail1" type="email" placeholder="eposta adresiniz" class="form-control">
                              <span class="fa fa-envelope form-control-feedback text-muted"></span>
                           </div>
                           <button type="submit" name="reset-btn" class="btn btn-danger btn-block">Sıfırla</button>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- END panel-->
            </div>
         </div>
      </div>
   </div>
   <!-- END wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="../vendor/jquery/jquery.min.js"></script>
   <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Animo-->
   <script src="../vendor/animo/animo.min.js"></script>
   <!-- Custom script for pages-->
   <script src="../app/js/pages.js"></script>
   <!-- END Scripts-->
   <!--Password Match-->
   <script>





     function checkPasswordMatch() {
        var password=$("#signupInputPassword").val();
         var confirmpassword=$("#signupInputRePassword").val();
         if(password!=confirmpassword){
            $('.alert').addClass('alert-danger').html("Parolalar eşleşmiyor.");



         }

     }

   </script>
   <!--End Password Matc-->
</body>

</html>