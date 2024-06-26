<?php

session_start();
//unset($_SESSION['username']);
//session_unset()// unsets all session data from us
//session_destroy() // when you redirect to other page the session data will be lost
echo $_SESSION['username'];
?>