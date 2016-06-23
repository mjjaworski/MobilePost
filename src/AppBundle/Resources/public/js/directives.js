'use strict';
/* Directives */
var parcelOrderDirectives = angular.module('parcelOrderDirectives', []);
parcelOrderDirectives.directive('ngRedirectTo',['$window', function($window) {
    return {
        restrict: 'A',
        link: function(scope, element, attributes) {
            element.on('click', function() {
                $window.location.href = attributes.ngRedirectTo;
            });
        }
    }
}]);