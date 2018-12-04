<?php
/* @var $this \yii\web\View */
/* @var $content string */

use isteil\seo\components\SeoData;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= SeoData::getInstance()->renderMetaTags() ?>
		<?php $this->head() ?>
	</head>
	<body>
		<?php $this->beginBody() ?>
		<div class="wrap">
			<div class="container">
				<?= $content ?>
			</div>
		</div>
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>
