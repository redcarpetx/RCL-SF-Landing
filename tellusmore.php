<?php
// redirect if not coming from the first page
if (!isset($_POST['subscribe'])) {
  header("Location: index.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/favicon.ico">

<title>Red Carpet Lunch | Tell Us More...</title>

<!-- Bootstrap core CSS -->
<link href="_css/bootstrap.min.css" rel="stylesheet">
<link href="_css/rcl.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="_css/rcl.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Header -->
<header class="subheader" role="banner">
	<div class="topbar">
		<div class="container">
			<a class="topbar-brand" href="http://redcarpetlunch.com"><img src="_assets/rcl-logo.png" alt="Red Carpet Lunch Logo" /></a>  
			<p class="topbar-tagline navbar-right ">Singular Experiences. Unlimited Possiblities.</p>
		</div>
	</div><!-- topbar -->
</header>

<div class="tellusmore container">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="page-title">Tell us a little more...</h1>
		<p>Tell us who would be the kind of hero you'd love to have lunch with. We're giving away $50 OpenTable gift certificates to 5 lucky winners chosen from those who take the poll!</p>
	</div>
</div><!-- tellusmore -->

<div class="mc-poll container">
	<h2>What kind of hero would be your dream lunch?</h2>
	<p>Click one of the hero images below to make your selection</p>
	<!-- Begin MailChimp Poll -->
	<div id="mc_embed_signup_poll">
	<form action="//redcarpetlunch.us9.list-manage.com/subscribe/post?u=da54039adc50d0e7080343808&amp;id=210c86b076" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <div id="mc_embed_signup_scroll">			
			<div class="mc-poll-hero">
        <input type="radio" value="Athlete" name="MMERGE3" id="mce-MMERGE3-0">
				<label for="mce-MMERGE3-0"><img src="_assets/rcl-hero-male.png" alt="Athlete" /><br><h3>Athlete</h3><span>Michael Jordan or<br>your favorite athlete</span></label></li>
			</div>
			<div class="mc-poll-hero">
        <input type="radio" value="Celebrity" name="MMERGE3" id="mce-MMERGE3-1">
				<label for="mce-MMERGE3-1"><img src="_assets/rcl-hero-female.png" alt="Celebrity" /><br><h3>Celebrity</h3><span>Meryl Streep or your<br>favorite film/tv star!</span></label></li>
			</div>
			<div class="mc-poll-hero">
        <input type="radio" value="Executive" name="MMERGE4" id="mce-MMERGE4-2">
				<label for="mce-MMERGE4-2"><img src="_assets/rcl-hero-male.png" alt="Executive" /><br><h3>Executive</h3><span>Larry Ellison or your<br>respected executive</span></label></li>
			</div>
			<div class="mc-poll-hero">
        <input type="radio" value="Speaker" name="MMERGE3" id="mce-MMERGE3-3">
				<label for="mce-MMERGE3-3"><img src="_assets/rcl-hero-female.png" alt="Speaker" /><br><h3>Speaker</h3><span>Text Here</span></label></li>
			</div>
			<div class="mc-poll-hero">
        <input type="radio" value="Artisan" name="MMERGE3" id="mce-MMERGE3-4">
				<label for="mce-MMERGE3-4"><img src="_assets/rcl-hero-male.png" alt="Artisan" /><br><h3>Artisan</h3><span>Chef Thomas Keller or<br>another trade expert</span></label></li>
			</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;"><input type="text" name="b_da54039adc50d0e7080343808_eca1e7523d" tabindex="-1" value=""></div>
        <div style="display:none;">
          <input type="text" value="<?php if (isset($_REQUEST['FNAME']) && $_REQUEST['FNAME'] != '') { print $_REQUEST['FNAME']; } ?>" name="FNAME" class="" id="mce-FNAME">
          <input type="text" value="<?php if (isset($_REQUEST['CITY']) && $_REQUEST['CITY'] != '') { print $_REQUEST['CITY']; } ?>" name="CITY" class="" id="mce-CITY">
          <input type="email" value="<?php if (isset($_REQUEST['EMAIL']) && $_REQUEST['EMAIL'] != '' ) { print $_REQUEST['EMAIL']; } ?>" name="EMAIL" class="required email" id="mce-EMAIL">
          <input type="checkbox" <?php if (isset($_REQUEST['group']['12505']['1']) && $_REQUEST['group']['12505']['1'] == "1" ) { print 'checked=true'; } ?> name="group[12505][1]" id="mce-group[12505]-12517-0">
        </div>
	    <div class="clear"><input type="submit" value="Choose my hero!" name="subscribe" id="mc-embedded-subscribe" class="mc-submit"></div>
	    </div>

	</form>
	</div>
	<!--End mc_embed_signup-->
</div>

<div class="quote container">
	<div class="col-md-6 col-md-offset-3">
		<p>“The meeting of two personalities is like the contact of two chemical substances, if there is any reaction, both are transformed.”<br>- Carl Jung</p>
	</div>
</div><!-- quote -->

<!-- Footer -->
<?php include('includes/footer.php') ?>