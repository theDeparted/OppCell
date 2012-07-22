<?php
	
	class Add_Students_Task
	{

		public function seed07()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'first_name' => 'Achyut',
				'middle_name' => 'Priya',
				'last_name' => 'Shukla',
				'reg_no' => 'MS07002',
				'email' => 'ms07002@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amita',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS07003',
				'email' => 'ms07003@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amol',
				'middle_name' => 'A',
				'last_name' => 'Deshmukh',
				'reg_no' => 'MS07004',
				'email' => 'ms07004@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amol',
				'last_name' => 'Ratnaparkhe',
				'reg_no' => 'MS07005',
				'email' => 'ms07005@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anurag',
				'last_name' => 'Kanaujia',
				'reg_no' => 'MS07006',
				'email' => 'ms07006@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Bharat',
				'last_name' => 'Kohli',
				'reg_no' => 'M07007',
				'email' => 'ms07007@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07008',
				'email' => 'ms07008@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07009',
				'email' => 'ms07009@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Dharmendra',
				'middle_name' => 'K',
				'last_name' => 'Singh',
				'reg_no' => 'MS07010',
				'email' => 'ms07010@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kirandeep',
				'last_name' => 'Kaur',
				'reg_no' => 'MS07011',
				'email' => 'ms07011@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mrinal',
				'last_name' => 'Shekhar',
				'reg_no' => 'MS07012',
				'email' => 'ms07012@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mohit',
				'middle_name' => 'Satish',
				'last_name' => 'Tanga',
				'reg_no' => 'MS07013',
				'email' => 'ms07013@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Naveen',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07014',
				'email' => 'ms07014@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Parul',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07016',
				'email' => 'ms07016@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prashant',
				'last_name' => 'Mishra',
				'reg_no' => 'MS07017',
				'email' => 'ms07017@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rajni',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS07018',
				'email' => 'ms07018@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rishi',
				'middle_name' => 'Raj',
				'last_name' => 'Trivedi',
				'reg_no' => 'MS07019',
				'email' => 'ms07019@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sajan',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07020',
				'email' => 'ms07020@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sameep',
				'last_name' => 'Chandel',
				'reg_no' => 'MS07021',
				'email' => 'ms07021@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shalender',
				'last_name' => 'Jain',
				'reg_no' => 'MS07022',
				'email' => 'ms07022@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Singamsetti',
				'last_name' => 'Srinivasulu',
				'reg_no' => 'MS07023',
				'email' => 'ms07023@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tishu',
				'last_name' => 'Nandan',
				'reg_no' => 'MS07026',
				'email' => 'ms07026@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Varun',
				'last_name' => 'Singh',
				'reg_no' => 'MS07028',
				'email' => 'ms07028@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vinit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07029',
				'email' => 'ms07029@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rakesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07030',
				'email' => 'ms07030@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Apurv',
				'last_name' => 'Saxena',
				'reg_no' => 'MS08031T',
				'email' => 'ms08031t@iisermohali.ac.in'
			));

		}

		public function seed()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'first_name' => 'Gagan',
				'middle_name' => 'Preet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08021',
				'role' => '1',
				'email' => 's.gagan.preet@gmail.com'
			));
			Student::create(array(
				'first_name' => 'Atul',
				'middle_name' => 'Singh',
				'last_name' => 'Arora',
				'reg_no' => 'MS11003',
				'role' => '1',
				'email' => 'toatularora@gmail.com'
			));
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'first_name' => 'Achyut',
				'middle_name' => 'Priya',
				'last_name' => 'Shukla',
				'reg_no' => 'MS07002',
				'email' => 'ms07002@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amita',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS07003',
				'email' => 'ms07003@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amol',
				'middle_name' => 'A',
				'last_name' => 'Deshmukh',
				'reg_no' => 'MS07004',
				'email' => 'ms07004@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amol',
				'last_name' => 'Ratnaparkhe',
				'reg_no' => 'MS07005',
				'email' => 'ms07005@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anurag',
				'last_name' => 'Kanaujia',
				'reg_no' => 'MS07006',
				'email' => 'ms07006@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Bharat',
				'last_name' => 'Kohli',
				'reg_no' => 'M07007',
				'email' => 'ms07007@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07008',
				'email' => 'ms07008@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07009',
				'email' => 'ms07009@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Dharmendra',
				'middle_name' => 'K',
				'last_name' => 'Singh',
				'reg_no' => 'MS07010',
				'email' => 'ms07010@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kirandeep',
				'last_name' => 'Kaur',
				'reg_no' => 'MS07011',
				'email' => 'ms07011@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mrinal',
				'last_name' => 'Shekhar',
				'reg_no' => 'MS07012',
				'email' => 'ms07012@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mohit',
				'middle_name' => 'Satish',
				'last_name' => 'Tanga',
				'reg_no' => 'MS07013',
				'email' => 'ms07013@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Naveen',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07014',
				'email' => 'ms07014@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Parul',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07016',
				'email' => 'ms07016@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prashant',
				'last_name' => 'Mishra',
				'reg_no' => 'MS07017',
				'email' => 'ms07017@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rajni',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS07018',
				'email' => 'ms07018@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rishi',
				'middle_name' => 'Raj',
				'last_name' => 'Trivedi',
				'reg_no' => 'MS07019',
				'email' => 'ms07019@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sajan',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07020',
				'email' => 'ms07020@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sameep',
				'last_name' => 'Chandel',
				'reg_no' => 'MS07021',
				'email' => 'ms07021@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shalender',
				'last_name' => 'Jain',
				'reg_no' => 'MS07022',
				'email' => 'ms07022@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Singamsetti',
				'last_name' => 'Srinivasulu',
				'reg_no' => 'MS07023',
				'email' => 'ms07023@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tishu',
				'last_name' => 'Nandan',
				'reg_no' => 'MS07026',
				'email' => 'ms07026@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Varun',
				'last_name' => 'Singh',
				'reg_no' => 'MS07028',
				'email' => 'ms07028@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vinit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07029',
				'email' => 'ms07029@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rakesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07030',
				'email' => 'ms07030@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Apurv',
				'last_name' => 'Saxena',
				'reg_no' => 'MS08031T',
				'email' => 'ms08031t@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Aakash',
				'last_name' => 'Sharawat',
				'reg_no' => 'MS09001',
				'role' => '0',
				'email' => 'ms09001@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Abhijit',
				'last_name' => 'Pant',
				'reg_no' => 'MS09002',
				'role' => '0',
				'email' => 'ms09002@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Anand',
				'reg_no' => 'MS09003',
				'role' => '0',
				'email' => 'ms09003@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09004',
				'role' => '0',
				'email' => 'ms09004@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Mishra',
				'reg_no' => 'MS09005',
				'role' => '0',
				'email' => 'ms09005@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Adhikar',
				'last_name' => 'Bansiwal',
				'reg_no' => 'MS09007',
				'role' => '0',
				'email' => 'ms09007@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Aditya',
				'last_name' => ' ',
				'reg_no' => 'MS09008',
				'role' => '0',
				'email' => 'ms09008@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Aditya',
				'last_name' => 'Verma',
				'reg_no' => 'MS09009',
				'role' => '0',
				'email' => 'ms09009@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Agastya',
				'middle_name' => 'P',
				'last_name' => 'Bhati',
				'reg_no' => 'MS09010',
				'role' => '0',
				'email' => 'ms09010@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Akansha',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09011',
				'role' => '0',
				'email' => 'ms09011@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Akash',
				'middle_name' => 'Kumar',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09012',
				'role' => '0',
				'email' => 'ms09012@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Alok',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09013',
				'role' => '0',
				'email' => 'ms09013@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Amit',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS09014',
				'role' => '0',
				'email' => 'ms09014@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Anil',
				'middle_name' => 'Kumar',
				'last_name' => 'Jhingonia',
				'reg_no' => 'MS09015',
				'role' => '0',
				'email' => 'ms09015@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Anjali',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09016',
				'role' => '0',
				'email' => 'ms09016@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ankush',
				'last_name' => 'Checkervarty',
				'reg_no' => 'MS09018',
				'role' => '0',
				'email' => 'ms09018@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Anuj',
				'last_name' => 'Jakhar',
				'reg_no' => 'MS09020',
				'role' => '0',
				'email' => 'ms09020@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Anurag',
				'last_name' => 'Kulshrestha',
				'reg_no' => 'MS09022',
				'role' => '0',
				'email' => 'ms09022@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Arushi',
				'last_name' => 'Khattri',
				'reg_no' => 'MS09024',
				'role' => '0',
				'email' => 'ms09024@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Aseem',
				'last_name' => 'Tyagi',
				'reg_no' => 'MS09025',
				'role' => '0',
				'email' => 'ms09025@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ashima',
				'last_name' => 'Arora',
				'reg_no' => 'MS09026',
				'role' => '0',
				'email' => 'ms09026@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ashish',
				'last_name' => 'Verma',
				'reg_no' => 'MS09029',
				'role' => '0',
				'email' => 'ms09029@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ashutosh',
				'last_name' => 'Tripathi',
				'reg_no' => 'MS09031',
				'role' => '0',
				'email' => 'ms09031@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Atul',
				'last_name' => 'Mantri',
				'reg_no' => 'MS09033',
				'role' => '0',
				'email' => 'ms09033@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Atul',
				'last_name' => 'Verma',
				'reg_no' => 'MS09034',
				'role' => '0',
				'email' => 'ms09034@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Bharat',
				'middle_name' => 'Kumar',
				'last_name' => 'Gehlot',
				'reg_no' => 'MS09036',
				'role' => '0',
				'email' => 'ms09036@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Bia',
				'last_name' => 'Roy',
				'reg_no' => 'MS09037',
				'role' => '0',
				'email' => 'ms09037@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Chaman',
				'middle_name' => 'Lal',
				'last_name' => 'Mahawar',
				'reg_no' => 'MS09038',
				'role' => '0',
				'email' => 'ms09038@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Chandrakala',
				'last_name' => 'Meena',
				'reg_no' => 'MS09039',
				'role' => '0',
				'email' => 'ms09039@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Danish',
				'last_name' => 'Shamoon',
				'reg_no' => 'MS09041',
				'role' => '0',
				'email' => 'ms09041@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Debdatta',
				'middle_name' => 'Sinha',
				'last_name' => 'Roy',
				'reg_no' => 'MS09042',
				'role' => '0',
				'email' => 'ms09042@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Debi',
				'middle_name' => 'Prasad',
				'last_name' => 'Kar',
				'reg_no' => 'MS09043',
				'role' => '0',
				'email' => 'ms09043@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Deep',
				'middle_name' => 'Raj',
				'last_name' => 'Meena',
				'reg_no' => 'MS09044',
				'role' => '0',
				'email' => 'ms09044@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Deepak',
				'last_name' => 'Saroha',
				'reg_no' => 'MS09045',
				'role' => '0',
				'email' => 'ms09045@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Deepak',
				'last_name' => 'Verma',
				'reg_no' => 'MS09046',
				'role' => '0',
				'email' => 'ms09046@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Devender',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09049',
				'role' => '0',
				'email' => 'ms09049@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Dhirendra',
				'middle_name' => 'Pratap',
				'last_name' => 'Singh',
				'reg_no' => 'MS09050',
				'role' => '0',
				'email' => 'ms09050@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Gaurav',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS09051',
				'role' => '0',
				'email' => 'ms09051@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Gaurav',
				'last_name' => 'Verma',
				'reg_no' => 'MS09053',
				'role' => '0',
				'email' => 'ms09053@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Gursharanjeet',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS09055',
				'role' => '0',
				'email' => 'ms09055@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Harjit',
				'middle_name' => 'Singh',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS09056',
				'role' => '0',
				'email' => 'ms09056@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Harsh',
				'last_name' => 'Katyayan',
				'reg_no' => 'MS09057',
				'role' => '0',
				'email' => 'ms09057@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Himanshu',
				'last_name' => ' ',
				'reg_no' => 'MS09058',
				'role' => '0',
				'email' => 'ms09058@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Himanshu',
				'last_name' => 'Nagpal',
				'reg_no' => 'MS09059',
				'role' => '0',
				'email' => 'ms09059@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Hitesh',
				'last_name' => 'Gakhar',
				'reg_no' => 'MS09060',
				'role' => '0',
				'email' => 'ms09060@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Indrajeet',
				'last_name' => ' ',
				'reg_no' => 'MS09062',
				'role' => '0',
				'email' => 'ms09062@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Indu',
				'last_name' => 'Verma',
				'reg_no' => 'MS09063',
				'role' => '0',
				'email' => 'ms09063@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Jithin',
				'last_name' => 'Bhagavathi',
				'reg_no' => 'MS09064',
				'role' => '0',
				'email' => 'ms09064@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Jugal',
				'last_name' => 'Pant',
				'reg_no' => 'MS09065',
				'role' => '0',
				'email' => 'ms09065@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Jyoti',
				'last_name' => 'Saini',
				'reg_no' => 'MS09066',
				'role' => '0',
				'email' => 'ms09066@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kanwal',
				'middle_name' => 'Puneet',
				'last_name' => 'Kaur',
				'reg_no' => 'MS09068',
				'role' => '0',
				'email' => 'ms09068@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kapil',
				'last_name' => 'Bharti',
				'reg_no' => 'MS09069',
				'role' => '0',
				'email' => 'ms09069@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Karan',
				'middle_name' => 'Pratap Singh',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09070',
				'role' => '0',
				'email' => 'ms09070@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Karandeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS09071',
				'role' => '0',
				'email' => 'ms09071@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kritika',
				'last_name' => 'Singhal',
				'reg_no' => 'MS09072',
				'role' => '0',
				'email' => 'ms09072@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kuldeep',
				'middle_name' => 'Singh',
				'last_name' => 'Tomar',
				'reg_no' => 'MS09075',
				'role' => '0',
				'email' => 'ms09075@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kumar',
				'last_name' => 'Gaurav',
				'reg_no' => 'MS09076',
				'role' => '0',
				'email' => 'ms09076@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Lokesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09078',
				'role' => '0',
				'email' => 'ms09078@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Mayank',
				'last_name' => 'Chugh',
				'reg_no' => 'MS09081',
				'role' => '0',
				'email' => 'ms09081@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Mayank',
				'last_name' => 'Mishra',
				'reg_no' => 'MS09082',
				'role' => '0',
				'email' => 'ms09082@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Meenakshi',
				'last_name' => 'Bagadia',
				'reg_no' => 'MS09083',
				'role' => '0',
				'email' => 'ms09083@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Nancy',
				'last_name' => 'Mathur',
				'reg_no' => 'MS09086',
				'role' => '0',
				'email' => 'ms09086@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Narendra',
				'middle_name' => 'Pal',
				'last_name' => 'Singh',
				'reg_no' => 'MS09087',
				'role' => '0',
				'email' => 'ms09087@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Neeraj',
				'last_name' => ' ',
				'reg_no' => 'MS09089',
				'role' => '0',
				'email' => 'ms09089@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Nishtha',
				'last_name' => 'Agarwal',
				'reg_no' => 'MS09091',
				'role' => '0',
				'email' => 'ms09091@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Nitin',
				'last_name' => 'Serwa',
				'reg_no' => 'MS09092',
				'role' => '0',
				'email' => 'ms09092@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Prateek',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09096',
				'role' => '0',
				'email' => 'ms09096@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Priyanka',
				'last_name' => 'Dogra',
				'reg_no' => 'MS09097',
				'role' => '0',
				'email' => 'ms09097@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09101',
				'role' => '0',
				'email' => 'ms09101@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'middle_name' => 'Kumar',
				'last_name' => 'Choudhary',
				'reg_no' => 'MS09102',
				'role' => '0',
				'email' => 'ms09102@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'middle_name' => 'Kumar',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09103',
				'role' => '0',
				'email' => 'ms09103@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rajveer',
				'last_name' => 'Nehra',
				'reg_no' => 'MS09104',
				'role' => '0',
				'email' => 'ms09104@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ravi',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09105',
				'role' => '0',
				'email' => 'ms09105@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rishi',
				'last_name' => 'Raj',
				'reg_no' => 'MS09108',
				'role' => '0',
				'email' => 'ms09108@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Saksham',
				'last_name' => 'Singh',
				'reg_no' => 'MS09111',
				'role' => '0',
				'email' => 'ms09111@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Sampat',
				'middle_name' => 'Kumar',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09112',
				'role' => '0',
				'email' => 'ms09112@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Sapna',
				'last_name' => 'Meena',
				'reg_no' => 'MS09114',
				'role' => '0',
				'email' => 'ms09114@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Shambhu',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09117',
				'role' => '0',
				'email' => 'ms09117@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Shiv',
				'middle_name' => 'Charan',
				'last_name' => 'Dudi',
				'reg_no' => 'MS09119',
				'role' => '0',
				'email' => 'ms09119@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Shivpal',
				'middle_name' => 'Singh',
				'last_name' => 'Kang',
				'reg_no' => 'MS09120',
				'role' => '0',
				'email' => 'ms09120@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Sonika',
				'last_name' => ' ',
				'reg_no' => 'MS09123',
				'role' => '0',
				'email' => 'ms09123@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Soniya',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09124',
				'role' => '0',
				'email' => 'ms09124@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Srishti',
				'last_name' => 'Batra',
				'reg_no' => 'MS09126',
				'role' => '0',
				'email' => 'ms09126@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Sudeep',
				'last_name' => 'Maheshwari',
				'reg_no' => 'MS09127',
				'role' => '0',
				'email' => 'ms09127@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Titiksh',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09131',
				'role' => '0',
				'email' => 'ms09131@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Uttam',
				'middle_name' => 'Kumar',
				'last_name' => 'Saini',
				'reg_no' => 'MS09133',
				'role' => '0',
				'email' => 'ms09133@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Vidit',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS09134',
				'role' => '0',
				'email' => 'ms09134@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Vikash',
				'last_name' => 'Dhindhwal',
				'reg_no' => 'MS09135',
				'role' => '0',
				'email' => 'ms09135@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Vrinda',
				'middle_name' => 'Ravi',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09137',
				'role' => '0',
				'email' => 'ms09137@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Yash',
				'last_name' => 'Maurya',
				'reg_no' => 'MS09138',
				'role' => '0',
				'email' => 'ms09138@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Yatendra',
				'middle_name' => 'Singh',
				'last_name' => 'Arya',
				'reg_no' => 'MS09139',
				'role' => '0',
				'email' => 'ms09139@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Mariyam',
				'last_name' => 'Fatima',
				'reg_no' => 'MS09140(T)',
				'email' => 'ms09140t@iisermohali.ac.in'
			));
		}

		public function seed_admin()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'first_name' => 'Gagan',
				'middle_name' => 'Preet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08021',
				'role' => '1',
				'email' => 's.gagan.preet@gmail.com'
			));
			Student::create(array(
				'first_name' => 'Atul',
				'middle_name' => 'Singh',
				'last_name' => 'Arora',
				'reg_no' => 'MS11003',
				'role' => '1',
				'email' => 'toatularora@gmail.com'
			));
