<!DOCTYPE html>
<html>

<head>
    <script src="js/angular.min.js"></script>
</head>

<body>

<div ng-app="">
    <p>Name: <input type="text" ng-model="name"></p>
    <p ng-bind="name"></p>
    <video width="500" height="200" controls>
        <source src="Asal.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

</body>
</html> 