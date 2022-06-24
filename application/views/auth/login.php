<!doctype html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Login - Prosideska</title>
  <link href='' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <script type='text/javascript' src=''></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

    * {
      margin: 0;
      padding: 0
    }

    .container {
      min-height: 100vh;
      background-color: #f8f6f5;
      display: flex;
      justify-content: center;
      align-items: center
    }

    .card {
      height: 50%;
      width: 320px;
      background-color: #fff;
      border-radius: 10px;
      padding: 10px 20px;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
      cursor: pointer
    }

    .top-div h2 {
      color: red;
      font-weight: 950
    }

    .top-div h4 {
      margin-top: 10px
    }

    .top-div p {
      font-size: 12px
    }

    .top-div p a {
      font-weight: 950
    }

    .input-text {
      margin-top: 20px;
      position: relative
    }

    input[type='text'] {
      height: 30px;
      width: 100%;
      border-radius: 5px;
      border: 1px solid #cacacd;
      outline: 0;
      margin-bottom: 20px;
      padding: 0 20px 0 10px;
      box-sizing: border-box;
      transition: all 0.5s
    }

    .input-text span {
      position: absolute;
      top: 6px;
      left: 10px;
      font-size: 14px;
      transition: all 0.5s
    }

    .input-text input:focus~span,
    .input-text input:valid~span {
      top: -16px;
      font-size: 12px;
      font-weight: 600
    }

    input[type="password"] {
      height: 30px;
      width: 100%;
      border-radius: 5px;
      border: 1px solid #cacacd;
      outline: 0;
      margin-bottom: 20px;
      padding: 0 20px 0 10px;
      box-sizing: border-box;
      transition: all 0.5s
    }

    .input-text .fa-envelope-o {
      position: absolute;
      top: 10px;
      right: 5px;
      font-size: 12px
    }

    .input-text .fa-eye-slash {
      position: absolute;
      top: 10px;
      right: 5px;
      font-size: 12px
    }

    .input-text .fa-eye {
      position: absolute;
      top: 10px;
      right: 5px;
      font-size: 12px
    }

    .input-text a {
      position: absolute;
      top: -16px;
      right: 5px;
      font-size: 12px;
      font-weight: 600;
      text-decoration: none
    }

    .remember {
      display: flex;
      align-items: center;
      font-size: 12px;
      gap: 6px;
      padding-top: 10px
    }

    input[type="checkbox"] {
      display: none
    }

    input[type="checkbox"]+label {
      cursor: pointer;
      display: flex;
      padding-left: 34px;
      position: relative;
      vertical-align: middle;
      font-size: 12px;
      font-weight: 700;
      color: #808080
    }

    input[type="checkbox"]:checked+label {
      animation: check 300ms
    }

    input[type="checkbox"]:checked+label:before {
      content: "\2713";
      height: 7px;
      left: 10px;
      position: absolute;
      top: -2px;
      width: 7px;
      color: blue;
      font-weight: bold;
      font-size: 13px
    }

    input[type="checkbox"]+label:after {
      border: 3px solid #ccc;
      border-radius: 5px;
      content: "";
      height: 15px;
      left: 5px;
      position: absolute;
      top: -3px;
      width: 15px
    }

    input[type="checkbox"]:checked+label:after {
      border-color: blue
    }

    @keyframes check {
      0% {
        tranform: scale(1)
      }

      50% {
        transform: scale(1.01)
      }

      100% {
        transform: scale(1)
      }
    }

    .sign-in {
      margin: 15px 0 15px 0;
      display: flex;
      justify-content: center;
      align-items: center
    }

    .sign-in button {
      width: 100%;
      height: 30px;
      border-radius: 5px;
      background-color: #0a8080;
      color: #fff;
      font-size: 12px;
      border: none;
      transition: all 0.5s;
      cursor: pointer
    }

    .sign-in button:hover {
      background-color: #2C3E3E
    }

    .or {
      display: flex;
      justify-content: center;
      align-items: center
    }

    .or small {
      font-weight: 700;
      color: #ccc;
      font-size: 11px;
      background-color: white;
      padding: 0 5px
    }

    hr {
      border: 1px solid #ebebeb;
      margin-top: -9px
    }

    .google {
      margin-top: 15px;
      display: flex;
      ;
      justify-content: center;
      align-items: center;
      position: relative
    }

    .google button {
      width: 100%;
      height: 25px;
      border-radius: 5px;
      border: none;
      background-color: #fff;
      border: 1px solid #b0d6d6;
      font-size: 12px;
      color: #428389;
      cursor: pointer;
      transition: all 0.5s
    }

    .google button:hover {
      background-color: #CDF9F9
    }

    .fa-google {
      position: absolute;
      top: 6px;
      left: -40px;
      font-size: 14px;
      transition: all 0.5s
    }

    .google button:hover .fa-google {
      position: absolute;
      left: 105px;
      color: #0a8080
    }

    .last {
      margin-top: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      position: relative
    }

    .last button {
      width: 100%;
      height: 25px;
      border-radius: 5px;
      border: none;
      background-color: #fff;
      border: 1px solid #b0d6d6;
      font-size: 12px;
      color: #428389;
      cursor: pointer;
      transition: all 0.5s
    }

    .last button:nth-child(1):hover {
      background-color: #CDF9F9
    }

    .fa-facebook {
      position: absolute;
      top: 7px;
      left: -40px;
      font-size: 14px;
      transition: all 0.5s
    }

    .last button:hover .fa-facebook {
      position: absolute;
      left: 30px
    }

    .last button:nth-child(2):hover {
      background-color: #CDF9F9
    }

    .fa-twitter {
      position: absolute;
      top: 6px;
      left: -40px;
      font-size: 14px;
      transition: all 0.5s
    }

    .last button:hover .fa-twitter {
      position: absolute;
      left: 179px
    }

    .warning {
      border: 1px solid red !important
    }
  </style>
</head>

<body oncontextmenu='return false' class='snippet-body'>
  <div class="container">
    <div class="card">
      <div class="top-div">
        <h2>PROSIDESKA</h2>
        <h4>Selamat datang</h4>
        <p>Ayo gunakan NIK untuk masuk.</p>
      </div>
      <?php
      $status_login = $this->session->userdata('status_login');
      if (!empty($status_login)) {
        $message = $status_login;
      }
      ?>
      <p class="top-div" style="color: red;"><?= !empty($status_login) ? $message : '' ?></p>
      <?php echo form_open('auth/cheklogin'); ?>
      <form action="<?= site_url("auth/checklogin") ?>" method="post">
        <div class="input-text">
          <input type="text" name="nik" required="required"><span>NIK</span><i class="fa fa-envelope-o"></i>
        </div>
        <div class="sign-in"><button type="submit">Login</button></div>
      </form>
    </div>
  </div>
  <script type='text/javascript' src=''></script>
  <script type='text/javascript' src=''></script>
  <script type='text/javascript' src=''></script>
  <script type='text/Javascript'>
    var click_eye=document.querySelector(".input-text .fa-eye-slash");
        var eye=document.querySelector(".passcode");
        var in_pass=document.querySelector("#password_input");
        click_eye.addEventListener('click',function(){
            if(in_pass.type=='password'){
                in_pass.type="text";
                eye.classList.remove('fa-eye-slash');
                eye.classList.add('fa-eye');
                in_pass.classList.add('warning');
            }
            else{
                in_pass.type="password";
                eye.classList.add('fa-eye-slash');
                eye.classList.remove('fa-eye');
                in_pass.classList.remove('warning');
            }
        });
    </script>
</body>

</html>