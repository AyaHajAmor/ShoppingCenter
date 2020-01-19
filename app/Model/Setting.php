<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    protected $table    = 'settings';
	protected $fillable = [
		'sitename_en',
		'sitename_ar',
		'logo',
		'icon',
		'email',
		'description',
		'keywords',
		'status',
		'message_maintenance',
		'main_lang',
	];

}
if (request()->hasFile('logo')) 
		{
			!empty(setting()->logo)?Storage::delete(setting()->logo):'';
			$data['logo'] =request()
			->file('logo')
			->store('settings');
			
		}
		if (request()->hasFile('icon')) 
		{
			!empty(setting()->logo)?Storage::delete(setting()->icon):'';
			$data['icon'] =request()
			->file('icon')
			->store('settings');
			
		}