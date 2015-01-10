<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

$bundle = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= Html::encode($this->title) ?> - <?= Yii::$app->name; ?></title>
	<?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
	<div class="wrap">
		<?php
			NavBar::begin([
				'brandLabel' => Yii::$app->name,
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				]
			]);
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => [
					['label' => 'Item 1', 'url' => ['/site/index']],
					['label' => 'Item 2', 'url' => ['/site/index']],
					['label' => 'Item 3', 'url' => ['/site/index']]
				],
			]);
			NavBar::end();
		?>

		<div class="container">
			<?= $content ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="pull-right"><?= Yii::powered() ?></p>
		</div>
	</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>