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

	//var selected_person=new selected_person();


	//Shouldn't need to change these functions
	
	//Auto Initializations
	{
		var base_path=$('#lara_path').val();
		var processing_last_request=false;
		var reg_no_selected="guest";
		var login_invoked=false;
	}

	//When an item is clicked, what should happen
	function Login_as(reg_no) {
		login_invoked=true;
		reg_no_selected=reg_no;	//to update events that took place with a click!
		$('#main_input_box').unbind('keyup');		
		var main_input_box= $('#main_input_box').remove();
		$('.name_container').unbind();

		//$('#main_input_box').hide();
		//$('#main_input_box').animate({height:'0', opacity:'0'},200);

		$('.name_list_container').not('#'+reg_no).animate({height: '0', opacity: '0'}, 200,function (){
			//			
			//main_input_box.val('');
			//main_input_box.attr('type','password');
		
			//$('#list_center_maker').after(main_input_box);			

			//$('#main_input_box').unbind('keyup');
			//$('#main_input_box').focus();
		});
		$('#list_center_maker').animate({height:'200'}, 200, function () {

			$('#feedback_title').text('Password Sapian!');
			$('#list_center_maker').css('height',200);	
			//$('#password_input_box').show(100);
			$('#password_input_box').focus();

		});

		$.ajax({
			type: 'POST',
			url: base_path + "/index.php/check",
			statusCode: {
				404: function () {
					$('#DEBUG').append("Page not found\n");
				},
				500: function () {
					$('#DEBUG').append("Other Error\n");	
				}
			},
			data: {reg_no: reg_no, ajax: '1'},
			success: function (data) {
				if(data=='new')
				{
					$('#msg_new_user').animate({opacity:1.0},1000);
					setTimeout(function() {
						$('#msg_new_user').animate({opacity:0.2},1000);
					},3000)
				}
				//	{updatelistNOW(data);}
				$('#DEBUG').append(data);
			}
		}).error(function() {
			$('#DEBUG').append("An Error Occured!\n");
		});



	// 	setTimeout(function() {

	// }, 200)

		//$('#main_input_box').val('');

		//alert(reg_no);
		//feedback_title
	}

	function On_item_click() {
		//alert(event.target.id);
		//alert($(this).attr("id"));
		Login_as($(this).attr("reg_no"));
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
	var intro_delay=1000;
	var intro_transition_time=500;
	if( $('#loadtype').val() != 'default' )
	{
		i=loading_text_len;
		intro_delay=0;
		intro_transition_time=0;
		$('#feedback_title').text("Login Failed! Try Again");
	}
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
		      	$('#la_verycenter').animate({height: '0.0'},intro_transition_time,function () {
		      		$('#la_verycenter').hide();
		      		$('#la_background_text').animate({height: '0.0'},intro_transition_time,function () {
		      			$('#la_background_text').hide();	
		      			$('#main_input_box').focus();      			
		      		});
					//$('body').css('overflow','auto');      		
		      	});
	      	},intro_delay);
	      	clearInterval(animate_loadbar_interval_id);
	      }
	      //$('#la_loadbar').html(parse_ASCII_text(loading_text.substring(i,loading_text_len)));	      
	}, 2);


	//DOM position initializations
	function init_graphics(){
		var window_height=$(window).height();
		var obj_top2 = $('#main_input_box').position().top - 150; //- 250;//70; //
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
		//" <li id=\"+ user_id +\"> \
		var string = 
		" <li class=\"name_list_container\" id=\"" + user_id + "\"> \
			<div class=\"name_container\" reg_no=\"" + user_id + "\"> \
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
		var guest_string=gen_Name_Element("guest","Yet Another Guest","guest",2,"0");
		$('#list_of_names').html(guest_string);
		//We've to do that everytime we update the list it seems!
		$('.name_container').on("click", On_item_click);
	}

	
	//Function to populate the list with the give json data
	function updatelistNOW(data_json){
		$('#DEBUG').append("SUCCESS"+data_json+"\n");
		var finalList='';
		//var test_string='[{"id":"2","first_name":"Atul","middle_name":"Singh","last_name":"Arora","reg_no":"MS11003","role":"1","email":"toatularora@gmail.com","password":"","created_at":"2012-07-21 11:05:51","updated_at":"2012-07-21 11:05:51"},{"id":"26","first_name":"Atul","middle_name":null,"last_name":"Mantri","reg_no":"MS09033","role":"0","email":"ms09033@iisermohali.ac.in","password":"","created_at":"2012-07-21 11:05:52","updated_at":"2012-07-21 11:05:52"},{"id":"27","first_name":"Atul","middle_name":null,"last_name":"Verma","reg_no":"MS09034","role":"0","email":"ms09034@iisermohali.ac.in","password":"","created_at":"2012-07-21 11:05:52","updated_at":"2012-07-21 11:05:52"}]';
		var data=jQuery.parseJSON(data_json);//test_string);
		var empty=true;
		$.each(data, function(i,item){  
			empty=false;
			if(i==0){reg_no_selected=item.reg_no;}
  			//finalList=finalList+(gen_Name_Element(item.id,item.first_name+' ' + ((item.middle_name != null) ? (item.middle_name + ' '): '') + ((item.last_name != ' ') ? item.last_name : '') ,item.reg_no,item.role));
  			finalList=finalList+(gen_Name_Element(item.reg_no,item.name,item.reg_no,item.role,item.img));
  		});
		
		if(empty==true) {reg_no_selected="guest";}

		finalList=finalList + guest_string;//(gen_Name_Element("1","Yet Another Guest","Foreigner\'s Login",2,"0"));

		$('#list_of_names').html(finalList);

		$('.name_container').on("click", On_item_click);
	}

	function query_result(name) {	
	$('#DEBUG').append("Invoked\n");	
		$.ajax({
			type: 'POST',
			url: base_path + "/index.php/",
			statusCode: {
				404: function () {
					$('#DEBUG').append("Page not found\n");
				},
				500: function () {
					$('#DEBUG').append("Other Error\n");	
				}
			},
			data: {s: name, ajax: '1'},
			success: function (data) {
				if(login_invoked==false)
					{updatelistNOW(data);}
			}
		}).error(function() {
			$('#DEBUG').append("An Error Occured!\n");
		});
	}
	
	$('#password_input_box').focus(function () {
	//	$('#main_input_box').focus();
			if(login_invoked!=true)
			{
				Login_as(reg_no_selected);
			}
		//
	}).keyup(function(event) {
		if(login_invoked==true && event.which==13)
		{
			/*
			$.ajax({
				type: 'POST',
				url: base_path + "/index.php/",
				statusCode: {
					404: function () {
						$('#DEBUG').append("Page not found\n");
					},
					500: function () {
						$('#DEBUG').append("Other Error\n");	
					}
				},
				data: {reg_no: reg_no_selected, password: $('#password_input_box').val(), ajax: '1'},
				success: function (data) {
					if(login_invoked==false)
						{updatelistNOW(data);}
				}
			}).error(function() {
				$('#DEBUG').append("An Error Occured!\n");
			});			
*/
			$('div').animate({opacity:0},1000, function() {
			var url = base_path + "/index.php/validate/";
			var form = $('<form action="' + url + '" method="post">' +
			  '<input type="hidden" name="reg_no" value="' + reg_no_selected + '" />' +
			  '<input type="hidden" name="password" value="' + $('#password_input_box').val() + '" />' +
			  '</form>');
			$('body').append(form);
			$(form).submit();

			});
		}
		else
		{
			//TODO: Figure out what to do here..
		}
	});
	$('#main_input_box').keyup(function (event) {
		
		if(event.which == 13)
		{
			Login_as(reg_no_selected);
		}
		else
		{
			var name=$(this).val();
			query_result(name);			
		}
	});



});
