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
						'research_interest' => $prof->research_interest
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
			$data = json_decode(Input::get('member'));
			$inst = new Institute;
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

		public function post_iupdate()
		{
			$data = json_decode(Input::get('member'));
			$inst = Prof::find($data->id);
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
			$inst = Prof::find($id);
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
			$profs = Prof::all();
			foreach($profs as $prof)
			{
				$dat = array(
						'id' => $prof->id,
						'name' => $prof->name,
						'research_interest' => $prof->research_interest
					);
				$data[] = $dat;
			}
			return json_encode($data);
		}

		public function post_dadd()
		{
			$data = json_decode(Input::get('member'));
			$mem = new Prof;
			$mem->name = $data->name;
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

		public function post_dupdate()
		{
			$data = json_decode(Input::get('member'));
			$mem = Prof::find($data->id);
			$mem->name = $data->name;
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

		public function post_ddel()
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

}
