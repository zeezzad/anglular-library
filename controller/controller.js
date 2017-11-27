var app = angular.module('myApp', []);

app.controller('bookController', function ($scope, $http) {
    $scope.insertData = function () {
        $http.post("insert.php", {
            'username': $scope.username,
            'password': $scope.username
        })

            .success(function (data, status, headers, config) {
                console.log("Data Inserted Successfully");
            });
    }
});

