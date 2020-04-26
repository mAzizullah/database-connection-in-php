<?php
  con = new MySqli_connect("localhost", "root", "", "db");
  if(con){
    echo "Connected !";
  }else{
    echo "Not Connected, Cause a problem !";
  }

?>
