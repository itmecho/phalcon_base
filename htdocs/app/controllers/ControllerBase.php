<?php

class ControllerBase extends \Phalcon\Mvc\Controller
{

    public function initialize()
    {

        Phalcon\Tag::prependTitle("APP_NAME - ");

    }

}