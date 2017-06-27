<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>FEEDBACK_PHP</title>
  <style>
  .btn{
  background-color:white;
  border:none;
  font-size:0.9em;
  font-weight:bold;
  color:#2196f3;
  padding:0.5em 1.4em;
  border-radius:5%;
  position:absolute;
  bottom:1em;
  }
  .textarea{
	background-color:#2196f3;
	border-left:none;
	border-right:none;
	border-top:none;
	border-bottom:1px solid white;
	color:pink;
	padding-bottom:15%;
}
  </style>
</head>

<body style="background-color=transparent">
<form action="" method="post">
<b style="color:white;font-size:small;">编辑框:</b><br/>
<textarea name="var" class="textarea"></textarea><br/>
<input type="submit" onclick="return confirm('确认要提交了嘛？');" value="提交"  class="btn"/>
</form>
<?php 
$text = $_POST['var'];
file_put_contents('Msg.txt',$text);
?>

</body>
</html>
