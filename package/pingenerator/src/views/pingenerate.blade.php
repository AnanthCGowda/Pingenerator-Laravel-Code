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
				
				<h1><span id="result">0000</span></h1>
				
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
	    			<a class="btn btn-primary pingen">Generate Pin</a>	
	    		</div>
	    	</div>
		</div>	
	</div>
	
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	
	<script type="text/javascript">
	
		$(document).ready(function() {
    		$('.pingen').click(function() 
    		{
        		$.ajax({
            		type: 'POST',
            		url: '/pingenerator',
            		dataType: 'json',
            		success: function(response) {
                		if (response.success) {
                			
                    		$('#result').text(response.data);
                    		
                		} else {
                    		$('#result').text("Something went wrong");
                		}
            		},
            		error: function(error) {
                		console.error(error);
            		}
        		});
    		});
		});

	</script>
</body>
</html>