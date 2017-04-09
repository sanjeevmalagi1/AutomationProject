(function() {
  'use strict';

  angular
    .module('app.Control')
    .config(configFunction);

  configFunction.$inject = ['$stateProvider'];

  function configFunction($stateProvider) {
    $stateProvider
      .state('ControlCenter',{
        url: '',
    	  views: {
            "content": {
                templateUrl: 'app/Control/ControlCenter.html',
                controller : 'ControlController'
            }
        }
      })
  }

})();
