<?php

require 'modules/User.php';
$user = new User();
// set the heading and require the template
$heading = 'Access your account';
$gradient = 'from-slate-700 via-sky-600 to-slate-700';
require 'templates/login.template.php';
