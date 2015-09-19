




<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<h1>Primes...!</h1>

<form method="POST" class="col-md-5">

	<div class="form-group">
		<label for="fromNumber">From: </label>
		<input type="text" name="fromNumber" class="form-control">
	</div>
	<div class="form-group">
		<label for="toNumber">To: </label>
		<input type="text" name="toNumber" class="form-control">
	</div>
	<button submit="submit" class="btn btn-success">Go!</button>
</form>
<div class="col-md-7"></div>


<?php 


	function isPrimeNumber($i) 
	{
        $n = 2;
        while ($n < $i) {
            if ($i%$n) {
                $n++;
                continue;
            }
            return false;
        }
        return true;
    }

    function calcPrime($from, $to){
	    for ($i=$from; $i < $to; $i++) { 
	    	if(isPrimeNumber($i)) { echo $i; echo '<br>'; }
	    }
    }

    if(isset($_POST['fromNumber']) && isset($_POST['toNumber'])){
    	if(isset($_POST['fromNumber']) >= 2){
    		calcPrime($_POST['fromNumber'], $_POST['toNumber']);
    	}
    	else{
    		echo 'IDIOT! Be more positive...';
    	}
    }

	// foreach ($odd as $number) {
	// 	$count++;
	// 	foreach ($odd as $checkNumber) {
	// 		if($number % $checkNumber == 0){
	// 			echo $odd[count];
	// 			echo '<br>';
	// 		}
	// 	}
	// }
	

	// for ($i=2; $i < 10000; $i++) { 
	// 	if ($i % $i == 0){ // By Itself
	// 		for ($j=2; $j < 10000; $j++) { 
	// 			if ($j == $i) break; // if itself
	// 			if (($i % $j) != 0) break;
	// 			echo $i;
	// 			echo '<br>';
	// 		}
	// 	}
	// }
 ?>