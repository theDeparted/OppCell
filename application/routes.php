<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

/*
List:
	1.	Login (login)
		a. GET 	-	Index	=>	Login page
		b. POST	-	Index	=>	Query list of People
*/
Route::get('/', function()
	{
		if (Auth::guest())
			return Redirect::to('login');
		else
			return Redirect::to('oppcell');
	}
);

// Login Page
Route::get('login', 'login@index');

// Logout Page
Route::get('logout', function()
	{
		Auth::logout();
		return Redirect::to('/'); 
	}
);

// Restricted Areas
Route::group(array('before' => 'auth'), function()
{
	// OppCell Home Page
	Route::get('oppcell', function()
		{
			return View::make('oppcell.home');
		}
	);

	// Home Page
	Route::get('home', function()
		{
			return View::make('oppcell.redirect');
		}
	);

	// Research At IISER
	Route::get('oppcell/research', function()
		{
			return View::make('oppcell.research.researchhome');
		}
	);

	// A Particular Profs Page (JSON)
	Route::get('oppcell/research/(:num)', function()
		{
			//
		}
	);

});

Route::post('/', function()
	{
		print_r($_GET);
		print_r($_POST);
		return "0";
	}
);

Route::controller(array('admin'));

// Controllers
// Route::controller(Controller::detect());

Route::controller(array('login'));



/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		})|
| Next
return Request::referrer();, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	$address = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	// $address = $_SERVER['HTTP_REFERER'];
	// $address = Request::referrer();
	// return Request::referrer();
	// print_r($_SERVER);
	if(!($address != URL::to('login')))
	{
		$address = URL::to('oppcell') ;
	}
	if (Auth::guest())
	{
		return Redirect::to("login?loadtype=default&address=$address");
	}
});