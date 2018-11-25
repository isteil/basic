<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */
return [
	'user'		 => [
		'type'			 => \yii\rbac\Item::TYPE_ROLE,
		'description'	 => Yii::t('basic-admin', 'User'),
	],
	'client'	 => [
		'type'			 => \yii\rbac\Item::TYPE_ROLE,
		'description'	 => Yii::t('basic-admin', 'Client'),
	],
	'admin'		 => [
		'type'			 => \yii\rbac\Item::TYPE_ROLE,
		'description'	 => Yii::t('basic-admin', 'Administrator'),
		'children'		 => [
			'user',
			'client'
		]
	],
	'developer'	 => [
		'type'			 => \yii\rbac\Item::TYPE_ROLE,
		'description'	 => Yii::t('basic-admin', 'Developer'),
		'children'		 => [
			'admin'
		]
	],
];
