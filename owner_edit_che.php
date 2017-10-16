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
	$lastName=$_POST['lastname'];
	$firstName=$_POST['firstname'];
	$post1=$_POST['post1'];
	$post2=$_POST['post2'];
	$address=$_POST['addresss'];
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


			<h3>オーナー様の情報</h3>
			<span>お 名 前</span><span style="margin-left:8px;">：</span><?php print $lastName; print "　"; print $firstName; ?></span><br>


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

			<p>
				<span>Ｉ Ｄ</span><span style="margin-left:8px;">：</span>
				<?php print $ID; ?>
			</p>

			<p>
				<span>パスワードは表示されません。</span>
			</p>
			<br>


						<table>
								<?php
								print  '<h3>上記で修正します。</h3>';
								print '<form method="post" action="owner_edit_do.php">';
								print '<input type="hidden" name="lastname" value="'.$lastName.'">';
								print '<input type="hidden" name="firstname" value="'.$firstName.'">';
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
								print '<input type="hidden" name="id" value="'.$ID.'">';
								print '<input type="hidden" name="pass" value="'.$pass.'">';
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
