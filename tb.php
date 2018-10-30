<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor="#DA70D6">
  <h1>欢迎来到咖啡屋图书馆</h1>
  <form action="tb.php" method="post">
    <table>
<tr>
<td>用户名</td>
<td><input type="text" name="id"></td>
</tr>
<tr>
<td>密码</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td><input type="submit" value="登录"></td>
<td><a href="zc.php">注册</a></td>
</tr>

    </table>
  </body>
</html>

<?php
header("Content-Type:text/html;charset=utf-8");
$mysqli =new mysqli('localhost','root','root','new');
$mysqli->set_charset('utf-8');
@$f=$_POST['id'];
@$g=$_POST['password'];
if(!$f || !$g){
  echo "请填写完整";
  exit;
}
else{
  $n=$mysqli->query("select password from zc where id='$f'");
  $m=$n->fetch_assoc();
  if($m['password']==$g){
    echo "登陆成功";
  }
  else {
    echo "登录失败";
    exit;
  }
}

?>
