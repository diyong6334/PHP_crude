<?php

  $server = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'crude';

  $link = mysqli_connect($server, $username, $password);

  if (!$link)
  {
      die('Connection failed:'. mysqli_connect_error());
  }

  else
  {
    $dbselect = mysqli_select_db($link,$database);

    if (!$dbselect)
    {
      echo "$database Database is not selected <br>";
    }
  }

?>