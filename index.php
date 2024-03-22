<?php

$posts = [
    //свойства постов
    [
        'id' => 1,
        'button' => '',
        'background' => 'static/pictures/home/northern_lights.png',
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'authorFace' => 'static/pictures/authors/mat-vogels.jpeg',
        'author' => 'Mat Vogels',
        'createDate' => 1443157200,
    ],
    
    [
        'id' => 2,
        'button' => 'adventure',
        'background' => 'static/pictures/home/night_lamp.png',
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'authorFace' => 'static/pictures/authors/william-wong.jpeg',
        'author' => 'William Wong',
        'createDate' => 1443157200,
    ],
];

$alternativePosts = [
    //свойства альтернативных постов
    [
        'id' => 3,
        'image' => 'static/pictures/home/balloons.jpeg',
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'authorFace' => 'static/pictures/authors/william-wong.jpeg',
        'author' => 'William Wong',
        'createDate' => 1443157200,
    ],
    
    [
        'id' => 4,
        'image' => 'static/pictures/home/bridge.jpeg',
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'authorFace' => 'static/pictures/authors/mat-vogels.jpeg',
        'author' => 'Mat Vogels',
        'createDate' => 1443157200,
    ],
    
    [
        'id' => 5,
        'image' => 'static/pictures/home/water.jpeg',
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'authorFace' => 'static/pictures/authors/mat-vogels.jpeg',
        'author' => 'Mat Vogels',
        'createDate' => 1443157200,
    ],
    
    [
        'id' => 6,
        'image' => 'static/pictures/home/ocean.jpeg',
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'authorFace' => 'static/pictures/authors/william-wong.jpeg',
        'author' => 'William Wong',
        'createDate' => 1443157200,
    ],
    
    [
        'id' => 7,
        'image' => 'static/pictures/home/fog.jpeg',
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'authorFace' => 'static/pictures/authors/mat-vogels.jpeg',
        'author' => 'Mat Vogels',
        'createDate' => 1443157200,
    ],
    
    [
        'id' => 8,
        'image' => 'static/pictures/home/rainbow.jpeg',
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'authorFace' => 'static/pictures/authors/mat-vogels.jpeg',
        'author' => 'Mat Vogels',
        'createDate' => 1443157200,
    ],
];

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap"
				rel="stylesheet">
	<link rel="stylesheet" href="static/styles/style.css">
	<title>Home</title>
</head>
<body class="body">

<header class="header">
	<nav class="navigation container">
		<a href="home"><img class="navigation__logo" src="static/pictures/escape_inversion.svg"
																							alt="Escape inversion"></a>
		<ul class="navigation-list">
			<li class="navigation__item">
				<a class="navigation__link" href="home">home</a>
			</li>
			<li class="navigation__item">
				<a class="navigation__link" href="#">categories</a>
			</li>
			<li class="navigation__item">
				<a class="navigation__link" href="#">about</a>
			</li>
			<li class="navigation__item">
				<a class="navigation__link" href="#">contact</a>
			</li>
		</ul>
	</nav>
	<div class="banner-theme container">
		<h1 class="banner-theme__title">Let's do it together.</h1>
		<p class="banner-theme__subtitle">We travel the world in search of stories. Come along for the ride.</p>
		<button class="banner-theme__soft-call-to-action">View Latest Posts</button>
	</div>
</header>

<div class="content-filter">
	<ul class="content-filter__list container">
		<li class="content-filter__item">
			<a class="content-filter__link" href="#">Nature</a>
		</li>
		<li class="content-filter__item">
			<a class="content-filter__link" href="#">Photography</a>
		</li>
		<li class="content-filter__item">
			<a class="content-filter__link" href="#">Relaxation</a>
		</li>
		<li class="content-filter__item">
			<a class="content-filter__link" href="#">Vacation</a>
		</li>
		<li class="content-filter__item">
			<a class="content-filter__link" href="#">Travel</a>
		</li>
		<li class="content-filter__item">
			<a class="content-filter__link" href="#">Adventure</a>
		</li>
	</ul>
</div>

<main class="main">
	<div class="theme-name container">
		<h3 class="theme-name__title">Featured Posts</h3>
		<hr class="theme-name__line">
	</div>
	
	<div class="posts-area container">
      <?php
      foreach ($posts as $post) {
          include './post-preview.php';
      }
      ?>
	</div>
	
	<div class="theme-name container">
		<h2 class="theme-name__title">Most Recent</h2>
		<hr class="theme-name__line">
	</div>
	
	<div class="alternative-posts-area container">
      <?php
      foreach ($alternativePosts as $alternativePost) {
          include './alternative-post-preview.php';
      }
      ?>
	</div>
</main>

<footer class="footer">
	<nav class="alternative-navigation container">
		<a href="home"><img class="navigation__logo" src="static/pictures/escape_inversion.svg"
																							alt="Escape inversion"></a>
		<ul class="alternative-navigation__list">
			<li class="alternative-navigation__item">
				<a class="alternative-navigation__link" href="home">home</a>
			</li>
			<li class="alternative-navigation__item">
				<a class="alternative-navigation__link" href="#">categories</a>
			</li>
			<li class="alternative-navigation__item">
				<a class="alternative-navigation__link" href="#">about</a>
			</li>
			<li class="alternative-navigation__item">
				<a class="alternative-navigation__link" href="#">contact</a>
			</li>
		</ul>
	</nav>
</footer>
</body>
</html>
