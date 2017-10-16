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
	$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
	$user='root';
	$password='';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql='SELECT lastname,firstname,post1,post2,address,tel1,tel2,tel3,fax1,fax2,fax3,cell1,cell2,cell3,email FROM owner WHERE code=1';
	$stmt=$dbh->prepare($sql);
	$stmt->execute();

	$rec=$stmt->fetch(PDO::FETCH_ASSOC);

	$lastname=$rec['lastname'];
	$firstname=$rec['firstname'];
	$post1=$rec['post1'];
	$post2=$rec['post2'];
	$address=$rec['address'];
	$tel1=$rec['tel1'];
	$tel2=$rec['tel2'];
	$tel3=$rec['tel3'];
	$fax1=$rec['fax1'];
	$fax2=$rec['fax2'];
	$fax3=$rec['fax3'];
	$cell1=$rec['cell1'];
	$cell2=$rec['cell2'];
	$cell3=$rec['cell3'];
	$email=$rec['email'];

	$dbh=null;




	 ?>




	<div class="boxA">

	  <!--トップ-->
	      <div class="boxA-inner">
	      <div class="box1">
	        <div class="site">
	          <h1><a href="top.html"><img src="image/img/logo.png"></a></h1>
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


			<h3>オーナー様情報</h3>
			<span>お 名 前</span><span style="margin-left:8px;">：</span><?php print $lastname; print "　"; print $firstname; ?></span><br>


			<p><span>ご 住 所</span><span style="margin-left:8px;">：</span>〒<?php print $post1; ?></span> - <span><?php  print $post2; ?></span>
			<span style="margin-left:15px;"><?php print $address; ?></span></p>

			<p>
				<span>電話番号</span><span>：</span>
				<?php print $tel1; ?> - <?php print $tel2; ?> - <?php print $tel3; ?>
			</p>

			<p>
				<span>Ｆ Ａ Ｘ</span><span style="margin-left:8px;">：</span>
				<?php print $fax1; ?> - <?php print $fax2; ?> - <?php print $fax3; ?>
			</p>

			<p>
				<span>携帯電話</span><span>：</span>
				<?php print $cell1; ?> - <?php print $cell2; ?> - <?php print $cell3; ?>
			</p>


			<p>
				<span>E m a i l</span><span style="margin-left:8px;">：</span>
				<?php print $email; ?>
			</p>
			<br>


						<table>
								<?php
								print '<form method="post" action="owner_edit.php">';
								print '<input type="hidden" name="lastname" value="'.$lastname.'">';
								print '<input type="hidden" name="firstname" value="'.$firstname.'">';
								print '<input type="hidden" name="post1" value="'.$post1.'">';
								print '<input type="hidden" name="post2" value="'.$post2.'">';
								print '<input type="hidden" name="address" value="'.$address.'">';
								print '<input type="hidden" name="tel1" value="'.$tel1.'">';
								print '<input type="hidden" name="tel2" value="'.$tel2.'">';
								print '<input type="hidden" name="tel3" value="'.$tel3.'">';
								print '<input type="hidden" name="fax1" value="'.$fax1.'">';
								print '<input type="hidden" name="fax2" value="'.$fax2.'">';
								print '<input type="hidden" name="fax3" value="'.$fax3.'">';
								print '<input type="hidden" name="cell1" value="'.$cell1.'">';
								print '<input type="hidden" name="cell2" value="'.$cell2.'">';
								print '<input type="hidden" name="cell3" value="'.$cell3.'">';
								print '<input type="hidden" name="email" value="'.$email.'">';
								print  '<tr>';
				      	print '<td><input type="button" onclick="history.back()" value="戻る" style="margin-right:15px;"></td>';
				      	print '<td><input type="submit" value="修正する"></td>';
				        print '</tr>';
				      	print '</form>';
								?>
						</table>


						 </div>

			</form>

<div class="box6">
	<div class="box6-inner">
	<div class="copyright">
		<p>Copyright &copy; enjoy</p>
	</div>
	</div>
</div>


</body>
</html>
