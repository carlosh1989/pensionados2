<?php
namespace System\tools\rounting;

class Redirect {

	public static function to($url)
	{
        header('Location: '.baseUrl.''.$url.'');
	}
}