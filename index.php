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
            padding:11px; 
            font-size:20px;
        }
        a{
            text-decoration:none!important;
        }
        p{
            text-align: center; 
            line-height: 20px; 
            font: 18px tahoma;
            line-height : 0px;
            color: #008080;
        } 
        input{
            width: 30%;
            padding: 10px 10px;
            margin: 10px 0;
            display: inline-block;
            border: 3px solid #ccc;
            border-radius: 30px;
        }
        input#sender{
            color: green;            
        }
        p#owner{
            color: green;
        }
        </style>
</head>
<body>
    <h1>welcom to our service</h1>
    <form action=""  method="post">
        <input type="text" name="text" placeholder="Writing..."><br>
        <input id=sender type="submit" name="submit" value="send">
    </form>
    <?php 
  if(isset($_POST["submit"])) { 
      $hash_admin = "2918157391eb2f1b4088692b81f2b0913781777c4051fa44b32ee878df887779"; //hash username admin! @AmirShamss
      $text = strip_tags($_POST["text"]);   
      if(hash('sha256',$text) == $hash_admin) {
          echo("<p>welcom to our admin</p>")."<br/>";
          echo("<p>text:".$text."</p>")."<br/>";
        } else {
            echo("<p>".hash('sha256',$text)."</p>")."<br/>";
            echo("<p>text: $text</p>");
        } 
    } else {
        echo "<p id='owner'><a href='https://telegram.me/userlandApp'>ساخته شده توسط یوزرلند</p>";
    } 
    
    ?>
 
</body>
  </html>
   
