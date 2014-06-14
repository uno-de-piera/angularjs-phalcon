<?php

class IndexController extends ControllerBase
{
    public function indexAction()
    {
    	$this->assets
    	->addCss("bower_components/bootstrap/dist/css/bootstrap.min.css")
    	->addCss("css/business-casual.css");

    	$this->assets
    	->addJs("bower_components/angular/angular.min.js")
    	->addJs("bower_components/angular-route/angular-route.min.js")
    	->addJs("js/app.js");
    }
}

