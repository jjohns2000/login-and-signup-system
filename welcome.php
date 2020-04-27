<?php
  session_start();
  if($_SESSION['uname']==null)
  {
    echo "PLEASE LOGIN ";
  }
  else
  {
    echo "hi there  ".$_SESSION['uname'];
  }
?>
<br>
<a href="logout.php">LOGOUT</a>
<!-- this is a simple welcome page with message to show usage of SESSION variable , and the logout feature -->
