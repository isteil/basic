<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */
$config = [
	'id'		 => 'basic',
	'name'		 => 'isteil.com',
	'basePath'	 => dirname(__DIR__),
	'bootstrap'	 => ['log', 'gii', 'pageUrl', \isteil\seo\components\SeoUrlManager::class, \isteil\settings\components\BootstrapSettings::class],
	'aliases'	 => require __DIR__ . '/aliases.php',
	'components' => require __DIR__ . '/components.php',
	'modules'	 => require __DIR__ . '/modules.php',
	'params'	 => require __DIR__ . '/params.php',
];

if (YII_ENV_DEV) {
	$config['bootstrap'][] = 'debug';
	$config['modules']['debug'] = [
		'class' => 'yii\debug\Module',
	];
}

return $config;
