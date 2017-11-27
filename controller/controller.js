var myApp = angular.module('myApp', []);

myApp.controller("empcontroller", function ($scope $http) {    
       
$scope.postData = function(){

      var request = $http({
       
          method: "post",
          url   :  window.location.href +"insert.php",
          data :{
             username: $scope.username,
             password: $scope.password,

          },

          headers:{'Content-Type': 'application/x-www-form-urlencoded'}
      });

    }

    });
    
        