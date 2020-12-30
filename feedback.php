<?php
  mail("missupport@yopmail.com", join(array("From ", $_POST["name"])), $_POST["content"])
?>
