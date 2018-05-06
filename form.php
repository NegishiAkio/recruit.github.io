<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>採用フォーム</title>
</head>
<body>
  <form action="form_finish.php" method="post">
<?php

$_SESSION['name'] = htmlspecialchars($_POST['name']);
$_SESSION['mail'] = htmlspecialchars($_POST['mail']);
$_SESSION['textarea'] = htmlspecialchars($_POST['textarea']);

//nameの中が空じゃなかったら名前を表示
if(!empty($_POST['name'])){
  $name = htmlspecialchars($_POST['name']);
  echo $name . "さんこんにちは" . "<br />" ;
}else{
  //nameの中が空だったらRECRUITフォームへ戻る
  echo "名前をフルネームで入力してください" . "<br />";
}

if(!empty($_POST['mail'])){
  $mail = htmlspecialchars($_POST['mail']);
  echo "「" .$mail."」" ."でよろしいですか?" . "<br />";
}else{
  //nameの中が空だったらRECRUITフォームへ戻る
  echo "メールアドレスを入力してください(ケータイでのアドレスは受け付けておりません" . "<br />";
}

if(!empty($_POST['textarea'])){
  $text = htmlspecialchars($_POST['textarea']);
  echo $text . "<br />";
}else{
  //nameの中が空だったらRECRUITフォームへ戻る
  echo "内容はありませんがよろしいですか？" . "<br />";
}

?>
<input type="submit" value="送信を完了する" />
</form>
<a href="https://recruitform.herokuapp.com/index.html">戻る</a>

</body>
</html>
