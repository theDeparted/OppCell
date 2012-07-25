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

// First Page
Route::get('/', 'login@index');
Route::post('/', 'login@index');

// JSON of information
Route::get('info/json', function()
	{
		$info = array(
					'url' => URL::base()
				);
		echo json_encode($info);
	});

// Login attempt
Route::any('login', function()
	{
		$reg_no = Input::get('reg_no');
		if(Student::where('reg_no','=',$reg_no)->count() > 0)
		{
			$user = Student::where('reg_no','=',$reg_no)->first();
	
			// If first signin
			if($user->updated_at >= $user->created_at)
			{
				echo json_encode($user->attributes);
				echo "\n";

				// Email details
				$to 		= 	's.gagan.preet@gmail.com';//$user->email;
				$r 			=	$user->reg_no;
				$p 			=	Hash::make($user->reg_no);
				$subject	= 	'IISER Mohali Opportunity Cell Web Portal';
				$message	= 	"Welcome to Opportunity Cell of IISER Mohali. \n\n Please use the following details to login: \n \t Registration Number \t: $r \n \t Password \t \t: $p \n \n Make the best use of this.";
				$headers	= 	'From: noreply@oppcell.com';
	
				// sending email
				$reply = mail('s.gagan.preet@gmail.com', $subject, $message, $headers);
	
				// Updating the password to the database
				$user->password = Hash::make($p);
				$user->save();

				// // talking to atul
				// echo "new \n $reply";


			  // 	require_once "Mail.php";

		 		// $from = "noreply.theDeparted@gmail.com";

		 		// $host = "ssl://smtp.gmail.com";
		 		// $port = "465";
 		 	// 	$username = "noreply.theDeparted@gmail.com";
		 		// $password = "alphabetagamma";

		 		// $headers = array ('From' => $from,
		 		// 	'To' => $to,
		 		// 	'Subject' => $subject);
		 		// $smtp = Mail::factory('smtp',
		 		// 		array ('host' => $host,
		 		// 			'port' => $port,
		 		// 			'auth' => true,
		 		// 			'username' => $username,
		 		// 			'password' => $password
		 		// 	));

		 		// $mail = $smtp->send($to, $headers, $message);

		 		// if (PEAR::isError($mail))
		 		// {
		 		// 	echo("<p>" . $mail->getMessage() . "</p>");
		 		// }
		 		// else
		 		// {
		 		// 	echo("<p>Message successfully sent!</p>");
		 		// }

				// $mailer = IoC::resolve('phpmailer');
				// try
				// {
					// $mailer->AddAddress( $to, $r );
				// 	$mailer->Subject  = $subject;
				// 	$mailer->Body     = $message;
				// 	$mailer->Send();
				// }
				// catch (Exception $e)
				// {
				// 	echo 'Message was not sent.';
				// 	echo 'Mailer error: ' . $e->getMessage();
				// }

			}
	
			// If old user
			else
			{
				// sending user details
				echo json_encode($user->attributes);
			}
		}
		else
		{
			echo 'no';
		}
	});

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
|		});
|
| Next, attach the filter to a route:
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
	if (Auth::guest()) return Redirect::to('login');
});