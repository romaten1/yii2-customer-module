<?php

namespace romaten1\customer;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'romaten1\customer\controllers';

    public $layout = 'main.php';

    public $defaultRoute = 'customer';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
