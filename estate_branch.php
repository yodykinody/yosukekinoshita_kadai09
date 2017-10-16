<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <script src="jquery-2.1.3.min.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="sample.js"></script>
    <link rel="stylesheet" href="CSS/sample.css">
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

    <?php

    if(isset($_POST['disp'])==true){
      if(isset($_POST['realcode'])==false){
        header('Location:estate_ng.php');
        exit();
      }
      $real_code=$_POST['realcode'];
      header('Location:estate_disp.php?realcode='.$real_code);
      exit();
    }

    if(isset($_POST['disp'])==true){
      if(isset($_POST['realcode2'])==true){
        $real_code=$_POST['realcode2'];
        header('Location:estate_dispMoshikomi.php');
        exit();
      }
      $real_code=$_POST['realcode'];
      header('Location:estate_disp.php?realcode='.$real_code);
      exit();
    }

    if(isset($_POST['add'])==true){
      header('Location:estate_add.php');
      exit();
    }

    if(isset($_POST['edit'])==true){

      if(isset($_POST['realcode'])==false){
        header('Location:estate_ng.php');
        exit();
      }

      $real_code=$_POST['realcode'];
      header('Location:estate_edit.php?realcode='.$real_code);
      exit();
    }

    if(isset($_POST['moshikomi'])==true){

      if(isset($_POST['realcode'])==false){
        header('Location:estate_ng.php');
        exit();
      }

      $real_code=$_POST['realcode'];
      header('Location:estate_moshikomi.php?realcode='.$real_code);
      exit();
    }

    if(isset($_POST['delete'])==true){

      if(isset($_POST['realcode'])==false){
        header('Location:estate_ng.php');
        exit();
      }

      $real_code=$_POST['realcode'];
      header('Location:estate_delete.php?realcode='.$real_code);
      exit();
    }


    if(isset($_POST['shinki'])==true){
      header('Location:estate_add.php');
      exit();
    }

    if(isset($_POST['owner'])==true){
      header('Location:owner_disp.php');
      exit();
    }


     ?>


  </body>
</html>
