<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Photo-Bonanza</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/Test.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Photo-Bonanza.</h1>
    <p>
        <a href="index.html" class="btn btn-info">Homepage</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>




			<section class="pricing-table">
			<div id="pricing">
			<div class="container">
				<div class="block-heading">
					<h2>Our Pricing</h2>
					<p>Various Subscription packages you can subscribe to.</p>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-md-5 col-lg-4">
						<div class="item">
							<div class="heading">
								<h3>BASIC</h3>
							</div>
							<p>If you are just looking for just check out the coontent than this is best plan.</p>
							<div class="features">
								<h4><span class="feature">Full Support</span> : <span class="value">No</span></h4>
								<h4><span class="feature">Duration</span> : <span class="value">30 Days</span></h4>
								<h4><span class="feature">Downloads</span> : <span class="value">10GB</span></h4>
							</div>
							<div class="price">
								<h4>$25</h4>
							</div>
							<button onclick="myFunction()" class="btn btn-block btn-outline-primary" type="submit">BUY NOW</button>
								<script>
								function myFunction() {
  								alert("You have bought Basic Pack.");
								}
								</script>

						</div>
					</div>
					<div class="col-md-5 col-lg-4">
						<div class="item">
							<div class="ribbon">Best Value</div>
							<div class="heading">
								<h3>PRO</h3>
							</div>
							<p>Best plan for content ediotrs, fellow photographers, picture editors. With images it will also include tips for photographers.</p>
							<div class="features">
								<h4><span class="feature">Full Support</span> : <span class="value">Yes</span></h4>
								<h4><span class="feature">Duration</span> : <span class="value">60 Days</span></h4>
								<h4><span class="feature">Downloads</span> : <span class="value">50GB</span></h4>
							</div>
							<div class="price">
								<h4>$50</h4>
							</div>
							<button onclick="myFunction2()" class="btn btn-block btn-primary" type="submit">BUY NOW</button>
								<script>
								function myFunction2() {
  								alert("You have bought Pro Pack.");
								}
								</script>


						</div>
					</div>
					<div class="col-md-5 col-lg-4">
						<div class="item">
							<div class="heading">
								<h3>PREMIUM</h3>
							</div>
							<p>This will unlock all the images for download and extra tips for photography.</p>
							<div class="features">
								<h4><span class="feature">Full Support</span> : <span class="value">Yes</span></h4>
								<h4><span class="feature">Duration</span> : <span class="value">120 Days</span></h4>
								<h4><span class="feature">Downloads</span> : <span class="value">150GB</span></h4>
							</div>
							<div class="price">
								<h4>$150</h4>
							</div>
							<button onclick="myFunction3()" class="btn btn-block btn-outline-primary" type="submit">BUY NOW</button>
								
								
								<script>
								function myFunction3() {
  								alert("You have bought PREMIUM Pack.");
								}
								</script>

						</div>
					</div>
				</div>
			</div>
	</section>

</body>
</html>