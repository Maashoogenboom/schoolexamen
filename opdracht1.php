<?php
    if( $_GET["name"] || $_GET["leeftijd"] || $_GET["Favorietegame"] ) {
        echo "Welkom". $_GET['name']. "<br />";
        echo "Je bent " . $_GET['leeftijd'] . " jaar oud, je favoriete game is" . $_GET['favorietegame'];
    exit();
}
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Leeftijd: <input type = "text" name = "Leeftijd" />
         Favorietegame: <input type = "text" name = "favorietegame" />
         <input type = "submit" />
      </form>
      
   </body>
</html>