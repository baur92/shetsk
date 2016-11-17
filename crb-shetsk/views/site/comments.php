<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'menu.page.comments');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.comments')?></h1>
        
        <!-- <nav class="bread-crumbs">
            <a href="index-2.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="news-default.html">News</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="#">Full width</a>
        </nav> -->
    </div>
</section>

<main class="page-content">
	<div class="grid-row">
		<?= LinkPager::widget([
                        'pagination' => $pages,
                    ]);?>   

		<section class="widget comments">	
			<div class="widget-title">Всего отзывов <?= $total ?></div>
			
			<ul>
				<?php 
                    foreach($comments as $comment){
                        echo '<li>
								<div class="avatar"><i class="fa fa-user"></i></div>
								<div class="text">
									<div class="author"><span>'.$comment->fullname_.'</span> &nbsp; '.$comment->date_.'</div>
									<p>'.$comment->text_.'</p>
								</div>
							</li>';
                    }
                ?>
			</ul>
		</section>
		<section class="widget add-comment">	
			<div class="widget-title">Оставьте отзыв</div>
			<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                <div class="alert alert-success">
                    Спасибо, Ваш отзыв принят и отправлен модераторам.
                </div>

            <?php else: ?>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->label(false)->textInput(['placeholder' => 'ФИО', 'style' => 'margin-left: 0px; width: 100%']) ?>

                    <?= $form->field($model, 'email')->label(false)->textInput(['placeholder' => 'Е-мэйл','style' => 'margin-left: 0px; width: 100%']) ?>

                    <?= $form->field($model, 'body')->label(false)->textArea(['placeholder' => 'Текст','rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->label(false)->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Оставить отзыв', ['class' => 'button', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>    
            <?php endif; ?>
		</section>
	</div>
</main>