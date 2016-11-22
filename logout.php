<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type ="text/javascript  " defer src="https://code.getmdl.io/1.2.1/material.min.js"> </script>
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<link rel="stylesheet" href="material.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css"> 


</head>
<body >
 <style type="text/css">
            #loader{
                    width: 100%;
                    height: 100%;
                    opacity: ;
                    position: fixed;
                    z-index: 1000;
                    top: 0;
                    left: 0;
                    background:black;
            }
            #loader_image{
                position: fixed;
                width: 50px;
                height: 25px;
                align-content: center;
                text-align: center;
                margin-top: 200px;
                margin-left: 600px;

            }
            #mob_text{
                 font-size: 20px;
                 color: white;
                 width:10%;
                 box-sizing: border-box;
                 padding: 20px;
                 position: relative;
                 text-align: center;
                 top:53%;
             }
        </style>
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
    setcookie(md5('q'),'',time()-3600,'/');
    setcookie('username','',time()-3600,'/');
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

	echo '<div id="loader">
        <div id="loader_image">
            <img src="Preloader_7.gif" width="290%" height="590%">
        </div>
</div>';

	echo "<meta http-equiv=\"refresh\" content=\"3;URL=home_alt.html\" />";
?>

<script type="text/javascript">
   $(document).ready(function(){
   $('#loader').delay(200).fadeOut(30000);
   });
            
</script>
   



</body>
</html>
