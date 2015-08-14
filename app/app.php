<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleScore.php";

    session_start();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("checker.twig");
    });

    $app->get("/results", function() use ($app) {
        $this_ScrabbleScore = new ScrabbleScore;
    });

    return $app;




?>
