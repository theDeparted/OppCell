angular.module('myApp',[])
.directive('coverflow',function() {
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
});