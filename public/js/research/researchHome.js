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
			img:'@'
		},	//we want the scope iscolated
		template: '<img src="{{img}}" height="200" width="200"/>' + 
				'<p>{{title}} What is your problem?</p>',
		link:function(scope,element,attr){
			$(element).show(1000);
		}
	}
}).directive('coverflow',function(){
	//Globals
	var selected=1;
	return {
		restrict:'E',
		scope:{},
		transclude: true,
		template: '<div class="background_white" ng-transclude> <input type="range" name="points" step="1" min="1" max="10" /></div>',
		compile:function (tElement, tAttrs)
		{
			//DO SOME STUFF HERE

 			//Linking function
 			return function(scope,element,attrs){
 				;
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