<?php
	setcookie(md5('p'),'',time()-3600,'/');
	setcookie(md5('d'),'',time()-3600,'/');
	setcookie(md5('s'),'',time()-3600,'/');
	setcookie('usernamedoc','',time()-3600,'/');
	setcookie('userpassdoc','',time()-3600,'/');
	setcookie('usernamepharm','',time()-3600,'/');
	setcookie('userpasspharm','',time()-3600,'/');
	setcookie('usernamepat','',time()-3600,'/');
	setcookie('userpasspat','',time()-3600,'/');
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

	echo "<center>YOU HAVE BEEN LOGGED OUT.<br>Redirecting you back to Login Page....</center>";
	echo "<meta http-equiv=\"refresh\" content=\"3;URL=home_alt.html\" />";
?>