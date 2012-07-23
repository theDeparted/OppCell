<!--?php
	echo Form::open('/', 'POST');

	echo Form::label('s', 'Username');
	echo Form::text('s','');

	echo Form::hidden('ajax','1');

	echo Form::submit('Login');

	echo Form::close();
-->


<!doctype html>
<html lang="en">
<head>
	<meta chrset="utf-8">
	<title>Jungle Passport Office</title>
	<style>
.userinput_text {
	font-family:sans-serif;
	font-size:30px;
}

.userinput_desc {
	font-family: sans-serif;
	text-align: center;
	font-size:20px;
}
#main_input_box{
	width:500px;	
   border: 1px solid #ccc;
   -moz-border-radius: 0px;
   -webkit-border-radius: 0px;
   border-radius: 0px;

   padding: 4px 7px;
   outline: 0;
   -webkit-appearance: none;
}
#main_input_box:focus {
   border-color: #339933;
}
#list_center_maker{
	width:500px;
	height:300px;
	overflow:auto;
}

/* Let's get this party started */
::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgba(0,0,0,0.8); 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: rgba(0,0,0,0.4); 
}
/*This took about 40-45 minutes to figure..if you remove this, the image doesn't seem to appear at the center*/
img {
	display:block;
}

ul{
	position: relative;
	list-style-type:none;
	padding:0px;
	margin:0px;
	text-align: left;

}

table {
	padding:0px;
	padding-left: 110px;
	margin:0px;
	padding-bottom: 0px;

}
td{
	padding: 0px;
	margin:0px;
	vertical-align: middle;
	height:90px;
}
tr{
	/*background-color: green;*/
}
.name_container{	
	width: 500px;
	/*height:72px;*/
	/*height:200px;*/
	
	padding:0px;
	margin:0px;

	display: table-cell;
	/*background-color: rgba(200,200,200,1);*/
	cursor: pointer;
	vertical-align: middle;
/*
	-moz-box-shadow: 0 0 2px 2px #000;
	-webkit-box-shadow: 0 0 2px 2px #000;
	box-shadow: 0 0 2px 2px #000;
*/	
	transition: background-color 1s;
	-moz-transition: background-color 1s; /* Firefox 4 */
	-webkit-transition: background-color 1s; /* Safari and Chrome */
	-o-transition: background-color 1s; /* Opera */

	border-style:solid;
	border-width: 0px;
	border-color: gray;
	
}

.name_container:hover{	
	background-color: gray;
}

.name_contained{
	position:relative;	

	left:10%;
	top:0%;
	font-family:"league-gothic-1", sans-serif;
	font-size: 35px;
}
.info_contained{
	position:relative;
	left:10%;
	font-family:sans-serif;
	font-size: 18px;
}	
	</style>

	
<style>
body{
	overflow:hidden;
}
#la_verycenter{
	display: block;
	position: fixed;
	top:0%;
	left:0%;
	height: 100%;
	width: 100%;
	background-color: rgba(10,0,0,0.8);
	color: white;	
	font-weight: 120%;
	font-size: 150%;
	vertical-align:bottom;
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px#888;
	box-shadow: 0 0 5px 5px #888;

}
@keyframes flashing
{
0%   {color: rgba(255,255,255,1);}
50%  {color: rgba(0,0,0,0);}
100% {color: rgba(255,0,0,1);}
}

@-moz-keyframes flashing /* Firefox */
{
0%   {color: rgba(255,255,255,1);}
50%  {color: rgba(0,0,0,0);}
100% {color: rgba(255,0,0,1);}
}

