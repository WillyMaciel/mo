var app;

app = angular.module('App', ['Novo']);

app.value('appData.head', {title: 'Minha Página'});

app.controller('AppController', function()
{
	console.log('Funciona');
});

app.controller('AppHeadController', ['appData.head', function(head)
{
	this.head = head;
}]);

app.service

angular.module('Novo',[]).controller('NovoController', function()
{
	alert('NovoController');
});