<?php 
  session_start(); 
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>prototype</title>
  </head>
  <body>
    <canvas id="game">
      ERROR: canvas not supported.
    </canvas>
    <script src="js1_config.js"></script>
    <?php
      $SESSION["js_CONNECT"] = "NaN";
    ?>
  </body>
</html>
