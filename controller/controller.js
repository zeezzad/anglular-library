var app = angular.module('myApp', []);

//insert User
app.controller('registerController', function ($scope, $http) {
    $scope.submit_data = function () {
        $scope.message = "";
            var request = $http({
                method: "post",
                url: "php/insert.php",
                data: {
                    username: $scope.username,
					password: $scope.password
                },
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            request.success(function (data) {
                $scope.message = "Console : "+ data;
            });
    }
});


//select user
app.controller('userCtrl', ['$scope', '$http', function ($scope, $http) {
    $http({
     method: 'get',
     url: 'user_mysql.php'
    }).then(function successCallback(response) {
     // Store response data
     $scope.users = response.data;
    });
   }]);






