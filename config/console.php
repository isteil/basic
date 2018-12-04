<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */
define('DS', DIRECTORY_SEPARATOR);

$config = [
	'id'					 => 'isteil-console',
	'basePath'				 => dirname(__DIR__),
	'bootstrap'				 => ['log', isteil\console\components\ConsoleBootstrap::class],
	'modules'				 => require(__DIR__ . '/modules.php'),
	'components'			 => [
		'db'		 => file_exists(__DIR__ . '/db.php') ? require(__DIR__ . '/db.php') : '',
		'session'	 => [
			'class' => 'yii\web\Session'
		],
	],
	'controllerMap'			 => [
		'migrate' => [
			'class'			 => 'yii\console\controllers\MigrateController',
			'migrationPath'	 => [
				'@app/migrations'
			],
		],
	],
];

return $config;
