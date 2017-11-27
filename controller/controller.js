var app = angular.module('myApp', []);

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

