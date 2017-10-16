<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <script src="jquery-2.1.3.min.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="sample.js"></script>
    <link rel="stylesheet" href="sample.css">
  </head>
  <body>

    <?php
  	session_start();
    $_SESSION=array();
    if(isset($_COOKIE[session_name()])==true){
      setcookie(session_name(),'',time()-42000,'/');
    }
    session_destroy();

  	 ?>

  ログアウトしました。<br>
  <a href="estate_login.php">ログイン画面へ</a>







  </body>
</html>
