<?php

class Redirect
{

	public static function to($path)
	{
		if ( is_numeric($path) )
		{
			switch ($path) {
				case '404':
					//  require a 404 page
					break;
			}
		}
		header('Location: ' . $path);
		exit;
	}

}