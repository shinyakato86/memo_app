<?php

function getDatabaseConnection() {
  try
  {
    new PDO('mysql:dbname=simple_memo;host=localhost;charset=utf8','root','root');
  }
  catch (PDOException $e)
  {
    echo "DB接続に失敗しました。<br />";
    echo $e->getMessage();
    exit;
  }

  return $database_handler;
}

?>
