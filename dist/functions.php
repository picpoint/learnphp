<?php


if(isset($_GET["name"])) {
  $name = $_GET["name"];    
  echo("Hello $name");
} else {
  echo("Hello undefined");
}

