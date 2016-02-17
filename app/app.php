<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/rock_paper_scissors", function() use ($app) {
        $my_RockPaperScissors = new RockPaperScissors;
        $result = $my_RockPaperScissors->playGame($_GET['input_1'], $_GET['input_2']);

        return $app['twig']->render('index.html.twig', array(
            'results' => $result
        ));
    });

    return $app;
?>
