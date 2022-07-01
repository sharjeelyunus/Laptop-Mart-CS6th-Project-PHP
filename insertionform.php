<?php
if(!isset($_COOKIE["type"]))
{
 header("location:login.php");
}
include_once("menu_admin.html");

include_once("insertion.html");
?>