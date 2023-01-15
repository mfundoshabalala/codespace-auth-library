<?php

function dd($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die();
}

function active($url)
{
	return $_SERVER['REQUEST_URI'] === $url ? 'text-red-600' : 'text-gray-500';
}
