<?php
require "../vendor/autoload.php"; //d'abord charger l'autoload

$loader = new \Twig\Loader\FilesystemLoader('../src/view'); //permet de chercher les templates
$twig = new \Twig\Environment($loader, [
        'cache' => false     //'/path/to/cache',
    ]
);

$products = ['Agathe', 'Louise', 'Aldi', 'Moon', 'Gaspar', 'Renaud'];


echo $twig->render('index.html.twig',['products'=>$products]);




