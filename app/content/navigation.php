<nav data-set-max-height="true">
	<ul>
		<li><?php if ($pageId == 'home') {echo 'Home';} else {echo '<a href="index.php">Home</a>';}?></li>
		<li><?php if ($pageId == 'research') {echo 'Research';} else {echo '<a href="research.php">Research</a>';}?></li>
		<li><?php if ($pageId == 'publications') {echo 'Publications';} else {echo '<a href="publications.php">Publications</a>';}?></li>
		<li><?php if ($pageId == 'teaching') {echo 'Teaching and Outreach';} else {echo '<a href="teaching.php">Teaching and Outreach</a>';}?></li>
		<li><?php if ($pageId == 'contact') {echo 'Contact';} else {echo '<a href="contact.php">Contact</a>';}?></li>		
	</ul>
</nav>
