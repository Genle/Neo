var angularApp = angular.module('app', ['ui.bootstrap']);

angularApp.controller('publishController', function($scope, $modal){
	var $ctrl = this;
	$ctrl.animationsEnabled = true;

	$ctrl.open = function(){
		$modal.open({
			animation: $ctrl.animationsEnabled,
		    ariaLabelledBy: 'modal-title',
		    ariaDescribedBy: 'modal-body',
			templateUrl: 'publishView.html',
			controller: 'pubController',
			controllerAs: '$ctrl'
		});
}
	
})
.controller('pubController', function pubController($scope) {
	
}])