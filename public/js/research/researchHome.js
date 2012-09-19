angular.module('myApp',[])
.directive('markdown',function() {
	var converter=new Showdown.converter();
	var editTemplate='<textarea ng-show="isEditMode" ng-dblclick="switchToPreview()" rows="10" cols="20" ng-model="markdown"></textarea>';
	var previewTemplate='<div ng-hide="isEditMode" ng-dblclick="switchToEdit()">Preview</div>';
	return {
		restrict: 'E',
		scope:{},		//Iscolate scope	
		// transclue: true,
		// link:function(scope, element, attrs) {
		// 	var htmlText=converter.makeHtml(element.text());
		// 	element.html(htmlText);
		// },
		// template:'<textarea rows="30" cols="30" ng-transclude></textarea>'
		compile:function (tElement, tAttrs, transclude){
			var markdown=tElement.text();			
 			tElement.html(editTemplate);
 			var previewElement=angular.element(previewTemplate);
 			tElement.append(previewElement);
 			
 			//Linking function
 			return function(scope,element,attrs){
 				scope.isEditMode=true;
 				scope.markdown=markdown;
 				scope.switchToPreview=function(){
 					var makeHtml = converter.makeHtml(scope.markdown);
 					previewElement.html(makeHtml);
 					scope.isEditMode=false;
 				}
 				scope.switchToEdit=function(){
 					scope.isEditMode=true;
 				}

 			}
		}
	}
}).directive('myWidget',function(){
	var linkFn;
	linkFn=function(scope,element,attrs){
		var animateUp, animateRight;

		animateRight=function(){
			$(this).animate({
				left:'+=50'
			});
		}
		animateDown=function(){
			$(this).animate({
				top:'+=50'
			});
		}
		$('#one').on('click',animateRight);
		$('#two').on('click',animateDown);
	};

	return {
		restrict:'E',
		link: linkFn
	}
}).directive('cover',function(){
	//GLobals for all covers go here
	var border=200;
	return {	//compile function this is
		restrict:'E',	//Its an element tag
		scope:{
			title:'@',
			img:'@',
			id:'@'
		},	//we want the scope iscolated
		template: '<div id="cf_{{id}}" class="coverFlowCovers"> <img id="cf_img_{{id}}" src="{{img}}" height="200" width="200"/>' + 
				'<p id="cf_cap_{{id}}">{{title}} What is your problem?</p> </div>',
		link:function(scope,element,attr){
			;
			// $(element).show(1000);
			// $(element).hide();
		}
	}
}).directive('coverflow',
// coverflow_directive_function);
function(){
	//Globals
	
	return {
		restrict:'E',
		scope:{selected:'=',
				elementcount:'@'},
		transclude: true,
		template: '<div class="coverFlowContainer" ng-transclude></div> <input type="range" name="points" step="1" min="1" max="1000" />',
		compile:function (tElement, tAttrs)
		{
			//GLOBALS FOR THIS ZONE
			// var selected=1;

 			//Linking function
 			return function(scope,element,attrs){
 				//var i=scope.selected;
 				
 				// var i=$(element).children('.coverFlowCovers').size();

 				//.hide();

                scope.$watch('elementcount', function (x) {    //updated everytime the variable changes the first parameter is the newValue, second (omitted here) is the oldValue                	
				// scope.$watch(attrs.elementcount, function (x) {    //updated everytime the variable changes the first parameter is the newValue, second (omitted here) is the oldValue                	                	
                    // element.css('left', x + 'px');
                    alert(x);
                });

                scope.$watch(attrs.selected, function (x) {    //updated everytime the variable changes the first parameter is the newValue, second (omitted here) is the oldValue
                    // element.css('left', x + 'px');
                    // alert(x);
                });

 				//children()[1]
 				// alert(i);
 				// var i=scope.covers_data.length;
// angular.forEach($scope.todos, function(todo) {
//       count += todo.done ? 0 : 1;
//     });
 				//;
 			}

		}

	}
}).directive('votepanel', function() {
	return {
		restrict:'E',
		scope:{id:'@',
				title:'@',
				list:'@',
				selected:'='},
		transclude: true,
		template: '<div class="main_group"> \
						<h1>{{title}}</h1> \
						<div ng-transclude></div> \
						<input type="radio" name="{{id}}" ng-model="selected.id" value="0" id="{{id}}_abstane" /><label for="{{id}}_abstane">I am an agnostic little b*st*rd!</label> \
					</div>',		
		compile:function (tElement, tAttrs)
		{
			//GLOBALS FOR THIS ZONE

 			//Linking function
 			return function(scope,element,attrs)
 			{
                scope.$watch('title', function (x) 
	                {    //updated everytime the variable changes the first parameter is the newValue, second (omitted here) is the oldValue                	
	                    // alert(x);
	                }
                );

 			}

		}

	}
}).directive('nominee', function() {
	return {
		restrict:'E',
		scope:{id:'@',
				name:'@',
				link:'@',
				selected:'=',
				category:'@'},
		// transclude: true,
		// ng-model="{{selection}}"
		//ng-model="{{select.selection}}" 
		template:  '<p>{{link}}</p> \
		<div id={{id}}> <input type="radio" name="{{category}}" ng-model="selected.id" value="{{id}}" id="{{category}}_{{id}}" /><label for="{{category}}_{{id}}">{{name}}</label> \
		</div>',
		compile:function (tElement, tAttrs)
		{
			//GLOBALS FOR THIS ZONE

 			//Linking function
 			return function(scope,element,attrs)
 			{
 				scope.selection_work={select:'cool'};
                scope.$watch('selected.id', function (x) 
	                {    //updated everytime the variable changes the first parameter is the newValue, second (omitted here) is the oldValue                	
	                    // alert(x);
	                }
                );
                scope.selectme=function(){
                	// alert("clicked");
                }
 			}
		}

	}
});

