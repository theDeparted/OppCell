<?php

	class Login_Controller extends Base_Controller
	{
		public $restful = true;

		public function get_index()
		{
			return View::make('login.index');
		}

		public function post_index()
		{
			//if(Input::has('ajax'))
			{
				$s = Input::get('s');
				$query = DB::query("select id, first_name, middle_name, last_name, role, reg_no from students where concat_ws(' ', first_name, middle_name, last_name, reg_no) like (?) ORDER BY first_name ASC LIMIT 8",("%".mysql_real_escape_string(Input::get('s'))."%"));
				// DB::table('students')
							// ->where('first_name', 'LIKE', $s)
							// ->or_where('middle_name', 'LIKE', $s)
							// ->or_where('last_name', 'LIKE', $s)
							// ->or_where("reg_no", 'LIKE', $s)
							// ->where('students.first_name||students.middle_name||students.last_name||students.reg_no' , 'LIKE', $s)
							// ->or_where("first_name||' '||last_name" , 'LIKE', $s)
							// ->get();
				echo json_encode($query);
			}
			//else
			//{
			//	echo "No";
			//}
		}

	}