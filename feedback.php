<?php
  if (isset($_POST["name"]) && isset($_POST["message"])) {
    echo "Thanks for your feedback on Mission In Snowdriftland.";  
  } else {
    echo "This endpoint only supports the POST method.";
  }
?>
