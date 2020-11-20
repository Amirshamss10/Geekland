<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"> 
    <title>text hash</title> 
    <style>
        body{
            background-color:yellow; 
        }
        h1{
            text-align:center ;
            color:green;
        } 
        form{
            text-align: center;
        }
        p{
            text-align: center; 
            line-height: 20px; 
            font: 18px tahoma;
            color: blue;
        }
        </style>
</head>
<body>
    <h1>welcom to our service</h1>
    <form action="" method="post">
        <input type="text" name="text" placeholder="text">
        <input type="submit" name="submit" value="send">
    </form>
    <?php 
  if(isset($_POST["submit"])) { 
      $hash_admin = "2918157391eb2f1b4088692b81f2b0913781777c4051fa44b32ee878df887779"; //hash username admin! @AmirShamss
      $text = strip_tags($_POST["text"]);   
      if(hash('sha256',$text) == $hash_admin) {
          echo("welcom to our admin")."<br/>";
          echo("text:".$text)."<br/>";
        } else {
            echo("<p>hash:\t".hash('sha256',$text)."</p>")."<br/>";
            echo("<p>text: $text</p>");
        }
    } 
    ?>
  </body>
  </html>
  
