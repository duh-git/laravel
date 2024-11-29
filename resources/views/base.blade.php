<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Main</title>
	@vite(['resources/css/style.css'])
	@vite(['resources/js/main.js'])

</head>

<body class="antialiased">
	<header>
		<nav>
			<ul class="header__nav">
				<li><a href="/">Main</a></li>
				<li><a href="/articles">Articles</a></li>
				<li><a href="/articles/create">Create</a></li>
				<li><a href="/gallery">Gallery</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="/auth/signup">Sign Up</a></li>
			</ul>
		</nav>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		<h3>Nerbyshev D.R. 231-321</h3>
	</footer>

	<ul class="hidden-list">
		<li><button class="hidden-list__content" tabindex="1">Main content</button></li>
		<li><button class="hidden-list__nav" tabindex="1">Navigation pannel</button></li>
	</ul>
</body>

</html>