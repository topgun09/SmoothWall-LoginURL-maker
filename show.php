<?php
//SmoothWall Login to data URL

$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];

if(!$username or $password == ""){
    header('Location: ../bookmark/?error=no-info');
}else{

$js = 'document.body.innerHTML = \'<h1>Loading...</h1><form style="display:none" id="loginform" accept-charset="utf-8" method="POST" action="https://ls.zebras.net:442/login" name="LOGINFORM"> <input type="text" name="USERNAME" value="'.$username.'" size="15" maxlength="255"><input type="password" name="PASSWORD" size="15" value="'.$password.'"> <input type="submit" name="ACTION"> </form>\'; document.getElementById("loginform").submit();';

$jsOut = 'console.log("Sending login data");eval(atob("'.base64_encode($js).'"))';
$htmlOut = "<body></body><script>".$jsOut."</script>";
$base64out = base64_encode($htmlOut);

$url = "data:text/html;base64,".$base64out;
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>SmoothWall Bookmark Maker</title>

        <link href="favicon.ico" rel="shortcut icon">

        <link rel="stylesheet" href="assets/css/global.css">
        
    </head>
    <body>
            <div class="user_message" style="background-image: url('assets/images/side.jpg');">
                <div class="title_image">
                    <img style='max-width:250px' src="assets/images/logo.gif">
                </div>

                <div>

                    <br />
                    <div style="width: 420px; margin-left: auto; margin-right: auto;">

                        <p>
                            Your bookmark URL is ready.
                            <br>
                            Just copy it into a bookmark's address input!
                        </p>
                                
                        <p>  
                            <textarea style="max-width: 100%" rows="9" cols="50" readonly><?= $url ?></textarea>
                        </p>
                        
                        <div style="text-align:center;margin-right:auto;margin-left:auto;padding-top:50px;">
                            <button onclick="document.location='../bookmark/';">Back</button>
                        </div>
                            
                    </div>
                    
                </div>
	       </div>
    </body>
</html>
<?php } ?>