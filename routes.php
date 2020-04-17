<?php
	use \Core\Route;

	return [
		new Route('/page/:show', 'page', 'show'),
		new Route('/product/:num', 'product', 'show'),
		new Route('/products/all', 'product', 'all'),
	];
