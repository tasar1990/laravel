<?php 
use Illuminate\Routing\Route;
//get('/','WelcomeController@index');
get('/','LoginController@index');

post('login','LoginController@check');

//get('home','HomeController@index');

get('user','RegistrationController@index');

get('new_user','RegistrationController@create');

post('addedit','RegistrationController@store');

get('doedit/{id}','RegistrationController@show');

post('update','RegistrationController@update');

get('dodelete/{id}','RegistrationController@delete');
// get('/', function()
// {
// 	return View::make('pages.home'); // laravel 5 return View('pages.home');
// });
// get('contact', function()
// {
// 	return View::make('pages.about'); // laravel 5 return View('pages.about');
// });
?>