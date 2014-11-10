<?php

function db_connect() {
   $result = new mysqli('localhost', 'root', '', 'compare');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
