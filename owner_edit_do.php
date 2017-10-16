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
			include("func.php");

			try{




			$lastName=$_POST['lastname'];
			$firstName=$_POST['firstname'];
			$post1=$_POST['post1'];
			$post2=$_POST['post2'];
			$address=$_POST['address'];
			$tel1=$_POST['tel1'];
			$tel2=$_POST['tel2'];
			$tel3=$_POST['tel3'];
			$fax1=$_POST['fax1'];
			$fax2=$_POST['fax2'];
			$fax3=$_POST['fax3'];
			$cell1=$_POST['cell1'];
			$cell2=$_POST['cell2'];
			$cell3=$_POST['cell3'];
			$email=$_POST['email'];
			$ID=$_POST['id'];
			$pass=$_POST['pass'];

			$lastName=h($lastName);
			$firstName=h($firstName);
			$post1=h($post1);
			$post2=h($post2);
			$address=h($address);
			$tel1=h($tel1);
			$tel2=h($tel2);
			$tel3=h($tel3);
			$fax1=h($fax1);
			$fax2=h($fax2);
			$fax3=h($fax3);
			$cell1=h($cell1);
			$cell2=h($cell2);
			$cell3=h($cell3);
			$email=h($email);
			$ID=h($ID);
			$pass=h($pass);

			$pass=md5($pass);


			$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
			$user='root';
			$password='';
			$dbh=new PDO($dsn,$user,$password);
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql='UPDATE owner SET lastname=?,firstname=?,post1=?,post2=?,address=?,tel1=?,tel2=?,tel3=?,fax1=?,fax2=?,fax3=?,cell1=?,cell2=?,cell3=?,email=?,id=?,pass=? WHERE code=1';
			$stmt=$dbh->prepare($sql);

			$data[]=$lastName;
			$data[]=$firstName;
			$data[]=$post1;
			$data[]=$post2;
			$data[]=$address;
			$data[]=$tel1;
			$data[]=$tel2;
			$data[]=$tel3;
			$data[]=$fax1;
			$data[]=$fax2;
			$data[]=$fax3;
			$data[]=$cell1;
			$data[]=$cell2;
			$data[]=$cell3;
			$data[]=$email;
			$data[]=$ID;
			$data[]=$pass;
			$stmt->execute($data);

			$dbh=null;

			print '<h3>修正しました</h3>';

			}
			catch (Exception $e)
			{
				print 'ただいま障害により大変ご迷惑をお掛けしております。';
				exit();
			}



			 ?>

			 <div class="photoGallery3">
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
