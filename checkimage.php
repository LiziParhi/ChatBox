<?php
	$username = $_GET["name"];
	session_start();
    $con = mysql_connect('localhost' , 'root' , '');
    mysql_select_db('chatbox' , $con);
	$timestamp = date('Y-m-d G:i:s');
    $result = mysql_query("UPDATE users SET keepalive='10' WHERE username='$username'");                  
	
    session_destroy();
    
    echo "<center>";
    echo"You have logged out.Click <a href ='index.php'>here to login again</a>";
    echo "</center>";
?>
