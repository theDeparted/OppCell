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
					update:{Now:{},lnk:'/mupdate'},
					config:{basePath:'/admin'},
					data:{}
				},
		institute:{	fetch:{Now:{},lnk:'/ilist'},
					add:{Now:{},lnk:'/iadd'},
					remove:{Now:{},lnk:'/idel'},
					update:{Now:{},lnk:'/iupdate'},
					config:{basePath:'/admin'},
					data:{}
				},
		department:{	fetch:{Now:{},lnk:'/dlist'},
					add:{Now:{},lnk:'/dadd'},
					remove:{Now:{},lnk:'/ddel'},
					update:{Now:{},lnk:'/dupdate'},
					config:{basePath:'/admin'},
					data:{}
				},
		journal:{	fetch:{Now:{},lnk:'/jlist'},
					add:{Now:{},lnk:'/jadd'},
					remove:{Now:{},lnk:'/jdel'},
					update:{Now:{},lnk:'/jupdate'},
					config:{basePath:'/admin'},
					data:{}
				},

		io:{state:{log:'OppCell Admin Panel Log\n',last:'',working:false},config:{basePath:"",addIndexDotPHP:"/index.php"}}
		};
	//MEMBER
	{
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
			//alert(JSON.stringify(member));
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

		truth.member.update.Now=function(member, OnComplete)
		{
			truth.io.state.working=true;
			//alert(JSON.stringify(member));
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.member.config.basePath + truth.member.update.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {member:JSON.stringify(member), ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);

				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};

		truth.member.remove.Now=function(id, OnComplete)
		{
			truth.io.state.working=true;
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.member.config.basePath + truth.member.remove.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.member.config.basePath + truth.member.remove.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {id:id, ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//INSTITUTE
	{
		truth.institute.fetch.Now=function(OnComplete)
		{
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.fetch.lnk);
			truth.io.state.working=true;
			$.ajax({
				type: 'GET',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.institute.config.basePath + truth.institute.fetch.lnk,
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
					truth.institute.data=dat;					
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					// alert("done");
					truth.io.state.working=false;
					OnComplete(truth.institute.data);
			});
		};

		truth.institute.add.Now=function(institute, OnComplete)
		{
			truth.io.state.working=true;
			// alert(JSON.stringify(institute));
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.add.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.institute.config.basePath + truth.institute.add.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},				
				data: {institute:JSON.stringify(institute), ajax: '1'},
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

		truth.institute.update.Now=function(institute, OnComplete)
		{
			truth.io.state.working=true;
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.institute.config.basePath + truth.institute.update.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {institute:JSON.stringify(institute), ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);

				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};

		truth.institute.remove.Now=function(id, OnComplete)
		{
			truth.io.state.working=true;
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.institute.config.basePath + truth.institute.remove.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.institute.config.basePath + truth.institute.remove.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {id:id, ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};
	}
////////////////////////////////////////////////////////////////////////////
	//DEPARTMENT
	{
		truth.department.fetch.Now=function(OnComplete)
		{
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.fetch.lnk);
			truth.io.state.working=true;
			$.ajax({
				type: 'GET',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.department.config.basePath + truth.department.fetch.lnk,
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
					truth.department.data=dat;					
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					// alert("done");
					truth.io.state.working=false;
					OnComplete(truth.department.data);
			});
		};

		truth.department.add.Now=function(department, OnComplete)
		{
			truth.io.state.working=true;
			// alert(JSON.stringify(department));
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.add.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.department.config.basePath + truth.department.add.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},				
				data: {department:JSON.stringify(department), ajax: '1'},
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

		truth.department.update.Now=function(department, OnComplete)
		{
			truth.io.state.working=true;
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.department.config.basePath + truth.department.update.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {department:JSON.stringify(department), ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);

				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};

		truth.department.remove.Now=function(id, OnComplete)
		{
			truth.io.state.working=true;
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.department.config.basePath + truth.department.remove.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.department.config.basePath + truth.department.remove.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {id:id, ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};
	}

	//JOURNAL
	{
		truth.journal.fetch.Now=function(OnComplete)
		{
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.fetch.lnk);
			truth.io.state.working=true;
			$.ajax({
				type: 'GET',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.journal.config.basePath + truth.journal.fetch.lnk,
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
					truth.journal.data=dat;					
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					// alert("done");
					truth.io.state.working=false;
					OnComplete(truth.journal.data);
			});
		};

		truth.journal.add.Now=function(journal, OnComplete)
		{
			truth.io.state.working=true;
			// alert(JSON.stringify(journal));
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.add.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.journal.config.basePath + truth.journal.add.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},				
				data: {journal:JSON.stringify(journal), ajax: '1'},
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

		truth.journal.update.Now=function(journal, OnComplete)
		{
			truth.io.state.working=true;
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.journal.config.basePath + truth.journal.update.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {journal:JSON.stringify(journal), ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);

				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};

		truth.journal.remove.Now=function(id, OnComplete)
		{
			truth.io.state.working=true;
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.journal.config.basePath + truth.journal.remove.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.journal.config.basePath + truth.journal.remove.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {id:id, ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};
	}


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
				department:{orderBy:'name',search:'',reverse:false,limitTo:20,currentPage:0},
				journal:{orderBy:'name',search:'',reverse:false,limitTo:20,currentPage:0},
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

	$scope.departmentNew={name:'',location:'',instute:''}

	$scope.institutes=[
	{id:'1',name:'Muffin Institute of Taste Nation',location:'USA'},
	{id:'2',name:'National Chuckles University',location:'Indian Supremacy'}
	];

	$scope.instituteNew={name:'',location:''};

	$scope.journals=[
	{id:'1',name:'Journal of Muffin',nationality:'American',rating:''},
	{id:'2',name:'Muffinnify Journal',nationality:'Indian',rating:''}
	];

	$scope.instituteNew={name:'',location:'',nationlity:'',rating:''};


	//SET OF FUNCTIONS REQUIRED FOR DISPLAYING THE LOADING BAR
	{
		var autoHide=function(){
			$scope.config.other.hideCount=$scope.config.other.hideCount-1;
			if($scope.config.other.hideCount<=0)
			{
				$scope.config.other.hideCount=0;
				truthSource.io.state.last='';
			}
			$timeout(autoHide,1000);
		};
		autoHide();

		$scope.$watch('truthSource.io.state.last',function(newVal,oldVal){
			$scope.config.other.hideCount=$scope.config.other.hideAfter;
		});
		$scope.$watch('truthSource.io.state.working',function(newVal,oldVal){
			$scope.config.other.hideCount=$scope.config.other.hideAfter;
		});
	}
	
	//INITIAL REFRESH
	{
		$timeout(function(){
			$scope.init=0;

			truthSource.member.fetch.Now(function(val){
				// alert("Hello1");
				$scope.members=val;
				$scope.init=$scope.init+1;
				if($scope.init==4)
					$scope.updatingInterface=false;
				$scope.$apply();
			});


			truthSource.institute.fetch.Now(function(val){
				// alert("Hello1");
				$scope.institutes=val;
				$scope.init=$scope.init+1;
				if($scope.init==4)
					$scope.updatingInterface=false;
				$scope.$apply();
			});


			truthSource.department.fetch.Now(function(val){
				// alert("Hello1");
				$scope.departments=val;
				$scope.init=$scope.init+1;
				if($scope.init==4)
					$scope.updatingInterface=false;
				$scope.$apply();
			});

			truthSource.journal.fetch.Now(function(val){
				// alert("Hello1");
				$scope.journals=val;
				$scope.init=$scope.init+1;
				if($scope.init==4)
					$scope.updatingInterface=false;
				$scope.$apply();
			});

		},1000);
	}

	//MEMBER
	{
		$scope.AddMember=function(member){
			truthSource.member.add.Now(member,function(val){
				$scope.$apply();		
				$scope.MembersRefresh();
				// alert(val);
			});
		};

		$scope.UpdateMember=function(member){
			truthSource.member.update.Now(member,function(val){
				$scope.$apply();
				$scope.MembersRefresh();
				// alert(val);
			});
		};

		$scope.DeleteMember=function(id){
			truthSource.member.remove.Now(id,function(val){
				$scope.$apply();
				$scope.MembersRefresh();
				// alert(val);
			});
		};

		$scope.MembersRefresh=function(){
			truthSource.member.fetch.Now(function(val){
				$scope.$apply();
				$scope.updatingInterface=true;
				$scope.$apply();
				$scope.members=val;
				$scope.updatingInterface=false;
				$scope.$apply();
			});
		};
	}

////////////////////////////////////////
	//INSTITUTE
	{
		$scope.AddInstitute=function(institute){
			truthSource.institute.add.Now(institute,function(val){
				$scope.$apply();		
				$scope.InstitutesRefresh();
				$scope.DepartmentsRefresh();
				// alert(val);
			});
		};

		$scope.UpdateInstitute=function(institute){
			truthSource.institute.update.Now(institute,function(val){
				$scope.$apply();
				$scope.InstitutesRefresh();
				// alert(val);
			});
		};

		$scope.DeleteInstitute=function(id){
			truthSource.institute.remove.Now(id,function(val){
				$scope.$apply();
				$scope.InstitutesRefresh();
				// alert(val);
			});
		};

		$scope.InstitutesRefresh=function(){
			truthSource.institute.fetch.Now(function(val){
				$scope.$apply();
				$scope.updatingInterface=true;
				$scope.$apply();
				$scope.institutes=val;
				$scope.updatingInterface=false;
				$scope.$apply();
			});
		};
	}

/////////////////////////////////////
	//DEPARTMENT
	{
		$scope.AddDepartment=function(department){
			truthSource.department.add.Now(department,function(val){
				$scope.$apply();		
				$scope.DepartmentsRefresh();
				// alert(val);
			});
		};

		$scope.UpdateDepartment=function(department){
			truthSource.department.update.Now(department,function(val){
				$scope.$apply();
				$scope.DepartmentsRefresh();
				// alert(val);
			});
		};

		$scope.DeleteDepartment=function(id){
			truthSource.department.remove.Now(id,function(val){
				$scope.$apply();
				$scope.DepartmentsRefresh();
				// alert(val);
			});
		};

		$scope.DepartmentsRefresh=function(){
			truthSource.department.fetch.Now(function(val){
				$scope.$apply();
				$scope.updatingInterface=true;
				$scope.$apply();
				$scope.departments=val;
				$scope.updatingInterface=false;
				$scope.$apply();
			});
		};

	}

/////////////////////////////////////
	//JOURNAL
	{
		$scope.AddJournal=function(journal){
			truthSource.journal.add.Now(journal,function(val){
				$scope.$apply();		
				$scope.JournalsRefresh();
				// alert(val);
			});
		};

		$scope.UpdateJournal=function(journal){
			truthSource.journal.update.Now(journal,function(val){
				$scope.$apply();
				$scope.JournalsRefresh();
				// alert(val);
			});
		};

		$scope.DeleteJournal=function(id){
			truthSource.journal.remove.Now(id,function(val){
				$scope.$apply();
				$scope.JournalsRefresh();
				// alert(val);
			});
		};

		$scope.JournalsRefresh=function(){
			truthSource.journal.fetch.Now(function(val){
				$scope.$apply();
				$scope.updatingInterface=true;
				$scope.$apply();
				$scope.journals=val;
				$scope.updatingInterface=false;
				$scope.$apply();
			});
		};

	}

}