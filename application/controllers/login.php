<?php

	class Login_Controller extends Base_Controller
	{
		public $restful = true;
		public $error = false;

		public function get_index()
		{
			if(Input::has('loadtype'))
			{
				return View::make('login.index',array('loadtype' => Input::get('loadtype'),'address' => Input::get('address')));
			}
			else
			{
				return View::make('login.index',array('loadtype' => "default",'address' => Input::get('address')));
			}
	
		}

		public function post_index()
		{
			if(Input::has('ajax'))
			{
				$s = "'%".mysql_real_escape_string(Input::get('s'))."%'";
				$query = DB::query("select created_at, updated_at, concat_ws(' ', first_name, middle_name, last_name) as name, role, reg_no, img from students where concat_ws(' ', first_name, middle_name, last_name, reg_no) like $s ORDER BY name ASC LIMIT 8");
				return json_encode($query);
			}
			else
			{
				return "No";
			}
		}

		public function post_check()
		{
			$reg_no = Input::get('reg_no');
			if(Student::where('reg_no','=',$reg_no)->count() > 0)
			{
				$user = Student::where('reg_no','=',$reg_no)->first();
		
				// If first signin
				if($user->updated_at == $user->created_at)
				{

					// $to 		= 	's.gagan.preet@gmail.com';//$user->email;
					// $r 			=	$user->reg_no;
					// // $p 			=	Hash::make($user->reg_no);
					// $p 			=	"ABcd";
					// $subject	= 	'IISER Mohali Opportunity Cell Web Portal';
					// $body		= 	"Welcome to Opportunity Cell of IISER Mohali. \n\n Please use the following details to login: \n \t Registration Number \t: $r \n \t Password \t \t: $p \n \n Make the best use of this.";

					$p = "AAAA";
					$user->password = Hash::make($p);
					$user->save();

					// return $this->passwordEmail($to, $message, $subject);
					// $this->passwordEmail($to, $message, $subject, $p, $user);
					// if($this->$error == true)
					// {
					// 	return "new";
					// 	// Redirect::to("oppcell");
					// }
					// else
					// {
					// 	return "fail";
					// 	// Redirect::to("oppcell");
					// }

				}
		
				// If old user
				else
				{
					// sending user details
					// return Redirect::to('home');
					return "old";
						// Redirect::to("oppcell");
				}
			}
			else
			{
				return 'no';
						// Redirect::to("oppcell");
			}
		}

		public function post_validate()
		{
			$credentials = array('username' => Input::get('reg_no'), 'password' => Input::get('password'));

			$user = Student::where('reg_no','=',Input::get('reg_no'))->first();

			if (Auth::attempt($credentials))
			{
				return Redirect::to('oppcell');
			}
			else
			{
				return Redirect::to('login?loadtype=error');
			}
		}

		public function post_passreset()
		{
			// Reset Password
			$reg_no = Input::get('reg_no');
			if(Student::where('reg_no','=',$reg_no)->count() > 0)
			{
				$user = Student::where('reg_no','=',$reg_no)->first();
		
				// If first signin

				// return "\n";
				// $to 		= 	's.gagan.preet@gmail.com';//$user->email;
				// $r 			=	$user->reg_no;
				// $p 			=	Hash::make($user->reg_no);
				$p          =   $reg_no;
				// $subject	= 	'IISER Mohali Opportunity Cell Web Portal';
				// $body		= 	"Your password to the Opportunity Cell of IISER Mohali has been reset. \n\n Please use the following details to login: \n \t Registration Number \t: $r \n \t Password \t \t: $p \n \n Keep it safe this time.";
				return "new";
			}
			else
			{
				return "no";
			}

		}

		// protected function passwordEmail($to, $message, $subject, $p, $user)
		// {
		// 	// return "aa";
		// 	// Send password Email!!
		// 	// Email details
		// 	// $headers	= 	'From: noreply@oppcell.com';

		// 	// sending email
		// 	// $reply = mail('s.gagan.preet@gmail.com', $subject, $message, $headers);

		// 	// Updating the password to the database
		// 	$user->password = Hash::make($p);
		// 	$user->save();
		// 	// return "Subject: $subject \n Message = $message \n";
		// 	// include('Mail.php');

		// 	// $from =     "noreply.theDeparted@gmail.com";
		// 	// $host =     "ssl://smtp.gmail.com";
		// 	// $port =     "465";
		// 	// $username = $from;
		// 	// $password = "alphabetagamma";
			
		// 	// $headers = array (
		// 	//          'From' => $from,
		// 	//          'To' => $to,
		// 	//          'Subject' => $subject);
			
		// 	// $smtp = Mail::factory('smtp',
		// 	//       array (
		// 	//             'host' => $host,
		// 	//             'port' => $port,
		// 	//             'auth' => true,
		// 	//             'username' => $username,
		// 	//             'password' => $password));
			
		// 	// $mail = $smtp->send($to, $headers, $body);

		// 	// if (PEAR::isError($mail))
		// 	// {
		// 	// 	$this->$error = true;//$mail->getMessage();
		// 	// }
		// 	// else
		// 	// {
		// 	// 	$this->$error = true;
		// 	// }

		// }

	}