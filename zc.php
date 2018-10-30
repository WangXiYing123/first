<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="zc.php" method="post">
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
    <td>密码</td>
    <td><input type="password" name="psw"></td>
    </tr>
    <tr>
    <td><input type="submit" value="点击注册"></td>
  </tr>
</form>
  </table>
  </body>
</html>
<?php
header("Content-Type:text/html;charset=utf-8");
$mysqli =new mysqli('localhost','root','root','new');
$mysqli->set_charset('utf-8');
@$a=$_POST['id'];
@$b=$_POST['password'];
@$c=$_POST['psw'];
if($a && $b && $c){
  $mysqli->query("insert into zc(id,password) values('$a','$b')");
}
else{
  echo "请确认填写完整";
}
if($a==$b){
  $mysqli->query("insert into zc(id,password) values('$a','$b')");
}
else{
  echo "密码不一致";
}
