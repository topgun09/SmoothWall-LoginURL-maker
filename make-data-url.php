<?php
//SmoothWall Login to data URL

$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];

$js = 'document.body.innerHTML = \'<h1>Loading...</h1><form style="display:none" id="loginform" accept-charset="utf-8" method="POST" action="https://ls.zebras.net:442/login" name="LOGINFORM"> <input type="text" name="USERNAME" value="'.$username.'" size="15" maxlength="255"><input type="password" name="PASSWORD" size="15" value="'.$password.'"> <input type="submit" name="ACTION"> </form>\'; document.getElementById("loginform").submit();';

$jsOut = 'console.log("Sending login data");eval(atob("'.base64_encode($js).'"))';
$htmlOut = "<body></body><script>".$jsOut."</script>";
$base64out = base64_encode($htmlOut);
echo "data:text/html;base64,".$base64out;
?>