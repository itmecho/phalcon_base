<?php

try{

    //Read config from ini files
    $config = new \Phalcon\Config\Adapter\Ini("../app/config/application.config.ini");
    $err_config = new \Phalcon\Config\Adapter\Ini("../app/config/error.config.ini");

    //Merge into one usable config
    $config->merge($err_config);

    //Display Errors
    if($config->error->display) {
        ini_set("display_errors", 1);
        error_reporting(E_ALL);
    }

    //Register the autoloader
    $loader = new \Phalcon\Loader();

    //Register autoload directories
    $loader->registerDirs(array(
        $config->appDirs->controllers,
        $config->appDirs->models
    ))->register();

    //Initialze DI
    $di = new \Phalcon\DI\FactoryDefault();

    $di->setShared("config", function() use ($config){
        return $config;
    });

    //Setup view component
    $di->set("view", function() use ($config) {
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir($config->appDirs->views);
        return $view;
    });

    //Initialize application
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();


} catch(\Phalcon\Exception $e) {

    echo "Phalcon Exception: " . $e->getMessage();

}