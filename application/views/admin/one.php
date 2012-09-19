<!doctype html>
<html lang="en" ng-app="myApp">

<head>
	<meta chrset="utf-8">
	<title>Settings | OppCell</title>

	<link rel="Shortcut Icon" href=<?php echo "\"".URL::base()."/img/favicon.ico\""; ?> />
	<link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/admin/one.css\""; ?> />

	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/jquery-1.7.2.js\""; ?>> </script>
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/angular-1.0.1.js\""; ?>> </script>
</head>

<body ng-controller="settings" style="background-image: url(<?php echo URL::base()."/img/pattern.png"; ?>), url(<?php echo URL::base()."/img/100_9048.jpg"; ?>);">
	<input id="basePathProvider" type="text" value="<?php echo URL::base(); ?>" class="hidden"/>
	<basepathwidget path="<?php echo URL::base(); ?>" fall="DAMN"> </basepathwidget>

	<center>
			<div class="fullWidthContainer">
				<div class="communicationLog">				
					Something's wrong? Perhaps you're smarter than the monkeys who made this. Take a shot at it!
					<br/>
					<br/>
					{{truthSource.io.state.log}}
					<!-- ng-show="truthSource.io.working">			 -->				
				</div>
			</div>

			<br/>
			<div class="topBar">
				<span><a href= "<?php echo URL::base()."/index.php/logout" ?> ">Sign Out</a></span>
				<div class="mainTitle">OppCell</div>
				<span><div class="subTitle">Admin Panel</div></span>			
				<!-- || truthSource.io.state.last=='Success' -->
				<div class="smallStat2" ng-dblclick="truthSource.io.state.last=''" ng-click="config.other.hideCount=60" ng-hide="truthSource.io.state.last==''"><div class="smallFont">Last Response (Auto hide in: {{config.other.hideCount}}):</div> {{truthSource.io.state.last}}</div>				
				<div ng-show="updatingInterface" class="smallStat">Processing Data<br/> Please Wait</div>
				<div ng-show="truthSource.io.state.working" class="smallStat3">Talking to the Server<br/> Please Wait</div>								
			</div>
			<br/><br/><br/>
			<br/><br/><br/>
			<br/>
	
<!-- BEGIN -->

		<div ng-hide="isoInstitutes || isoDepartments">
			<hr/>
			<p class="subSubTitle">Members</p>
			<a href='' ng-click="isoMembers=1">Isolate</a> | <a href='' ng-click="isoMembers=0">Normal</a>
			<br/><br/>

			<a href='' ng-hide="membersCollapse=='hide'" ng-click="membersCollapse='hide'">Collapse</a>
			<a href='' ng-show="membersCollapse=='hide'" ng-click="membersCollapse='show'">Show</a>
			<a href='' ng-click="MembersRefresh()">Refresh List</a>
			<input type="text" ng-model="config.member.search" placeholder="Quick Search" />		
			<span>		
				<a href='' ng-click="config.member.reverse=false">Ascending</a> | 
				<a href='' ng-click="config.member.reverse=true">Descending</a>				
			</span>


			<table>
				<tr>
					<th><input type="radio" name="memberSort" ng-model="config.member.orderBy" value="name" id="member_name"/>
						<label for="member_name">Name</label></th>
					<th><input type="radio" name="memberSort" ng-model="config.member.orderBy" value="education" id="member_education"/>
						<label for="member_education">Education</label></th>
					<th><input type="radio" name="memberSort" ng-model="config.member.orderBy" value="research_interest" id="member_research_interest"/>
						<label for="member_research_interest">Research Interest</label></th>
					<th><input type="radio" name="memberSort" ng-model="config.member.orderBy" value="institute" id="member_institute"/>
						<label for="member_institute">Institute</label></th>
					<th><input type="radio" name="memberSort" ng-model="config.member.orderBy" value="department" id="member_department"/>
						<label for="member_department">Department</label></th>
				</tr>
				<tr ng-repeat="member in members | filter:config.member.search | orderBy:config.member.orderBy:config.member.reverse | startFrom:config.member.currentPage*config.member.limitTo | limitTo:config.member.limitTo"  class="members_{{membersCollapse}}">
					<td>
						<input type="text" ng-model="member.name" placeholder="Name"/>
					</td>
					<td>
						<input type="text" ng-model="member.education" placeholder="Education"/>
					</td>
					<td>
						<input type="text" ng-model="member.research_interest" placeholder="Research Interest"/>
					</td>
					<td>
						<select ng-model="member.institute" ng-options="institute.id as institute.name for institute in institutes"></select>
					</td>	
					<td>
						<select ng-model="member.department" ng-options="department.id as department.name for department in departments | filter:{institute:member.institute}"></select>
					</td>
					<td>
						<a href="" ng-click="DeleteMember(member.id)">Remove</a>
					</td>
					<td>
						<a href="" ng-click="UpdateMember(member)">Update</a>
					</td>

				</tr>
				<tr ng-hide="isoMembers">
					<td>
						<input type="text" ng-model="memberNew.name" placeholder="Name"/>
					</td>
					<td>
						<input type="text" ng-model="memberNew.education" placeholder="Education"/>
					</td>
					<td>
						<input type="text" ng-model="memberNew.research_interest" placeholder="Research Interests"/>
					</td>
					<td>
						<select ng-model="memberNew.institute" ng-options="institute.id as institute.name for institute in institutes"></select>
					</td>						
					<td>
						<select ng-model="memberNew.department" ng-options="department.id as department.name for department in  departments | filter:{institute:memberNew.institute}"></select>
					</td>					
					<td>
					</td>
					<td>
						<a href="" ng-click="AddMember(memberNew)">Add</a>
					</td>

				</tr>				
			</table>			

			<br/>		
			<button ng-disabled="config.member.currentPage==0" ng-click="config.member.currentPage=0">
				First
			</button>
			<button ng-disabled="config.member.currentPage == 0" ng-click="config.member.currentPage=config.member.currentPage-1">
		        Previous
		    </button>
		    {{config.member.currentPage+1}}/{{numberOfPages(members,config.member.limitTo)}}
		    <button ng-disabled="config.member.currentPage >= members.length/config.member.limitTo - 1" ng-click="config.member.currentPage=config.member.currentPage+1">
		        Next
		    </button>
			<button ng-disabled="config.member.currentPage >= members.length/config.member.limitTo - 1" ng-click="config.member.currentPage=numberOfPages(members,config.member.limitTo)-1">
				Last
			</button>
			<br/><br/>	 
			Show a maximum of <input cols="4" type="text" ng-model="config.member.limitTo" placeholder="Maximum Entries" /> rows
			<br/>
			<a href='' ng-click="config.member.limitTo= (+config.member.limitTo)+10">Show 10 more</a> | 
			<a href='' ng-click="config.member.limitTo=20">Default</a>
			<br/><br/>

		</div>

