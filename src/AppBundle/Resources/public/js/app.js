'use strict';
/* Modules */

var app = angular.module('parcelOrderManager',['parcelOrderControllers',
    'parcelOrderServices',
    'parcelOrderDirectives',
    'ngRoute']);
app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.
    otherwise({
        templateUrl: '/bundles/app/partials/parcelOrder-list.html',
        controller: 'ParcelOrderListCtrl'
    });
}]);

