<?php

	class Admin_Controller extends Base_Controller
	{
		public $restful = true;
		public $error = false;

		public function get_index()
		{
			return View::make('admin.one');
		}

		public function get_mlist()
		{
			$data = array();
			$profs = Prof::all();
			foreach($profs as $prof)
			{
				$dat = array(
						'id' => $prof->id,
						'name' => $prof->name,
						'research_interest' => $prof->research_interest,
						'department' => $prof->department,
						'institute' => Department::find($prof->department)->institute
					);
				$data[] = $dat;
			}
			return json_encode($data);
		}

		public function post_madd()
		{
			$data = json_decode(Input::get('member'));
			$mem = new Prof;
			$mem->name = $data->name;
			if(Department::find($data->department)->institute == $data->institute)
			{
				$mem->department = $data->department;
			}
			$mem->research_interest = $data->research_interest;
			if($mem->save())
			{
				return "Member Adding Process ended Successfully";
			}
			else
			{
				return "Member Adding Process Failed";
			}
		}

		public function post_mupdate()
		{
			$data = json_decode(Input::get('member'));
			$mem = Prof::find($data->id);
			$mem->name = $data->name;
			if(Department::find($data->department)->institute == $data->institute)
			{
				$mem->department = $data->department;
			}
			$mem->research_interest = $data->research_interest;
			if($mem->save())
			{
				return "Member Adding Process ended Successfully";
			}
			else
			{
				return "Member Adding Process Failed";
			}
		}

		public function post_mdel()
		{
			$id = Input::get('id');
			$mem = Prof::find($id);
			if($mem->delete())
			{
				return "Member Remove Process ended Successfully";
			}
			else
			{
				return "Member Remove Process Failed";
			}
		}

		public function get_ilist()
		{
			$data = array();
			$instis = Institute::all();
			foreach($instis as $insti)
			{
				$dat = array(
						'id' => $insti->id,
						'name' => $insti->name,
						'location' => $insti->location
					);
				$data[] = $dat;
			}
			return json_encode($data);
		}

		public function post_iadd()
		{
			$data = json_decode(Input::get('institute'));
			$inst = new Institute;
			$inst->name = $data->name;
			$inst->location = $data->location;
			$dep = new Department;
			$dep->name = 'Unknown';
			$dep->location = $data->location;
			$truth = $inst->save();
			$dep->institute = $inst->id;
			if($truth&&$dep->save())
			{
				return "Member Adding Process ended Successfully";
			}
			else
			{
				return "Member Adding Process Failed";
			}
		}

		public function post_iupdate()
		{
			$data = json_decode(Input::get('institute'));
			$inst = Institute::find($data->id);
			$inst->name = $data->name;
			$inst->location = $data->location;
			if($inst->save())
			{
				return "Member Adding Process ended Successfully";
			}
			else
			{
				return "Member Adding Process Failed";
			}
		}

		public function post_idel()
		{
			$id = Input::get('id');
			$inst = Institute::find($id);
			$deps = Department::where('institute','=',$id)->get();
			foreach($deps as $dep)
			{
				$dep->delete();
			}
			if($inst->delete())
			{
				return "Member Remove Process ended Successfully";
			}
			else
			{
				return "Member Remove Process Failed";
			}
		}

		public function get_dlist()
		{
			$data = array();
			$deps = Department::all();
			foreach($deps as $dep)
			{
				$dat = array(
						'id' => $dep->id,
						'name' => $dep->name,
						'location' => $dep->location,
						'institute' => $dep->institute
					);
				$data[] = $dat;
			}
			return json_encode($data);
		}

		public function post_dadd()
		{
			$data = json_decode(Input::get('department'));
			$dep = new Department;
			$dep->name = $data->name;
			$dep->location = $data->location;
			$dep->institute = $data->institute;
			if($dep->save())
			{
				return "Member Adding Process ended Successfully";
			}
			else
			{
				return "Member Adding Process Failed";
			}
		}

		public function post_dupdate()
		{
			$data = json_decode(Input::get('department'));
			$dep = Department::find($data->id);
			$dep->name = $data->name;
			$dep->location = $data->location;
			$dep->institute = $data->institute;
			if($dep->save())
			{
				return "Member Adding Process ended Successfully";
			}
			else
			{
				return "Member Adding Process Failed";
			}
		}

		public function post_ddel()
		{
			$id = Input::get('id');
			$dep = Department::find($id);
			if($dep->delete())
			{
				return "Member Remove Process ended Successfully";
			}
			else
			{
				return "Member Remove Process Failed";
			}
		}

		public function get_jlist()
		{
			$data = array();
			$jours = Journal::all();
			foreach($jours as $jour)
			{
				$dat = array(
						'id' => $jour->id,
						'name' => $jour->name,
					);
				$data[] = $dat;
			}
			return json_encode($data);
		}

		public function post_jadd()
		{
			$data = json_decode(Input::get('journal'));
			$jour = new Journal;
			$jour->name = $data->name;
			$jour->nationality = $data->nationality;
			$jour->rating = $data->rating;
			if($jour->save())
			{
				return "Member Adding Process ended Successfully";
			}
			else
			{
				return "Member Adding Process Failed";
			}
		}

		public function post_jupdate()
		{
			$data = json_decode(Input::get('journal'));
			$jour = Journal::find($data->id);
			$jour->name = $data->name;
			$jour->nationality = $data->nationality;
			$jour->rating = $data->rating;
			if($jour->save())
			{
				return "Member Adding Process ended Successfully";
			}
			else
			{
				return "Member Adding Process Failed";
			}
		}

		public function post_jdel()
		{
			$id = Input::get('id');
			$jour = Journal::find($id);
			if($jour->delete())
			{
				return "Member Remove Process ended Successfully";
			}
			else
			{
				return "Member Remove Process Failed";
			}
		}

}
