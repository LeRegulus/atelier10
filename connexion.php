<?php
require_once 'env.php';

try {
  $conn = new PDO("mysql:host=$server;dbname=$bd", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection établie ! \n";

} catch(PDOException $e) {
  echo $sql . "\n" . $e->getMessage();
}

?>