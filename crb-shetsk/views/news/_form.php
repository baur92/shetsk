<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'header')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textInput(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'create_date_')->widget(
        DatePicker::className(), [
            // inline too, not bad
             'inline' => false, 
             // modify template for custom rendering
            // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                // 'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
    ]);?> -->

    <?= $form->field($model, 'create_date_')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'MM-dd-yyyy',
        ]) ?>

    <?= $form->field($model, 'video')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'audio')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'description_kk_')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'header_kk_')->textInput(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
