<?php ?><?php
$testa = $_POST['veio'];
if ($testa != "") {
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $realname = $_POST['realname'];
    $from = $_POST['from'];
    $to = $_POST['emaillist'];
    $headers = "MIME-Version: 1.0
";
    $headers.= "Content-type: text/html; charset=iso-8859-1
";
    $email = explode("
", $to);
    $headers.= "From: " . $realname . " <" . $from . ">
";
    $message = stripslashes($message);
    $i = 0;
    $count = 1;
    while ($email[$i]) {
        $ok = "ok";
        if (mail($email[$i], $subject, $message, $headers)) echo "* N: $count <b>" . $email[$i] . "</b> <font color=green>OK</font><br><hr>";
        else echo "* Num: $count <b>" . $email[$i] . "</b> <font color=red>ERROR</font><br><hr>";
        $i++;
        $count++;
    }
    $count--;
    if ($ok == "ok") echo "FIN";
}
?>
<html>
<head>
<title>-=MAILER-TND=-</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
	margin-left: 0;
	margin-right: 0;
	margin-top: 0;
	margin-bottom: 0;
}
.titulo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 70px;
	color: #000;
	font-weight: bold;
}

.normal {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

.form {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
	background-color: #FFFFFF;
	border: 1px dashed #666666;
}

.texto {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000;
}

.alerta {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #990000;
	font-size: 10px;
}
body,td,th {
	color: #000;
}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim">
  <table width="527" height="511" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="normal">
    <tr>
      <td width="525" height="25" align="center" bgcolor="#999999"><span class="titulo">
		<span style="font-size: 40pt"># TND-SenderV1 #</span></span></td>
    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#FFFFFF">
	  	<table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="444">
		  <tr>
            <td align="right" height="17"><span class="texto">De (E-Mail)/(Name) :</span></td>
            <td width="65%" height="17"> 
			<input name="from" value="<?php print $from; ?>" type="text" class="form" id="de" style="width:49%" size="1" ><input name="realname" type="text" class="form" id="realname" style="width:48%" value="<?php print $realname; ?>" size="1" > </td>
          </tr>
          <tr>
            <td align="right" height="17" style="color: #000">
			<span class="texto">Dir LI t7eeb :P :</span></td>
            <td width="65%" height="17" style="color: #000">
			<input name="replyto" type="text" class="form" id="realname0" style="width:48%" value="<?php print $replyto; ?>" size="1" > 
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
          <input type="file" name="file" size="11" /></font></td>
          </tr>
          <tr>
            <td align="right" height="17"><span class="texto">subject:</span></td>
            <td height="17">
			<input name="subject" type="text" class="form" id="subject" style="width:100%" value="<? print $subject; ?>" size="1" ></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="20" colspan="2" bgcolor="#999999"><span class="texto">Code HTML:</span></td>
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>
              <textarea name="message" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="html" cols="1"><?php print $message; ?></textarea>
              <span class="alerta">*Letter HTML</span></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="47" colspan="2" bgcolor="#FFCC00"><span class="texto">
		:P</span><p>
			<span class="texto"> TND SenderMailer V1 </span></td>
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
              <textarea name="emaillist" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="emaillist" cols="1"><?php print $emaillist; ?></textarea>
              <span class="alerta">*Email List !!</span> </td>
          </tr>
          <tr>
            <td height="26" align="right" valign="top" colspan="2">
			<input type="submit" value="Send eMails"></td>
          </tr>
        </table>
	  </td>
    </tr>
    <tr>
      <td height="15" align="center" bgcolor="#999999">&nbsp;</td>
    </tr>
  </table>
</form>
</body>

