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
            width: 100%;
            padding: 20px 5px;
            margin: 10px 0;
            display: inline-block;
            border: 3px solid #ccc;
            border-radius: 30px;
        }
       
        </style>
</head>
<body>
    <h1>welcom to our service</h1>
    <form action=""  method="post">
        <input type="text" name="text" placeholder="Writing..."><br>
        <input  type="submit" name="submit" value="send" style=color:green>
    </form>
    <?php 
  if(isset($_POST["submit"])) { 
      $hash_admin = "a35ccd0e00d0b739d14fc11ffaf32b72b0f352654e414611909b0230905e622f"; //hash username admin! @UserlandApp
      $text = strip_tags($_POST["text"]);   
      if(hash('sha256',$text) == $hash_admin) {
          echo("<script>alert('Hello world!join @py_group')</script>")."<br/>";
        } else {
            echo("<p>".hash('sha256',$text)."</p>")."<br/>";
            echo("<p>text: $text</p>");
        } 
    } else {
        echo "<p id='owner'><a href='https://telegram.me/userlandApp' style=color:gray>ساخته شده توسط یوزرلند</p>";
    } 
    
    ?>
 
</body>
  </html>
