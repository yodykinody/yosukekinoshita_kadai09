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

			<form method="post" action="owner_add_che.php" enctype="multipart/form-data" id="estate">

			<h3>オーナー様の情報をご登録下さい。</h3>
			<span>お名前：<input type="text" name="lastname" placeholder="名字を入力して下さい"></span><span style="margin-left:10px;" ><input type="text" name="firstname" placeholder="名前を入力して下さい"></span><br>


			<p><span>ご住所：〒<input type="text" name="post1" style="width:35px"></span> - <span><input type="text" name="post2" style="width:45px;"></span>
			<input type="text" name="addresss" style="margin-left:10px;width:300px;" placeholder="都道府県を入力"></p>

			<p>
				<span>電話番号：</span>
				<input type="text" name="tel1" placeholder="市外局番" style="width:70px;font-size:15px;"> - <input type="text" name="tel2" placeholder="" style="width:100px;font-size:15px;"> - <input type="text" name="tel3" placeholder="" style="width:100px;font-size:15px;">
			</p>

			<p>
				<span>FAX：</span>
				<input type="text" name="fax1" placeholder="市外局番" style="width:70px;font-size:15px;"> - <input type="text" name="fax2" placeholder="" style="width:100px;font-size:15px;"> - <input type="text" name="fax3" placeholder="" style="width:100px;font-size:15px;">
			</p>

			<p>
				<span>携帯電話：</span>
				<input type="text" name="cell1" placeholder="" style="width:70px;font-size:15px;"> - <input type="text" name="cell2" placeholder="" style="width:100px;font-size:15px;"> - <input type="text" name="cell3" placeholder="" style="width:100px;font-size:15px;">
			</p>

			<p>
				<span>email：</span>
				<input type="text" name="email" placeholder="emailアドレス" style="width:200px;font-size:15px;">
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
