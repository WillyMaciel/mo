var app;

app = angular.module('App', ['Novo']);

//Config do App
app.config(function ($httpProvider) {
	//Altera o content type do header, para enviar dados no tipo request ao invés de json para o servidor
	$httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';

	//Serialize os dados igual jquery faz no post
    $httpProvider.defaults.transformRequest = function(data){
        if (data === undefined) {
            return data;
        }
        return $.param(data);
    }
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