<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="page loaded page-boxed">
    <?= $content ?>

	<p>
        <?= Html::a('Go to index', ['index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <p>
        <?= Html::a('Logout', ['/site/logout'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
