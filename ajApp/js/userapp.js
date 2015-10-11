var app = angular.module("userApp",['ngRoute']);
app.config(function($routeProvider){
	$routeProvider.when("/Items", {
		templateUrl: "view-list.html",
		controller: "listController"
		})
		.when("/Items/add", {
			templateUrl: "view-detail.html",
			controller: "addController"
		})
		.when("/Items/:idx", {
			templateUrl: "view-detail.html",
			controller: "editController"
		})
		.otherwise({
			redirectTo: "/Items"
		})
});

app.factory("userService", ["$rootScope", function(){
	var svc = {};

	var data = [
		{
			firstname: "fname",
			lastname: "lname",
			username: "test1",
			email: "test1",
			dob: "123"
		},
		{
			firstname: "fname",
			lastname: "lname",
			username: "test2",
			email: "test2",
			dob: "1234"
		},
	];

	svc.getUsers = function(){
		return data;
	};

	svc.addUser = function(user){
		data.push(user);		
	};

	svc.editUser = function(user){
		
	};

	return svc;
}]);


app.controller("listController",["$scope","$location","$routeParams","userService",
	function($scope,$location,$routeParams,userService){
	
	$scope.data = userService.getUsers();

	$scope.addUser = function(){
		$location.path("/Items/add");
	};

	$scope.editUser = function(x){
		$location.path("/Items/" + x);
	};
}]);

app.controller("addController",["$scope","$location","$routeParams","userService",
	function($scope,$location,$routeParams,userService){
		//save existing item
		$scope.save = function(){
			userService.addUser({firstname: $scope.item.firstname, lastname: $scope.item.lastname ,username: $scope.item.username ,email: $scope.item.email ,dob: $scope.item.dob });
			$location.path("/Items");
		}

		//save existing item
		$scope.cancel = function(){
			$location.path("/Items");
		}
}]);

app.controller("editController",["$scope","$location","$routeParams","userService",
	function($scope,$location,$routeParams,userService){

		$scope.item = userService.getUsers()[parseInt($routeParams.idx)]

		//save existing item
		$scope.save = function(){
			$location.path("/Items");
		}

		//save existing item
		$scope.cancel = function(){
			$location.path("/Items");
		}
}]);