@-webkit-keyframes flashing /* Safari and Chrome */
{
0%   {color: rgba(255,255,255,1);}
50%  {color: rgba(0,0,0,0);}
100% {color: rgba(255,0,0,1);}
}
#la_loading_text{
animation-name: flashing;
animation-duration: 2s;
animation-timing-function: linear;
animation-delay: 0s;
animation-iteration-count: infinite;
animation-direction: alternate;
animation-play-state: running;
/* Firefox: */
-moz-animation-name: flashing;
-moz-animation-duration: 2s;
-moz-animation-timing-function: linear;
-moz-animation-delay: 0s;
-moz-animation-iteration-count: infinite;
-moz-animation-direction: alternate;
-moz-animation-play-state: running;
/* Safari and Chrome: */
-webkit-animation-name: flashing;
-webkit-animation-duration: 2s;
-webkit-animation-timing-function: linear;
-webkit-animation-delay: 0s;
-webkit-animation-iteration-count: infinite;
-webkit-animation-direction: alternate;
-webkit-animation-play-state: running;
}

#la_inner{
	position:relative;
	top:50%;
	text-align:center;
}
#la_status{
	font-family: monospace;
	text-align: center;
	font-size: 20px;
}

#la_loadbar{
	position:relative;
	top:0%;
	left:0%;
	text-align: left;
	font-family: monospace;	
	font-size:20px;
/*line-height:0px;*/
}
</style>

<style>
/*{"version":"3983802","k":"0.9.7","created":"2011-06-07T15:16:41Z","mac":"1:c76faa1039cecd7c1fedcc02c9aba45082601b4fa32c11b1960bc30ef2781aa4"}*/
/*
 * The fonts and font delivery service used on this website are provided via
 * Typekit, and are subject to the End User License Agreement entered into by
 * the website owner. All other parties are explicitly restricted from using,
 * in any manner, the Services, Licensed Fonts, or Licensed Content. Details
 * about using Typekit, the EULA, and information about the fonts are listed
 * below.
 *
 * @name League Gothic
 * @vendorname The League of Moveable Type
 * @vendorurl http://www.theleagueofmoveabletype.com/
 * @licenseurl http://typekit.com/fonts/bf5a95cb8b/eula
 *
 * (c) 2011 Typekit, Inc.
 */

@font-face {
font-family:"league-gothic-1";
src:url(data:font/opentype;base64,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);
font-style:normal;
font-weight:400;
}
h1,h2.entry-title,h3#comments-title,h3#reply-title,input[type=button],input[type=submit],nav#access,p.entry-meta .day{
font-family:"league-gothic-1","league-gothic-2",sans-serif;
}
</style>

<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/jquery-1.7.2.js\""; ?>> </script>
</head>

<body>
	

	<div id="la_verycenter"><div id="la_loadbar"></div><div id="la_status"></div><div id="la_inner"><div id="la_loading_text">Loading Bananas</div></div></div></div>
<div id="la_background_text"> 
<p> 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies vulputate dapibus. Fusce non viverra orci. Ut vitae nibh orci, interdum fermentum leo. Donec lobortis quam eleifend tellus venenatis molestie. Sed id tellus eget augue elementum porttitor quis ac magna. Nullam dignissim felis in tortor hendrerit viverra. Ut massa lacus, volutpat eu dictum eget, gravida sagittis felis. Aliquam eget rhoncus mi. Donec scelerisque, dolor a consectetur laoreet, arcu sem viverra diam, et aliquam tellus dui mattis leo. Mauris rutrum augue a urna pharetra viverra viverra sapien tincidunt.

Donec convallis tristique nibh, feugiat fringilla arcu imperdiet ut. Quisque euismod, dolor sed imperdiet placerat, eros diam bibendum urna, imperdiet scelerisque sapien diam eu velit. Donec varius sem sed lorem ullamcorper iaculis sed sit amet dui. Praesent rhoncus leo et nisl vulputate non lacinia leo tincidunt. Aenean magna orci, gravida laoreet mollis a, sollicitudin quis purus. Ut urna nunc, semper non semper sit amet, laoreet quis libero. Curabitur ornare dictum tristique. Nulla bibendum ipsum a est consectetur consectetur. Vestibulum nec orci sed sem gravida tempus. Suspendisse elit risus, molestie eget consectetur sit amet, lacinia ac ipsum. Aliquam sagittis, ante et posuere facilisis, lectus dui porttitor erat, ac sodales arcu diam ac purus. Integer dictum tempor sapien condimentum blandit. Etiam purus risus, fermentum id venenatis at, dignissim a neque. Suspendisse suscipit sapien rutrum justo sollicitudin venenatis convallis odio vulputate.

