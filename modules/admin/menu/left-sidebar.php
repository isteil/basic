<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */
return [
	[
		'label'	 => Yii::t('basic-admin', 'DASHBOARD'),
		'icon'	 => 'icon icon-house blue-text s-18',
		'url'	 => ['/admin/backend/dashboard/index'],
	],
	[
		'label'	 => Yii::t('basic-admin', 'PRODUCTS'),
		'icon'	 => 'icon icon-diamond2 blue-text s-18',
		'url'	 => ['/product/backend/view/manage'],
	],
	[
		'label'	 => Yii::t('basic-admin', 'PAGES'),
		'icon'	 => 'icon icon-folder blue-text s-18',
		'url'	 => ['/page/backend/view/manage'],
	],
	[
		'label'		 => Yii::t('basic-admin', 'USERS'),
		'icon'		 => 'icon icon-sir blue-text s-18',
		'url'		 => ['/user/backend/admin/manage'],
		'visible'	 => Yii::$app->user->can('admin')
	],
	[
		'label'		 => Yii::t('basic-admin', 'FILES'),
		'icon'		 => 'icon icon-newspaper blue-text s-18',
		'url'		 => ['/file/backend/view/manage'],
		'visible'	 => Yii::$app->user->can('admin')
	],
	[
		'label'		 => Yii::t('basic-admin', 'FEEDBACK'),
		'icon'		 => 'icon icon-check2 blue-text s-18',
		'url'		 => ['/feedback/backend/view/manage'],
		'visible'	 => Yii::$app->user->can('admin')
	],
	[
		'label'		 => Yii::t('basic-admin', 'NOTIFICATIONS'),
		'icon'		 => 'icon icon-creativity blue-text s-18',
		'url'		 => ['/notification/backend/view/manage'],
		'visible'	 => Yii::$app->user->can('admin')
	],
	[
		'label'		 => Yii::t('basic-admin', 'SETTINGS'),
		'icon'		 => 'icon icon-settings blue-text s-18',
		'url'		 => ['/settings/backend/view/manage'],
		'visible'	 => Yii::$app->user->can('admin')
	],
	[
		'label'		 => 'header',
		'title'		 => Yii::t('basic-admin', 'DEV TOOLS'),
		'class'		 => 'header light',
		'visible'	 => Yii::$app->user->can('developer')
	],
	[
		'label'		 => Yii::t('basic-admin', 'MIGRATIONS'),
		'icon'		 => 'icon icon-goals-1 blue-text s-18',
		'url'		 => ['/gii/backend/migration/manage'],
		'visible'	 => Yii::$app->user->can('developer')
	],
	[
		'label'		 => Yii::t('basic-admin', 'GENERATORS'),
		'icon'		 => 'icon icon-goals-1 blue-text s-18',
		'url'		 => ['/gii/backend/view/manage'],
		'visible'	 => Yii::$app->user->can('developer')
	],
];
