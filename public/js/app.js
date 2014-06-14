var app = angular.module("app", ["ngRoute"]);

app.config(['$routeProvider',function($routeProvider) 
{
	$routeProvider.when("/home", {
		templateUrl: "templates/home.html",
		controller: "homeCtrl"
	})
	.when("/about", {
		templateUrl: "templates/about.html",
		controller: "aboutCtrl"
	})
	.when("/contact", {
		templateUrl: "templates/contact.html",
		controller: "contactCtrl"
	})
	.when("/blog", {
		templateUrl: "templates/blog.html",
		controller: "blogCtrl"
	})
	.otherwise({ redirectTo: "/" });
}]);

app.controller('homeCtrl', ['$scope', function($scope)
{
	$scope.message = "Home";
}])

app.controller('aboutCtrl', ['$scope', function($scope)
{
	$scope.message = "About";
}])

app.controller('contactCtrl', ['$scope', function($scope)
{
	$scope.message = "Contact";
}])

app.controller('blogCtrl', ['$scope', 'ServicePosts', function($scope, ServicePosts)
{
	$scope.message = "Blog";

	var promesa = ServicePosts.getPosts();

	promesa.then(function(data)
	{
		$scope.posts = data.posts;
	}
	,function(error)
	{
		alert("Error " + error);
	});
}])

app.service('ServicePosts', ['$http', '$q', function($http, $q)
{
	this.getPosts = function()
	{
		var defer = $q.defer();

		$http.get("posts/get")
		.success(function(data)
		{
			defer.resolve(data);
		})
		.error(function(data)
		{
			defer.reject(data);
		});

		return defer.promise;
	}	
}])