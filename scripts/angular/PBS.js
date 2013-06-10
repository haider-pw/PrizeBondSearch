/**
 * Created with JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 6/9/13
 * Time: 8:21 PM
 * To change this template use File | Settings | File Templates.
 */

var Site = angular.module('PBS', []);

Site.config(function ($routeProvider) {
    $routeProvider
        .when('/system/:slug', {templateUrl: 'system/:slug', controller: 'RouteController'})
        .otherwise({redirectTo: '/Dashboard/index'});
});

function AppController ($scope, $rootScope, $http) {
    // Load pages on startup
    $http.get('pages.json').success(function (data) {
        $rootScope.pages = data;
    });

    // Set the slug for menu active class
    $scope.$on('routeLoaded', function (event, args) {
        $scope.slug = args.slug;
    });
}

function RouteController ($scope, $rootScope, $routeParams) {
    // Getting the slug from $routeParams
    var slug = $routeParams.slug;

    $scope.$emit('routeLoaded', {slug: slug});
    $scope.page = $rootScope.pages[slug];
}