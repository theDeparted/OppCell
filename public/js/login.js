$(window).ready(function () {
//CUSTOMIZE HERE
var loading_text_1 = "\
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
var loading_text=
"\
theDeparted\@IISER:\~\$ sudo apt-get install IISERonline ;\
|Locating Resources... Done ;\
|Processing... Done ;\
>Downloading Dependencies... ;\
80% [Decoding Package: AngularJS] ;\
;\
theDeparted@IISER:~$ opp-cell ;\
;\
Establishing Connection: Waiting for Laravel ;\
;\
||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||;\
"

var loading_text_2="\
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

	function init_intro_graphics(){

		var window_height=$(window).height();
		var window_width=$(window).width();

		


		var img_height=$(window).height();
		var img_width=img_height*(297/210);

		var obj_width=img_width;
		var obj_height=$(window).height()/2.2;//280;//300;

		var temp=obj_height/16;
		$('#la_loadbar').css('font-size',temp);//obj_height/10);
		//$('#la_loadbar').css('margin-left',(window_width-(img_width))/1.8);
		$('#la_loadbar').css('margin-left',(img_width)*0.01);
		
		$('#img_login').css('height',img_height);
		$('#img_login').css('width',img_height*(297/210));

		//obj_width=$('#la_verycenter').width();
		$('#la_verycenter').css('top',(window_height /2 ) - (obj_height/2)).css('left',(window_width/2) - (obj_width/2));

		//$('#la_verycenter').animate({height: obj_height width: obj_width},200, function () {

		$('#la_verycenter').width(obj_width);
		//obj_height=$('#la_verycenter').height();
		$('#la_verycenter').height(obj_height);

	}

	init_intro_graphics();

	//var selected_person=new selected_person();


	//Shouldn't need to change these functions
	//Method to reload page for changing user
	function change_user_method(){
		$('#change_user').addClass('link_not_available');
		$('body').css('background-color','black');
		$('div').animate({opacity:0},1000, function() {
			var url = base_path + "/index.php/";
			var form = $('<form action="' + url + '" method="get">' +
			  '<input type="hidden" name="loadtype" value="change_user" />' +
			  '</form>');
			$('body').append(form);
			$(form).submit();
		});
	}

	//Auto Initializations
	{
		var base_path=$('#lara_path').val();
		var processing_last_request=false;
		var reg_no_selected="guest";
		var login_invoked=false;
		var workingonrequest=false;
		var name_last_invoke='';
	}

	//When an item is clicked, what should happen
	function Login_as(reg_no) {
		login_invoked=true;
		reg_no_selected=reg_no;	//to update events that took place with a click!
		$('#change_user').show().animate({opacity:1},2000);
		$('#forgot_password').show().animate({opacity:1},2000);
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
			$('#feedback_title').animate({opacity:0}, 300, function() {
				if(reg_no!='guest')
					$('#feedback_title').text('Password Sapian!').css('color','black').animate({opacity:1},300);	
				else
				{
					$('#feedback_title').text('Coming Soon').css('color','black').animate({opacity:1},300);	
					$('.msg_below').hide();
					$('#msg_no_guests').show().animate({opacity:1},300);
					setTimeout(change_user_method,5000);
				}

			});
			
			$('#list_center_maker').css('height',200);	
			//$('#password_input_box').show(100);
			$('#password_input_box').focus();

		});

		$.ajax({
			type: 'POST',
			url: base_path + "/login/check",
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
					$('.msg_below').hide();
					$('#msg_new_user').show().animate({opacity:1.0},1000);
					setTimeout(function() {
						$('#msg_new_user').animate({opacity:0.2},1000);
					},3000);
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
		s=s.replace(/;/g, '<br/>');
		s=s.replace(/ /g, '&nbsp');
		return s;
	}

	//Animation sequence initializations
	loading_text_len=loading_text.length;
	var i=1;
	var intro_delay=500;
	var intro_delay_2=1000;
	var intro_transition_time=500;
	var text_animation_speed_inverse=15;
	var load_type_val=$('#loadtype').val();

	if( load_type_val != 'default' )
	{
		i=loading_text_len;
		intro_delay=0;
		intro_transition_time=0;
		var intro_delay_2=0;		
		if(load_type_val!='change_user')
			$('#feedback_title').text("Login Failed! Try Again").css('color','red');
	}
	else
	{
		//THis has been added here specifically to avoid flickering
		$('#img_login').css('opacity','1');
	}
	//var i=loading_text_len;

	//Animation sequence
	var animate_loadbar_interval_id = setInterval(function() {
	      if(i<(loading_text_len))
	      {
	      	i+=1;
	      	$('#la_loadbar').html(parse_ASCII_text(loading_text.substring(0,i)));	      
	      }
	      else
	      {      	

	      	setTimeout(function () {
		      	$('#la_verycenter').animate({height: '0.0'},intro_transition_time,function () {
		      		$('#la_verycenter').hide();
		      		setTimeout(function() {
			      		$('#la_background_text').animate({height: '0.0'},intro_transition_time,function () {
			      			$('body').css('background-color','white');//addClass('background_white');
			      			$('#la_background_text').hide();	
			      			$('#main_input_box').focus();      			
			      		});
		      		},intro_delay_2);
					//$('body').css('overflow','auto');      		
		      	});
	      	},intro_delay);
	      	clearInterval(animate_loadbar_interval_id);
	      }
	      //$('#la_loadbar').html(parse_ASCII_text(loading_text.substring(i,loading_text_len)));	      
	}, text_animation_speed_inverse);

	//DOM initialize only ONCE
	{
		$('#img_login').css('height',$(window).height());
	}

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

	};
	move_div();


	//Bind necessary functions to the window resize event	
	$(window).resize(function () {
		move_div();
		init_graphics();
		init_intro_graphics();
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
		//if(data_json!=null)
		if(login_invoked==false)
		{
			$('#DEBUG').append("SUCCESS"+data_json+"\n");
			//console(data_json);
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
			
			if(empty==true) {reg_no_selected="guest"; }

			finalList=finalList + guest_string;//(gen_Name_Element("1","Yet Another Guest","Foreigner\'s Login",2,"0"));

			$('#list_of_names').html(finalList);

			$('.name_container').on("click", On_item_click);
		}
	}

	function query_result(name) {
		if(workingonrequest==false)
		{	
			//the following is used for auto re request after a second if the server can't reply as fast as the user types
			name_last_invoke=name;

			if($.trim(name)!='')
			{
				workingonrequest=true;
				$('#DEBUG').append("Invoked\n");
					$.ajax({
						type: 'POST',
						url: base_path + "/login/index",
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
							workingonrequest=false;
							updatelistNOW(data);
						}
					}).error(function() {
						workingonrequest=false;
						$('#DEBUG').append("An Error Occured!\n");
					});
			}
			else
			{
				//alert('blank');
				//var data=null;
					updatelistNOW('[]');
			}			
		}
		else
			//if a request is already being processed
		{
			//TODO: change this to improve CPU load..make the auto decrement smaller
			//try again after a second, if the last request is different from the current
			//var name=$('#main_input_box').val();
			if(name_last_invoke!=name)
			{
			setTimeout(function(){

			//querry only if the last request is different from the current				
			var name=$('#main_input_box').val();
				if(name_last_invoke!=name)
				{
					//alert('invoked');
					query_result(name);

				}
			},500);
			}
		}
	}
	

	function show_error_msg(data){
		$('.msg_below').hide();
		if($.trim(data)=='')
			$('#msg_error').html('<p>The server didn\'t reply. </p> <p>You\'re certain you have internet access?</p>');
		else
			$('#msg_error').html('<p>The server says</p><p>' + data + '</p>');
		$('#msg_error').show().animate({opacity:1},1000,function(){ //animation time		
			setTimeout(function(){				
				$('#msg_error').animate({opacity:0.3},1000);//function(){ //animation time
			},2000); //duration for which the msg is show
		});	
	}

	function show_forgot_password_msg()
	{
		//SUCCESS
		$('.msg_below').hide();
		$('#msg_forgot_password').show().animate({opacity:1},1000,function(){ //animation time		
			setTimeout(function(){				
				$('#msg_forgot_password').animate({opacity:0.3},1000);//function(){ //animation time
			},2000); //duration for which the msg is shown
		});
	}
	var forgot_password_request_completed=true;
	$('#forgot_password').click(function(){
		//alert('invoked');
		//TODO: do the action here!
	if(forgot_password_request_completed==true)
	{
		$(this).addClass('link_not_available');
		$.ajax({
			type: 'POST',
			url: base_path + "/login/passreset",
			statusCode: {
				404: function () {
					$('#DEBUG').append("Page not found\n");
				},
				500: function () {
					$('#DEBUG').append("Other Error\n");	
				}
			},
			data: {s: reg_no_selected, ajax: '1'},
			success: function (data) {
				if(data=='success')
				{
					show_forgot_password_msg();
				}
				else
				{
					show_error_msg(data);
				}
				//workingonrequest=false;
				//updatelistNOW(data);
			}
		}).error(function() {
			show_error_msg('');
			//workingonrequest=false;
			//$('#DEBUG').append("An Error Occured!\n");
		}).complete(function() {
			forgot_password_request_completed=true;
			//alert('called');
			$('#forgot_password').removeClass('link_not_available');
		});
		
	}


	});
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
			var url = base_path + "/login/validate/";
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
	$('#change_user').click(function() {
		change_user_method();
	});
	$('#main_input_box').keyup(function (event) {
		
		if(event.which == 13)
		{
			Login_as(reg_no_selected);
		}		
		else
		{
			if(event.which==27)
			{				
				$(this).attr('value','');
			}			
			var name=$(this).val();
			query_result(name);
		}
//alert(event.which);
	});



});
