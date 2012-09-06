<!doctype html>
<html lang="en" ng-app="myApp">
<head>
	<meta chrset="utf-8">
	<title>Research @ IISER</title>

	<link rel="Shortcut Icon" href=<?php echo "\"".URL::base()."/img/favicon.ico\""; ?> >
	<link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/research/election.css\""; ?> />
	<link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/research/researchHome.css\""; ?> />
	<link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/libraries/coverflow.css\""; ?> />	

	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/jquery-1.7.2.js\""; ?>> </script>
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/angular-1.0.1.js\""; ?>> </script>
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/libraries/showdown.js\""; ?>> </script>	
</head>

<body style="background-image: url(<?php echo URL::base()."/img/pattern.png"; ?>), url(<?php echo URL::base()."/img/Research_at_IISER_background.jpg"; ?>);">
	<div class="Bar">
		<div class="Vertical_Align_Top Bar_height">
			<div class="OppCell_logo">Research @ IISER</div>
		</div>
	</div>
	<div class="Bar_height"></div>

	 <form name="myForm" ng-controller="Ctrl">
	     <div ng-repeat="choice in choices">
	     <input type="radio" name="color_common" ng-model="bam.selection" value="{{choice}}">{{choice}}</input>
	     </div>
	   <tt>color = {{color}}</tt><br>
	  </form>


	<div ng-controller="elections">
		<center>
			<div class="selection_state">
				<div ng-repeat="category in categories"> <p>For Category:{{category.title}},</p> <p>you've selected: {{getNameFromList(category,category.selected.id)}}</p>	</div>
			</div>

			<votepanel ng-repeat="category in categories" id="{{category.id}}" title="{{category.title}}" selected="category.selected" ng-model="category.selected">
				<nominee ng-repeat="person in category.list" category="{{category.id}}" selected="category.selected" ng-model="category.selected" id="{{person.id}}" name="{{person.name}}" link="{{person.link}}"/>
			</votepanel>
		</center>
	</div>

	<my-Widget>
		<div id="one" class="box"></div>
		<div id="two" class="box"></div>
	</my-Widget>

	<div ng-controller="prof_coverflow">
		<coverflow elementcount="{{covers_data.length}}">
			<cover ng-repeat="cover_data in covers_data" id="{{cover_data.id}}" title="{{cover_data.title}}" img="<?php echo URL::base()."/img/Research_at_IISER_background.jpg"; ?>"/>
		</coverflow>
	</div>
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/research/researchHome.js\""; ?>> </script>
</body>

</html>