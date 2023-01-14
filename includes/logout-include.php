<?php

// Path: includes\logout-include.php
//  logout the user and redirect to login page
session_start();
session_unset();
session_destroy();
header("Location: ../templates/login.php");
exit;
