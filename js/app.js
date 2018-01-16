
angular.module('postLogin', [])
    .controller('PostController', ['$scope', '$http', function($scope, $http) {
        this.postForm = function() {
            var encodedString = 'email=' +
                encodeURIComponent(this.inputData.email) +
                '&password=' +
                encodeURIComponent(this.inputData.password);

            $http({
                method: 'POST',
                url: 'userauth.php',
                data: encodedString,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })

                .success(function(data) {
                    //console.log(data);
                    if ( data.trim() === 'correct') {
                        window.location.href = 'Einkaufswagen.php';
                    } else {
                        $scope.errorMsg = "Username und Password stimmen nicht überein";
                    }
                })
        }
    }]);
