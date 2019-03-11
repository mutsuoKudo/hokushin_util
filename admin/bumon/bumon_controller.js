// DBデータ（students.php）の呼び出し・追加・更新・削除


var app = angular.module('app', ['ngResource']);

app.controller('MainCtrl', function($scope, $resource, $window) {
  // var Student = $resource('students.php', {page: '@page'});
  var Bumon_mei = $resource('bumon_list.php', {id: '@id'});
  $scope.bumon_meis = Bumon_mei.query();
  
  $scope.add = function() {
    Bumon_mei.save($scope.new_bumon_mei, function() {
      alert("追加しました。");
      $window.location.reload();
    });
  };
});

app.controller('DetailCtrl', function($scope, $window) {
  $scope.update = function() {
    $scope.bumon_mei.$save(function() {
      alert("更新しました。");
      $window.location.reload();    
    });
  };
  
  $scope.delete = function() {
    $scope.bumon_mei.$delete();
    alert("削除しました。");
    $window.location.reload();
  };
});




