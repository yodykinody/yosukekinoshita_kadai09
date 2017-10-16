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
  	session_regenerate_id(true);
  	if(isset($_SESSION['login'])==false){
  		print 'ログインされていません。';
  		print '<br>';
  		print '<a href="estate_login.php">ログイン画面へ</a>';
  		exit();
  	}
  	 ?>

  物件が選択されていません。<br>
  <a href="estate_list.php">戻る</a>







  </body>
</html>
