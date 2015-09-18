var app;

app = angular.module('App', ['Novo', 'ui.router', 'Route', 'ngAnimate', 'ngAnimate-animate.css']);

//Config do App
app.config(function ($httpProvider, $stateProvider, $urlRouterProvider) {
	//Altera o content type do header, para enviar dados no tipo request ao invés de json para o servidor
	$httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';

	//Serialize os dados igual jquery faz no post
    $httpProvider.defaults.transformRequest = function(data){
        if (data === undefined) {
            return data;
        }
        return $.param(data);
    }


	// For any unmatched url, redirect to /state1
	$urlRouterProvider.otherwise("/main");
	//
	// Now set up the states
	$stateProvider
	.state('main', {
	  url: "/main",
	  controller: 'Route.MainController',
	  controllerAs: 'RouteCtrl'

	})
	.state('main.content', {
	  url: "/content",
	  templateUrl: "app/views/mainContent.html"
	})
	.state('teste', {
	  url: "/teste",
	  templateUrl: "app/views/teste1.html"
	})
	.state('login', {
	  url: "/login",
	  templateUrl: "app/views/login.html",
	  controller: 'Route.LoginController',
	  controllerAs: 'RouteCtrl'
	})
	.state('state2', {
	  url: "/state2",
	  templateUrl: "partials/state2.html"
	})
	.state('state2.list', {
	  url: "/list",
	  templateUrl: "partials/state2.list.html",
	  controller: function($scope) {
	    $scope.things = ["A", "Set", "Of", "Things"];
	  }
	});


});

app.run(['$http', function($http)
{
	$http.post('/api/teste', {msg:'hello word!'});
}]);

app.value('appData.head', {title: 'Minha Página'});

app.controller('AppController',['$http', function($http)
{
	console.log('Funciona');

	$http.get('api/auth').success(function(response)
	{
		console.log(response);
	});

	var vm = this;

	vm.user = {};

	vm.auth = function()
	{
		$http.post('auth/login', {email: 'willy_maciel@live.com', password: '123123'}).success(function(response)
		{
			console.log(response);
		});
	}



	vm.addUser = function()
	{
		vm.users.push(vm.user);
		vm.user = {};
	}

	vm.users = [{name: 'willy', cidade: 'RJ'}, {name: 'newton', cidade: 'RS'}, {name: 'leo', cidade: 'SP'}];
}]);

app.controller('AppHeadController', ['appData.head', function(head)
{
	this.head = head;

}]);


angular.module('Novo',[]).controller('NovoController', function()
{
	alert('NovoController');
});