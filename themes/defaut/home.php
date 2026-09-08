<?php include 'header.php'; ?>
	<main class="main">
		<div class="container">
			<div class="grid">
				<div class="content <?= $colsClass ?>">
<?php include 'posts.php'; ?>
					<?php $plxShow->artFeed('rss',$plxShow->catId(), '<span><a href="#feedUrl" title="#feedTitle">#feedName</a></span>'); ?>
				</div>
<?php if(!defined('FULL_WIDTH')) { include 'sidebar.php'; } ?>
			</div>
		</div>
	</main>
<?php include 'footer.php'; ?>
