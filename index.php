<?php $c = curl_init(); curl_setopt($c , CURLOPT_URL , "http://domain2.ir/newp/WebService.php"); curl_setopt($c , CURLOPT_POST , true); curl_setopt($c , CURLOPT_POSTFIELDS , "name=ali&family=asadi"); $result = curl_exec($c); curl_close($c); ?>



