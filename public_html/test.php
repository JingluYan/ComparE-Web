<?php

function db_connect() {
   $result = new mysqli('mysql', 'x1tt', '', 'x1tt');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}
?>
