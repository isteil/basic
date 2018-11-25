<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */
return [
	'sourcePath'	 => __DIR__ . DIRECTORY_SEPARATOR . '..',
	'languages'		 => ['ru'],
	'translator'	 => 'Yii::t',
	'sort'			 => false,
	'removeUnused'	 => false,
	'markUnused'	 => true,
	'only'			 => ['*.php'],
	'except'		 => [
		'.svn',
		'.git',
		'.gitignore',
		'.gitkeep',
		'.hgignore',
		'.hgkeep',
		'/messages',
	],
	'format'		 => 'php',
	'messagePath'	 => __DIR__,
	'overwrite'		 => true,
];
