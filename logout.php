<?php
require 'core.php';
session_destroy();                      // can also write header('Location: index.php');
header('Location:index.php');     //takes back to index page tocheck
?>