<!-- STEP 2 -->
		<div ng-hide="isoMembers || isoDepartments">
			<hr/>
			<p class="subSubTitle">Institutes</p>
			<a href='' ng-click="isoInstitutes=1">Isolate</a> | <a href='' ng-click="isoInstitutes=0">Normal</a>
			<br/><br/>

			<a href='' ng-hide="institutesCollapse=='hide'" ng-click="institutesCollapse='hide'">Collapse</a>
			<a href='' ng-show="institutesCollapse=='hide'" ng-click="institutesCollapse='show'">Show</a>
			<a href='' ng-click="InstitutesRefresh()">Refresh List</a>
			<input type="text" ng-model="config.institute.search" placeholder="Quick Search" />		
			<span>		
				<a href='' ng-click="config.institute.reverse=false">Ascending</a> | 
				<a href='' ng-click="config.institute.reverse=true">Descending</a>								
			</span>


			<table>
				<tr>
					<th><input type="radio" name="instituteSort" ng-model="config.institute.orderBy" value="name" id="institute_name"/>
						<label for="institute_name">Name</label></th>
					<th><input type="radio" name="instituteSort" ng-model="config.institute.orderBy" value="location" id="institute_location"/>
						<label for="institute_location">Location</label></th>
				</tr>
				<tr ng-repeat="institute in institutes | filter:config.institute.search | orderBy:config.institute.orderBy:config.institute.reverse | startFrom:config.institute.currentPage*config.institute.limitTo | limitTo:config.institute.limitTo"  class="institutes_{{institutesCollapse}}">
					<td>
						<input type="text" ng-model="institute.name" placeholder="Name"/>
					</td>
					<td>
						<input type="text" ng-model="institute.location" placeholder="Location"/>
					</td>
					<td>
						<a href="" ng-click="DeleteInstitute(institute.id)">Remove</a>
					</td>
					<td>
						<a href="" ng-click="UpdateInstitute(institute)">Update</a>
					</td>

				</tr>
				<tr ng-hide="isoMembers">
					<td>
						<input type="text" ng-model="instituteNew.name" placeholder="Name"/>
					</td>
					<td>
						<input type="text" ng-model="instituteNew.location" placeholder="Location"/>
					</td>
					<td></td>					
					<td>
						<a href="" ng-click="AddInstitute(instituteNew)">Add</a>
					</td>
				</tr>				
			</table>			

			<br/>		
			<button ng-disabled="config.institute.currentPage==0" ng-click="config.institute.currentPage=0">
				First
			</button>
			<button ng-disabled="config.institute.currentPage == 0" ng-click="config.institute.currentPage=config.institute.currentPage-1">
		        Previous
		    </button>
		    {{config.institute.currentPage+1}}/{{numberOfPages(institutes,config.institute.limitTo)}}
		    <button ng-disabled="config.institute.currentPage >= institutes.length/config.institute.limitTo - 1" ng-click="config.institute.currentPage=config.institute.currentPage+1">
		        Next
		    </button>
			<button ng-disabled="config.institute.currentPage >= institutes.length/config.institute.limitTo - 1" ng-click="config.institute.currentPage=numberOfPages(institutes,config.institute.limitTo)-1">
				Last
			</button>
			<br/><br/>	 
			Show a maximum of <input cols="4" type="text" ng-model="config.institute.limitTo" placeholder="Maximum Entries" /> rows
			<br/>
			<a href='' ng-click="config.institute.limitTo= (+config.institute.limitTo)+10">Show 10 more</a> | 
			<a href='' ng-click="config.institute.limitTo=20">Default</a>
			<br/><br/>

		</div>

