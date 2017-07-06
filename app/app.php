<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/result", function() use ($app) {
        $my_input = new Anagram;
        $my_anagram = $my_input->anagramChecker($_GET['base_word'], $_GET['input1'], $_GET['input2'], $_GET['input3']);
        return $app['twig']->render('results.html.twig', array('results' => $my_anagram, 'base_word' => $_GET['base_word']));
    });

    return $app;
?>
