<?php
    if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"])
    {
      $secret = "6LfgzhgTAAAAACqpsrSu_P_qYUd67qIxqfQR_Muz";

      $ip = $_SERVER["REMOTE_ADDR"];

      $captcha = $_POST["g-recaptcha-response"];

      $result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");

      $array= json_decode($result, TRUE);

      if ($array["success"]) {
        echo 1;
      }

      else{
        echo 2;
      }
    }


 ?>
