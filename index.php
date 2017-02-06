<?php
    $input = array("The two most important days in your life are the day you are born and the day you find out why. –Mark Twain", "The mind is everything. What you think you become.  –Buddha", "Your time is limited, so don’t waste it living someone else’s life. –Steve Jobs", "I didn’t fail the test. I just found 100 ways to do it wrong. –Benjamin Franklin", "A person who never made a mistake never tried anything new. – Albert Einstein");
    $rand_keys = array_rand($input, 1);

?>

<!DOCTYPE html>
<html>
<head>

	<title>Digant Shah</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link href='css/main.css' rel='stylesheet'>

</head>
<body>

	<div class="container">

		<h1>Digant Shah</h1>

		<img src='images/digant-shah.jpg' alt='Digant Shah'>

		<h2>About Me</h2>
		<p>
			My name is Digant Shah and I am excited to be part of CSCI E-15 course. I live in New Jersey and have been in IT industry for last 20 years. I have a bachelor's degree in engineering and MBA in general administration. I started my career in 1997 as a web developer and java programmer, but for the past decade, I have been working in business development roles and managing client relationship in a portfolio of accounts. This course takes me back to my programming roots hence looking forward to this course. 

		</p>

		<h2>Random Quote</h2>
		<blockquote>
			<?php echo $input[$rand_keys] . "\n";	?>.
        </blockquote>

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
