<?php

/**
 * @author Paul Stolyarov <dev@isteil.com>
 * @copyright Copyright &copy; Paul Stolyarov, isteil.com, 2014 - 2018
 * @license BSD-3-Clause
 * @license https://isteil.com/general-license
 */

namespace app\components\controllers;

use Yii;
use yii\web\NotFoundHttpException;

abstract class BackendController extends \isteil\system\controllers\Controller {

	public $layout = '@isteil/yii2-admin/src/layouts/main';

	/**
	 * Controller Human Name
	 */
	abstract public function controllerTitle();

	public function init() {
		parent::init();
		$this->baseConfiguration();
	}

	public function actionDelete() {
		Yii::$app->response->format = 'json';
		$ids = Yii::$app->request->post('ids');
		return $this->obj::deleteAll(['id' => $ids]);
	}

	public function actionDeleteAll() {
		return $this->obj::deleteAll();
	}

	public function baseConfiguration() {
		Yii::$container->setDefinitions($this->di());
	}

	/**
	 * Finds the Product model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Product the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		$model = $this->obj::findOne($id);
		if (($model) !== null) {
			return $model;
		}

		throw new NotFoundHttpException(Yii::t('isteil-system', 'The requested page does not exist.'));
	}

	protected function di() {
		return [
			'yii\widgets\LinkPager'				 => [
				'maxButtonCount'				 => 10,
				'options'						 => [
					'class' => 'pagination pagination-sm'
				],
				'pageCssClass'					 => 'page-item',
				'firstPageLabel'				 => '«',
				'firstPageCssClass'				 => 'page-item first',
				'prevPageLabel'					 => '‹',
				'prevPageCssClass'				 => 'page-item prev',
				'activePageCssClass'			 => 'active',
				'nextPageLabel'					 => '›',
				'nextPageCssClass'				 => 'page-item next',
				'lastPageLabel'					 => '»',
				'lastPageCssClass'				 => 'page-item last',
				'disabledPageCssClass'			 => 'disabled',
				'disabledListItemSubTagOptions'	 => ['class' => 'page-link'],
				'linkOptions'					 => ['class' => 'page-link'],
			],
			//EUROPE
			'kartik\daterange\DateRangeBehavior' => [
				'dateStartFormat'	 => 'Y-m-d',
				'dateEndFormat'		 => 'Y-m-d',
			],
			'kartik\daterange\DateRangePicker'	 => [
				'pluginOptions' => [
					'locale' => ['format' => 'Y-M-DD'],
					'opens'	 => 'center',
				]
			],
				//USA
//			'kartik\daterange\DateRangeBehavior' => [
//				'dateStartFormat'	 => 'Y/m/d',
//				'dateEndFormat'		 => 'Y/m/d',
//			],
//			'kartik\daterange\DateRangePicker'	 => [
//				'pluginOptions' => [
//					'locale'	 => ['format' => 'm/d/Y'],
//					'opens'		 => 'center',
//					'autoApply'	 => true,
//					'clearBtn'	 => true,
//				]
//			],
		];
	}

}
