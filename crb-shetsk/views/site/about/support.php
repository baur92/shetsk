<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'menu.page.about.support');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.about.support')?></h1>
        
        <nav class="bread-crumbs">
            <a href=""><?= Yii::t('app', 'menu.page.about')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        </nav>
    </div>
</section>

<main class="page-content">
	<div class="grid-row">
		<div class="wpb_alert">
				<h1>К вниманию прикрепленного населения!</h1>
				<p>"Call - центр" телефон: 8(71031)21357.</p>
		</div>
		<br/>
		<section class="widget">	
			<div class="widget-title">Если Вы:</div>
			
			<div class="wpb_row">
				<div class="column_container">
					<div class="wpb_wrapper">
						<div class="wpb_text_column wpb_content_element">
							<div class="wpb_wrapper">			
								<ul>
									<li>остались недовольны качеством оказания медицинских услуг;</li>
									<li>столкнулись с грубым отношением со стороны медицинского персонала;</li>
									<li>столкнулись с фактами вымогательства денежных средств медицинским персоналом за услуги, оказываемые в рамках гарантированного объёма бесплатной медицинской помощи;</li>
									<li>а также если Вы столкнулись с другими проблемными вопросами, связанными с порядком и качеством оказания медицинской помощи</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="testimonial testimonial-alt" style="font-size: 40px;">
			<p>Вы можете оставить свое письменное обращение с указанием Ваших контактных данных (фамилия, телефон, адрес) в «Ящик жалоб и предложений», размещенном при входе в нашу поликлинику или обратиться на наш сайт schet-densaulyk@mail.ru в раздел «Вопрос-ответ».</p>
			<p>Служба поддержки пациентов и внутреннего контроля  рассмотрит Ваше обращение не позднее 5 календарных дней и предоставит Вам информацию по результатам рассмотрения Вашего обращения;</p>
			<p>Мы будем благодарны Вам за Ваши обращения, отзывы и пожелания, которые помогут нам улучшить качество оказания медицинской помощи нашей организацией.</p>
			<div class="author">просим обращаться в Службу поддержки пациентов и внутреннего контроля  (СППиВК)</div>
		</div>
	</div>
</main>