<div class="alternative-post">
	<div class="container-image"><img class="alternative-post__image" src="<?= $alternative_post['image'] ?>"
																		alt="<?= $alternative_post['title'] ?>"></div>
	<hr class="alternative-post__line">
	<div class="alternative-post__content">
		<h4 class="alternative-post__title"><?= $alternative_post['title'] ?></h4>
		<p class="alternative-post__subtitle"><?= $alternative_post['subtitle'] ?></p>
	</div>
	<hr class="alternative-post__line">
	<div class="alternative-post__info">
		<div class="post__writer"><img class="info__avatar" src="<?= $alternative_post['author_face'] ?>" alt="<?= $alternative_post['author'] ?>">
			<p class="post__text"><?= $alternative_post['author'] ?></p>
		</div>
		<p class="post__text"><?= date("m/d/Y", $alternative_post['create_date']) ?></p>
	</div>
</div>
