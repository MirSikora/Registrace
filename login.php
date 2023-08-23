<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "f171325";

    if (!($con = mysqli_connect($host,$user,$password,$db)))
{
	die("Nelze se připojit k databázovému serveru!</body></html>");
}
    return $con;
}

?>