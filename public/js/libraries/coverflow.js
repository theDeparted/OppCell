var coverflow_directive_function=function(){
	//Globals
	
	return {
		restrict:'E',
		scope:{},
		transclude: true,
		template: '<div class="coverFlowContainer" ng-transclude></div> <input type="range" name="points" step="1" min="1" max="1000" />',
		compile:function (tElement, tAttrs)
		{
			//GLOBALS FOR THIS ZONE
			var selected=1;		

 			//Linking function
 			return function(scope,element,attrs){
 				var i=scope.length;
 				alert(i);
 				// var i=scope.covers_data.length;
// angular.forEach($scope.todos, function(todo) {
//       count += todo.done ? 0 : 1;
//     });
 				;
 			}

		}

	}
}