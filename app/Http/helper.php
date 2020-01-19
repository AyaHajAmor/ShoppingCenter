<?php

use Illuminate\Http\Request;
if(!function_exists('up'))
{   
    function up()
    {
        return new \App\Http\Controllers\Upload;
    }
}
if(!function_exists('aurl'))
{   
    function aurl($url = null )
    {
        return  url('admin/'.$url);
    }
}
if(!function_exists('aurl'))
{
     function admin(){
        return auth()->guard('admin');
    }
} 
if (!function_exists('setting')) {
	function setting() {
		return \App\Model\Setting::orderBy('id', 'desc')->first();
	}
}
if (!function_exists('active_menu')) {
	function active_menu($link) {

		if (preg_match('/'.$link.'/i', Request::segment(2))) {
			return ['menu-open', 'display:block'];
		} else {
			return ['', ''];
		}
	}
}
/////// Validate Helper Functions ///////
if (!function_exists('v_image')) {
	function v_image($ext = null) {
		if ($ext === null) {
			return 'image|mimes:jpg,jpeg,png,gif,bmp';
		} else {
			return 'image|mimes:'.$ext;
		}

	}
}
/////// Validate Helper Functions ///////