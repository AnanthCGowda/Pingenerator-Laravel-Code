<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

	<title>Pin Generator</title>

	<style type="text/css">
		.container {
		  width: auto;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%)
		}
	</style>

</head>
<body>
	<div class="container">
		<div class="card text-center">
			<div class="card-header">
				<h1><span>{{ $pin ?? ' Not generated' }}</span></h1>
			</div>
		</div>
		<br>
		<div class="card" style="width: 18rem;">
	  		<div class="card-header">
	  			<h5 class="card-title">Pin Generator</h5>		
	  		</div>
	  		<div class="card-body">
	    		<p class="card-text">Click the button to generate the pin to open the door</p>
	    		<div class="text-center">
	    			<a href="{{ route('pingen.generate') }}" class="btn btn-primary text">Generate Pin</a>	
	    		</div>
	    	</div>
		</div>	
	</div>

</body>
</html>