var app = angular.module('therealcarlos', ['ngRoute']);

app.run(function($rootScope, $templateCache) {
    $rootScope.$on('$viewContentLoaded', function() {
        $templateCache.removeAll();
    });
});

app.controller('pagesCtrl', function($scope, BaseUrl){
    $scope.BaseUrl = BaseUrl;
    console.log('page loaded');
});

app.config(function ($routeProvider , BaseUrl) {

    $routeProvider
        .when('/', {
            templateUrl: BaseUrl + '/views/home.php',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .when('/about-me', {
            templateUrl: BaseUrl +  '/views/about-me.html',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .when('/portfolio', {
            templateUrl: BaseUrl +  '/views/portfolio.html',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .when('/services', {
            templateUrl: BaseUrl +  '/views/services.html',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .when('/contact', {
            templateUrl: BaseUrl +  '/views/contact.html',
            controller: 'pagesCtrl',
            controllerAs: 'page'
        })
        .otherwise({
            redirectTo: '/'
        });
});