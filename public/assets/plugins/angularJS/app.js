// create angular app
var MegalensApp = angular.module('MegalensApp', ['ui.bootstrap','ui.select2','angularUtils.directives.dirPagination'] ,function($interpolateProvider) {
	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');
});


// create angular controller
MegalensApp.controller('mainController', function($scope) {

});
