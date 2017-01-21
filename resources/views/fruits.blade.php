<!DOCTYPE html>
<html>
<head>
 <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <title>rakesh</title>

   <style>
         table, th , td {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 5px;
         }
         
         table tr:nth-child(odd) {
            background-color: #f2f2f2;
         }
         
         table tr:nth-child(even) {
            background-color: #ffffff;
         }
      </style>
      <link rel="stylesheet" type="text/css" href="css/odometer-theme-minimal.css">
</head>
<body ng-app="mainApp">
<div 
<label>name:</label>
<input type="password" name="username" ng-model="name">
<h1>your name is <span ng-bind="name"></span></h1>


 <div ng-app = "">
         
        <input type="checkbox" ng-model="enableDisableButton">DisableButton
        <button ng-disabled="enableDisableButton">this is going to disable</button>

         <input type="checkbox" ng-model="showHide1">Show Button
        <button ng-show="showHide1">this is going to show</button>       

        <input type="checkbox" ng-model="showHide2">Hide Button
        <button ng-hide="showHide2">this is going to hide</button>
         <p>total :<span odometer="like"></span> likes </p>
        <button ng-click="like=like+1">like me</button>
         </div>








<div ng-app = "mainApp" ng-controller = "studentController" ng-model="total">
   
                     <li ng-repeat="fru in health" style="text-align: center;">
                     &nbsp;@{{fru.name}}&nbsp;--&nbsp;@{{fru.price}}
                  
                    <p style="text-align: center;"> <input type="range" name="range" ng-model="fru.quantity" min="0" max="10"></p>
<p style="text-align: center;">quantity: <button ng-hide="fru.quantity<0" ng-disabled="fru.quantity>10"><span odometer='fru.quantity'></span></button></p>
<span ng-show="fru.quantity>10">max 10 you can select</span>
<hr>
  <p>total quantity is <span odometer='(fru.quantity*fru.price)+"00"'></span></p>

  <hr>
                     </li>


<h2>Total Price: <span odometer='totalPrice()'></span></h2>


      </div>
     



      <script>
         var mainApp = angular.module('mainApp', ['ui.odometer']);
         
         mainApp.controller('studentController', function($scope) 
         {
            
            $scope.reset();
            $scope.fru={quantity:0};
            $scope.min=0;
            $scope.max=10;
            $scope.health=[{id:'1',name:'mango',price:'500',quantity:'0'},{id:'2',name:'grapes',price:'50',quantity:'0'},{id:'3',name:'orange',price:'200',quantity:'0'}];

$scope.totalPrice = function(){
    var total = 0;
    for(var i = 0; i < $scope.health.length; i++){
        var fru = $scope.health[i];
        total += (fru.price * fru.quantity);
    } 
    return total+"00";
};

         });


      </script>
<script type="text/javascript" src="{{asset('js/odometer.js')}}"></script>
<script type="text/javascript" src="{{asset('js/odometer.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/angular-odometer.js')}}"></script>



</body>



</html>
