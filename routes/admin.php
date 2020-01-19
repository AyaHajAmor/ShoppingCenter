<?php 
Route::group(['prefix' => 'admin','namespace'=>'admin'], function ()
{
    Config::set('auth.defines', 'admin');

    Route::get('login','AdminAuth@login');

    Route::post('login','AdminAuth@dologin');

    Route::group(['middleware' => 'admin:admin'], function () 
    {  
        /** Admin */
        Route::any('admin/destroy/all','AdminController@multi_delete');

        Route::resource('admin', 'AdminController');
        /**Users */
        Route::any('users/destroy/all','UsersController@multi_delete');

        Route::resource('users', 'UsersController');

        Route::get('/', function () 
        {
            return view('admin.home');
        });
        
        Route::any('logout', 'AdminAuth@logout');
        /**Settings */
        Route::get('settings', 'Settings@setting');
		Route::post('settings', 'Settings@setting_save');
		Route::any('logout', 'AdminAuth@logout');
    });
    
});
Route::get('user/v', function () {
    return view('user.home');
});