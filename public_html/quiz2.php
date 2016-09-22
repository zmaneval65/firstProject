<?php
$First = $_GET['FN'];
$Last = $_GET['LN'];
$password = $_GET['password'];
$mail = $_GET['email'];
$Sex = $_GET['sex'];
$Pay = $_GET['payment'];
if(empty($First) || empty($Last) || empty($password) || empty($mail) || empty($Sex) || empty($Pay)){
echo"<a href=\"javascript:history.go(-1)\">Fill out full form</a>";
}
else{
echo "First Name: ".$First."<br />";
echo"Last Name: ".$Last."<br />";
if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
echo "your email is valid"."<br />"."your email is ".$mail."<br />";
$at = strpos($mail, '@');
$dot = strpos($mail, '.');
$var = substr($mail, 0, $at);
$end = substr($mail,$at+1);
$dot2 = strpos($end, '.');
$var2 = substr($end, 0, $dot2);
$var3 = substr($mail,$dot+1);
echo $var."<br />";
echo $var2."<br />";
echo $var3."<br />";
echo $end."<br />";
}else{
echo"<a href=\"javascript:history.go(-1)\">incorrect email</a>"."<br />";
}
$salt = 'abc123';
echo md5($password, $salt)."<br />"."<br />";
echo $Sex."<br />"."<br />";
$food = $_GET['val'];
foreach($food as $value)
{
echo $value."<br />";
}
echo $Pay;
}

?>

