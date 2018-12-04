<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */
return [
	'adminMainPage'	 => [
		'url'	 => '/admin/backend/dashboard/index',
		'label'	 => 'Dashboard'
	],
	'bsVersion'		 => '4.x',
	'sign'			 => [
		'in' => [
			'title'		 => 'Welcome',
			'text'		 => 'Hey Soldier welcome back signin now there is lot of new stuff waiting for you',
			'bg-color'	 => 'light',
		],
		'up' => [
			'title'		 => 'Create New Account',
			'text'		 => 'Join Our wonderful community and let others help you without a single penny',
			'note'		 => 'A verification email will be sent to you',
			'bg-color'	 => 'light',
		],
	],
	'grid'			 => [
		'pageSize'	 => 10,
		'sizes'		 => [1 => 1, 5 => 5, 10 => 10, 20 => 20, 30 => 30, 50 => 50, 100 => 100, 200 => 200, 500 => 500],
	],
	'datepicker'	 => [
		'date'		 => 'mm/dd/yyyy',
		'datetime'	 => 'Y/m/d A g:i',
		'time'		 => 'A g:i'
	],
	'form'			 => [
		'phone'	 => [
			'mask' => '(999) 999-9999',
		],
		'zip'	 => [
			'mask' => '99999',
		],
	],
];
