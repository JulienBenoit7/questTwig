<?php

require_once __DIR__ . '/../vendor/autoload.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

// Chargement du chargeur (loader) Twig
$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');

// Création de l'environnement Twig
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());

echo $twig->render('products.html.twig', ['products' => $products]);
