<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>deltoon</title>
  </head>
  <body>
  <?php
  class login
  {
    public function __construct()
    {
      date_default_timezone_set("Asia/Tehran");
      echo("<h1>".'welcom to our server'."</h1>");
      echo(date("D M d h:i:s o"))."<br/>";
      echo("ip:\t". $_SERVER["REMOTE_ADDR"])."<br/>";
      echo("browser information:\t". $_SERVER["HTTP_USER_AGENT"])."<br/>";
    }
  }
  $user = new login();
  ?>
  </body>
</html>

