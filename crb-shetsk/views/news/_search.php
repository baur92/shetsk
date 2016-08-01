<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'header') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'create_date_') ?>

    <?= $form->field($model, 'video') ?>

    <?= $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'audio') ?>

    <?php // echo $form->field($model, 'id_') ?>

    <?php // echo $form->field($model, 'description_kk_') ?>

    <?php // echo $form->field($model, 'header_kk_') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
