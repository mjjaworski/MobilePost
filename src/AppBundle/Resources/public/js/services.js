'use strict';
/* Services */

var parcelOrderServices = angular.module('parcelOrderServices', ['ngResource']);
parcelOrderServices.factory('ParcelOrder', ['$resource',
    function($resource){
        return $resource('http://localhost:8000/api/v1/parcelOrders/:parcelOrderId.json', {}, {
            query: {method: 'GET', isArray: true, headers: {'Accept': 'application/json'}
            }
        });
    }]);