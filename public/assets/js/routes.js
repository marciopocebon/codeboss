(function() {
  'use strict';

  angular.module('CodeBoss')
  .config(function($stateProvider, $urlRouterProvider, $locationProvider) {
    $urlRouterProvider.otherwise('/home');

    $stateProvider
      .state('home', {
        url: '/home',
        templateUrl: 'views/home.html'
      })

      .state('login', {
        url: '/login',
        templateUrl: 'views/login.html'
      })

      .state('pagamento', {
        url: '/pagamento',
        templateUrl: 'views/pagamento.html'
      })

      .state('categorias', {
        url: '/categorias',
        templateUrl: 'views/categorias.html'
      })

      .state('cursos', {
        url: '/cursos',
        templateUrl: 'views/cursos.html'
      })

      .state('curso', {
        url: '/curso',
        templateUrl: 'views/curso.html'
      })

      .state('aula', {
        url: '/aula',
        templateUrl: 'views/aula.html'
      })

      .state('blog', {
        url: '/blog',
        templateUrl: 'views/blog.html'
      })

      ;

    $locationProvider.html5Mode(true);
  });
})();
