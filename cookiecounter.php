<?php

namespace Site;
require('PageCounter.php');

header('Content-Type: text/html; charset=utf-8');

$counter = new PageCounter();

if(isset($_POST['resetCount'])){
	$counter->resetCount();
}
$count = $counter->getCount();

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 	<title>Cookie Counter</title>
 	<style>
 		body{
 			padding-top: 70px;
 		}
 	</style>
 </head>
 <body>
 	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1>Cookie Counter <small>Welcome and 歡迎</small></h1>
			 	 		<p>You have visited <b><?php echo $count ?></b> times. </p>
				<div class="alert alert-success"><?php echo $counter->getMessage() ?></div>
			  	<form method="POST">
					<input type="hidden" name="resetCount" value="true">
					<button type="submit" class="btn btn-primary btn-lg">Reset Cookies</button>
				</form>
			</div>
		</div>
 	</div>

 </body>
 </html>