<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hash My String</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Hash My String</h1>
		<form method="POST" role="form">
				<div class="form-group">
					<input name="input" type="text" class="form-control" id="" placeholder="Insert text to hash">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
		</form>	
		{if isset($input)}
			<div>
				<h3>Ok, i hashed {$input} for you!</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Hash Function</th>
							<th>Hash</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$output key=hashFunction item=hash}
							<tr>
					    		<td>{$hashFunction}</td>
					    		<td>{$hash}</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		{/if}
	</div>
</body>
</html>