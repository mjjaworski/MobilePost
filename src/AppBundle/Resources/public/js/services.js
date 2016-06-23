'use strict';
/* Services */

var parcelOrderServices = angular.module('parcelOrderServices', ['ngResource']);
parcelOrderServices.factory('ParcelOrder', ['$resource',
    function($resource){
        return $resource('/api/v1/parcelorders/:parcelOrderId.json', {}, {
            query: {method: 'GET', isArray: true, headers: {'Accept': 'application/json'}
            }
        });
    }]);