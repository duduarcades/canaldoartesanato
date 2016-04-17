<!DOCTYPE html>
<html ng-app lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Canal do Artesanato</title>


	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	
	<link href="js/bxslider/bxslider.css" rel="stylesheet" />

	<link rel="stylesheet" href="css/canalStyle/canalStyle.css">
	<link rel="stylesheet" href="css/user_rwd.css">
	<link rel="stylesheet" type="text/css" href="css/simpleModalCanal/css/simpleModalMobile.css">

	<script type="text/javascript">

		var myApp = angular.module('myApp', []);

		function MyCtrl($scope) {
			// $scope.escondeCampo1 = false;

			// $scope.campo1 = function() {
			// 	alert('ok!');
			// }
		}	


	</script>



</head>
<body>
	
	<!-- INICIO MAIN HEADER -->
	<?php require_once "include/header.php"; ?>
	<!-- FIM MAIN HEADER -->

	

		<?php require_once "include/urlamigavel.php"; ?>

	

	<!-- INICIO  MAIN FOOTER -->
	<?php require_once "include/footer.php"; ?>
	<!-- FIM MAIN FOOTER -->


	<!-- jQuery library (served from Google) -->
	<script src="js/jquery.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="js/bxslider/bxslider.min.js"></script>
	<!-- bxSlider CSS file -->

	<!-- ANGULARJS -->
	<script src="js/angular.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/scriptBxslider.js" type="text/javascript"></script>

</body>
</html>