Nullam vel urna ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse pharetra molestie ligula, in rutrum mi volutpat rhoncus. Nam commodo vulputate odio eget lacinia. Quisque in dui erat, in ullamcorper ante. Morbi vitae sem justo, sed congue ante. Integer et sapien erat, ullamcorper ornare erat. Quisque posuere molestie tortor, sed ultrices nisl porttitor eu. Sed vel faucibus lorem. Cras in nulla nisi. Sed scelerisque nulla vitae nunc aliquet at porttitor elit ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Integer ac lectus at elit suscipit porttitor. Nullam non ligula vitae ligula tempus adipiscing quis non neque. Aenean at porttitor arcu. Suspendisse varius ipsum a quam blandit a ullamcorper urna suscipit. Donec quis mi nunc, malesuada commodo velit. Vivamus facilisis lacinia turpis ut posuere. Etiam nunc justo, imperdiet vitae porttitor sit amet, aliquet ac neque.

Suspendisse pellentesque aliquet tortor nec ullamcorper. Mauris et nulla eu diam fermentum tincidunt pellentesque in ante. Nam ut risus tortor. Morbi quis turpis et mauris tempor facilisis. Donec sodales luctus odio. Vestibulum vulputate est a ipsum facilisis vel condimentum nisi varius. Sed sapien mi, condimentum eu laoreet pulvinar, tincidunt vel lorem.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies vulputate dapibus. Fusce non viverra orci. Ut vitae nibh orci, interdum fermentum leo. Donec lobortis quam eleifend tellus venenatis molestie. Sed id tellus eget augue elementum porttitor quis ac magna. Nullam dignissim felis in tortor hendrerit viverra. Ut massa lacus, volutpat eu dictum eget, gravida sagittis felis. Aliquam eget rhoncus mi. Donec scelerisque, dolor a consectetur laoreet, arcu sem viverra diam, et aliquam tellus dui mattis leo. Mauris rutrum augue a urna pharetra viverra viverra sapien tincidunt.

Donec convallis tristique nibh, feugiat fringilla arcu imperdiet ut. Quisque euismod, dolor sed imperdiet placerat, eros diam bibendum urna, imperdiet scelerisque sapien diam eu velit. Donec varius sem sed lorem ullamcorper iaculis sed sit amet dui. Praesent rhoncus leo et nisl vulputate non lacinia leo tincidunt. Aenean magna orci, gravida laoreet mollis a, sollicitudin quis purus. Ut urna nunc, semper non semper sit amet, laoreet quis libero. Curabitur ornare dictum tristique. Nulla bibendum ipsum a est consectetur consectetur. Vestibulum nec orci sed sem gravida tempus. Suspendisse elit risus, molestie eget consectetur sit amet, lacinia ac ipsum. Aliquam sagittis, ante et posuere facilisis, lectus dui porttitor erat, ac sodales arcu diam ac purus. Integer dictum tempor sapien condimentum blandit. Etiam purus risus, fermentum id venenatis at, dignissim a neque. Suspendisse suscipit sapien rutrum justo sollicitudin venenatis convallis odio vulputate.

