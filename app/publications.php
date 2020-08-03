<?php $pageId = 'publications' ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<?php include('content/title.html'); ?>
		<?php include('include/meta.html'); ?>
		<!-- build:css({.tmp,app}) resources/css/styles.min.css -->
		<link rel="stylesheet" href="../.tmp/resources/vendor/helpers/dist/helper.css">
		<link rel="stylesheet" href="../.tmp/resources/vendor/hamburgers/dist/hamburgers.css">
		<link rel="stylesheet" href="../.tmp/resources/css/styles.css">
		<!-- endbuild -->
	</head>
	<body class="<?php echo $pageId ?>">
		<?php include('include/header.php'); ?>
		<?php include('content/html/publications.html'); ?>
		</main>
		<?php include('content/html/footer.html'); ?>
		<!-- build:js({.tmp,app}) resources/js/scripts.min.js -->
		<script src="../.tmp/resources/vendor/handlebars/dist/handlebars.js"></script>
		<script src="../.tmp/resources/js/handlebars.templates.js"></script>
		<script src="resources/js/nav.js"></script>
		<script src="resources/js/main.js"></script>
		<!-- endbuild -->
	</body>
</html>
