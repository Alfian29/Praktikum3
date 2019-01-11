<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="logbox">
<h1>Login</h1>
  <form action="login.php" method="post">
  <p><input type="text" name="nis" value="" placeholder="Masukkan NIS anda..."></p>
  <p><input type="password" name="password" value="" placeholder="Masukkan Password anda..."></p>
  <p class="submit"><input type="submit" name="commit" value="Login" id="sub"></p>
  </form>
  <MARQUEE align="center" direction="left" height="130" scrollamount="10" width="100%">
        <?php 
        if(isset($_GET["error"])){
            if($_GET["error"] == "wrong"){
            echo "<h3>NIS atau password salah!</h3>";
        }
    }
        ?>
      </MARQUEE>
        </div>
    </body>
</html>