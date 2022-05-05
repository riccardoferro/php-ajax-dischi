<?php

include("data/apiDischi.php");

// echo($dischi);

foreach ($dischi as $album) {
  echo("<p>");
  foreach ($album as $key => $value) {

    if ($key == "poster") {

       echo("<br>");
       echo("<img src='$value'>");
       echo("<br>");
    }
    else {
      echo("<br>");
      echo($value);
      echo("<br>");

    }
  }
  echo("</p>");

}


?>