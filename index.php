<?php
if($_GET['error'] == "no-info"){
    $errorText = "Please fill out the form";
}
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


                <p class="errorpanel"><?= $errorText ?></p>

                <form accept-charset="utf-8" method="POST" action="show.php" name="LOGINFORM">

                <br />
                <div style="width: 420px; text-align: center; margin-left: auto; margin-right: auto;">
                    <strong>This page will make you a URL for putting into a bookmark so you can login with one click.</strong>
                </div>

                <br />
                <div style="width: 420px; text-align: center; margin-left: auto; margin-right: auto;">

                <table style="width: 100%; margin-left: auto; margin-right: auto;">
                    <tr>
                        <td style="width: 120px; text-align: right;"><strong>Username:</strong></td>
                        <td style="text-align: left;"><input style="width: 200px;" type="text" name="USERNAME" value="" size="15" maxlength="255"></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Password:</strong></td>
                        <td style="text-align: left;"><input  style="width: 200px;" type="password" autocomplete="off" name="PASSWORD" size="15"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="ACTION" value="Login" class="gobutton">
                        </td>
                    </tr>
                </table>
                </div>




                <script type="text/javascript">
                <!--

                    document.LOGINFORM.USERNAME.focus();

                -->
                </script>
                </form>

            </div>
        <script src="assets/js/global.js"></script>
    </body>
</html>