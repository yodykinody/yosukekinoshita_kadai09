<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="detail3.css">
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

	<?php

	try{

	$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
	$user='root';
	$password='';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql='SELECT code,post1,post2,address,yachin,menseki,kozo,timedate FROM owner';
	$stmt=$dbh->prepare($sql);
	$stmt->execute();


	$dbh=null;

	print '';

	print '<form method="post" action="real_branch.php">';

	while(true){
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);

		if($rec==false){
			break;
		}
		print '<input type="radio" name="realcode" value="'.$rec['code'].'">';
		print '〒'.$rec['post1'].'-'.$rec['post2'].'　　';
		print $rec['address'].'　　';
		print $rec['yachin'].'万円　　';
		print $rec['menseki'].'㎡　　';
		print $rec['kozo'].'造　　';
		print $rec['timedate'];
		print '<br>';
	}

  print '<div class="select">';
	print '<input type="submit" name="shinki" value="新規">';
	print '<input type="submit" name="disp" value="参照">';
	print '<input type="submit" name="edit" value="修正">';
	print '<input type="submit" name="delete" value="削除">';
	print '</form>';
	print '</div>';
}
	catch(Exception $e){
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
