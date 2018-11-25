<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */

namespace app\controllers;

class SiteController extends \yii\web\Controller {

	public function behaviors() {
		return [
			'access' => [
				'class'	 => \yii\filters\AccessControl::class,
				'only'	 => ['logout'],
				'rules'	 => [
					[
						'actions'	 => ['logout'],
						'allow'		 => true,
						'roles'		 => ['@'],
					],
				],
			],
			'verbs'	 => [
				'class'		 => \yii\filters\VerbFilter::class,
				'actions'	 => [
					'logout' => ['post'],
				],
			],
		];
	}

	public function actions() {
		return [
			'error'		 => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha'	 => [
				'class'				 => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode'	 => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	public function actionIndex() {
		return $this->render('index');
	}

}
