<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Main</title>
	@vite(['resources/css/style.css'])

</head>

<body class="antialiased">
	<header>
		<nav>
			<ul>
				<li><a href="/">Main</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="/about">About</a></li>
			</ul>
		</nav>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		<h3>Nerbyshev D.R. 231-321</h3>
	</footer>
</body>

</html>