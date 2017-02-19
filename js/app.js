'use strict';

angular.module('myApp', ['angularUtils.directives.dirPagination'])
  .controller('MovieController', function($scope, $http){
    $scope.$watch('search', function() {
      fetch();
    });

    $scope.search = "Action";

    function fetch(){
    //  $http.get("http://www.omdbapi.com/?t=" + $scope.search + "&tomatoes=true&plot=full")
    //  .then(function(response){ $scope.details = response.data; });

    //  $http.get("http://www.omdbapi.com/?s=" + $scope.search)
    //  .then(function(response){ $scope.related = response.data; });

      $http.get("http://starlord.hackerearth.com/simility/movieslisting")
      .then(function(response) {$scope.mv = response.data;

console.log(response.data.length);



      /* var re = /Action|Adventure|Thriller/gi;
        var str = "Apples are Actin, and  are juicy.";

        if ( str.search(re) == -1 ){
            console.log("Does not contain Apples" );
           }

           else
           {
          console.log("Contains Apples" );
        } */


var k=0;
for (var i = 0; i < response.data.length; i++) {
  var re = "/"+response.data[i].genres+"/gi";
  //console.log(re);
  //console.log($scope.search);

  function searchm (p) {
      if (re.indexOf(p) >= 0) {
        $scope.tsearch = response.data;




/*$(function(){
var $orders1 = $('#orders1');
$orders1.append( '<li>'+'<a'+' href="#" ' +'>' + $scope.tsearch[i].movie_title +'</a>'+"  "+'('  +$scope.tsearch[i].title_year+')' + '</li>');

}); */


          //console.log($scope.tsearch[i].movie_title);
      //  console.log(response.data[i].movie_title);
      k++;

      }
  }

  searchm($scope.search);

  };


  //$scope.msearch = response.data;

//console.log(response.data[i].genres+ i);


//console.log(data.movie_title);
      });

    }



    $scope.update = function(movie){
      $scope.search = movie.Title;
    };

    $scope.select = function(){
      this.setSelectionRange(0, this.value.length);
    }
  });
