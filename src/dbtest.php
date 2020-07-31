<?php
$dbhost = getenv ("MYSQL_SERVICE_HOST");
$dbport = getenv ("MYSQL_SERVICE_PORT");
$dbuser = 'root';
$dbpwd  = getenv ("MYSQL_ROOT_PASSWORD");
$dbpwd  = getenv ("MYSQL_DATABASE");

$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);

if (!$connection) {
        echo "could not connect to database";
} else {
        echo "connected to database. <br>" ;
}

$dbconnection = mysql_select_db ($dbname);

$query = "SELECT * from users";

$rs = mysql_query($query);
while ($row = mysql_fetch_assoc($rs)) {
        echo $row['user_id']." ".$row['username']."\n";
}

mysql_close ();
