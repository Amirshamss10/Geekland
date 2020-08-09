<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>deltoon</title>
  </head>
  <body>
  <?php
  abstract class index
  {
    protected $ip;
    protected $header;
    protected $date;
    abstract protected function save_info();
  }
  class show_info extends index
  {
    public function save_info()
    {
      date_default_timezone_set("Asia/Tehran");
      $this -> date = date("D M d h:i:s o");
      $this -> ip = $_SERVER["REMOTE_ADDR"];
      $this -> header = $_SERVER["HTTP_USER_AGENT"];
      file_put_contents("user.txt","$this->ip \n $this->header \n $this->date \n-----------------",FILE_APPEND);
    }
    public function __construct()
    {
      $this -> save_info();
      echo("<h1>".'welcom to our server'."</h1>");
      echo($this -> date)."<br/>";
      echo("ip:\t". $this -> ip)."<br/>";
      echo("browser information:\t". $this -> header)."<br/>";
    }
  }
  $user = new show_info();
  ?>
  </body>
</html>