function prof_coverflow($scope){
	$scope.covers_data=[
	{id:1, title:'Fothermuffin 1'},
	{id:2, title:'Fothermuffin 2'},
	{id:3, title:'Fothermuffin 3'},
	{id:4, title:'Fothermuffin 4'},
	{id:5, title:'Fothermuffin 5'},
	];
}

function elections($scope){
	$scope.categories=[
	{id:1, title:'Fothermuffin 1',selected:{id:'-1'},
									list:[
										{id:1,name:'Muffin 1',link:'Image1 Link :)'},
										{id:2,name:'Muffin 2',link:'Image2 Link :)'},
										{id:3,name:'Muffin 3',link:'Image3 Link :)'},
										{id:4,name:'Muffin 4',link:'Image4 Link :)'},
										]},
	{id:2, title:'Fothermuffin 2',selected:{id:'-1'},
									list:[
										{id:1,name:'MuffinB 1',link:'Image1 Link :)'},
										{id:2,name:'MuffinB 2',link:'Image2 Link :)'},
										{id:3,name:'MuffinB 3',link:'Image3 Link :)'},
										{id:4,name:'MuffinB 4',link:'Image4 Link :)'},
										]}
	];
	$scope.likethis="1";
	$scope.select={selected:'so far so good'};
	$scope.getNameFromList=function(category,t_id){
		var i;
		for(i=0;i<category.list.length;i++)
		{
			if(category.list[i].id==t_id)
			{
				return category.list[i].name;
			}			
		}
		if(t_id==0)
			return "Abstane!";
		else
			return "Not Selected";
			
	};

    $scope.cast=function(){
    	var r=confirm("Ensure your selections are accurate. This can NOT be undone.");
    	if(r==1)
    		alert("Submitted!");
    	else
    		alert("Cancelled");
    };

}

function Ctrl($scope){
	    $scope.color = 'green';
    $scope.choices = ['red', 'green', 'blue'];
    
    $scope.bam={selection:'red'};

    $scope.$watch('bam.selection',function(x){
    	// alert(x);
    });

}