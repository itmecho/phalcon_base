<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

        Phalcon\Tag::appendTitle("Home");

        $this->assets->addCss("css/extra.css");
        $this->assets->addJs("js/extra.js");

    }

}