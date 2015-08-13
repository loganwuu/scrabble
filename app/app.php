<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    // Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    // Initialize application
    $app = new Silex\Application();

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_score", function() use($app) {
        $my_ScrabbleScoreGenerator = new Scrabble;
        $score = $my_ScrabbleScoreGenerator->scrabbleScore($_GET['letters']);
        return $app['twig']->render('view_score.html.twig', array('result' => $score));
    });

    return $app;
?>
