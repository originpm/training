<?php
echo "Hello there from OpenShift";

echo "<br>";
echo "<br>";
echo "This is my ip:".$_SERVER['SERVER_ADDR'] ;
echo "<br>";
echo "<br>";
echo "forwarded from:".$_SERVER['HTTP_X_FORWARDED_FOR'];
?>
