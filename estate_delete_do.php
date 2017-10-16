<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="CSS/detail2.css">
</head>
<body>





	<div class="boxA">

	  <!--トップ-->
	      <div class="boxA-inner">
	      <div class="box1">
	        <div class="site">
	        </div>
	      </div>
	  <!--//トップ-->

	    <!--ヘッダーメニュー-->
	    <div class="box2">
	        <div class="menu">

	        </div>
	    </div>
	    </div>
	  </div>

		<div class="boxB">

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
			try
			{
			$real_code=$_POST['code'];
			// $real_gazou_name=$_POST['gazou_name'];
			// $real_naikan1_name=$_POST['naikan1_name'];
			// $real_naikan2_name=$_POST['naikan2_name'];
			// $real_naikan3_name=$_POST['naikan3_name'];
			// $real_naikan4_name=$_POST['naikan4_name'];


			$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
			$user='root';
			$password='';
			$dbh=new PDO($dsn,$user,$password);
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql='DELETE FROM estate  WHERE code=?';
			$stmt=$dbh->prepare($sql);
			$data[]=$real_code;
			$stmt->execute($data);

			$dbh=null;

			// if($real_gazou_name!=""){
			// 	unlink('./img/'.$real_gazou_name);
			// }
			// if($real_naikan1_name!=""){
			// 	unlink('./img/'.$real_naikan1_name);
			// }
			// if($real_naikan2_name!=""){
			// 	unlink('./img/'.$real_naikan2_name);
			// }
			// if($real_naikan3_name!=""){
			// 	unlink('./img/'.$real_naikan3_name);
			// }
			// if($real_naikan4_name!=""){
			// 	unlink('./img/'.$real_naikan4_name);
			// }

			}
			catch (Exception $e)
			{
				print 'ただいま障害により大変ご迷惑をお掛けしております。';
				exit();
			}

			 ?>

			 <div class="photoGallery3">
			 	<h3>削除しました。</h3>
			 	<div class="bottomLine">

			 <table>
			 	<tr>
			 		<td><a href="estate_list.php">戻る</a></td>

			 	</tr>
			 </table>

			  </div>

			 </div>


						 </div>


<div class="box6">
	<div class="box6-inner">
	<div class="copyright">
		<p>Copyright &copy; enjoy</p>
	</div>
	</div>
</div>


</body>
</html>
