<?php 
  abstract class user_info
  {
    abstract protected function showMessage();
  }
  class login extends user_info
  {
    public function showMessage()
    {
      date_default_timezone_set("Asia/Tehran");
      echo("<h1>".'welcom to our server'."</h1>");
      echo(date("D M d h:i:s o")).PHP_EOL;
      echo("ip:\t". $_SERVER["REMOTE_ADDR"]).PHP_EOL;
    }
  }
  $user = new login();
  $user -> showMessage();
?>
