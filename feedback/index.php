<!DOCTYPE html>
<html>
<head>
<title>FeedbacK Form</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
    <h1 class="agile_head text-center">Feedback Form</h1>
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="feedback.php" method="post" class="agile_form">
		  <h2>How satisfied were you with our Service?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="Excellent" id="excellent" required> 
				 	  <label for="excellent">Excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="Good" id="good"> 
					  <label for="good">Good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="Fair" id="neutral">
					 <label for="neutral">Fair</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="Poor" id="poor"> 
					  <label for="poor">Poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<input type="text" placeholder="Your Name (optional)" name="name"  />
			<input type="email" placeholder="Your Email (optional)" name="email"/>
			<input type="text" placeholder="Your Number (optional)" name="num"  /><br>
			<center><input type="submit" value="submit Feedback" class="agileinfo" /></center>
	  </form>
	</div>
</body>
</html>

