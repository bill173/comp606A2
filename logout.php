<?php


session_start();
header("content-type:text/html;charset=utf-8");
include("class/message_ok.php");
session_destroy();
unset($_SESSION['username']);

msg_url("logout successfully","index.php");
