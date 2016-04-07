var app = angular.module('therealcarlos', ['ngRoute']);

app.controller('pagesCtrl', function($scope){
    console.log('page loaded');
});

app.config(function ($routeProvider) {

    $routeProvider
        .when('/', {
            templateUrl: 'views/home.html',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .when('/about-me', {
            templateUrl: 'views/about-me.html',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .when('/portfolio', {
            templateUrl: 'views/portfolio.html',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .when('/services', {
            templateUrl: 'views/services.html',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .when('/contact', {
            templateUrl: 'views/contact.html',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .otherwise({
            redirectTo: '/'
        });
});