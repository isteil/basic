<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */
return [
	'request'		 => [
		'cookieValidationKey'	 => 'C-g-52vyuqUTK4Pn0-Ohe8w2jhRYfA90',
		'baseUrl'				 => '',
	],
	'cache'			 => [
		'class' => \yii\caching\FileCache::class,
	],
	'user'			 => [
		'identityClass'		 => \isteil\user\models\User::class,
		'loginUrl'			 => ['/user/backend/sign/in'],
		'enableAutoLogin'	 => true,
	],
	'settings'		 => [
		'class' => \isteil\settings\components\SettingsManager::class,
	],
	'userSaver'		 => [
		'class' => \isteil\user\components\UserSaver::class,
	],
	'errorHandler'	 => [
		'errorAction' => 'system/backend/error/index',
	],
	'mailer'		 => [
		'class'				 => \yii\swiftmailer\Mailer::class,
		'useFileTransport'	 => true,
	],
	'alert'			 => [
		'class' => isteil\notification\components\Alert::class
	],
	'db'			 => require __DIR__ . '/db.php',
	'urlManager'	 => [
		'enablePrettyUrl'	 => true,
		'showScriptName'	 => false,
		'rules'				 => [
		],
	],
	'pageUrl'		 => [
		'class' => \isteil\page\components\PageUrl::class,
	],
	'assetManager'	 => [
		'dirMode'			 => 0777,
		'appendTimestamp'	 => !DEV_MODE,
		'linkAssets'		 => true,
	],
	'authManager'	 => [
		'class'		 => \isteil\rbac\AuthManager::class,
		'authFile'	 => '@app/config/auth.php',
	],
//	EUROPE
	'formatter'		 => [
		'class'				 => \yii\i18n\Formatter::class,
		'dateFormat'		 => 'yyyy-MM-dd',
		'datetimeFormat'	 => 'yyyy-MM-dd HH:mm:ss',
		'decimalSeparator'	 => ',',
		'thousandSeparator'	 => ' ',
		'currencyCode'		 => 'USD',
		'nullDisplay'		 => '-',
		'timeZone'			 => 'Europe/Minsk',
	],
//	USA
//	'formatter'		 => [
//		'class'				 => \yii\i18n\Formatter::class,
//		'dateFormat'		 => 'MM/dd/yyyy',
//		'datetimeFormat'	 => 'MM/dd/yyyy HH:mm:ss',
//		'decimalSeparator'	 => ',',
//		'thousandSeparator'	 => ' ',
//		'currencyCode'		 => 'USD',
//		'nullDisplay'		 => '-',
//		'timeZone'			 => 'Europe/Minsk',
//	],
	'i18n'			 => [
		'translations' => [
			'basic*'	 => [
				'class'		 => 'yii\i18n\PhpMessageSource',
				'fileMap'	 => [
					'app'		 => 'app.php',
					'app/error'	 => 'error.php',
				],
			],
			'isteil*'	 => [
				'class'		 => 'yii\i18n\PhpMessageSource',
				'fileMap'	 => [
					'app'		 => 'app.php',
					'app/error'	 => 'error.php',
				],
			],
			'kv*'		 => [
				'class'		 => 'yii\i18n\PhpMessageSource',
				'fileMap'	 => [
					'app'		 => 'app.php',
					'app/error'	 => 'error.php',
				],
			],
		],
	],
];

