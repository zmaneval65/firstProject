<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title> PHP Email</title>
<link rel = "stylesheet" href="php_styles.css" type = "text/css" />
</head>
<body>
<?php
function validateSender($Address){
if(strpos($Address, '@') !== FALSE && strpos($Address, '.') !== FALSE){
return true;
}
else if(validateSender($_GET['sender_email']) == false){
echo "the senders email address does appear to be calid click your browsers back button to return to the message.";
}
else{
return false;
}
}
function validateRecipients($Addresses){
$Address = explode(",", $Addresses);
$RetValue = true;
foreach($Address as $Email){
if(strpos($Email, '@') !== FALSE && strpos($Email, '.') !== FALSE)
	$RetValue = true;
else{
$RetValue = false;
break;
}
}
return $RetValue;
}
function checkForDuplicates($Addresses){
$address = explode(",", $Addresses);
$count = count($Address);
$RetValue = false;
$i = 0;
while($i<$count){
$j = 0;
while($j<$count){
if(strcasecmp($Address[$i], $Address[$j])== 0 && $i != $j)
	$RetValue = true;
++$j;
}
++$i;
}
return $RetValue;
}
$From = "{$_GET['sender_name']} <{$_GET['sender_email']}>";
$to = str_replace("\r\n", ",", $_GET['to']);
$Subject = $_GET['subject'];
$Message = $_GET['message'];
$CC = str_replace("\r\n", ",", $_GET['cc']);
$BCC = str_replace("\r\n", ",", $_GET['bcc']);
$Headers = "From: $From\r\n";
$Headers .="MIME-Version: 1.0\r\n";
$Headers .="Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
$Headers .= "Content-Transfer-Encoding: 8bit\r\n";
$Headers .="CC: $CC\r\n";
$Headers .="BCC: $BCC\r\n";
$MessageSent = mail($to, $Subject, $Message, $Headers);
$MessageSent = true;
if( empty($_GET['sender_name']) || empty($_GET['sender_email']) || empty($_GET['to']) || empty($_GET['subject']) || empty($_GET['message']))
{echo"<p>you must enter something into all fields to send the email</p>";}
else if(validateRecipients($to) == false)
 {echo"<p>One or more ofthe \"to\" email addresses is not valid. click the back button t    o fix.</p>";}
 else if(isset($GET['cc']) && validateRecipients($CC) == false)
{echo"<p>one or more of the cc addresses are not valid. click the back button to fix</p
    >";}
else if(isset($GET['bcc']) && $validateRecipients($BCC) == false)
 {echo"<p>one of the bcc addresses are not balic. click the back button to fix</p>";}
else if(checkForDuplicates($to) == true)
{echo"<p>the to email address contain duplicates.</p>";}
else if(checkForDuplicates($CC) == true)
{echo"<p>the cc email address contain duplicates.</p>";}
 else if(checkForDuplicates($BCC) == true)
{echo"<p>the BCC email address contain duplicates.</p>";}
else if($MessageSent){
echo"<p><strong>from</strong>: $From</p>";
echo"<p><strong>To</strong>: $to</p>";
echo"<p><strong>Sucject</strong>: $Subject</p>";
echo"<p><strong>Message</strong>: $Message</p>";
echo"<p><strong>CC</strong>: $CC</p>";
echo"<p><strong>BCC</strong>: $BCC</p>";
}
else{
echo"<p>The message was not sent successfully</p>";
}

?>
<hr /><p><a href = "PHPEmail.html">return to email form</a></p>
</body>
</html>

