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
			if(Input::has('ajax'))
			{
				$s = "'%".mysql_real_escape_string(Input::get('s'))."%'";
				$query = DB::query("select created_at, updated_at, concat_ws(' ', first_name, middle_name, last_name) as name, role, reg_no, img from students where concat_ws(' ', first_name, middle_name, last_name, reg_no) like $s ORDER BY name ASC LIMIT 8");
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
			else
			{
				echo "No";
			}
		}

	}