/*			Student::create(array(
				'first_name' => '',
				'last_name' => '',
				'last_name' => '',
				'reg_no' => '',
				'role' => '',
				'email' => ''
			));
			Student::create(array(
				'first_name' => '',
				'last_name' => '',
				'last_name' => '',
				'reg_no' => '',
				'role' => '',
				'email' => ''
			));
			Student::create(array(
				'first_name' => '',
				'last_name' => '',
				'last_name' => '',
				'reg_no' => '',
				'role' => '',
				'email' => ''
			));
			Student::create(array(
				'first_name' => '',
				'last_name' => '',
				'last_name' => '',
				'reg_no' => '',
				'role' => '',
				'email' => ''
			));
*/
		}

		public function seed09()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create( array(
				'first_name' => 'Aakash',
				'last_name' => 'Sharawat',
				'reg_no' => 'MS09001',
				'role' => '0',
				'email' => 'ms09001@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Abhijit',
				'last_name' => 'Pant',
				'reg_no' => 'MS09002',
				'role' => '0',
				'email' => 'ms09002@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Anand',
				'reg_no' => 'MS09003',
				'role' => '0',
				'email' => 'ms09003@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09004',
				'role' => '0',
				'email' => 'ms09004@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Mishra',
				'reg_no' => 'MS09005',
				'role' => '0',
				'email' => 'ms09005@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Adhikar',
				'last_name' => 'Bansiwal',
				'reg_no' => 'MS09007',
				'role' => '0',
				'email' => 'ms09007@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Aditya',
				'last_name' => ' ',
				'reg_no' => 'MS09008',
				'role' => '0',
				'email' => 'ms09008@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Aditya',
				'last_name' => 'Verma',
				'reg_no' => 'MS09009',
				'role' => '0',
				'email' => 'ms09009@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Agastya',
				'middle_name' => 'P',
				'last_name' => 'Bhati',
				'reg_no' => 'MS09010',
				'role' => '0',
				'email' => 'ms09010@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Akansha',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09011',
				'role' => '0',
				'email' => 'ms09011@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Akash',
				'middle_name' => 'Kumar',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09012',
				'role' => '0',
				'email' => 'ms09012@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Alok',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09013',
				'role' => '0',
				'email' => 'ms09013@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Amit',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS09014',
				'role' => '0',
				'email' => 'ms09014@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Anil',
				'middle_name' => 'Kumar',
				'last_name' => 'Jhingonia',
				'reg_no' => 'MS09015',
				'role' => '0',
				'email' => 'ms09015@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Anjali',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09016',
				'role' => '0',
				'email' => 'ms09016@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ankush',
				'last_name' => 'Checkervarty',
				'reg_no' => 'MS09018',
				'role' => '0',
				'email' => 'ms09018@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Anuj',
				'last_name' => 'Jakhar',
				'reg_no' => 'MS09020',
				'role' => '0',
				'email' => 'ms09020@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Anurag',
				'last_name' => 'Kulshrestha',
				'reg_no' => 'MS09022',
				'role' => '0',
				'email' => 'ms09022@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Arushi',
				'last_name' => 'Khattri',
				'reg_no' => 'MS09024',
				'role' => '0',
				'email' => 'ms09024@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Aseem',
				'last_name' => 'Tyagi',
				'reg_no' => 'MS09025',
				'role' => '0',
				'email' => 'ms09025@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ashima',
				'last_name' => 'Arora',
				'reg_no' => 'MS09026',
				'role' => '0',
				'email' => 'ms09026@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ashish',
				'last_name' => 'Verma',
				'reg_no' => 'MS09029',
				'role' => '0',
				'email' => 'ms09029@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ashutosh',
				'last_name' => 'Tripathi',
				'reg_no' => 'MS09031',
				'role' => '0',
				'email' => 'ms09031@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Atul',
				'last_name' => 'Mantri',
				'reg_no' => 'MS09033',
				'role' => '0',
				'email' => 'ms09033@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Atul',
				'last_name' => 'Verma',
				'reg_no' => 'MS09034',
				'role' => '0',
				'email' => 'ms09034@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Bharat',
				'middle_name' => 'Kumar',
				'last_name' => 'Gehlot',
				'reg_no' => 'MS09036',
				'role' => '0',
				'email' => 'ms09036@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Bia',
				'last_name' => 'Roy',
				'reg_no' => 'MS09037',
				'role' => '0',
				'email' => 'ms09037@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Chaman',
				'middle_name' => 'Lal',
				'last_name' => 'Mahawar',
				'reg_no' => 'MS09038',
				'role' => '0',
				'email' => 'ms09038@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Chandrakala',
				'last_name' => 'Meena',
				'reg_no' => 'MS09039',
				'role' => '0',
				'email' => 'ms09039@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Danish',
				'last_name' => 'Shamoon',
				'reg_no' => 'MS09041',
				'role' => '0',
				'email' => 'ms09041@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Debdatta',
				'middle_name' => 'Sinha',
				'last_name' => 'Roy',
				'reg_no' => 'MS09042',
				'role' => '0',
				'email' => 'ms09042@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Debi',
				'middle_name' => 'Prasad',
				'last_name' => 'Kar',
				'reg_no' => 'MS09043',
				'role' => '0',
				'email' => 'ms09043@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Deep',
				'middle_name' => 'Raj',
				'last_name' => 'Meena',
				'reg_no' => 'MS09044',
				'role' => '0',
				'email' => 'ms09044@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Deepak',
				'last_name' => 'Saroha',
				'reg_no' => 'MS09045',
				'role' => '0',
				'email' => 'ms09045@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Deepak',
				'last_name' => 'Verma',
				'reg_no' => 'MS09046',
				'role' => '0',
				'email' => 'ms09046@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Devender',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09049',
				'role' => '0',
				'email' => 'ms09049@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Dhirendra',
				'middle_name' => 'Pratap',
				'last_name' => 'Singh',
				'reg_no' => 'MS09050',
				'role' => '0',
				'email' => 'ms09050@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Gaurav',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS09051',
				'role' => '0',
				'email' => 'ms09051@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Gaurav',
				'last_name' => 'Verma',
				'reg_no' => 'MS09053',
				'role' => '0',
				'email' => 'ms09053@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Gursharanjeet',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS09055',
				'role' => '0',
				'email' => 'ms09055@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Harjit',
				'middle_name' => 'Singh',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS09056',
				'role' => '0',
				'email' => 'ms09056@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Harsh',
				'last_name' => 'Katyayan',
				'reg_no' => 'MS09057',
				'role' => '0',
				'email' => 'ms09057@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Himanshu',
				'last_name' => ' ',
				'reg_no' => 'MS09058',
				'role' => '0',
				'email' => 'ms09058@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Himanshu',
				'last_name' => 'Nagpal',
				'reg_no' => 'MS09059',
				'role' => '0',
				'email' => 'ms09059@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Hitesh',
				'last_name' => 'Gakhar',
				'reg_no' => 'MS09060',
				'role' => '0',
				'email' => 'ms09060@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Indrajeet',
				'last_name' => ' ',
				'reg_no' => 'MS09062',
				'role' => '0',
				'email' => 'ms09062@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Indu',
				'last_name' => 'Verma',
				'reg_no' => 'MS09063',
				'role' => '0',
				'email' => 'ms09063@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Jithin',
				'last_name' => 'Bhagavathi',
				'reg_no' => 'MS09064',
				'role' => '0',
				'email' => 'ms09064@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Jugal',
				'last_name' => 'Pant',
				'reg_no' => 'MS09065',
				'role' => '0',
				'email' => 'ms09065@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Jyoti',
				'last_name' => 'Saini',
				'reg_no' => 'MS09066',
				'role' => '0',
				'email' => 'ms09066@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kanwal',
				'middle_name' => 'Puneet',
				'last_name' => 'Kaur',
				'reg_no' => 'MS09068',
				'role' => '0',
				'email' => 'ms09068@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kapil',
				'last_name' => 'Bharti',
				'reg_no' => 'MS09069',
				'role' => '0',
				'email' => 'ms09069@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Karan',
				'middle_name' => 'Pratap Singh',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09070',
				'role' => '0',
				'email' => 'ms09070@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Karandeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS09071',
				'role' => '0',
				'email' => 'ms09071@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kritika',
				'last_name' => 'Singhal',
				'reg_no' => 'MS09072',
				'role' => '0',
				'email' => 'ms09072@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kuldeep',
				'middle_name' => 'Singh',
				'last_name' => 'Tomar',
				'reg_no' => 'MS09075',
				'role' => '0',
				'email' => 'ms09075@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Kumar',
				'last_name' => 'Gaurav',
				'reg_no' => 'MS09076',
				'role' => '0',
				'email' => 'ms09076@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Lokesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09078',
				'role' => '0',
				'email' => 'ms09078@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Mayank',
				'last_name' => 'Chugh',
				'reg_no' => 'MS09081',
				'role' => '0',
				'email' => 'ms09081@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Mayank',
				'last_name' => 'Mishra',
				'reg_no' => 'MS09082',
				'role' => '0',
				'email' => 'ms09082@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Meenakshi',
				'last_name' => 'Bagadia',
				'reg_no' => 'MS09083',
				'role' => '0',
				'email' => 'ms09083@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Nancy',
				'last_name' => 'Mathur',
				'reg_no' => 'MS09086',
				'role' => '0',
				'email' => 'ms09086@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Narendra',
				'middle_name' => 'Pal',
				'last_name' => 'Singh',
				'reg_no' => 'MS09087',
				'role' => '0',
				'email' => 'ms09087@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Neeraj',
				'last_name' => ' ',
				'reg_no' => 'MS09089',
				'role' => '0',
				'email' => 'ms09089@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Nishtha',
				'last_name' => 'Agarwal',
				'reg_no' => 'MS09091',
				'role' => '0',
				'email' => 'ms09091@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Nitin',
				'last_name' => 'Serwa',
				'reg_no' => 'MS09092',
				'role' => '0',
				'email' => 'ms09092@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Prateek',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09096',
				'role' => '0',
				'email' => 'ms09096@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Priyanka',
				'last_name' => 'Dogra',
				'reg_no' => 'MS09097',
				'role' => '0',
				'email' => 'ms09097@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09101',
				'role' => '0',
				'email' => 'ms09101@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'middle_name' => 'Kumar',
				'last_name' => 'Choudhary',
				'reg_no' => 'MS09102',
				'role' => '0',
				'email' => 'ms09102@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'middle_name' => 'Kumar',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09103',
				'role' => '0',
				'email' => 'ms09103@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rajveer',
				'last_name' => 'Nehra',
				'reg_no' => 'MS09104',
				'role' => '0',
				'email' => 'ms09104@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Ravi',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09105',
				'role' => '0',
				'email' => 'ms09105@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Rishi',
				'last_name' => 'Raj',
				'reg_no' => 'MS09108',
				'role' => '0',
				'email' => 'ms09108@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Saksham',
				'last_name' => 'Singh',
				'reg_no' => 'MS09111',
				'role' => '0',
				'email' => 'ms09111@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Sampat',
				'middle_name' => 'Kumar',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09112',
				'role' => '0',
				'email' => 'ms09112@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Sapna',
				'last_name' => 'Meena',
				'reg_no' => 'MS09114',
				'role' => '0',
				'email' => 'ms09114@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Shambhu',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09117',
				'role' => '0',
				'email' => 'ms09117@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Shiv',
				'middle_name' => 'Charan',
				'last_name' => 'Dudi',
				'reg_no' => 'MS09119',
				'role' => '0',
				'email' => 'ms09119@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Shivpal',
				'middle_name' => 'Singh',
				'last_name' => 'Kang',
				'reg_no' => 'MS09120',
				'role' => '0',
				'email' => 'ms09120@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Sonika',
				'last_name' => ' ',
				'reg_no' => 'MS09123',
				'role' => '0',
				'email' => 'ms09123@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Soniya',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09124',
				'role' => '0',
				'email' => 'ms09124@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Srishti',
				'last_name' => 'Batra',
				'reg_no' => 'MS09126',
				'role' => '0',
				'email' => 'ms09126@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Sudeep',
				'last_name' => 'Maheshwari',
				'reg_no' => 'MS09127',
				'role' => '0',
				'email' => 'ms09127@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Titiksh',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09131',
				'role' => '0',
				'email' => 'ms09131@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Uttam',
				'middle_name' => 'Kumar',
				'last_name' => 'Saini',
				'reg_no' => 'MS09133',
				'role' => '0',
				'email' => 'ms09133@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Vidit',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS09134',
				'role' => '0',
				'email' => 'ms09134@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Vikash',
				'last_name' => 'Dhindhwal',
				'reg_no' => 'MS09135',
				'role' => '0',
				'email' => 'ms09135@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Vrinda',
				'middle_name' => 'Ravi',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09137',
				'role' => '0',
				'email' => 'ms09137@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Yash',
				'last_name' => 'Maurya',
				'reg_no' => 'MS09138',
				'role' => '0',
				'email' => 'ms09138@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Yatendra',
				'middle_name' => 'Singh',
				'last_name' => 'Arya',
				'reg_no' => 'MS09139',
				'role' => '0',
				'email' => 'ms09139@iisermohali.ac.in'
			));
			Student::create( array(
				'first_name' => 'Mariyam',
				'last_name' => 'Fatima',
				'reg_no' => 'MS09140(T)',
				'email' => 'ms09140t@iisermohali.ac.in'
			));
		}
	}