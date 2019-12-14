<?php
define('DB_SERVER','sql109.byetcluster.com');
define('DB_USER','epiz_24882427');
define('DB_PASS' ,'e9QOO31cj1WZfn');
define('DB_NAME', 'epiz_24882427_shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>