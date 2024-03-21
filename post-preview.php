<a href="/post1?id=<?= $post['id'] ?>">
	<div class="post" style="background-image: url(<?= $post['background'] ?>)">
      <?php
      if ($post['button']) {
          ?>
				<span class='post__filter'><?= $post['button'] ?></span>
          <?php
      }
      ?>
		<h3 class="post__title"><?= $post['title'] ?></h3>
		<p class="post__subtitle"><?= $post['subtitle'] ?></p>
		<div class="post__info">
			<div class="post__writer"><img class="info__avatar" src="<?= $post['authorFace'] ?>" alt="<?= $post['author'] ?>">
				<p class="post-block__text"><?= $post['author'] ?></p>
			</div>
			<p class="post-block__text"><?= date("F d, Y", $post['createDate']) ?></p>
		</div>
	</div>
</a>