<?php
//logout.php

// session will destroy and redirect to the login page
session_start();

session_destroy();

header("location:login.php");

?>