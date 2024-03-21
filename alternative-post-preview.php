<a href="/post?id=<?= $alternativePost['id'] ?>">
	<div class="alternative-post">
		<div class="alternative-post__container-image"><img class="container-image__picture"
																												src="<?= $alternativePost['image'] ?>"
																												alt="<?= $alternativePost['title'] ?>"></div>
		<hr class="alternative-post__line">
		<div class="alternative-post__content">
			<h4 class="alternative-post__title"><?= $alternativePost['title'] ?></h4>
			<p class="alternative-post__subtitle"><?= $alternativePost['subtitle'] ?></p>
		</div>
		<hr class="alternative-post__line">
		<div class="alternative-post__info">
			<div class="post__writer"><img class="info__avatar" src="<?= $alternativePost['authorFace'] ?>"
																		 alt="<?= $alternativePost['author'] ?>">
				<p class="post__text"><?= $alternativePost['author'] ?></p>
			</div>
			<p class="post__text"><?= date("m/d/Y", $alternativePost['createDate']) ?></p>
		</div>
	</div>
</a>