Nullam vel urna ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse pharetra molestie ligula, in rutrum mi volutpat rhoncus. Nam commodo vulputate odio eget lacinia. Quisque in dui erat, in ullamcorper ante. Morbi vitae sem justo, sed congue ante. Integer et sapien erat, ullamcorper ornare erat. Quisque posuere molestie tortor, sed ultrices nisl porttitor eu. Sed vel faucibus lorem. Cras in nulla nisi. Sed scelerisque nulla vitae nunc aliquet at porttitor elit ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Integer ac lectus at elit suscipit porttitor. Nullam non ligula vitae ligula tempus adipiscing quis non neque. Aenean at porttitor arcu. Suspendisse varius ipsum a quam blandit a ullamcorper urna suscipit. Donec quis mi nunc, malesuada commodo velit. Vivamus facilisis lacinia turpis ut posuere. Etiam nunc justo, imperdiet vitae porttitor sit amet, aliquet ac neque.

Suspendisse pellentesque aliquet tortor nec ullamcorper. Mauris et nulla eu diam fermentum tincidunt pellentesque in ante. Nam ut risus tortor. Morbi quis turpis et mauris tempor facilisis. Donec sodales luctus odio. Vestibulum vulputate est a ipsum facilisis vel condimentum nisi varius. Sed sapien mi, condimentum eu laoreet pulvinar, tincidunt vel lorem.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies vulputate dapibus. Fusce non viverra orci. Ut vitae nibh orci, interdum fermentum leo. Donec lobortis quam eleifend tellus venenatis molestie. Sed id tellus eget augue elementum porttitor quis ac magna. Nullam dignissim felis in tortor hendrerit viverra. Ut massa lacus, volutpat eu dictum eget, gravida sagittis felis. Aliquam eget rhoncus mi. Donec scelerisque, dolor a consectetur laoreet, arcu sem viverra diam, et aliquam tellus dui mattis leo. Mauris rutrum augue a urna pharetra viverra viverra sapien tincidunt.

Donec convallis tristique nibh, feugiat fringilla arcu imperdiet ut. Quisque euismod, dolor sed imperdiet placerat, eros diam bibendum urna, imperdiet scelerisque sapien diam eu velit. Donec varius sem sed lorem ullamcorper iaculis sed sit amet dui. Praesent rhoncus leo et nisl vulputate non lacinia leo tincidunt. Aenean magna orci, gravida laoreet mollis a, sollicitudin quis purus. Ut urna nunc, semper non semper sit amet, laoreet quis libero. Curabitur ornare dictum tristique. Nulla bibendum ipsum a est consectetur consectetur. Vestibulum nec orci sed sem gravida tempus. Suspendisse elit risus, molestie eget consectetur sit amet, lacinia ac ipsum. Aliquam sagittis, ante et posuere facilisis, lectus dui porttitor erat, ac sodales arcu diam ac purus. Integer dictum tempor sapien condimentum blandit. Etiam purus risus, fermentum id venenatis at, dignissim a neque. Suspendisse suscipit sapien rutrum justo sollicitudin venenatis convallis odio vulputate.

Nullam vel urna ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse pharetra molestie ligula, in rutrum mi volutpat rhoncus. Nam commodo vulputate odio eget lacinia. Quisque in dui erat, in ullamcorper ante. Morbi vitae sem justo, sed congue ante. Integer et sapien erat, ullamcorper ornare erat. Quisque posuere molestie tortor, sed ultrices nisl porttitor eu. Sed vel faucibus lorem. Cras in nulla nisi. Sed scelerisque nulla vitae nunc aliquet at porttitor elit ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Integer ac lectus at elit suscipit porttitor. Nullam non ligula vitae ligula tempus adipiscing quis non neque. Aenean at porttitor arcu. Suspendisse varius ipsum a quam blandit a ullamcorper urna suscipit. Donec quis mi nunc, malesuada commodo velit. Vivamus facilisis lacinia turpis ut posuere. Etiam nunc justo, imperdiet vitae porttitor sit amet, aliquet ac neque.

