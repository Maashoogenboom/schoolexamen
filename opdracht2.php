<?php
    if ($_GET["Seconden"] || $_GET["minuten"] || $_GET["uren"] ) {
        $tijd = ($_GET["uren"] * 3600)+($_GET["minuten"]*60) + $_GET["Seconden"];
     echo $_GET["Seconden"]. "seconden" .$_GET["minuten"]. "minuten" .$_GET["uren"]. "uren is" .$tijd. "seconden" ;
    }
?>    
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Sec: <input type = "Number" name = "Seconden" />
         Min: <input type = "Number" name = "minuten" />
         Uur: <input type = "Number" name = "uren" />
         <input type = "submit" />
      </form>
      
   </body>
</html>