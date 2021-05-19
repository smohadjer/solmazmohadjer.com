<?php $pageId = 'publications' ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<?php include('content/meta.html'); ?>
		<!-- build:css({.tmp,app}) resources/css/styles.min.css -->
		<link rel="stylesheet" href="../.tmp/resources/css/helper.css">
		<link rel="stylesheet" href="../.tmp/resources/css/hamburgers.css">
		<link rel="stylesheet" href="../.tmp/resources/css/styles.css">
		<!-- endbuild -->
	</head>
	<body class="<?php echo $pageId ?>">
		<?php include('include/header.php'); ?>
		<?php include('content/html/publications.html'); ?>
		</main>
		<?php include('content/html/footer.html'); ?>
		<script>
			var myApp = {};
		</script>
		<!-- build:js({.tmp,app}) resources/js/bundle.js -->
		<script src="../.tmp/resources/js/handlebars.runtime.js"></script>
		<script src="../.tmp/resources/js/handlebars.templates.js"></script>
		<script <script type="module" src="resources/js/main.js"></script>
		<!-- endbuild -->
	</body>
</html>
