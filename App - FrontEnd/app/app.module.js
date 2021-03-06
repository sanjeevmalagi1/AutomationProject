(function() {
  'use strict';

  angular
    .module('app', [
      // Angular modules.
      'ngRoute',
      'ui.router',
      // Custom modules.
      'app.Directives',
      'app.Control',
      'app.Settings'
      ])
    .config(configFunction)
    .run(runFunction);

  configFunction.$inject = ['$routeProvider'];

  function configFunction($routeProvider) {
    $routeProvider.otherwise({
      redirectTo: '/'
    });
  }

  runFunction.$inject = ['$rootScope', '$location'];

  function runFunction($rootScope, $location) {
    $rootScope.$on('$routeChangeError', function(event, next, previous, error) {
      if (error === "AUTH_REQUIRED") {
        $location.path('/');
      }
    });
  }

})();
