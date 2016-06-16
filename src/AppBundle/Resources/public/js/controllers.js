'use strict';
/* Controllers */

var parcelOrderControllers = angular.module('parcelOrderControllers', []);
parcelOrderControllers.controller('ParcelOrderListCtrl', ['$scope', 'ParcelOrder',
    function($scope, ParcelOrder) {
        $scope.parcelOrders = ParcelOrder.query();
    }]);