<!-- END -->

		<div ng-hide="isoMembers || isoInstitutes">
			<hr/>
			<p class="subSubTitle">Departments</p>
			<a href='' ng-click="isoDepartments=1">Isolate</a> | <a href='' ng-click="isoDepartments=0">Normal</a>
			<br/><br/>

			<a href='' ng-hide="departmentsCollapse=='hide'" ng-click="departmentsCollapse='hide'">Collapse</a>
			<a href='' ng-show="departmentsCollapse=='hide'" ng-click="departmentsCollapse='show'">Show</a>
			<a href='' ng-click="DepartmentsRefresh()">Refresh List</a>
			<input type="text" ng-model="config.department.search" placeholder="Quick Search" />		
			<span>		
				<a href='' ng-click="config.department.reverse=false">Ascending</a> | 
				<a href='' ng-click="config.department.reverse=true">Descending</a>								
			</span>

			<table>
				<tr>
					<th><input type="radio" name="departmentSort" ng-model="config.department.orderBy" value="name" id="department_name"/>
						<label for="department_name">Name</label></th>
					<th><input type="radio" name="departmentSort" ng-model="config.department.orderBy" value="location" id="department_location"/>
						<label for="department_location">Location</label></th>
					<th><input type="radio" name="departmentSort" ng-model="config.department.orderBy" value="institute" id="department_institute"/>
						<label for="department_institute">Institute</label></th>

				</tr>
				<tr ng-repeat="department in departments | filter:config.department.search | orderBy:config.department.orderBy:config.department.reverse | startFrom:config.department.currentPage*config.department.limitTo | limitTo:config.department.limitTo"  class="departments_{{departmentsCollapse}}">
					<td>
						<input type="text" ng-model="department.name" placeholder="Name"/>
					</td>
					<td>
						<input type="text" ng-model="department.location" placeholder="Location"/>
					</td>
					<td>
						<select ng-model="department.institute" ng-options="institute.id as institute.name for institute in institutes"></select>
					</td>

					<td>
						<a href="" ng-click="DeleteDepartment(department.id)">Remove</a>
					</td>
					<td>
						<a href="" ng-click="UpdateDepartment(department)">Update</a>
					</td>
				</tr>
				<tr ng-hide="isoMembers">
					<td>
						<input type="text" ng-model="departmentNew.name" placeholder="Name"/>
					</td>
					<td>
						<input type="text" ng-model="departmentNew.location" placeholder="Location"/>
					</td>
					<td>
						<select ng-model="departmentNew.institute" ng-options="institute.id as institute.name for institute in institutes"></select>
					</td>					
					<td></td>					
					<td>
						<a href="" ng-click="AddDepartment(departmentNew)">Add</a>
					</td>
				</tr>				
			</table>			

			<br/>		
			<button ng-disabled="config.department.currentPage==0" ng-click="config.department.currentPage=0">
				First
			</button>
			<button ng-disabled="config.department.currentPage == 0" ng-click="config.department.currentPage=config.department.currentPage-1">
		        Previous
		    </button>
		    {{config.department.currentPage+1}}/{{numberOfPages(departments,config.department.limitTo)}}
		    <button ng-disabled="config.department.currentPage >= departments.length/config.department.limitTo - 1" ng-click="config.department.currentPage=config.department.currentPage+1">
		        Next
		    </button>
			<button ng-disabled="config.department.currentPage >= departments.length/config.department.limitTo - 1" ng-click="config.department.currentPage=numberOfPages(departments,config.department.limitTo)-1">
				Last
			</button>
			<br/><br/>	 
			Show a maximum of <input cols="4" type="text" ng-model="config.department.limitTo" placeholder="Maximum Entries" /> rows
			<br/>
			<a href='' ng-click="config.department.limitTo= (+config.department.limitTo)+10">Show 10 more</a> | 
			<a href='' ng-click="config.department.limitTo=20">Default</a>
			<br/><br/>

		</div>


<!-- END -->
	
	

	<hr>
	<br/><br/><br/>
	<br/>
	<p>Created by</p>
	<a target="_blank" href="http://www.github.com/theDeparted/"><img src=<?php echo "\"".URL::base()."/img/theDeparted.svg\""; ?> width="150px"/></a>
	<p>Can't live until you die</p>
	<p>Indian Institute of Science Education and Research, Mohali</p>
	</center>	

	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/admin/one.js\""; ?>> </script>
</body>

</html>