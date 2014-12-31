<html lang="ES">
<head>
  <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta http-equiv="Refresh" content="1800; url=http://www.smart-ideas.com.co/videowatch2.php">
  <meta name="robots" content="noarchive" />
  <meta name="googlebot" content="nosnippet" />
  <meta http-equiv="Refresh" content="1800; url=http://www.smart-ideas.com.co/videowatch2.php">

  <link rel="shortcut icon" href="img/favicon.ico"/>
  <link rel=author href="https://plus.google.com/+AndresOspinaCO/posts"/>
  
  <!-- Style -->
  <link rel=stylesheet type="text/css" href="css/normalize.css"/>
  <link rel=stylesheet type="text/css" href="css/streaming.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>  
    <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- OG tags -->
    <meta property=og:image content="img/fb-smart.jpg"/>

  <title>Seleciona la sala tu streaming | Smart Ideas</title>
</head>


<?php
if($_POST['pass'])
{
  $_SESSION['passvideowatch913inx0'] = $_POST['pass'];
}
if($_SESSION['passvideowatch913inx0'])
{
     include 'db2.inc';    
     $conn = mysql_connect($hostName,$username,$password);
if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}  
if (!mysql_select_db("smartide_clientes")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}
$pass = $_SESSION['passvideowatch913inx0'];

$sql = "SELECT passvideo FROM admin where passvideo = '$pass' ";

$result = mysql_query($sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "";  
   ?>

   
<div class="contenedor">
  <h1><img src="img/logo-smart-blanco.svg" alt="Logo Smart Ideas"></h1>
    <h2>Streaming</h2>
    <h4>Esta contraseña no es válida<br> comunícate con info@smart-ideas.com.co</h4>
  <form action="live.php" method="post">
      <input name="pass" type="password" placeholder="Introduce tu contraseña" />
      <input type="submit" name="button" id="button" value="ENTRAR">
  </form>
</div>

<?php
   }
else {
  ?>

<!-- Streaming CeHis     -->
<div class="contenedor-streaming">
      <h1 style="margin-top:1em"><img src="img/logo-smart-blanco.svg" alt="Logo Smart Ideas"></h1>
      <iframe id="con-chat" src="http://cehis.net/rep-clientes/smartideas/player/index.html" width="1000" height="390" frameborder="0" scrolling="no"></iframe>
      <iframe id="sin-chat"src="http://cehis.net/rep-clientes/smartideas/player/player.html" width="540" height="330" frameborder="0" scrolling="no"></iframe>
</div>
<!-- Fin codigo CeHis/net -->

<footer>
    <div class="contenedor-streaming">
    <small>Dirección: Cra 28 No 83 - 64 Bogotá, Colombia | informacion@smart-ideas.com.co <br>Tel: (+57 1) 533 38 29 - 6750777 - (+57) 3132184318 
    <br>© Copyright Smart Ideas 2014 | Diseño y desarrollo  <a href="http://cerotradicional.com"> CeroTradicional.com</a></small>
    </div>
</footer>

<?php
   exit;
  }
}
else
{
?>

<div class="contenedor">
  <h1><img src="img/logo-smart-blanco.svg" alt="Logo Smart Ideas"></h1>
    <h2>Streaming</h2>
  <form action="live.php" method="post">
      <input name="pass" type="password" placeholder="Introduce tu contraseña" />
      <input type="submit" name="button" id="button" value="ENTRAR">
  </form>
</div>
<?php
}
?>
</html>

