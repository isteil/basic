<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */
return [
	[
		'label'	 => Yii::t('basic-admin', 'Profile'),
		'icon'	 => 'mr-2 icon-profile text-blue',
		'url'	 => ['/user/backend/profile/update'],
	],
	[
		'label'	 => Yii::t('basic-admin', 'Change Password'),
		'icon'	 => 'mr-2 icon-key3 text-blue',
		'url'	 => ['/user/backend/profile/change-password'],
	],
	[
		'label'	 => Yii::t('basic-admin', 'Site Settings'),
		'icon'	 => 'mr-2 icon-organization-1 text-blue',
		'url'	 => ['/settings/backend/personal/update'],
	],
	[
		'label'	 => Yii::t('basic-admin', 'Sign Out'),
		'icon'	 => 'mr-2 icon-all_out text-blue',
		'url'	 => ['/user/backend/sign/out'],
	],
];
