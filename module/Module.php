<?php

namespace aquy\setting\module;

class Module extends \yii\base\Module
{
	public $controllerNamespace = 'aquy\setting\module\controllers';
	public $defaultRoute = 'setting';

	public function init()
	{
		parent::init();
	}

}