$(document).ready(function () {
//CUSTOMIZE HERE
var loading_text = "\
 _       _______ _______ ______ __________       _______  p\
( !     (  ___  (  ___  (  __  !!__   __( (    /(  ____ ! p\
| (     | (   ) | (   ) | (  !  )  ) (  |  !  ( | (    !/ p\
| |     | |   | | (___) | |   ) |  | |  |   ! | | |       p\
| |     | |   | |  ___  | |   | |  | |  | (! !) | | ____  p\
| |     | |   | | (   ) | |   ) |  | |  | | !   | | !_  ) p\
| (____/| (___) | )   ( | (__/  ___) (__| )  !  | (___) | p\
(_______(_______|/     !(______/!_______|/    )_(_______) p\
p\
                The real IISER M website p\
                                                          p\
||||||||||||||||||||||||||||||||||||||||||||||||||||||||||p\
p\
";

var loading_text_1="\
                       _                      _  _  ___    ___    ___   p\
                      ( )                    (_)(_)(  _`! (  _`! |  _`! p\
  ___ ___     _      _| |   __   _ __   ___  | || || (_(_)| (_(_)| (_) )p\
/' _ ` _ `! /'_`!  /'_` | /'__`!( '__)/' _ `!| || |`!__ ! |  _)_ | ,  / p\
| ( ) ( ) |( (_) )( (_| |(  ___/| |   | ( ) || || |( )_) || (_( )| |! ! p\
(_) (_) (_)`!___/'`!__,_)`!____)(_)   (_) (_)(_)(_)`!____)(____/'(_) (_)p\
p\
p\
                Welcome to the real IISER Mohali website.p\
";

	var obj_width=700;
	var obj_height=300;



	//Shouldn't need to change these functions
	
	//Auto Initializations
	{
		var base_path=$('#lara_path').val();
		var processing_last_request=false;
	}

	//Function to parse ASCII code
	function parse_ASCII_text(source_string)
	{
	var s=source_string;
	//$('#la_loadbar').html(s);
	s=s.replace(/!/g, '\\');
	s=s.replace(/p/g, '<br/>');
	s=s.replace(/ /g, '&nbsp');
	return s;
	}

	//Animation sequence initializations
	loading_text_len=loading_text.length;
	var i=1;
	//var i=loading_text_len;

	//Animation sequence
	var animate_loadbar_interval_id = setInterval(function() {
	      if(i<(loading_text_len))
	      {
	      	i+=2;
	      	$('#la_loadbar').html(parse_ASCII_text(loading_text.substring(0,i)));	      
	      }
	      else
	      {      	

	      	setTimeout(function () {
		      	$('#la_verycenter').animate({height: '0.0'},500,function () {
		      		$('#la_verycenter').hide();
		      		$('#la_background_text').animate({height: '0.0'},500,function () {
		      			$('#la_background_text').hide();	
		      			$('#main_input_box').focus();      			
		      		});
					//$('body').css('overflow','auto');      		
		      	});
	      	},1000);
	      	clearInterval(animate_loadbar_interval_id);
	      }
	      //$('#la_loadbar').html(parse_ASCII_text(loading_text.substring(i,loading_text_len)));	      
	}, 2);


	//DOM position initializations
	function init_graphics(){
		var window_height=$(window).height();
		var obj_top2 = $('#main_input_box').position().top - 250;//- 70; //
		var obj_top= $('#list_center_maker').position().top;
		var new_height=window_height-(obj_top-obj_top2);
		$('#list_center_maker').css('height',new_height);
	};
	init_graphics();

	//Function to Re adjust size of scrollbar
	function move_div() {
		$('#la_loading_text').css('display','none');
		window_width = $(window).width();
		window_height = $(window).height();

		//obj_width=$('#la_verycenter').width();
		$('#la_verycenter').css('top',(window_height /2 ) - (obj_height/2)).css('left',(window_width/2) - (obj_width/2));

		//$('#la_verycenter').animate({height: obj_height width: obj_width},200, function () {

		$('#la_verycenter').width(obj_width);
		//obj_height=$('#la_verycenter').height();
		$('#la_verycenter').height(obj_height);
	};
	move_div();


	//Bind necessary functions to the window resize event	
	$(window).resize(function () {
		move_div();
		init_graphics();
	})

	//Function to generate a DOM list element for the login list
	//INFO: 0 is citizen, 1 is monkey, anything else is null
	function gen_Name_Element(user_id,user_name,user_info,user_type,user_img) {		
		//user type is either m (monkey, super user), g (guest), or h (human, most common)
		//if(!(user_type=="g" || user_type=="m" || user_type="h"))
		//0 is citizen
		//1 is monkey
		var user_type_string="g";
		if(user_type==1)
		{	
			user_type_string="m";
		}
		else if(user_type==0)
		{
			user_type_string="h";
		}

		var img_path=base_path + "/img/";
		if(user_img=='0')
			img_path=img_path+"default_" + user_type_string;
		else
			img_path=img_path+user_img;

		var string = 
		" <li id=\"+ user_id +\"> \
			<div class=\"name_container\"> \
				<table> \
				<tr> \
					<td><img src=\""+img_path+".jpg\" width=\"64\"></td> \
					<td> \
						<div class=\"name_contained\">" + user_name + "</div> \
						<div class=\"info_contained\">" + user_info + "</div> \
					</td> \
				</tr> \
				</table> \
			</div> \
			</li> \
		";
		return string;
	}


	//DOM data initialize
	{
		$('#list_of_names').html(gen_Name_Element("1","Yet Another Guest","Foreigner\'s Login",0));
	}

	
	//Function to populate the list with the give json data
	function updatelistNOW(data_json){
		$('#DEBUG').append("SUCCESS"+data_json+"\n");
		var finalList='';
		//var test_string='[{"id":"2","first_name":"Atul","middle_name":"Singh","last_name":"Arora","reg_no":"MS11003","role":"1","email":"toatularora@gmail.com","password":"","created_at":"2012-07-21 11:05:51","updated_at":"2012-07-21 11:05:51"},{"id":"26","first_name":"Atul","middle_name":null,"last_name":"Mantri","reg_no":"MS09033","role":"0","email":"ms09033@iisermohali.ac.in","password":"","created_at":"2012-07-21 11:05:52","updated_at":"2012-07-21 11:05:52"},{"id":"27","first_name":"Atul","middle_name":null,"last_name":"Verma","reg_no":"MS09034","role":"0","email":"ms09034@iisermohali.ac.in","password":"","created_at":"2012-07-21 11:05:52","updated_at":"2012-07-21 11:05:52"}]';
		var data=jQuery.parseJSON(data_json);//test_string);

		$.each(data, function(i,item){  
  			//finalList=finalList+(gen_Name_Element(item.id,item.first_name+' ' + ((item.middle_name != null) ? (item.middle_name + ' '): '') + ((item.last_name != ' ') ? item.last_name : '') ,item.reg_no,item.role));
  			finalList=finalList+(gen_Name_Element(item.id,item.name,item.reg_no,item.role,item.img));
  		});

		finalList=finalList + (gen_Name_Element("1","Yet Another Guest","Foreigner\'s Login",0));

		$('#list_of_names').html(finalList);
	}

	function query_result(name) {	
	$('#DEBUG').append("Invoked\n");	
		$.ajax({
			type: 'POST',
			//url: 'http://10.42.0.1/laravel-project-public/index.php/',
			//url: 'http://192.168.2.138/laravel-project-public/index.php/',
			//url: 'http://10.42.0.15/theDeparted/OppCell/public/index.php/',

			//url: "/index.php"+"/",
			//url: "'"+base_path + "/index.php/'",
			url: base_path + "/index.php/",

			//url: 'http://10.42.0.1/index2.html',
			
			//url: 'http://localhost/WhoLetTheMonkeysOut/SignUp_Page/currentwork/php/test.php',
			//url: 'http://10.42.0.15/WhoLetTheMonkeysOut/SignUp_Page/currentwork/php/test.php',
			statusCode: {
				404: function () {
					$('#DEBUG').append("Page not found\n");
				},
				500: function () {
					$('#DEBUG').append("Other Error\n");	
				}
			},
			data: 's='+name,
			success: function (data) {
				
				//$('#list_of_names').html(data);
				//$('#DEBUG').append("SUCCESS! "+data);
				updatelistNOW(data);
			}
		}).error(function() {
			//alert('An error occured');
			$('#DEBUG').append("An Error Occured!\n");
		});
//$.post('192.168.1.102/monkeys/index.php/login/q_name', { s: name } , function (data) {


/*
$('#DEBUG').append("Invoked<br>");
$.post('php/test.php', { s: name } , function (data) {
			$('#DEBUG').append(data);
		}).error(function () {
			$('#DEBUG').append('An error occured<br>');
		}).complete(function () {
			$('#DEBUG').append('Request Complete!<br>');
		}).success(function () {
			$('#DEBUG').append('Success!<br>');
		});	
*/

	}
	
	//$('#DEBUG').append("Hello");

	$('#main_input_box').keyup(function () {
		//alert("invoked");
		//$('#DEBUG').append("Invoked<br>");
		var name=$(this).val();
		query_result(name);

	});
});