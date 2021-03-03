<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Devanagari Font Testing Page</title>
		<link type="text/css" href="css/styles-v11.css?rand=<?php echo rand(5,500)?>" rel="stylesheet" charset="utf-8" />
		<link type="text/css" href="css/print-v9.css" rel="stylesheet" media="print" charset="utf-8" />
		<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script>localStorage.clear();</script>
		<script src="js/fontdrag.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/init.js" type="text/javascript" charset="utf-8"></script>
		<style>@import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');</style>
		<!-- <script>
			$(document).ready(function(){

					// Grab the text from the JS constant file, and show it
					prepareAndShowFontLayout();

			});
		</script> -->
	</head>

	<body spellcheck="false">
		<?php include("includes/top.php"); ?>
		<section id="custom">
			<div class="tabs">
				<ul class="tabNavigation">
					<p class="sizelabel">Devanagari General:</p>
					<li><a href="#overview">Overview</a></li>
					<li><a href="#paragraphs">Paragraphs</a></li>
					<li><a href="#spacing">Spacing</a></li>
					<li><a href="#half-forms">Half Forms</a></li>
					<li><a href="#syllables">Vowels & Marks</a></li>
					<li><a href="#conjuncts">Conjuncts</a></li>
					<li><a href="#i-matras">i Matras</a></li>
					<li><a href="#rendering">Rendering</a></li>
				</ul>
				<ul class="tabNavigation">
					<p class="sizelabel">Languages:</p>
					<li><a href="#bhojpuri">Bhojpuri</a></li>
					<li><a href="#bodo">Bodo</a></li>
					<li><a href="#dogri">Dogri</a></li>
					<li><a href="#hindi">Hindi</a></li>
					<li><a href="#kashmiri">Kashmiri</a></li>
					<li><a href="#konkani">Konkani</a></li>
					<li><a href="#maithili">Maithili</a></li>
					<li><a href="#marathi">Marathi</a></li>
					<li><a href="#nepali">Nepali</a></li>
					<li><a href="#rajasthani">Rajasthani</a></li>
					<li><a href="#sanskrit">Sanskrit</a></li>
					<li><a href="#sindhi">Sindhi</a></li>
				</ul>

				<div id="overview">
					<?php include("includes/general/overview.php"); ?>
				</div>

				<div id="paragraphs">
					<?php include("includes/general/paragraphs.php"); ?>
				</div>

				<div id="spacing">
					<?php include("includes/general/spacing.php"); ?>
				</div>

				<div id="half-forms">
					<?php include("includes/general/half-forms.php"); ?>
				</div>

				<div id="syllables">
					<?php include("includes/general/syllables.php"); ?>
				</div>
				
				<div id="conjuncts">
					<?php include("includes/general/conjuncts.php"); ?>
				</div>

				 <div id="i-matras">
					<?php include("includes/general/i-matras.php"); ?>
				</div>

				<div id="rendering">
					<?php include("includes/general/rendering.php"); ?>
				</div>

				<!-- Languages -->

				<div id="bhojpuri">
					<?php include("includes/languages/bhojpuri.php"); ?>
				</div>

				<div id="bodo">
					<?php include("includes/languages/bodo.php"); ?>
				</div>

				<div id="dogri">
					<?php include("includes/languages/dogri.php"); ?>
				</div>

				<div id="hindi">
					<?php include("includes/languages/hindi.php"); ?>
				</div>

				<div id="kashmiri">
					<?php include("includes/languages/kashmiri.php"); ?>
				</div>

				<div id="konkani">
					<?php include("includes/languages/konkani.php"); ?>
				</div>

				<div id="maithili">
					<?php include("includes/languages/maithili.php"); ?>
				</div>

				<div id="marathi">
					<?php include("includes/languages/marathi.php"); ?>
				</div>

				<div id="nepali">
					<?php include("includes/languages/nepali.php"); ?>
				</div>

				<div id="rajasthani">
					<?php include("includes/languages/rajasthani.php"); ?>
				</div>

				<div id="sanskrit">
					<?php include("includes/languages/sanskrit.php"); ?>
				</div>

				<div id="sindhi">
					<?php include("includes/languages/sindhi.php"); ?>
				</div>

			</div>
			<!-- end tabs -->
		</section>

		<!-- Footer -->
		<?php include("includes/footer.php"); ?>
	</body>
</html>