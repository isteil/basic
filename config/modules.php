<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */
return [
	'test'			 => ['class' => 'app\modules\test\Module'],
	'system'		 => ['class' => 'isteil\system\Module'],
	'settings'		 => ['class' => 'isteil\settings\Module'],
	'seo'			 => ['class' => 'isteil\seo\Module'],
	'user'			 => ['class' => 'isteil\user\Module'],
	'admin'			 => ['class' => 'isteil\admin\Module'],
	'feedback'		 => ['class' => 'isteil\feedback\Module'],
	'file'			 => ['class' => 'isteil\file\Module'],
	'page'			 => ['class' => 'isteil\page\Module'],
	'product'		 => ['class' => 'isteil\product\Module'],
	'notification'	 => ['class' => 'isteil\notification\Module'],
	'gii'			 => [
		'class'		 => '\isteil\gii\Module',
		'generators' => [
			'module' => ['class' => 'isteil\gii\generators\module\Generator'],
			'model'	 => ['class' => 'isteil\gii\generators\model\Generator'],
			'crud'	 => ['class' => 'isteil\gii\generators\crud\Generator'],
			'asset'	 => ['class' => 'isteil\gii\generators\asset\Generator'],
		],
	],
	'gridview'		 => ['class' => '\kartik\grid\Module'],
	'dynagrid'		 => ['class' => '\kartik\dynagrid\Module'],
	'treemanager'	 => ['class' => '\kartik\tree\Module'],
];
