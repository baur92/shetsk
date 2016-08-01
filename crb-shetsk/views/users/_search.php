<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'firstname_') ?>

    <?= $form->field($model, 'lastname_') ?>

    <?= $form->field($model, 'patronymic_') ?>

    <?= $form->field($model, 'photo_') ?>

    <?= $form->field($model, 'position_') ?>

    <?= $form->field($model, 'position_kk_') ?>
    
    <?= $form->field($model, 'description_') ?>

    <?php // echo $form->field($model, 'id_') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
