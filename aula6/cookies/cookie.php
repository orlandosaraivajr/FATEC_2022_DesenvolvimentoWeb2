<?php
   # setcookie("nome", "Orlando Saraiva", time()+3600, "/","", 0);
   # setcookie("idade", "40", time()+3600, "/", "",  0);
   # setcookie("universidade", "Fatec");
?>
<html>
   
   <head>
      <title>Cookies com PHP</title>
   </head>
   
   <body>
      Funções para manipular cookies
      
      <br/>
      
      <?php
         echo $_COOKIE["nome"]. "<br />";
      ?>
   </body>   
</html>
