<?php
	
	class Add_Students_Task
	{

		public function seed()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'first_name' => 'Gagan',
				'middle_name' => 'Preet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08021A',
				'role' => '1',
				'email' => 's.gagan.preet@gmail.com'
			));
			Student::create(array(
				'first_name' => 'Atul',
				'middle_name' => 'Singh',
				'last_name' => 'Arora',
				'reg_no' => 'MS11003A',
				'role' => '1',
				'email' => 'toatularora@gmail.com'
			));
			Student::create(array(
				'first_name' => 'Achyut',
				'middle_name' => 'Priya',
				'last_name' => 'Shukla',
				'reg_no' => 'MS07002',
				'role' => '0',
				'email' => 'ms07002@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amita',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS07003',
				'role' => '0',
				'email' => 'ms07003@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amol',
				'middle_name' => 'A',
				'last_name' => 'Deshmukh',
				'reg_no' => 'MS07004',
				'role' => '0',
				'email' => 'ms07004@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amol',
				'last_name' => 'Ratnaparkhe',
				'reg_no' => 'MS07005',
				'role' => '0',
				'email' => 'ms07005@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anurag',
				'last_name' => 'Kanaujia',
				'reg_no' => 'MS07006',
				'role' => '0',
				'email' => 'ms07006@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Bharat',
				'last_name' => 'Kohli',
				'reg_no' => 'M07007',
				'role' => '0',
				'email' => 'ms07007@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07008',
				'role' => '0',
				'email' => 'ms07008@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07009',
				'role' => '0',
				'email' => 'ms07009@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Dharmendra',
				'middle_name' => 'K',
				'last_name' => 'Singh',
				'reg_no' => 'MS07010',
				'role' => '0',
				'email' => 'ms07010@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kirandeep',
				'last_name' => 'Kaur',
				'reg_no' => 'MS07011',
				'role' => '0',
				'email' => 'ms07011@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mrinal',
				'last_name' => 'Shekhar',
				'reg_no' => 'MS07012',
				'role' => '0',
				'email' => 'ms07012@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mohit',
				'middle_name' => 'Satish',
				'last_name' => 'Tanga',
				'reg_no' => 'MS07013',
				'role' => '0',
				'email' => 'ms07013@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Naveen',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07014',
				'role' => '0',
				'email' => 'ms07014@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Parul',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07016',
				'role' => '0',
				'email' => 'ms07016@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prashant',
				'last_name' => 'Mishra',
				'reg_no' => 'MS07017',
				'role' => '0',
				'email' => 'ms07017@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rajni',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS07018',
				'role' => '0',
				'email' => 'ms07018@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rishi',
				'middle_name' => 'Raj',
				'last_name' => 'Trivedi',
				'reg_no' => 'MS07019',
				'role' => '0',
				'email' => 'ms07019@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sajan',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07020',
				'role' => '0',
				'email' => 'ms07020@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sameep',
				'last_name' => 'Chandel',
				'reg_no' => 'MS07021',
				'role' => '0',
				'email' => 'ms07021@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shalender',
				'last_name' => 'Jain',
				'reg_no' => 'MS07022',
				'role' => '0',
				'email' => 'ms07022@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Singamsetti',
				'last_name' => 'Srinivasulu',
				'reg_no' => 'MS07023',
				'role' => '0',
				'email' => 'ms07023@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tishu',
				'last_name' => 'Nandan',
				'reg_no' => 'MS07026',
				'role' => '0',
				'email' => 'ms07026@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Varun',
				'last_name' => 'Singh',
				'reg_no' => 'MS07028',
				'role' => '0',
				'email' => 'ms07028@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vinit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07029',
				'role' => '0',
				'email' => 'ms07029@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rakesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07030',
				'role' => '0',
				'email' => 'ms07030@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Apurv',
				'last_name' => 'Saxena',
				'reg_no' => 'MS08031T',
				'role' => '0',
				'email' => 'ms08031t@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Abhilasha',
				'last_name' => 'Joshi',
				'reg_no' => 'MS08001',
				'role' => '0',
				'email' => 'ms08001@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Abhishek',
				'last_name' => 'Goswami',
				'reg_no' => 'MS08003',
				'role' => '0',
				'email' => 'ms08003@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08006',
				'role' => '0',
				'email' => 'ms08006@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ankit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08007',
				'role' => '0',
				'email' => 'ms08007@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anshu',
				'last_name' => 'Gupta',
				'reg_no' => 'MS08008',
				'role' => '0',
				'email' => 'ms08008@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anuj',
				'last_name' => 'Shukla',
				'reg_no' => 'MS08010',
				'role' => '0',
				'email' => 'ms08010@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Arashdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS08011',
				'role' => '0',
				'email' => 'ms08011@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Asif',
				'last_name' => 'Equbal',
				'reg_no' => 'MS08014',
				'role' => '0',
				'email' => 'ms08014@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Deepansh',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS08016',
				'role' => '0',
				'email' => 'ms08016@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Devesh',
				'last_name' => 'Gokul',
				'reg_no' => 'MS08017',
				'role' => '0',
				'email' => 'ms08017@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Dilraj',
				'last_name' => 'Singh',
				'reg_no' => 'MS08018',
				'role' => '0',
				'email' => 'ms08018@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gade',
				'middle_name' => 'Vinay',
				'last_name' => 'Krishna',
				'reg_no' => 'MS08020',
				'role' => '0',
				'email' => 'ms08020@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gagan',
				'middle_name' => 'Preet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08021',
				'role' => '0',
				'email' => 'ms08021@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gaurav',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08022',
				'role' => '0',
				'email' => 'ms08022@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Himanshu',
				'last_name' => 'Sachan',
				'reg_no' => 'MS08024',
				'role' => '0',
				'email' => 'ms08024@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jagmohan',
				'last_name' => 'Solanki',
				'reg_no' => 'MS08025',
				'role' => '0',
				'email' => 'ms08025@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jithin',
				'middle_name' => 'Paul',
				'last_name' => 'M',
				'reg_no' => 'MS08026',
				'role' => '0',
				'email' => 'ms08026@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kapil',
				'last_name' => 'Dave',
				'reg_no' => 'MS08027',
				'role' => '0',
				'email' => 'ms08027@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Karishma',
				'last_name' => 'Bhasne',
				'reg_no' => 'MS08028',
				'role' => '0',
				'email' => 'ms08028@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kasturi',
				'last_name' => 'Banerjee',
				'reg_no' => 'MS08029',
				'role' => '0',
				'email' => 'ms08029@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Keshav',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS08030',
				'role' => '0',
				'email' => 'ms08030@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manish',
				'last_name' => 'Pareek',
				'reg_no' => 'MS08031',
				'role' => '0',
				'email' => 'ms08031@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manmeet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08032',
				'role' => '0',
				'email' => 'ms08032@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mehreen',
				'last_name' => 'Khaleel',
				'reg_no' => 'MS08033',
				'role' => '0',
				'email' => 'ms08033@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Neelam',
				'last_name' => 'Singh',
				'reg_no' => 'MS08034',
				'role' => '0',
				'email' => 'ms08034@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nikhil',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08035',
				'role' => '0',
				'email' => 'ms08035@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nilmani',
				'last_name' => 'Singh',
				'reg_no' => 'MS08036',
				'role' => '0',
				'email' => 'ms08036@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nishant',
				'last_name' => 'Singh',
				'reg_no' => 'MS08037',
				'role' => '0',
				'email' => 'ms08037@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitish',
				'last_name' => 'Sharma',
				'reg_no' => 'MS08039',
				'role' => '0',
				'email' => 'ms08039@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitish',
				'last_name' => 'Tayal',
				'reg_no' => 'MS08040',
				'role' => '0',
				'email' => 'ms08040@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prabhanjan',
				'middle_name' => 'Ramesh',
				'last_name' => 'Borwankar',
				'reg_no' => 'MS08041',
				'role' => '0',
				'email' => 'ms08041@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shashank',
				'last_name' => 'Yadav',
				'reg_no' => 'MS08046',
				'role' => '0',
				'email' => 'ms08046@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shivam',
				'last_name' => 'Bharadwaj',
				'reg_no' => 'MS08047',
				'role' => '0',
				'email' => 'ms08047@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sumit',
				'last_name' => 'Mittal',
				'reg_no' => 'MS08049',
				'role' => '0',
				'email' => 'ms08049@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Suraj',
				'middle_name' => 'Singh',
				'last_name' => 'Khurana',
				'reg_no' => 'MS08050',
				'role' => '0',
				'email' => 'ms08050@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Surajeet',
				'middle_name' => 'Kumar',
				'last_name' => 'Das',
				'reg_no' => 'MS08051',
				'role' => '0',
				'email' => 'ms08051@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vikesh',
				'last_name' => 'Siddhu',
				'reg_no' => 'MS08053',
				'role' => '0',
				'email' => 'ms08053@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vikram',
				'last_name' => 'Singh',
				'reg_no' => 'MS08054',
				'role' => '0',
				'email' => 'ms08054@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vinod',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08055',
				'role' => '0',
				'email' => 'ms08055@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vivek',
				'last_name' => 'Singh',
				'reg_no' => 'MS08056',
				'role' => '0',
				'email' => 'ms08056@iisermohali.ac.in'
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
				'role' => '0',
				'email' => 'ms09140t@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'D',
				'middle_name' => 'Jeiyendira',
				'last_name' => 'Pradeep',
				'reg_no' => 'MS10001',
				'email' => 'ms10001@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'H',
				'middle_name' => 'Rajanikanta',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10002',
				'email' => 'ms10002@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Pranay',
				'middle_name' => 'Deep',
				'last_name' => 'Rungta',
				'reg_no' => 'MS10004',
				'email' => 'ms10004@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prashant',
				'last_name' => 	' ',
				'reg_no' => 'MS10005',
				'email' => 'ms10005@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Pratip',
				'last_name' => 'Chakraborty',
				'reg_no' => 'MS10006',
				'email' => 'ms10006@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Upakul',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10008',
				'email' => 'ms10008@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prachi',
				'middle_name' => 'Madhukar',
				'last_name' => 'Dabhade',
				'reg_no' => 'MS10009',
				'email' => 'ms10009@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shahanaz',
				'last_name' => 'Nazar',
				'reg_no' => 'MS10010',
				'email' => 'ms10010@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sharmi',
				'last_name' => 'Sen',
				'reg_no' => 'MS10012',
				'email' => 'ms10012@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shachikanta',
				'last_name' => 'Nongthombam',
				'reg_no' => 'MS10013',
				'email' => 'ms10013@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ananya',
				'last_name' => 'Rastogi',
				'reg_no' => 'MS10015',
				'email' => 'ms10015@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Debanjana',
				'last_name' => 'Kundu',
				'reg_no' => 'MS10017',
				'email' => 'ms10017@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nidhi',
				'last_name' => 'Kaihnsa',
				'reg_no' => 'MS10020',
				'email' => 'ms10020@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Geetananda',
				'last_name' => 'Thingujam',
				'reg_no' => 'MS10022',
				'email' => 'ms10022@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ane',
				'middle_name' => 'Nishitha',
				'last_name' => 'V',
				'reg_no' => 'MS10023',
				'email' => 'ms10023@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Preetha',
				'last_name' => 'Saha',
				'reg_no' => 'MS10024',
				'email' => 'ms10024@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prerna',
				'last_name' => 'Paliwal',
				'reg_no' => 'MS10025',
				'email' => 'ms10025@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Aneeshma',
				'last_name' => 'Peter',
				'reg_no' => 'MS10026',
				'email' => 'ms10026@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ajeet',
				'middle_name' => 'Kumar',
				'last_name' => 'Choudhri',
				'reg_no' => 'MS10027',
				'email' => 'ms10027@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Irfana',
				'last_name' => 'Saleem',
				'reg_no' => 'MS10028',
				'email' => 'ms10028@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Cigole',
				'last_name' => 'Thomas',
				'reg_no' => 'MS10029',
				'email' => 'ms10029@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jagadish',
				'middle_name' => 'Prasad',
				'last_name' => 'Hazra',
				'reg_no' => 'MS10031',
				'email' => 'ms10031@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jagdale',
				'middle_name' => 'Gargi',
				'last_name' => 'Satishraj',
				'reg_no' => 'MS10032',
				'email' => 'ms10032@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mahendra',
				'last_name' => 'Singh',
				'reg_no' => 'MS10033',
				'email' => 'ms10033@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ushasi',
				'last_name' => 'Dutta',
				'reg_no' => 'MS10035',
				'email' => 'ms10035@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Akhil',
				'middle_name' => 'V',
				'last_name' => 'Gopal',
				'reg_no' => 'MS10036',
				'email' => 'ms10036@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Abhishek',
				'last_name' => 'Gaurav',
				'reg_no' => 'MS10037',
				'email' => 'ms10037@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rahul',
				'last_name' => 'Chajwa',
				'reg_no' => 'MS10038',
				'email' => 'ms10038@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kshitiz',
				'last_name' => 'Mohan',
				'reg_no' => 'MS10039',
				'email' => 'ms10039@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Asha',
				'last_name' => 'Raju',
				'reg_no' => 'MS10040',
				'email' => 'ms10040@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ashwani',
				'last_name' => 'Tomar',
				'reg_no' => 'MS10042',
				'email' => 'ms10042@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ashish',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10043',
				'email' => 'ms10043@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shivam',
				'last_name' => 'Umarvaishya',
				'reg_no' => 'MS10044',
				'email' => 'ms10044@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shiji',
				'middle_name' => 'L',
				'last_name' => 'V',
				'reg_no' => 'MS10045',
				'email' => 'ms10045@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shivprasad',
				'middle_name' => 'Gangadhar',
				'last_name' => 'Patil',
				'reg_no' => 'MS10047',
				'email' => 'ms10047@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shivprajval',
				'last_name' => 'Divakar',
				'reg_no' => 'MS10048',
				'email' => 'ms10048@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Priyanka',
				'middle_name' => 'Jeeth D',
				'last_name' => 'P',
				'reg_no' => 'MS10049',
				'email' => 'ms10049@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Aniket',
				'last_name' => 'Gaur',
				'reg_no' => 'MS10050',
				'email' =>'ms10050@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Krishna',
				'middle_name' => 'K',
				'last_name' => 'Das',
				'reg_no' => 'MS10051',
				'email' =>'ms10051@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rajat',
				'last_name' => 'Garg',
				'reg_no' => 'MS10053',
				'email' =>'ms10053@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tejinder',
				'middle_name' => 'Singh',
				'last_name' => 'Chechi',
				'reg_no' => 'MS10054',
				'email' =>'ms10054@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vikram',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10055',
				'email' =>'ms10055@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ankur',
				'middle_name' => 'Kr',
				'last_name' => 'Gupta',
				'reg_no' => 'MS10056',
				'email' =>'ms10056@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ankit',
				'middle_name' => 'Kumar',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS10057',
				'email' =>'ms10057@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sekhar',
				'middle_name' => 'M',
				'last_name' => 'A',
				'reg_no' => 'MS10058',
				'email' =>'ms10058@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sukriti',
				'last_name' => ' ',
				'reg_no' => 'MS10059',
				'email' =>'ms10059@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sukanya',
				'middle_name' => 'V',
				'last_name' => 'S',
				'reg_no' => 'MS10060',
				'email' =>'ms10060@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Lilit',
				'last_name' => 'Jacob',
				'reg_no' => 'MS10061',
				'email' =>'ms10061@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Pallavi',
				'last_name' => ' ',
				'reg_no' => 'MS10062',
				'email' =>'ms10062@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ramadasu',
				'last_name' => 'Swathi',
				'reg_no' => 'MS10063',
				'email' =>'ms10063@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Samant',
				'middle_name' => 'Manas',
				'last_name' => 'Arun',
				'reg_no' => 'MS10064',
				'email' =>'ms10064@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sumit',
				'middle_name' => 'Chandra',
				'last_name' => 'mishra',
				'reg_no' => 'MS10065',
				'email' =>'ms10065@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tanya',
				'middle_name' => 'Kaushal',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS10066',
				'email' =>'ms10066@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gunidhar',
				'last_name' => 'Yengkhom',
				'reg_no' => 'MS10067',
				'email' =>'ms10067@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Soniya',
				'last_name' => 'Rani',
				'reg_no' => 'MS10068',
				'email' =>'ms10068@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Monika',
				'last_name' => ' ',
				'reg_no' => 'MS10069',
				'email' =>'ms10069@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anoop',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10071',
				'email' =>'ms10071@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vipin',
				'middle_name' => 'T',
				'last_name' => 'Raj',
				'reg_no' => 'MS10073',
				'email' =>'ms10073@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rupali',
				'last_name' => 'Chawla',
				'reg_no' => 'MS10074',
				'email' =>'ms10074@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Harshita',
				'last_name' => 'Pawar',
				'reg_no' => 'MS10075',
				'email' =>'ms10075@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tara',
				'last_name' => 'George',
				'reg_no' => 'MS10076',
				'email' =>'ms10076@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Parvathy',
				'last_name' => 'Ramesh',
				'reg_no' => 'MS10077',
				'email' =>'ms10077@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Karande',
				'middle_name' => 'Kranti',
				'last_name' => 'Yuvaraj',
				'reg_no' => 'MS10078',
				'email' =>'ms10078@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nishant',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS10079',
				'email' =>'ms10079@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Haseeb',
				'last_name' => 'Hakkim',
				'reg_no' => 'MS10081',
				'email' =>'ms10081@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nishant',
				'last_name' => ' ',
				'reg_no' => 'MS10083',
				'email' =>'ms10083@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Pushkal',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS10084',
				'email' =>'ms10084@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Deshmukh',
				'middle_name' => 'Neeraj',
				'last_name' => 'Ravindra',
				'reg_no' => 'MS10085',
				'email' =>'ms10085@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Reshma',
				'last_name' => 'Murali',
				'reg_no' => 'MS10086',
				'email' =>'ms10086@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitesh',
				'last_name' => 'Bhardwaj',
				'reg_no' => 'MS10087',
				'email' =>'ms10087@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitish',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10088',
				'email' =>'ms10088@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitin',
				'middle_name' => 'Kumar',
				'last_name' => 'Singh',
				'reg_no' => 'MS10089',
				'email' =>'ms10089@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anubhav',
				'last_name' => ' ',
				'reg_no' => 'MS10091',
				'email' =>'ms10091@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anu',
				'last_name' => 'Yadav',
				'reg_no' => 'MS10092',
				'email' =>'ms10092@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Lourembam',
				'last_name' => 'Thoithoi',
				'reg_no' => 'MS10094',
				'email' =>'ms10094@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Arul',
				'middle_name' => 'Ganesh',
				'last_name' => 'S S',
				'reg_no' => 'MS10096',
				'email' =>'ms10096@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anubhuti',
				'last_name' => 'Singh',
				'reg_no' => 'MS10097',
				'email' =>'ms10097@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Raut',
				'middle_name' => 'Akshay',
				'last_name' => 'Hemant',
				'reg_no' => 'MS10098',
				'email' =>'ms10098@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => ' Divya',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10099',
				'email' =>'ms10099@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vivek',
				'middle_name' => 'B',
				'last_name' => 'Raina',
				'reg_no' => 'MS10100',
				'email' =>'ms10100@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Aaveg',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS10101',
				'email' =>'ms10101@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ravi',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS10102',
				'email' =>'ms10102@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ravinder',
				'last_name' => 'Singh',
				'reg_no' => 'MS10103',
				'email' =>'ms10103@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shweta',
				'last_name' => 'kumari',
				'reg_no' => 'MS10104',
				'email' =>'ms10104@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sayali',
				'middle_name' => 'Rangarao',
				'last_name' => 'Chougale',
				'reg_no' => 'MS10105',
				'email' =>'ms10105@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Piyush',
				'last_name' => 'Mishra',
				'reg_no' => 'MS10106',
				'email' =>'ms10106@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Arya',
				'middle_name' => 'J',
				'last_name' => 'S',
				'reg_no' => 'MS10107',
				'email' =>'ms10107@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manpreet',
				'last_name' => 'Kaler',
				'reg_no' => 'MS10108',
				'email' =>'ms10108@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mahima',
				'last_name' => ' ',
				'reg_no' => 'MS10109',
				'email' =>'ms10109@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Bharti',
				'last_name' => 'Kumari',
				'reg_no' => 'MS10110',
				'email' =>'ms10110@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nirdosh',
				'last_name' => 'Dadwal',
				'reg_no' => 'MS10111',
				'email' =>'ms10111@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ashima',
				'middle_name' => 'Valentina',
				'last_name' => 'Minj',
				'reg_no' => 'MS10112',
				'email' =>'ms10112@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Monish',
				'middle_name' => 'Kr`',
				'last_name' => 'Babbar',
				'reg_no' => 'MS10113',
				'email' =>'ms10113@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Bangal',
				'middle_name' => 'Yogesh',
				'last_name' => 'Manga',
				'reg_no' => 'MS10114',
				'email' =>'ms10114@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Navdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS10116',
				'email' => 'ms10116@iisermohali.ac.in'
			));
		
		}

		public function seed07()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'first_name' => 'Achyut',
				'middle_name' => 'Priya',
				'last_name' => 'Shukla',
				'reg_no' => 'MS07002',
				'role' => '0',
				'email' => 'ms07002@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amita',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS07003',
				'role' => '0',
				'email' => 'ms07003@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amol',
				'middle_name' => 'A',
				'last_name' => 'Deshmukh',
				'reg_no' => 'MS07004',
				'role' => '0',
				'email' => 'ms07004@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amol',
				'last_name' => 'Ratnaparkhe',
				'reg_no' => 'MS07005',
				'role' => '0',
				'email' => 'ms07005@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anurag',
				'last_name' => 'Kanaujia',
				'reg_no' => 'MS07006',
				'role' => '0',
				'email' => 'ms07006@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Bharat',
				'last_name' => 'Kohli',
				'reg_no' => 'M07007',
				'role' => '0',
				'email' => 'ms07007@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07008',
				'role' => '0',
				'email' => 'ms07008@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07009',
				'role' => '0',
				'email' => 'ms07009@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Dharmendra',
				'middle_name' => 'K',
				'last_name' => 'Singh',
				'reg_no' => 'MS07010',
				'role' => '0',
				'email' => 'ms07010@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kirandeep',
				'last_name' => 'Kaur',
				'reg_no' => 'MS07011',
				'role' => '0',
				'email' => 'ms07011@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mrinal',
				'last_name' => 'Shekhar',
				'reg_no' => 'MS07012',
				'role' => '0',
				'email' => 'ms07012@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mohit',
				'middle_name' => 'Satish',
				'last_name' => 'Tanga',
				'reg_no' => 'MS07013',
				'role' => '0',
				'email' => 'ms07013@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Naveen',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07014',
				'role' => '0',
				'email' => 'ms07014@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Parul',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07016',
				'role' => '0',
				'email' => 'ms07016@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prashant',
				'last_name' => 'Mishra',
				'reg_no' => 'MS07017',
				'role' => '0',
				'email' => 'ms07017@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rajni',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS07018',
				'role' => '0',
				'email' => 'ms07018@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rishi',
				'middle_name' => 'Raj',
				'last_name' => 'Trivedi',
				'reg_no' => 'MS07019',
				'role' => '0',
				'email' => 'ms07019@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sajan',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07020',
				'role' => '0',
				'email' => 'ms07020@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sameep',
				'last_name' => 'Chandel',
				'reg_no' => 'MS07021',
				'role' => '0',
				'email' => 'ms07021@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shalender',
				'last_name' => 'Jain',
				'reg_no' => 'MS07022',
				'role' => '0',
				'email' => 'ms07022@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Singamsetti',
				'last_name' => 'Srinivasulu',
				'reg_no' => 'MS07023',
				'role' => '0',
				'email' => 'ms07023@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tishu',
				'last_name' => 'Nandan',
				'reg_no' => 'MS07026',
				'role' => '0',
				'email' => 'ms07026@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Varun',
				'last_name' => 'Singh',
				'reg_no' => 'MS07028',
				'role' => '0',
				'email' => 'ms07028@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vinit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07029',
				'role' => '0',
				'email' => 'ms07029@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rakesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07030',
				'role' => '0',
				'email' => 'ms07030@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Apurv',
				'last_name' => 'Saxena',
				'reg_no' => 'MS08031T',
				'role' => '0',
				'email' => 'ms08031t@iisermohali.ac.in'
			));

		}

		public function seed08()
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
				'first_name' => 'Abhilasha',
				'last_name' => 'Joshi',
				'reg_no' => 'MS08001',
				'role' => '0',
				'email' => 'ms08001@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Abhishek',
				'last_name' => 'Goswami',
				'reg_no' => 'MS08003',
				'role' => '0',
				'email' => 'ms08003@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08006',
				'role' => '0',
				'email' => 'ms08006@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ankit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08007',
				'role' => '0',
				'email' => 'ms08007@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anshu',
				'last_name' => 'Gupta',
				'reg_no' => 'MS08008',
				'role' => '0',
				'email' => 'ms08008@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anuj',
				'last_name' => 'Shukla',
				'reg_no' => 'MS08010',
				'role' => '0',
				'email' => 'ms08010@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Arashdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS08011',
				'role' => '0',
				'email' => 'ms08011@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Asif',
				'last_name' => 'Equbal',
				'reg_no' => 'MS08014',
				'role' => '0',
				'email' => 'ms08014@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Deepansh',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS08016',
				'role' => '0',
				'email' => 'ms08016@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Devesh',
				'last_name' => 'Gokul',
				'reg_no' => 'MS08017',
				'role' => '0',
				'email' => 'ms08017@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Dilraj',
				'last_name' => 'Singh',
				'reg_no' => 'MS08018',
				'role' => '0',
				'email' => 'ms08018@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gade',
				'middle_name' => 'Vinay',
				'last_name' => 'Krishna',
				'reg_no' => 'MS08020',
				'role' => '0',
				'email' => 'ms08020@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gagan',
				'middle_name' => 'Preet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08021',
				'role' => '0',
				'email' => 'ms08021@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gaurav',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08022',
				'role' => '0',
				'email' => 'ms08022@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Himanshu',
				'last_name' => 'Sachan',
				'reg_no' => 'MS08024',
				'role' => '0',
				'email' => 'ms08024@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jagmohan',
				'last_name' => 'Solanki',
				'reg_no' => 'MS08025',
				'role' => '0',
				'email' => 'ms08025@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jithin',
				'middle_name' => 'Paul',
				'last_name' => 'M',
				'reg_no' => 'MS08026',
				'role' => '0',
				'email' => 'ms08026@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kapil',
				'last_name' => 'Dave',
				'reg_no' => 'MS08027',
				'role' => '0',
				'email' => 'ms08027@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Karishma',
				'last_name' => 'Bhasne',
				'reg_no' => 'MS08028',
				'role' => '0',
				'email' => 'ms08028@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kasturi',
				'last_name' => 'Banerjee',
				'reg_no' => 'MS08029',
				'role' => '0',
				'email' => 'ms08029@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Keshav',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS08030',
				'role' => '0',
				'email' => 'ms08030@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manish',
				'last_name' => 'Pareek',
				'reg_no' => 'MS08031',
				'role' => '0',
				'email' => 'ms08031@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manmeet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08032',
				'role' => '0',
				'email' => 'ms08032@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mehreen',
				'last_name' => 'Khaleel',
				'reg_no' => 'MS08033',
				'role' => '0',
				'email' => 'ms08033@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Neelam',
				'last_name' => 'Singh',
				'reg_no' => 'MS08034',
				'role' => '0',
				'email' => 'ms08034@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nikhil',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08035',
				'role' => '0',
				'email' => 'ms08035@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nilmani',
				'last_name' => 'Singh',
				'reg_no' => 'MS08036',
				'role' => '0',
				'email' => 'ms08036@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nishant',
				'last_name' => 'Singh',
				'reg_no' => 'MS08037',
				'role' => '0',
				'email' => 'ms08037@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitish',
				'last_name' => 'Sharma',
				'reg_no' => 'MS08039',
				'role' => '0',
				'email' => 'ms08039@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitish',
				'last_name' => 'Tayal',
				'reg_no' => 'MS08040',
				'role' => '0',
				'email' => 'ms08040@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prabhanjan',
				'middle_name' => 'Ramesh',
				'last_name' => 'Borwankar',
				'reg_no' => 'MS08041',
				'role' => '0',
				'email' => 'ms08041@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shashank',
				'last_name' => 'Yadav',
				'reg_no' => 'MS08046',
				'role' => '0',
				'email' => 'ms08046@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shivam',
				'last_name' => 'Bharadwaj',
				'reg_no' => 'MS08047',
				'role' => '0',
				'email' => 'ms08047@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sumit',
				'last_name' => 'Mittal',
				'reg_no' => 'MS08049',
				'role' => '0',
				'email' => 'ms08049@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Suraj',
				'middle_name' => 'Singh',
				'last_name' => 'Khurana',
				'reg_no' => 'MS08050',
				'role' => '0',
				'email' => 'ms08050@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Surajeet',
				'middle_name' => 'Kumar',
				'last_name' => 'Das',
				'reg_no' => 'MS08051',
				'role' => '0',
				'email' => 'ms08051@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vikesh',
				'last_name' => 'Siddhu',
				'reg_no' => 'MS08053',
				'role' => '0',
				'email' => 'ms08053@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vikram',
				'last_name' => 'Singh',
				'reg_no' => 'MS08054',
				'role' => '0',
				'email' => 'ms08054@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vinod',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08055',
				'role' => '0',
				'email' => 'ms08055@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vivek',
				'last_name' => 'Singh',
				'reg_no' => 'MS08056',
				'role' => '0',
				'email' => 'ms08056@iisermohali.ac.in'
			));

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
				'role' => '0',
				'email' => 'ms09140t@iisermohali.ac.in'
			));
		
		}

		public function seed10()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'first_name' => 'D',
				'middle_name' => 'Jeiyendira',
				'last_name' => 'Pradeep',
				'reg_no' => 'MS10001',
				'email' => 'ms10001@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'H',
				'middle_name' => 'Rajanikanta',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10002',
				'email' => 'ms10002@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Pranay',
				'middle_name' => 'Deep',
				'last_name' => 'Rungta',
				'reg_no' => 'MS10004',
				'email' => 'ms10004@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prashant',
				'last_name' => 	' ',
				'reg_no' => 'MS10005',
				'email' => 'ms10005@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Pratip',
				'last_name' => 'Chakraborty',
				'reg_no' => 'MS10006',
				'email' => 'ms10006@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Upakul',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10008',
				'email' => 'ms10008@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prachi',
				'middle_name' => 'Madhukar',
				'last_name' => 'Dabhade',
				'reg_no' => 'MS10009',
				'email' => 'ms10009@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shahanaz',
				'last_name' => 'Nazar',
				'reg_no' => 'MS10010',
				'email' => 'ms10010@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sharmi',
				'last_name' => 'Sen',
				'reg_no' => 'MS10012',
				'email' => 'ms10012@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shachikanta',
				'last_name' => 'Nongthombam',
				'reg_no' => 'MS10013',
				'email' => 'ms10013@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ananya',
				'last_name' => 'Rastogi',
				'reg_no' => 'MS10015',
				'email' => 'ms10015@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Debanjana',
				'last_name' => 'Kundu',
				'reg_no' => 'MS10017',
				'email' => 'ms10017@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nidhi',
				'last_name' => 'Kaihnsa',
				'reg_no' => 'MS10020',
				'email' => 'ms10020@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Geetananda',
				'last_name' => 'Thingujam',
				'reg_no' => 'MS10022',
				'email' => 'ms10022@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ane',
				'middle_name' => 'Nishitha',
				'last_name' => 'V',
				'reg_no' => 'MS10023',
				'email' => 'ms10023@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Preetha',
				'last_name' => 'Saha',
				'reg_no' => 'MS10024',
				'email' => 'ms10024@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prerna',
				'last_name' => 'Paliwal',
				'reg_no' => 'MS10025',
				'email' => 'ms10025@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Aneeshma',
				'last_name' => 'Peter',
				'reg_no' => 'MS10026',
				'email' => 'ms10026@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ajeet',
				'middle_name' => 'Kumar',
				'last_name' => 'Choudhri',
				'reg_no' => 'MS10027',
				'email' => 'ms10027@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Irfana',
				'last_name' => 'Saleem',
				'reg_no' => 'MS10028',
				'email' => 'ms10028@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Cigole',
				'last_name' => 'Thomas',
				'reg_no' => 'MS10029',
				'email' => 'ms10029@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jagadish',
				'middle_name' => 'Prasad',
				'last_name' => 'Hazra',
				'reg_no' => 'MS10031',
				'email' => 'ms10031@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jagdale',
				'middle_name' => 'Gargi',
				'last_name' => 'Satishraj',
				'reg_no' => 'MS10032',
				'email' => 'ms10032@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mahendra',
				'last_name' => 'Singh',
				'reg_no' => 'MS10033',
				'email' => 'ms10033@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ushasi',
				'last_name' => 'Dutta',
				'reg_no' => 'MS10035',
				'email' => 'ms10035@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Akhil',
				'middle_name' => 'V',
				'last_name' => 'Gopal',
				'reg_no' => 'MS10036',
				'email' => 'ms10036@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Abhishek',
				'last_name' => 'Gaurav',
				'reg_no' => 'MS10037',
				'email' => 'ms10037@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rahul',
				'last_name' => 'Chajwa',
				'reg_no' => 'MS10038',
				'email' => 'ms10038@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kshitiz',
				'last_name' => 'Mohan',
				'reg_no' => 'MS10039',
				'email' => 'ms10039@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Asha',
				'last_name' => 'Raju',
				'reg_no' => 'MS10040',
				'email' => 'ms10040@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ashwani',
				'last_name' => 'Tomar',
				'reg_no' => 'MS10042',
				'email' => 'ms10042@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ashish',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10043',
				'email' => 'ms10043@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shivam',
				'last_name' => 'Umarvaishya',
				'reg_no' => 'MS10044',
				'email' => 'ms10044@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shiji',
				'middle_name' => 'L',
				'last_name' => 'V',
				'reg_no' => 'MS10045',
				'email' => 'ms10045@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shivprasad',
				'middle_name' => 'Gangadhar',
				'last_name' => 'Patil',
				'reg_no' => 'MS10047',
				'email' => 'ms10047@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shivprajval',
				'last_name' => 'Divakar',
				'reg_no' => 'MS10048',
				'email' => 'ms10048@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Priyanka',
				'middle_name' => 'Jeeth D',
				'last_name' => 'P',
				'reg_no' => 'MS10049',
				'email' => 'ms10049@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Aniket',
				'last_name' => 'Gaur',
				'reg_no' => 'MS10050',
				'email' =>'ms10050@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Krishna',
				'middle_name' => 'K',
				'last_name' => 'Das',
				'reg_no' => 'MS10051',
				'email' =>'ms10051@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rajat',
				'last_name' => 'Garg',
				'reg_no' => 'MS10053',
				'email' =>'ms10053@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tejinder',
				'middle_name' => 'Singh',
				'last_name' => 'Chechi',
				'reg_no' => 'MS10054',
				'email' =>'ms10054@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vikram',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10055',
				'email' =>'ms10055@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ankur',
				'middle_name' => 'Kr',
				'last_name' => 'Gupta',
				'reg_no' => 'MS10056',
				'email' =>'ms10056@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ankit',
				'middle_name' => 'Kumar',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS10057',
				'email' =>'ms10057@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sekhar',
				'middle_name' => 'M',
				'last_name' => 'A',
				'reg_no' => 'MS10058',
				'email' =>'ms10058@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sukriti',
				'last_name' => ' ',
				'reg_no' => 'MS10059',
				'email' =>'ms10059@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sukanya',
				'middle_name' => 'V',
				'last_name' => 'S',
				'reg_no' => 'MS10060',
				'email' =>'ms10060@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Lilit',
				'last_name' => 'Jacob',
				'reg_no' => 'MS10061',
				'email' =>'ms10061@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Pallavi',
				'last_name' => ' ',
				'reg_no' => 'MS10062',
				'email' =>'ms10062@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ramadasu',
				'last_name' => 'Swathi',
				'reg_no' => 'MS10063',
				'email' =>'ms10063@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Samant',
				'middle_name' => 'Manas',
				'last_name' => 'Arun',
				'reg_no' => 'MS10064',
				'email' =>'ms10064@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sumit',
				'middle_name' => 'Chandra',
				'last_name' => 'mishra',
				'reg_no' => 'MS10065',
				'email' =>'ms10065@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tanya',
				'middle_name' => 'Kaushal',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS10066',
				'email' =>'ms10066@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gunidhar',
				'last_name' => 'Yengkhom',
				'reg_no' => 'MS10067',
				'email' =>'ms10067@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Soniya',
				'last_name' => 'Rani',
				'reg_no' => 'MS10068',
				'email' =>'ms10068@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Monika',
				'last_name' => ' ',
				'reg_no' => 'MS10069',
				'email' =>'ms10069@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anoop',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10071',
				'email' =>'ms10071@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vipin',
				'middle_name' => 'T',
				'last_name' => 'Raj',
				'reg_no' => 'MS10073',
				'email' =>'ms10073@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rupali',
				'last_name' => 'Chawla',
				'reg_no' => 'MS10074',
				'email' =>'ms10074@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Harshita',
				'last_name' => 'Pawar',
				'reg_no' => 'MS10075',
				'email' =>'ms10075@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Tara',
				'last_name' => 'George',
				'reg_no' => 'MS10076',
				'email' =>'ms10076@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Parvathy',
				'last_name' => 'Ramesh',
				'reg_no' => 'MS10077',
				'email' =>'ms10077@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Karande',
				'middle_name' => 'Kranti',
				'last_name' => 'Yuvaraj',
				'reg_no' => 'MS10078',
				'email' =>'ms10078@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nishant',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS10079',
				'email' =>'ms10079@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Haseeb',
				'last_name' => 'Hakkim',
				'reg_no' => 'MS10081',
				'email' =>'ms10081@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nishant',
				'last_name' => ' ',
				'reg_no' => 'MS10083',
				'email' =>'ms10083@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Pushkal',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS10084',
				'email' =>'ms10084@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Deshmukh',
				'middle_name' => 'Neeraj',
				'last_name' => 'Ravindra',
				'reg_no' => 'MS10085',
				'email' =>'ms10085@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Reshma',
				'last_name' => 'Murali',
				'reg_no' => 'MS10086',
				'email' =>'ms10086@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitesh',
				'last_name' => 'Bhardwaj',
				'reg_no' => 'MS10087',
				'email' =>'ms10087@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitish',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10088',
				'email' =>'ms10088@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nitin',
				'middle_name' => 'Kumar',
				'last_name' => 'Singh',
				'reg_no' => 'MS10089',
				'email' =>'ms10089@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anubhav',
				'last_name' => ' ',
				'reg_no' => 'MS10091',
				'email' =>'ms10091@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anu',
				'last_name' => 'Yadav',
				'reg_no' => 'MS10092',
				'email' =>'ms10092@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Lourembam',
				'last_name' => 'Thoithoi',
				'reg_no' => 'MS10094',
				'email' =>'ms10094@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Arul',
				'middle_name' => 'Ganesh',
				'last_name' => 'S S',
				'reg_no' => 'MS10096',
				'email' =>'ms10096@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anubhuti',
				'last_name' => 'Singh',
				'reg_no' => 'MS10097',
				'email' =>'ms10097@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Raut',
				'middle_name' => 'Akshay',
				'last_name' => 'Hemant',
				'reg_no' => 'MS10098',
				'email' =>'ms10098@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => ' Divya',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10099',
				'email' =>'ms10099@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vivek',
				'middle_name' => 'B',
				'last_name' => 'Raina',
				'reg_no' => 'MS10100',
				'email' =>'ms10100@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Aaveg',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS10101',
				'email' =>'ms10101@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ravi',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS10102',
				'email' =>'ms10102@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ravinder',
				'last_name' => 'Singh',
				'reg_no' => 'MS10103',
				'email' =>'ms10103@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shweta',
				'last_name' => 'kumari',
				'reg_no' => 'MS10104',
				'email' =>'ms10104@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sayali',
				'middle_name' => 'Rangarao',
				'last_name' => 'Chougale',
				'reg_no' => 'MS10105',
				'email' =>'ms10105@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Piyush',
				'last_name' => 'Mishra',
				'reg_no' => 'MS10106',
				'email' =>'ms10106@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Arya',
				'middle_name' => 'J',
				'last_name' => 'S',
				'reg_no' => 'MS10107',
				'email' =>'ms10107@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manpreet',
				'last_name' => 'Kaler',
				'reg_no' => 'MS10108',
				'email' =>'ms10108@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Mahima',
				'last_name' => ' ',
				'reg_no' => 'MS10109',
				'email' =>'ms10109@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Bharti',
				'last_name' => 'Kumari',
				'reg_no' => 'MS10110',
				'email' =>'ms10110@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Nirdosh',
				'last_name' => 'Dadwal',
				'reg_no' => 'MS10111',
				'email' =>'ms10111@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ashima',
				'middle_name' => 'Valentina',
				'last_name' => 'Minj',
				'reg_no' => 'MS10112',
				'email' =>'ms10112@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Monish',
				'middle_name' => 'Kr`',
				'last_name' => 'Babbar',
				'reg_no' => 'MS10113',
				'email' =>'ms10113@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Bangal',
				'middle_name' => 'Yogesh',
				'last_name' => 'Manga',
				'reg_no' => 'MS10114',
				'email' =>'ms10114@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Navdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS10116',
				'email' => 'ms10116@iisermohali.ac.in'
			));

		}

		public function seed11()
		{
			DB::query('TRUNCATE TABLE students');));
			Student::create(array(
				'first_name' => 'Athira',
				'middle_name' => 'J',
				'last_name' => 'Nair',
				'reg_no' => 'MS11001',
				'email' => 'ms11001@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Arpit',
				'last_name' => 'Porwal',
				'reg_no' => 'MS11002',
				'email' => 'ms11002@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Atul',
				'middle_name' => 'Singh',
				'last_name' => 'Arora',
				'reg_no' => 'MS11003',
				'email' => 'ms11003@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Biplob',
				'middle_name' => 'Kumar',
				'last_name' => 'Nandy',
				'reg_no' => 'MS11004',
				'email' => 'ms11004@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Saumya',
				'last_name' => 'Gupta',
				'reg_no' => 'MS11005',
				'email' => 'ms11005@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Srijit',
				'last_name' => 'Mukherjee',
				'reg_no' => 'MS11006',
				'email' => 'ms11006@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kirti',
				'last_name' => 'Singh',
				'reg_no' => 'MS11007',
				'email' => 'ms11007@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Abhishek',
				'last_name' => ' ',
				'reg_no' => 'MS11009',
				'email' => 'ms11009@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Joydeep',
				'last_name' => 'Chakravarthy',
				'reg_no' => 'MS11010',
				'email' => 'ms11010@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Love',
				'last_name' => 'Grover',
				'reg_no' => 'MS11011',
				'email' => 'ms11011@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Garima',
				'last_name' => 'Singh',
				'reg_no' => 'MS11012',
				'email' => 'ms11012@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Neha',
				'last_name' => 'Sharma',
				'reg_no' => 'MS11014',
				'email' => 'ms11014@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Devwrat',
				'last_name' => 'Dube',
				'reg_no' => 'MS11015',
				'email' => 'ms11015@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Kishor',
				'last_name' => 'Bharti',
				'reg_no' => 'MS11016',
				'email' => 'ms11016@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vivek',
				'last_name' => 'Sagar',
				'reg_no' => 'MS11017',
				'email' => 'ms11017@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rajendra',
				'middle_name' => 'Singh',
				'last_name' => 'Bhati',
				'reg_no' => 'MS11019',
				'email' => 'ms11019@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Deepanshu',
				'last_name' => ' ',
				'reg_no' => 'MS11020',
				'email' => 'ms11020@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Prashansa',
				'last_name' => 'Gupta',
				'reg_no' => 'MS11021',
				'email' => 'ms11021@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Diksha',
				'last_name' => 'Jain',
				'reg_no' => 'MS11022',
				'email' => 'ms11022@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shiven',
				'last_name' => 'Dhiman',
				'reg_no' => 'MS11023',
				'email' => 'ms11023@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Akshey',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS11024',
				'email' => 'ms11024@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ritu',
				'middle_name' => 'Roy',
				'last_name' => 'Choudhury',
				'reg_no' => 'MS11025',
				'email' => 'ms11025@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Abhinav',
				'last_name' => 'Kala',
				'reg_no' => 'MS11026',
				'email' => 'ms11026@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jopaul',
				'last_name' => 'Mathew',
				'reg_no' => 'MS11027',
				'email' => 'ms11027@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Akhilrag',
				'last_name' => 'K',
				'reg_no' => 'MS11028',
				'email' => 'ms11028@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Athira',
				'middle_name' => 'T',
				'last_name' => 'John',
				'reg_no' => 'MS11029',
				'email' => 'ms11029@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Akhil',
				'last_name' => 'Francis',
				'reg_no' => 'MS11030',
				'email' => 'ms11030@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anooja',
				'last_name' => 'Jayaraj',
				'reg_no' => 'MS11031',
				'email' => 'ms11031@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shubham',
				'last_name' => 'Chauhan',
				'reg_no' => 'MS11032',
				'email' => 'ms11032@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manu',
				'last_name' => 'J',
				'reg_no' => 'MS11033',
				'email' => 'ms11033@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sruthi',
				'last_name' => 'Mohan',
				'reg_no' => 'MS11034',
				'email' => 'ms11034@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Evelyn',
				'last_name' => 'Abraham',
				'reg_no' => 'MS11035',
				'email' => 'ms11035@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manisha',
				'last_name' => ' ',
				'reg_no' => 'MS11036',
				'email' => 'ms11036@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Amritha',
				'last_name' => 'Sreekumar',
				'reg_no' => 'MS11037',
				'email' => 'ms11037@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sandhya',
				'last_name' => ' ',
				'reg_no' => 'MS11038',
				'email' => 'ms11038@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Justin',
				'middle_name' => 'K',
				'last_name' => 'Thomas',
				'reg_no' => 'MS11039',
				'email' => 'ms11039@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Aakanksha',
				'last_name' => 'Rawat',
				'reg_no' => 'MS11040',
				'email' => 'ms11040@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Varun',
				'last_name' => 'Kumar',
				'reg_no' => 'MS11041',
				'email' => 'ms11041@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Yashpal',
				'last_name' => 'Singh',
				'reg_no' => 'MS11042',
				'email' => 'ms11042@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gaikwad',
				'middle_name' => 'Akshay',
				'last_name' => 'Ramdas',
				'reg_no' => 'MS11043',
				'email' => 'ms11043@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manvendra',
				'last_name' => 'Singh',
				'reg_no' => 'MS11044',
				'email' => 'ms11044@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Shwetha',
				'last_name' =>. 'S',
				'reg_no' => 'MS11045',
				'email' => 'ms11045@iisermohali.ac.in'
		));
			Student::create(array(
				'first_name' => 'Tess',
			'last_name' =>	 'George',
			'reg_no' => 'MS1104',,
			'email' => 'ms11046@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gobbilla',
				'middle_name' => 'Sai',
				'last_name' =>. 'Kumar',
				'reg_no' => 'MS11047',
				'email' => 'ms11047@iisermohali.ac.in'
		));
			Student::create(array(
				'first_name' => 'Thapasya',
			'last_name' =>	 'Vijayan',
			'reg_no' => 'MS1104',,
			'email' => 'ms11048@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Partha',
				'middle_name' => 'Sankar',
				'last_name' => 'R P S',
				'reg_no' => 'MS11049',
				'email' => 'ms11049@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Priyanka',
				'middle_name' => 'Sudheendra',
				'last_name' => 'Jamadagni',
				'reg_no' => 'MS11050',
				'email' => 'ms11050@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Biswajit',
				'last_name' => 'Panda',
				'reg_no' => 'MS11051',
				'email' => 'ms11051@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Raminder',
				'last_name' => 'Singh',
				'reg_no' => 'MS11052',
				'email' => 'ms11052@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Saurabh',
				'last_name' => 'Thapliyal',
				'reg_no' => 'MS11053',
				'email' => 'ms11053@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Sabari',
				'last_name' => 'R',
				'middle_name' => 'V',
				'reg_no' => 'MS11054',
				'email' => 'ms11054@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Teke',
				'middle_name' =>	 'Nakul',
				'last_name' => 'Kushabhau',
				'reg_no' => 'MS1105',,
				'email' => 'ms11055@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Abhinay',
				'last_name' => 'Vardhan',
				'reg_no' => 'MS11057',
				'email' => 'ms11057@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gyanendra',
				'last_name' => 'Yadav',
				'reg_no' => 'MS11058',
				'email' => 'ms11058@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rashmi',
				'last_name' => 'Jain',
				'reg_no' => 'MS11059',
				'email' => 'ms11059@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Yosman',
				'middle_name' => 'Bapat',
				'last_name' => 'Dhar',
				'reg_no' => 'MS11060',
				'email' => 'ms11060@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Jagdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS11061',
				'email' => 'ms11061@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rohit',
				'middle_name' => 'Kumar',
				'last_name' => 'Patidar',
				'reg_no' => 'MS11062',
				'email' => 'ms11062@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Aiswarya',
				'middle_name' => 'Joy',
				'last_name' => 'M',
				'reg_no' => 'MS11063',
				'email' => 'ms11063@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Lakshmi',
				'middle_name' => 'Bhai',
				'last_name' => 'N V',
				'reg_no' => 'MS11064',
				'email' => 'ms11064@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Deepthi',
				'middle_name' => 'Krishna',
				'last_name' => 'P',
				'reg_no' => 'MS11065',
				'email' => 'ms11065@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Harikrishnan',
				'middle_name' => 'P',
				'last_name' => 'S',
				'reg_no' => 'MS11066',
				'email' => 'ms11066@iisermohali.ac.in'
		));
			Student::create(array(
				'first_name' => 'Vivek',
			'last_name' =>	 'Singh',
			'reg_no' => 'MS1106',,
			'email' => 'ms11067@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Arsila',
				'middle_name' => 'Ashraf',
				'last_name' => 'P K',
				'reg_no' => 'MS11068',
				'email' => 'ms11068@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Gursimranjeet',
				'last_name' => 'Singh',
				'reg_no' => 'MS11070',
				'email' => 'ms11070@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Aman',
				'middle_name' => 'Kumar',
				'last_name' => 'Bhonsle',
				'reg_no' => 'MS11071',
				'email' => 'ms11071@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Barun',
				'last_name' => 'Khaidem',
				'reg_no' => 'MS11072',
				'email' => 'ms11072@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Arjit',
				'middle_name' => 'Kant',
				'last_name' => 'Gupta',
				'reg_no' => 'MS11073',
				'email' => 'ms11073@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Vaishali',
				'last_name' => ' ',
				'reg_no' => 'MS11074',
				'email' => 'ms11074@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Saneedh',
				'last_name' => 'Anand',
				'reg_no' => 'MS11075',
				'email' => 'ms11075@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Santosh',
				'last_name' => 'Kumari',
				'reg_no' => 'MS11076',
				'email' => 'ms11076@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Anjali',
				'last_name' => 'Mahadevan',
				'reg_no' => 'MS11077',
				'email' => 'ms11077@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manmohan',
				'last_name' => ' ',
				'reg_no' => 'MS11078',
				'email' => 'ms11078@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ruchika',
				'last_name' => ' ',
				'reg_no' => 'MS11079',
				'email' => 'ms11079@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manvendra',
				'middle_name' => 'Pratap',
				'last_name' => 'Rajvanshi',
				'reg_no' => 'MS11080',
				'email' => 'ms11080@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Ankita',
				'last_name' => 'Verma',
				'reg_no' => 'MS11082',
				'email' => 'ms11082@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Dhanya',
				'middle_name' => 'Ann',
				'last_name' => 'Thomas',
				'reg_no' => 'MS11083',
				'email' => 'ms11083@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Rashmi',
				'last_name' => 'Sinha',
				'reg_no' => 'MS11084',
				'email' => 'ms11084@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Yengkhom',
				'last_name' => 'Sunanda',
				'reg_no' => 'MS11085',
				'email' => 'ms11085@iisermohali.ac.in'
			));
			Student::create(array(
				'first_name' => 'Manu',
				'last_name' => 'S',
				'reg_no' => 'MS11086',
				'email' => 'ms11086@iisermohali.ac.in'
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

		}
	}