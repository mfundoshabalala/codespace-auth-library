<?php

// require 'config\index.php';
// Get the URI
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Abort function
function abort($code = 404)
{
	http_response_code($code);
	require 'templates/' . $code . '.template.php';
	die();
}

require 'config\index.php';

// Route to the controller
function routeToController($uri, $routes)
{
	// Check if the URI exists in the routes array
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
	} else {
		abort();
	}
};

routeToController($uri, $config['routes']);
