<?php

 ?>

<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="MovieController">
  <head>
    <title> Simility Movies Database</title>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">





    <script data-require="angular.js@1.3.0" data-semver="1.3.0" src="https://code.angularjs.org/1.3.0/angular.js"></script>


    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  </head>

  <body>
    <div class="container-fluid outerdiv">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><b>Simility Movie Database</b> </a>
          </div>
        </div>
      </nav>

      <noscript>
        <div class="nojs">Javascript is either disabled or not supported in your browser. Please enable it or use a Javascript enabled browser.</div>
      </noscript>

      <div class="animated zoomInRight">
      <div class="input-group search-bar">
          <input type="text" ng-model="search" ng-model-options="{ debounce: 500 }" onclick="select()" class="form-control" placeholder="Enter genres, tags! to search" autofocus />
          <span class="input-group-addon bar-style"><i class="glyphicon glyphicon-search"></i></span>
        </div>

      <!--  <div id="main-info" ng-include="'partials/main-info.html'" class="col-md-8"></div> -->

		  <div id="movie" ng-include="'partials/movie.html'" class="col-md-6"></div>


<div id="related-results" ng-include="'partials/related-results.html'" class="col-md-6" >



      <!--  <div id="related-results" ng-include="'partials/related-results.html'" class="col-md-4 animated bounce related-results"></div>
      </div> -->

  </div>




    <script src="js/app.js"></script>
    <script src ="js/dirPagination.js"></script>



  </body>
</html>