Suspendisse pellentesque aliquet tortor nec ullamcorper. Mauris et nulla eu diam fermentum tincidunt pellentesque in ante. Nam ut risus tortor. Morbi quis turpis et mauris tempor facilisis. Donec sodales luctus odio. Vestibulum vulputate est a ipsum facilisis vel condimentum nisi varius. Sed sapien mi, condimentum eu laoreet pulvinar, tincidunt vel lorem.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies vulputate dapibus. Fusce non viverra orci. Ut vitae nibh orci, interdum fermentum leo. Donec lobortis quam eleifend tellus venenatis molestie. Sed id tellus eget augue elementum porttitor quis ac magna. Nullam dignissim felis in tortor hendrerit viverra. Ut massa lacus, volutpat eu dictum eget, gravida sagittis felis. Aliquam eget rhoncus mi. Donec scelerisque, dolor a consectetur laoreet, arcu sem viverra diam, et aliquam tellus dui mattis leo. Mauris rutrum augue a urna pharetra viverra viverra sapien tincidunt.

Donec convallis tristique nibh, feugiat fringilla arcu imperdiet ut. Quisque euismod, dolor sed imperdiet placerat, eros diam bibendum urna, imperdiet scelerisque sapien diam eu velit. Donec varius sem sed lorem ullamcorper iaculis sed sit amet dui. Praesent rhoncus leo et nisl vulputate non lacinia leo tincidunt. Aenean magna orci, gravida laoreet mollis a, sollicitudin quis purus. Ut urna nunc, semper non semper sit amet, laoreet quis libero. Curabitur ornare dictum tristique. Nulla bibendum ipsum a est consectetur consectetur. Vestibulum nec orci sed sem gravida tempus. Suspendisse elit risus, molestie eget consectetur sit amet, lacinia ac ipsum. Aliquam sagittis, ante et posuere facilisis, lectus dui porttitor erat, ac sodales arcu diam ac purus. Integer dictum tempor sapien condimentum blandit. Etiam purus risus, fermentum id venenatis at, dignissim a neque. Suspendisse suscipit sapien rutrum justo sollicitudin venenatis convallis odio vulputate.

Nullam vel urna ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse pharetra molestie ligula, in rutrum mi volutpat rhoncus. Nam commodo vulputate odio eget lacinia. Quisque in dui erat, in ullamcorper ante. Morbi vitae sem justo, sed congue ante. Integer et sapien erat, ullamcorper ornare erat. Quisque posuere molestie tortor, sed ultrices nisl porttitor eu. Sed vel faucibus lorem. Cras in nulla nisi. Sed scelerisque nulla vitae nunc aliquet at porttitor elit ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Integer ac lectus at elit suscipit porttitor. Nullam non ligula vitae ligula tempus adipiscing quis non neque. Aenean at porttitor arcu. Suspendisse varius ipsum a quam blandit a ullamcorper urna suscipit. Donec quis mi nunc, malesuada commodo velit. Vivamus facilisis lacinia turpis ut posuere. Etiam nunc justo, imperdiet vitae porttitor sit amet, aliquet ac neque.

Suspendisse pellentesque aliquet tortor nec ullamcorper. Mauris et nulla eu diam fermentum tincidunt pellentesque in ante. Nam ut risus tortor. Morbi quis turpis et mauris tempor facilisis. Donec sodales luctus odio. Vestibulum vulputate est a ipsum facilisis vel condimentum nisi varius. Sed sapien mi, condimentum eu laoreet pulvinar, tincidunt vel lorem.
</p>
</div>
<div class="userinput_desc">
	<center>
	<!-- convert this bit to php, for a random function generating a new string everytime -->
	<!-- <p class="userinput_caption">Your Name, Sapian!</p>-->
	<p>Your Name, Sapian! </p>
	<input id="main_input_box" class="userinput_text" type="text"> </input>

<br/><br/>

<div id="list_center_maker">
<ul id="list_of_names">
</ul>
</div>
</center>
</div>
<input type="text" id="lara_path" value=<?php echo "\"".URL::base()."\"" ?> > </input>
<textarea rows="10" cols="100" id="DEBUG"><?php echo URL::base(); ?></textarea>



<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/login.js\""; ?>>	</script>
</body>

</html>