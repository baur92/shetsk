<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullname_')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'question_')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer_')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'MM-dd-yyyy',
        ]) ?>

    <?= $form->field($model, 'posted_')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
