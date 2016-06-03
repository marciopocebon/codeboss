(function() {
  'use strict';

  angular.module('CodeBoss')
  .config(function($stateProvider, $urlRouterProvider, $locationProvider) {
    $urlRouterProvider.otherwise('/home');

    $stateProvider
      .state('home', {
        url: '/home',
        templateUrl: 'views/home.html'
      });

    $locationProvider.html5Mode(true);
  });
})();
