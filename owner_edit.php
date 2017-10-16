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

			<form method="post" action="owner_edit_che.php" enctype="multipart/form-data" id="estate">

			<h3>オーナー様の情報</h3>
			<span>お名前：<input type="text" name="lastname" placeholder="名字を入力して下さい" value="<?php echo $lastName; ?>" style="width:100px;font-size:15px;"></span><span style="margin-left:10px;" ><input type="text" name="firstname" placeholder="名前を入力して下さい" value="<?php echo $firstName;?>" style="width:100px;font-size:15px;"></span><br>


			<p><span>ご住所：〒<input type="text" name="post1" style="width:35px;font-size:15px;" value="<?php echo $post1;?>"></span> - <span><input type="text" name="post2" style="width:45px;font-size:15px;" value="<?php echo $post2;?>"></span>
			<input type="text" name="addresss" style="margin-left:10px;width:500px;font-size:15px;" placeholder="都道府県を入力" value="<?php echo $address;?>"></p>

			<p>
				<span>電話番号：</span>
				<input type="text" name="tel1" placeholder="市外局番" style="width:70px;font-size:15px;" value="<?php echo $tel1;?>"> - <input type="text" name="tel2" placeholder="" style="width:100px;font-size:15px;" value="<?php echo $tel2;?>"> -
				<input type="text" name="tel3" placeholder="" style="width:100px;font-size:15px;" value="<?php echo $tel3;?>">
			</p>

			<p>
				<span>FAX：</span>
				<input type="text" name="fax1" placeholder="市外局番" style="width:70px;font-size:15px;" value="<?php echo $fax1;?>"> - <input type="text" name="fax2" placeholder="" style="width:100px;font-size:15px;" value="<?php echo $fax2;?>"> -
				<input type="text" name="fax3" placeholder="" style="width:100px;font-size:15px;" value="<?php echo $fax3;?>">
			</p>

			<p>
				<span>携帯電話：</span>
				<input type="text" name="cell1" placeholder="" style="width:70px;font-size:15px;" value="<?php echo $cell1;?>"> - <input type="text" name="cell2" placeholder="" style="width:100px;font-size:15px;" value="<?php echo $cell2;?>"> -
				<input type="text" name="cell3" placeholder="" style="width:100px;font-size:15px;" value="<?php echo $cell3;?>">
			</p>


			<p>
				<span>email：</span>
				<input type="text" name="email" placeholder="emailアドレス" style="width:500px;font-size:15px;" value="<?php echo $email;?>">
			</p>

			<p>
				<span>ID：</span>
				<input type="text" name="id" style="width:200px;font-size:15px;" placeholder="idを入力して下さい。">
			</p>

			<p>
				<span>PASSWORD：</span>
				<input type="password" name="pass" style="width:200px;font-size:15px;" placeholder="パスワードを入力して下さい。" >
			</p>


						<table>
							<tr>
								<td><input type="button" onclick="history.back()" value="戻る" ></td>
								<td><input type="submit" value="確認する"></td>
							</tr>
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
