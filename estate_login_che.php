<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="CSS/detail10.css">
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
				try{
					$owner_id=$_POST['id'];
					$owner_pass=$_POST['pass'];

					$owner_id=htmlspecialchars($owner_id,ENT_QUOTES,'UTF-8');
					$owner_pass=htmlspecialchars($owner_pass,ENT_QUOTES,'UTF-8');

					$owner_pass=md5($owner_pass);
					$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
					$user='root';
					$password='';
					$dbh=new PDO($dsn,$user,$password);
					$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

					$sql='SELECT lastname FROM owner WHERE id=? AND pass=?';
					$stmt=$dbh->prepare($sql);
					$data[]=$owner_id;
					$data[]=$owner_pass;
					$stmt->execute($data);

					$dbh=null;
					$rec=$stmt->fetch(PDO::FETCH_ASSOC);

					if($rec==false){
						print 'オーナーIDかパスワードが間違っています。';
						print '<br>';
						print '<br>';
						print '<a href="estate_login.php">戻る</a>';
					}else{
						session_start();
						$_SESSION['login']=1;
						$_SESSION['owner_id']=$owner_id;
						$_SESSION['owner_pass']=$owner_pass;
						header('Location:estate_list.php');
						exit();
					}

				}catch(Exception $e){
					print 'ただいま障害により大変ご迷惑をお掛けしております。';
					exit();
				}



			 ?>









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
