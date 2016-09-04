<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="page-title">
    <div class="grid-row clearfix">
        <h1><?= Yii::t('app', 'menu.page.services.paid.price')?></h1>
        
        <nav class="bread-crumbs">
        	<a href=""><?= Yii::t('app', 'menu.page.services')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        	<a href=""><?= Yii::t('app', 'menu.page.services.paid')?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        </nav>
    </div>
</section>

<main class="page-content">
	<div class="grid-row">
		<div class="widget pricing-table wpb_content_element">
			<div class="widget-title">Pricing Table Type 1</div>
			<div class="row">
				<!--
				--><div class="col col-4">
					<div class="head"><span>START</span>Great for small business</div>
					<div class="price">
						<div><sup>$</sup>6<span>monthly</span></div>
					</div>
					<ul class="listing">
						<li><i class="fa fa-clock-o"></i>1 Time a Year</li>
						<li><i class="fa fa-flask"></i>30 Tests and Treatments</li>
						<li><i class="fa fa-star"></i>6 Specialties</li>
						<li><i class="fa fa-heart"></i>24h Assistance</li>
					</ul>
					<div class="summary">Aliquam euismod erat libero, eu condimentum nisl hendrerit vel. Ut sit amet congue lectus.</div>
					<div class="join"><button class="wpb_button wpb_btn-large">Buy now</button></div>
				</div><!--
				--><div class="col col-4">
					<div class="head"><span>BASIC</span>Great for small business</div>
					<div class="price">
						<div><sup>$</sup>12<span>monthly</span></div>
					</div>
					<ul class="listing">
						<li><i class="fa fa-clock-o"></i>1 Time a Year</li>
						<li><i class="fa fa-flask"></i>30 Tests and Treatments</li>
						<li><i class="fa fa-star"></i>6 Specialties</li>
						<li><i class="fa fa-heart"></i>24h Assistance</li>
					</ul>
					<div class="summary">Aliquam euismod erat libero, eu condimentum nisl hendrerit vel. Ut sit amet congue lectus.</div>
					<div class="join"><button class="wpb_button wpb_btn-large">Buy now</button></div>
				</div><!--
				--><div class="col col-4">
					<div class="head"><span>STANDARD</span>Great for small business</div>
					<div class="price">
						<div><sup>$</sup>52<span>monthly</span></div>
					</div>
					<ul class="listing">
						<li><i class="fa fa-clock-o"></i>1 Time a Year</li>
						<li><i class="fa fa-flask"></i>30 Tests and Treatments</li>
						<li><i class="fa fa-star"></i>6 Specialties</li>
						<li><i class="fa fa-heart"></i>24h Assistance</li>
					</ul>
					<div class="summary">Aliquam euismod erat libero, eu condimentum nisl hendrerit vel. Ut sit amet congue lectus.</div>
					<div class="join"><button class="wpb_button wpb_btn-large">Buy now</button></div>
				</div><!--
				--><div class="col col-4">
					<div class="head"><span>PREMIUM</span>Great for small business</div>
					<div class="price">
						<div><sup>$</sup>72<span>monthly</span></div>
					</div>
					<ul class="listing">
						<li><i class="fa fa-clock-o"></i>1 Time a Year</li>
						<li><i class="fa fa-flask"></i>30 Tests and Treatments</li>
						<li><i class="fa fa-star"></i>6 Specialties</li>
						<li><i class="fa fa-heart"></i>24h Assistance</li>
					</ul>
					<div class="summary">Aliquam euismod erat libero, eu condimentum nisl hendrerit vel. Ut sit amet congue lectus.</div>
					<div class="join"><button class="wpb_button wpb_btn-large">Buy now</button></div>
				</div>
			</div>
		</div>
	</div>
</main>