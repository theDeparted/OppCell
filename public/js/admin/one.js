angular.module('myApp',[])
.filter('startFrom', function() {
    return function(input, start) {
        start = +start; //parse to int
        return input.slice(start);
    }
})
.factory('truthSource',function(){
	//CONVENTIONS
	//everything is small camel cased
	//functions start with capitals
//http://localhost/IISERM/elections/public
	var truth={
		member:{	fetch:{Now:{},lnk:'/mlist'},
					add:{Now:{},lnk:'/madd'},
					remove:{Now:{},lnk:'/mdel'},
					update:{Now:{},lnk:'/supdate'},
					config:{basePath:'/admin'},
					data:{}
				},
		io:{state:{log:'OppCell Admin Panel Log\n',last:'',working:false},config:{basePath:"",addIndexDotPHP:"/index.php"}}
		};

		truth.member.fetch.Now=function(OnComplete)
			{
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.fetch.lnk);
			truth.io.state.working=true;
			$.ajax({
				type: 'GET',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.member.config.basePath + truth.member.fetch.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					var dat = jQuery.parseJSON(data);
					truth.member.data=dat;					
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					// alert("done");
					truth.io.state.working=false;
					OnComplete(truth.member.data);
			});
		};

		truth.member.add.Now=function(member, OnComplete)
		{
			truth.io.state.working=true;
			// alert(JSON.stringify(member));
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.add.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.member.config.basePath + truth.member.add.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},				
				data: {member:JSON.stringify(member), ajax: '1'},
				// dataType: 'json',
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					// alert("COMPLETED");
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};

		return truth;
})
.directive('basepathwidget', function(truthSource) {
    return {
        restrict: 'E',
        scope: {path:'@'},
        replace: true,        
        transclude:true,
        template:'',
        link: function($scope, elm, attrs, ctrl) {
        	truthSource.io.config.basePath=attrs.path;
        }
    }
});

function settings($scope,truthSource,$timeout){	
	$scope.truthSource=truthSource;
    $scope.numberOfPages=function(source,limitTo){
        return Math.ceil(source.length/limitTo);
    };
	$scope.updatingInterface=true;

$scope.config={member:{orderBy:'name',search:'',reverse:false,limitTo:20,currentPage:0},
				institute:{orderBy:'name',search:'',reverse:false,limitTo:20,currentPage:0},
					other:{hideCount:0,hideAfter:10}};

	$scope.members=[
	{id:'1', name:'Ser3sX', education:'Some Place', research_interest:'Quantum Chemistry', department:'1',institute:'2'},
	{id:'2', name:'Ser3sX', education:'Some Place', research_interest:'Stem Cell', department:'2',institute:'1'}
	];
	
	$scope.memberNew={name:'',education:'',research_interest:'',department:'',institute:''};

	$scope.departments=[
	{id:'2',name:'Physics Department',location:'USA',institute:'1'},
	{id:'1',name:'Nuclear Department',location:'Indian Supremacy',institute:'2'}
	];

	$scope.institutes=[
	{id:'1',name:'Muffin Institute of Taste Nation',location:'USA'},
	{id:'2',name:'National Chuckles University',location:'Indian Supremacy'}
	];

	$scope.instituteNew={name:'',location:''};

	//SET OF FUNCTIONS REQUIRED FOR DISPLAYING THE LOADING BAR
	{
		// var autoHide=function(){
		// 	$scope.config.other.hideCount=$scope.config.other.hideCount-1;
		// 	if($scope.config.other.hideCount<=0)
		// 	{
		// 		$scope.config.other.hideCount=0;
		// 		truthSource.io.state.last='';
		// 	}
		// 	$timeout(autoHide,1000);
		// };
		// autoHide();

		$scope.$watch('truthSource.io.state.last',function(newVal,oldVal){
			$scope.config.other.hideCount=$scope.config.other.hideAfter;
		});
		$scope.$watch('truthSource.io.state.working',function(newVal,oldVal){
			$scope.config.other.hideCount=$scope.config.other.hideAfter;
		});
	}
	
	//INITIAL REFRESH
	{
		// $timeout(function(){
		// 	$scope.init=0;

		// 	truthSource.member.fetch.Now(function(val){
		// 		// alert("Hello1");
		// 		$scope.members=val;
		// 		$scope.init=$scope.init+1;
		// 		if($scope.init==1)			
		// 			$scope.updatingInterface=false;
		// 		$scope.$apply();
		// 	});
		// },1000);
	}

	$scope.AddMember=function(member){
		truthSource.member.add.Now(member,function(val){
			$scope.$apply();
			// $scope.PostsRefresh();
			// alert(val);
		});
	}	
	$scope.MembersRefresh=function(){
		truthSource.member.fetch.Now(function(val){
			$scope.$apply();
			$scope.updatingInterface=true;
			$scope.$apply();
			$scope.members=val;
			$scope.updatingInterface=false;
			$scope.$apply();
		});
	}

}